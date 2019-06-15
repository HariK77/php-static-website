<?php 

ob_start();
session_start();

$active = basename($_SERVER['PHP_SELF']); 

// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['PHP_SELF']; 
// echo realpath(dirname(__FILE__)); 
// echo dirname(__FILE__); 

$title = basename($_SERVER['PHP_SELF'], ".php");

$title === "index" ? $title = "Home" : $title = ucwords(str_replace("-", " ", $title));

?>



<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?> - Testing Website</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="d-flex flex-column h-100">
<header>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
    <div class="container">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo $active === "index.php" ? "active" : "" ?>">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?php echo $active === "about-us.php" ? "active" : "" ?>">
                    <a class="nav-link" href="about-us.php">About</a>
                </li>
                <li class="nav-item dropdown <?php echo $active === "service-one.php" ? "active" : ($active === "service-two.php" ? "active" : $active === "service-three.php" ? "active" : "") ?>">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item <?php echo $active === "service-one.php" ? "active" : "" ?>" href="service-one.php">Service 1</a>
                    <a class="dropdown-item <?php echo $active === "service-two.php" ? "active" : "" ?>" href="service-two.php">Service 2</a>
                    <a class="dropdown-item <?php echo $active === "service-three.php" ? "active" : "" ?>" href="service-three.php">Service 3</a>
                    </div>
                </li>
                <li class="nav-item <?php echo $active === "gallery.php" ? "active" : "" ?>">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                </li>
                <li class="nav-item <?php echo $active === "contact-us.php" ? "active" : "" ?>">
                    <a class="nav-link" href="contact-us.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>
</header>
<div class="mt-5"></div>
<br>
<main role="main" class="flex-shrink-0">
<!--Main Container Start -->
    <div class="container">

 