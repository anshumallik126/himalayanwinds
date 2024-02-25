<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Himalayan Winds</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/form.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
</head>
<div class="header">
    <section class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="pull-left d-flex flex-wrap align-items-center h-100 mt-1 mt-md-0">
                        <div class="phone me-3 mb-2 mb-md-0">
                            <i class="fa fa-phone-alt me-1 text-white"></i>
                            <span><a class="text-white white" href="tel:090-6551-6181">090-6551-6181</a></span>
                        </div>

                        <div class="mail d-none d-md-block">
                            <i class="fa fa-map-marker-alt me-1 text-white"></i>
                            <span class="text-white white display-inline">
                                7927 Belair Road. Nottingham, MD 21236
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pull-right d-flex align-items-center justify-content-end mb-2 mb-md-0">
                        <ul class="d-none d-md-flex list-unstyled social-icons mb-0">
                            <li><a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-yelp"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                            <li><a target="_blank" href="#"><i class="fab fa-tripadvisor"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nav-section">
        <div class="container">
            <div class="logo">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="nav-wrapper">
                <div class="close p-3"><i class="fa fa-times"></i></div>
                <ul class="navigation list-unstyled align-items-center justify-content-end mb-0">
                    <li class="<?php if ($pageName == 'home') {echo 'active';}?>"><a href="index.php">Home <i
                                class="fas fa-plus" aria-hidden="true"></i></a>
                    </li>
                    <li class="<?php if ($pageName == 'about') {echo 'active';}?>"><a href="about.php">About <i
                                class="fas fa-plus" aria-hidden="true"></i></a></li>
                    <li class="<?php if ($pageName == 'event') {echo 'active';}?>"><a href="event.php">Events <i
                                class="fas fa-plus" aria-hidden="true"></i></a></li>
                    <li class="<?php if ($pageName == 'profile') {echo 'active';}?>"><a href="profile.php">Profile <i
                                class="fas fa-plus" aria-hidden="true"></i></a></li>
                    <li class="<?php if ($pageName == 'album') {echo 'active';}?>">
                        <a href="album.php">Album <i class="fas fa-plus" aria-hidden="true"></i></a>
                    </li>
                    <li class="<?php if ($pageName == 'gallery') {echo 'active';}?>">
                        <a href="gallery.php">Gallery <i class="fas fa-plus" aria-hidden="true"></i></a>
                    </li>
                    <!-- <li class="<?php if ($pageName == 'contact') {echo 'active';}?>"><a href="contact.php">Contact <i
                                class="fas fa-plus" aria-hidden="true"></i></a></li> -->
                    <li class="d-md-none"> <a class="theme-btn text-uppercase mt-3" href="contact.php">Contact
                            Us</a>
                    </li>
                    <li> <a class="theme-btn text-uppercase mt-3 px-2 d-xl-none" href="tel:090-6551-6181">
                            090-6551-6181</a></li>
                </ul>
            </div>
            <ul class="list-unstyled nav-icons mb-0 pt-1 pt-lg-0">
                <li><a href="contact.php"
                        class="theme-btn text-uppercase me--md-3 text-nowrap d-none d-md-block">Contact
                        Us</a></li>
                <li><span id="menu-bar" class="d-inline-block ml-4"><i class="fa fa-bars text-white fa-2x"></i></span>
                </li>
            </ul>
        </div>
    </section>
</div>