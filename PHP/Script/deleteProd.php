<?php
require '../Inc/_db.php';

if(isset($_POST['deluser'])){
  include '../Inc/func.php';

  $uid = trim(htmlspecialchars($_POST['deluser']));

  $del = $db->prepare('DELETE FROM products WHERE id = ?');
  if ($del->execute(array($uid))) {
    $ar = array('type' => 'success', 'text' => 'Success! Produit supprime');
  }
  else {
    $ar = array('type' => 'danger', 'text' => 'Erreur! Produit non-supprime');
  }
  echo json_encode($ar);
}
