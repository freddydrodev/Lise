<?php
$_ind = isset($ind) ? $ind ? '../' : './' : './';

include $_ind . 'PHP/Inc/db.php';
// include $_ind . 'PHP/Inc/func.php';

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $page ?></title>
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/loaders.min.css">
    <!-- script for preload screen here -->
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/animate.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/icon/flaticon.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/fonts/logo/logo.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/slick.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/alertify.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/print.min.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/slick-theme.min.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/perfect-scrollbar.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/list.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/style.products.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/style.sales.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,400,900" rel="stylesheet">

    <script src="<?php echo $_ind; ?>js/jquery.min.js"></script>
    <script src="<?php echo $_ind; ?>js/moment.js"></script>
    <script src="<?php echo $_ind; ?>js/fr.js"></script>
    <script type="text/javascript">
      moment.locale('fr');
    </script>
    <script type="text/javascript" src="<?php echo $_ind; ?>js/bootstrap-notify.min.js"></script> 
  </head>
  <body>
    <div class="page-wrapper">
      <?php
      if(!isset($log)){
        include $_ind . 'PHP/Inc/header.php';
      }
      ?>
      <div class="container-fluid" id="page-content">
