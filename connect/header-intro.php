<?php
//Send utf-8 header before any output
header('Content-Type: text/html; charset=utf-8'); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Look Jobs">
    <meta name="keywords" content="Job findind, careers, jobs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Look Jobs</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <!--favicon-->
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>

<body style="background-image: url('img/lines.jpg');">
    <!-- Page Preloder --
    <div id="preloder">
        <div class="loader"></div>
    </div>-->
<div class="container"><br>
    <div class="row">
        <div class="col">
    <!--<?php
        if (isset($_SESSION['userId'])){
        echo '<form class="float-right" action="logout.inc.php" method="post">
                
                <button class="btn btn-info float-right mb-2 mr-sm-2"  type="submit" name="logout-submit">Logout</button>
              
              </form>';
        }
        else{
            echo '<a class="float-left btn btn-info text-white mb-2 mr-sm-2" href="signup.php">Signup</a>

            <form class="form-inline float-right" action="login.inc.php" method="post">
                 <input class="form-control mb-2 mr-sm-2 float-right" type="text" name="mailuid" placeholder="username">
                 <input class="form-control mb-2 mr-sm-2 float-right" type="password" name="pwd" placeholder="password">
                 <button class="btn btn-info mb-2 mr-sm-2" type="submit" name="login-submit">Login</button>
            </form>

            ';
        }?>
    </div>
</div>

   <div class="col">
        <?php

        if (isset($_SESSION['userId'])){
            echo '<p class="text-success float-right mb-2 mr-sm-2">You are logged in!</p><br><br>';
            echo '<br><a class="btn btn-success btn-lg btn-block" href="employers.php" role="button" type="submit">Welcome to LookJobs DB System - press here to Enter</a>';
            }
            else{
        echo '<p class="text-success float-right mb-2 mr-sm-2">You are logged out!</p>';
    }
    
        ?>-->
        <button type="button" class="btn btn-link">Link</button>
        <button a href="index.php" class="btn btn-info mb-2 mr-sm-2" type="btn">Employers</button>

    </div>


   <!-- Offcanvas Menu Section Begin -->
   
    <div class="offcanvas-menu-overlay"></div>
    <div class="canvas-open">
        <i class="icon_menu"></i>
    </div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <i class="icon_close"></i>
        </div>
        <nav class="main-menu">
            <ul>
                <li><a href="./index.php">Home</a></li>
                <li><a href="./about.php">About us</a></li>
                <li><a href="./stips.php">Student Tips</a></li>
                <li><a href="./jobs.php">Job Offer</a></li>
                <!--<li><a href="./employers.php">Employers</a></li>-->
                <li><a href="./contact.php">Contact us</a></li>
            </ul>
        </nav>
    </div><br><br>
    <!-- Offcanvas Menu Section End -->

    <!-- Hero Section Begin --> 
    <div class="container bg-warning">
    <header class="header-section">
        <div class="top-nav">
            