<?php
if(isset($_POST['addProduct'])){
  include $_ind . 'PHP/Inc/func.php';
  print_r($_POST);
  $ID = '';
  $name = htmlspecialchars(trim($_POST['name']));
  $price = htmlspecialchars(trim($_POST['price']));
  $color1 = htmlspecialchars(trim($_POST['color-1']));
  $quantity1 = htmlspecialchars(trim($_POST['quantity-1']));
  $category = htmlspecialchars(trim($_POST['category']));
  $correct = true;
  $defaultColor = '';

  do {
      $_id = generateRandomString();
      $idVerif = $db->prepare('SELECT ID FROM products WHERE ID = ?');
      $idVerif->execute(array($_id));
  } while ($_idVerif = $idVerif->fetch());

  $ID = $_id;//assign correct ID

  if(!preg_match('/^[a-zA-Z0-9àâçéèêëîïôûùüÿñæœ \-]{1,100}$/', $name)) {
      $correct = false;
      bootstrapNotify('Nom: mauvais format! Doit etre entre 1 et 100 characteres alphanumerique, tirets et espace');
  }

  if(!preg_match('/^[0-9]+$/', $price)) {
      $correct = false;
      bootstrapNotify('Prix: mauvais format! Ne peut contenir que des nombres');
  }

  $categories = $db->prepare('SELECT COUNT(*) AS nbr FROM categories WHERE ID = ?');
  $categories->execute(array($category));
  $count = $categories->fetch();
  if($count['nbr'] < 1){
    $correct = false;
    bootstrapNotify('Categorie: cette Categorie n\'existe pas, creer la dabords');
  }

  if(strlen($color1) >= 1){
    if(!preg_match('/^[a-zA-Zàâçéèêëîïôûùüÿñæœ \-]{1,100}$/', $color1)) {
        $correct = false;
        bootstrapNotify('Couleur: mauvais format! Doit etre entre 1 et 100 characteres alphabetique, tirets et espace');
    }
    else {
      $defaultColor = $color1;
    }
  }
  else {
    $defaultColor = 'Pas de couleur';
  }

  if(!preg_match('/^[0-9]+$/', $quantity1)) {
      $correct = false;
      bootstrapNotify('Quantity: mauvais format! Ne pe contenir que des nombre');
  }

  if($correct){
    $add = $db->prepare('INSERT INTO products(ID, name, category, price, createdAt) VALUES(?,?,?,?,NOW())');
    if($add->execute(array($ID, ucwords($name), $category, $price))){

      // add color
      $colorID = false;

      $checkColor = $db->prepare('SELECT ID FROM color WHERE color = ?');
      $checkColor->execute(array($defaultColor));
      if($_checkColor = $checkColor->fetch()){
        $colorID = $_checkColor['ID'];
      }
      else {
        $addColor = $db->prepare('INSERT INTO color(color) VALUES(?)');
        if($addColor->execute(array($defaultColor))){
          $colorID = $db->lastInsertId();
        }
      }

      if($colorID !== false){

        //add quantity
        $addQty = $db->prepare('INSERT INTO quantity(productID, colorID, quantity) VALUES(?,?,?)');
        if($addQty->execute(array($ID, $colorID, $quantity1))){
          bootstrapNotify('Success: Produit ajoute!', 'success');
        }
        else {
          bootstrapNotify('Erreur: Quantity ajoue');
        }
      }
      else {
        bootstrapNotify('Erreur: Couleur ajoue');
      }
    }
    else {
      bootstrapNotify('Erreur: Produit ajoue');
    }
  }
}
