<?php
try {
    $db = new PDO('mysql:host=mysql.hostinger.com;dbname=u289277422_belis', 'u289277422_fred', 'K@ikelarose77');
} catch (Exception $e) {
    Die('Erreur : ' . $e->getMessage());
}

session_start();
// check if the session is open and restrict pages based on it
if (!isset($log) && !isset($_SESSION['id'])) {
  header('location: ../');
}
if (isset($log) && isset($_SESSION['id'])) {
  header('location:' . $_ind . 'products/');
}

$_SESSION['admin'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : false;

if(isset($page)){
  $users = $db->prepare('SELECT * FROM users where usertype = 1');
  $users->execute();
  $count = $users->rowCount();

  if($page === 'Inscription' && $count > 0){
    header('location: ./');
  }

  if($page !== 'Inscription' && $count <= 0){
      if($page !== 'Connexion') {
        header('location: ../logout');        
        echo $count;
      } else {
        header('location: ./registration');
      }
  }

  if($count > 0) {
    if(isset($_SESSION['id'])) {
      $admin = $users->fetch();
      if($_SESSION['id'] === $admin['id'] && $_SESSION['admin'] !== true) {
        $_SESSION['admin'] = true;
      }
    }
  }
}
