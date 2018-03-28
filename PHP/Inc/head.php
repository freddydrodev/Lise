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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/icon/flaticon.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/fonts/logo/logo.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/AlertifyJS/1.11.0/css/alertify.min.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/print.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.perfect-scrollbar/0.8.1/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/list.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/style.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/style.products.css">
    <link rel="stylesheet" href="<?php echo $_ind; ?>css/style.sales.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,400,900" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/locale/fr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript"> moment.locale('fr'); </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mouse0270-bootstrap-notify/3.1.7/bootstrap-notify.min.js"></script> 
  </head>
  <body>
    <div class="page-wrapper">
      <?php
      if(!isset($log)){
        include $_ind . 'PHP/Inc/header.php';
      }
      ?>
      <div class="container-fluid <?php echo $log ? 'p-0' : '' ?>" id="page-content">
