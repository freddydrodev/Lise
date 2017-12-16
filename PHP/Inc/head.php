<?php
$_ind = isset($ind) ? $ind ? '../' : './' : './';

include $_ind . 'PHP/Inc/db.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="stylesheet" href="<?php echo $_ind; ?>Css/Icon/flaticon.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>Css/Fonts/Logo/logo.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>Css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>Css/slick.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>Css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>Css/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>Css/list.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>Css/Style.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>Css/Style.products.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,400,900" rel="stylesheet">
  </head>
  <body>
    <div class="page-wrapper">
      <?php include $_ind . 'PHP/Inc/header.php'; ?>
      <div class="container-fluid" id="page-content">
