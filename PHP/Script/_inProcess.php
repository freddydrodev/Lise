<?php
if(isset($_POST['qty']) && !empty($_POST['qty']) && isset($_POST['color']) && !empty($_POST['color']) && isset($_POST['id']) && !empty($_POST['id'])
&& isset($_POST['old']) && !empty($_POST['old'])){
  require '../Inc/_db.php';

  $qty = htmlspecialchars(trim($_POST['qty']));
  $color = htmlspecialchars(trim($_POST['color']));
  $id = htmlspecialchars(trim($_POST['id']));
  $old = htmlspecialchars(trim($_POST['old']));

  // check if the data exist to send
  $checkInProcess = $db->prepare('SELECT COUNT(*) AS nbr FROM in_process WHERE productID = ? AND colorID = ?');
  $checkInProcess->execute(array($id, $old));
  $exist = $checkInProcess->fetch();

  if($exist['nbr'] > 0){
    // update the value
    echo "update";
    $up = $db->prepare('UPDATE in_process SET quantity = ? WHERE productID = ? AND colorID = ?');

    if($up->execute(array($qty, $id, $color))){
      echo "updated";
    }
  }
  else {
    // insert the value
    $up = $db->prepare('INSERT INTO in_process (quantity, productID, colorID) VALUES(?, ?, ?)');

    if($up->execute(array($qty, $id, $color))){
      echo "inserted";
    }
  }
}
else {
  echo "err";
}
