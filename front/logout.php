<?php
    require '../config.php';
    session_start();
    session_unset();
    session_destroy();
    header('location: '.SITE_URL.'index.php');


?>