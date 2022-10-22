<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELHI DESIGN STUDIO</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">
    <!-- icon link -->
    <script src="https://kit.fontawesome.com/a49af7c9db.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link href="<?= base_url('assets/css/bootstrap.min.css" rel="stylesheet'); ?>">
    <!-- third part css libraries -->
    <link rel="stylesheet" href="<?= base_url('assets/css/drawer.min.css'); ?>">
    <!-- css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/media.css'); ?>">
</head>

<body class="drawer drawer--right">
    <div class="sub-header w-100 bg-dark">
        <p class="text-white text-center text-uppercase inv-text py-2">DELHI DESIGN STUDIO</p>
    </div>

    <header role="banner">
        <div class="site-header d-flex justify-content-between">
            <div class="logo">
                <img src="<?= base_url('assets/images/home/logo.png'); ?>" alt="">
            </div>
            <div class="menu-items">
                <ul class="my-nav">
                    <li><a href="<?= base_url(); ?>">Home</a></li>
                    <li><a href="<?= base_url('about-us'); ?>">About</a></li>
                    <li><a href="<?= base_url('services'); ?>">service</a></li>
                    <li><a href="<?= base_url('contact-us'); ?>">contact us</a></li>
                </ul>
            </div>

            <div class="icon-menu">
                <ul class="icon-nav">
                    <li class="sm-hide"><a href="#"><span class="fas fa-user"></span></a></li>
                    <li><a href="#"><span class="fa fa-search"></span></a></li>
                    <button type="button" class="drawer-toggle drawer-hamburger">
                        <span class="sr-only">toggle navigation</span>
                        <span class="drawer-hamburger-icon"></span>
                    </button>
                    <li><a href="#"><span class="fa fa-cart-plus"></span></a></li>
            </div>
        </div>
        <nav class="drawer-nav pt-2 pl-2" role="navigation">
            <ul class="drawer-menu">
                <li><a class="drawer-brand" href="#">
                        <div class="logo">
                            <img src="images/logo.png" alt="">
                        </div>
                    </a>
                </li>
                <li><a class="drawer-menu-item" href="index.html">Home</a></li>
                <li><a class="drawer-menu-item" href="about.html">About</a></li>
                <li><a class="drawer-menu-item" href="service.html">service</a></li>
                <li><a class="drawer-menu-item" href="contact_us.html">contact us</a></li>
            </ul>
        </nav>
    </header>