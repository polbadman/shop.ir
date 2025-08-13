<?php 
  
   defined('ABSPATH') || die;
    session_start();
    $db = NEW Database;
    $allproducts     = $db->fetchAll('SELECT * FROM products');
    $curent_user = array('id'=>'1','role'=>1);
    $sc = new shopconfig;
    
    // print_r( $products);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
         href="<?php echo PATH_CSS;?>all.css" />
        <!-- href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" /> -->
    <link rel="stylesheet" href="<?php echo PATH_CSS;?>owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo PATH_CSS;?>owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo PATH_CSS;?>flexboxgrid.css">
    <link rel="stylesheet" href="<?php echo PATH_CSS;?>animation.css">
    <link rel="stylesheet" href="<?php echo PATH_CSS;?>main.css">
    <link rel="stylesheet" href="<?php echo PATH_CSS;?>home.css">
    <link rel="stylesheet" href="<?php echo PATH_CSS;?>login.css">
    <link rel="stylesheet" href="<?php echo PATH_CSS;?>panel.css">
    <link rel="wensite icon" type="png" href="<?php echo PATH_IMAGES;?>h1.jpg">
    <title><?php echo $sc->site_name.$sc->seperator.$sc::$page_title?></title>
</head>

<body>