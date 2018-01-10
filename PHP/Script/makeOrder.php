<?php
// phone expression
// ^(?:(?:\+?[1-9]{1}[0-9]{0,2}(?:[.-]\s*)?)?(?:\(\s*([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9])\s*\)|([2-9]1[02-9]|[2-9][02-8]1|[2-9][02-8][02-9]))\s*(?:[.-]\s*)?)?([2-9]1[02-9]|[2-9][02-9]1|[2-9][02-9]{2})\s*(?:[.-]\s*)?([0-9]{4})(?:\s*(?:#|x\.?|ext\.?|extension)\s*(\d+))?$

// ^(\+[1-9]{1}[0-9]{0,2})?[0-9]{6,10}$

if(isset($_POST['makeOrder'])){
  include $_ind . 'PHP/Inc/func.php';

  print_r($_POST);
  $client = strtolower(trim(htmlspecialchars($_POST['name-client'])));
  $facebook = trim(htmlspecialchars($_POST['id-facebook']));
  $email = '';
  $phone = trim(htmlspecialchars($_POST['phone']));
  $location = trim(htmlspecialchars($_POST['location']));
  $livreur = trim(htmlspecialchars($_POST['livreur']));
  $correct = true;

  if(!preg_match('/^[a-zàâçéèêëîïôûùüÿñæœ \-]{5,100}$/i', $client)) {
      $correct = false;
      bootstrapNotify('Erreur Nom: Seul les lettres, tirets et les espaces sont autorises (entre 5 et 100 charcateres)');
  }

  if(!preg_match("/^[a-zàâçéèêëîïôûùüÿñæœ \-\']{5,100}$/i", $facebook)) {
      $correct = false;
      bootstrapNotify('Erreur Facebook: Seul les lettres, tirets, apostrof et les espaces sont autorises (entre 5 et 100 charcateres)');
  }

  if(!preg_match("/^[a-z0-9àâçéèêëîïôûùüÿñæœ \-\']{5,100}$/i", $location)) {
      $correct = false;
      bootstrapNotify('Erreur Facebook: Seul les lettres, tirets, apostrof et les espaces sont autorises (entre 5 et 100 charcateres)');
  }

  if(isset($_POST['email'])){
    $email = trim(htmlspecialchars($_POST['email']));
    if(!preg_match("/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/i", $email)) {
        $correct = false;
        bootstrapNotify('Erreur Email: Format est example@example.com');
    }
  }

  if(!preg_match('/^(\+[1-9]{1}[0-9]{0,2})?[0-9]{6,10}$/', $phone)) {
      $correct = false;
      bootstrapNotify('Erreur Numero: Format doit etre +22501234567 ou 01234567');
  }

  if($correct){
    $add = $db->prepare('INSERT INTO users(fullname, facebookID, email, phone, usertype, createdAt) VALUES(?,?,?,?,4,NOW())');
    if($add->execute(array(ucwords($client), $facebook, $email, $phone))){
      $ID = $db->lastInsertId();

      //create order
      $OID = generateRandomString(6);
      $mkOrder = $db->prepare('INSERT INTO orders(ID, createdAt, customerID, employeeID) VALUES(?,NOW(),?,?)');
      if($mkOrder->execute(array($OID, $ID, $_SESSION['id']))){
        //insert product in order list
        $ok = true;
        foreach ($_POST['article-id'] as $key => $value) {
          $PID = substr($value, 0, 5);
          $CID = $_POST['article-color'][$key];
          $QTY = $_POST['article-qty'][$key];
          $PAY = $_POST['article-paid'][$key];

          $ol = $db->prepare('INSERT INTO product_ordered(productID, orderID, colorID, quantity, 	paid) VALUES (?,?,?,?,?)');
          if($ol->execute(array($PID, $OID, $CID, $QTY, $PAY))){
          }
          else {
            $ok = false;
          }
        }
        if($ok){
          bootstrapNotify('Commande Insere', 'success');
        }
        else {
          bootstrapNotify('Erreur Inconnue: Insertion article');
        }

      } else {
        bootstrapNotify('Erreur Inconnue: creation Commande');
      }
    } else {
      bootstrapNotify('Erreur Inconnue');
    }
  }

}
