<?php
if(isset($_POST['addProduct'])){
  include $_ind . 'PHP/Inc/func.php';
  $keys = array_keys($_POST);
  print_r($keys);
  $ID = '';
  $name = htmlspecialchars(trim($_POST['name']));
  $price = htmlspecialchars(trim($_POST['price']));
  $color1 = htmlspecialchars(trim($_POST['defaultColor']));
  $quantity1 = htmlspecialchars(trim($_POST['defaultQty']));
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

  if(isset($_POST['addProductAlt'])){
    $altQty = htmlspecialchars(trim($_POST['alt-quantity']));
    if(!preg_match('/^[0-9]+((\,|\.)?[0-9]+)?$/', $altQty)) {
      $correct = false;
      bootstrapNotify('Quantity Alternatif: mauvais format! Ne pe contenir que des nombre et virgule');
    }
    $altQty = str_replace(',', '.', $altQty); // change quantity to double
  }

  if($correct){
    $add = $db->prepare('INSERT INTO products(ID, name, category, price, createdAt) VALUES(?,?,?,?,NOW())');
    if($add->execute(array($ID, ucwords($name), $category, $price))){

      // add color
      $colorID = false;
      $defaultColor = strtolower($defaultColor);

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

          // insert the new color and qty
          foreach ($_POST as $key => $value) {
              $colorID = false;
              $value = strtolower($value);

              //if we meet a color field we must have a quantity field
              if(preg_match('/color-/', $key)){

                // get the number to find the match quantity
                $nbr = str_replace('color-', '', $key);

                // add the color to the database if not exist
                $checkNewColor = $db->prepare('SELECT ID FROM color WHERE color = ?');
                $checkNewColor->execute(array($value));

                // if the color exist we get the id
                if($_checkNewColor = $checkNewColor->fetch()){
                  $colorID = $_checkNewColor['ID'];
                }
                else {

                  // otherwise we just insert it and get the id
                  $addNewColor = $db->prepare('INSERT INTO color(color) VALUES(?)');
                  if($addNewColor->execute(array($value))){
                    $colorID = $db->lastInsertId();
                  }
                }

                // if we have an id
                if($colorID !== false){

                  //add quantity
                  $addNewQty = $db->prepare('INSERT INTO quantity(productID, colorID, quantity) VALUES(?,?,?)');
                  if($addNewQty->execute(array($ID, $colorID, $_POST['quantity-' . $nbr]))){
                  }
                }
              }
          }
          // $arr is now array(2, 4, 6, 8)
          unset($value); // break the reference with the last element
          unset($key); // break the reference with the last element

          // insert the alternatif product if exist
          if(isset($_POST['addProductAlt'])){
            $altProd = htmlspecialchars(trim($_POST['alt-product']));
            $altQty = htmlspecialchars(trim($_POST['alt-quantity']));

            $addAlt = $db->prepare('INSERT INTO product_alt(productID, altID, qty) VALUES(?,?,?)');
            if($addAlt->execute(array($ID, $altProd, $altQty))){
            }
          }
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
