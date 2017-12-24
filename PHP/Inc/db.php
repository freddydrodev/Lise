<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=BelliseStyle', 'root', '');
} catch (Exception $e) {
    Die('Erreur : ' . $e->getMessage());
}

session_start();
$_SESSION['created'] = $_SESSION['created'] ? true : false;// define if the system has some user

if($_SESSION['created'] && $page == 'Inscription'){
  header('location: ../');
}

if($page === 'Connexion'){
  if(!$_SESSION['created']){
    $users = $db->prepare('SELECT COUNT(id) AS nbr FROM users');
    $users->execute();
    $user = $users->fetch();
    if($user['nbr'] == 0){
      header('location: Registration/');
    }
    else {
      $_SESSION['created'] = true;
    }
  }
}
