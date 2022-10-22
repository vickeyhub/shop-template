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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- third part css libraries -->
    <link rel="stylesheet" href="css/drawer.min.css">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body class="drawer drawer--right">
    <div class="sub-header w-100 bg-dark">
        <p class="text-white text-center text-uppercase inv-text py-2">DELHI DESIGN STUDIO</p>
    </div>

    <header role="banner">
        <div class="site-header d-flex justify-content-between">
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
            <div class="menu-items">
                <ul class="my-nav">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="service.html">service</a></li>
                    <li><a href="contact_us.html">contact us</a></li>
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

    <main role="main">
        <div class="main-slider-area">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/slider-1.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider-2.jpg" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="images/slider-3.jpg" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="heading-section">
            <h1>WE BELIEVE</h1>
            <p>In creating the perfect blend of extravagance and comfort to bring tranquil luxury to your abodes.</p>
        </div>

        <div class="container-fluid">
            <div class="d-flex justify-content-evenly flex-wrap">
                <div class="my-3 sm-flex">
                    <img class="my-img" src="images/3_540x.png">
                    <h2 class="fw-light text-center mt-3">FURNITURE</h1>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-secondary btn-sm category-btn">SHOP NOW</button>
                        </div>
                </div>
                <div class="my-3 sm-flex">
                    <img class="my-img" src="images/21_540x.png">
                    <h2 class="fw-light text-center mt-3">LIGHTING</h1>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-secondary btn-sm category-btn">SHOP NOW</button>
                        </div>

                </div>
                <div class="my-3 sm-flex">
                    <img class="my-img" src="images/20_540x.png">
                    <h2 class="fw-light text-center mt-3">DINING</h1>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-secondary btn-sm category-btn">SHOP NOW</button>
                        </div>
                </div>

            </div>
        </div>
        <hr class="mt-5">
        <div class="heading-section">
            <h1>Exquisite Expressions</h1>
           
                <p>Embrace the enchanting nuances of bespoke luxury. Revealing a refined disposition, we meticulously curate
                designs for you to bask in the grandiose juxtaposition of affluence and modernism.</p>
            
            </div>
        <div class="dininig-table-area">
            <img src="images/dining-table.png" class="w-100">
        </div>

        <hr class="mt-5 mb-5">
        <div class="container-fluid">
            <div class="d-flex justify-content-evenly flex-wrap">
                <div class="my-3 sm-flex">
                    <img class="my-img" src="images/couson.png">
                    <h2 class="fw-light text-center mt-3">CUSHIONS</h1>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-secondary btn-sm category-btn">SHOP NOW</button>
                        </div>
                </div>
                <div class="my-3 sm-flex">
                    <img class="my-img" src="images/flower-pot.png">
                    <h2 class="fw-light text-center mt-3">HOME DECOR</h1>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-secondary btn-sm category-btn">SHOP NOW</button>
                        </div>

                </div>
                <div class="my-3 sm-flex">
                    <img class="my-img" src="images/bed.png">
                    <h2 class="fw-light text-center mt-3">BEDDING</h1>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-secondary btn-sm category-btn">SHOP NOW</button>
                        </div>
                </div>

            </div>
        </div>

        <div class="container-fluid py-5">
            <div class="row">
                <div class="col-md-6 my-3">
                    <img class="w-100" src="images/shop-the-look.png">
                    <h2 class="fw-light text-center mt-3">SHOP THE LOOK</h1>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-secondary btn-sm category-btn">EXPLORE</button>
                        </div>
                </div>
                <div class="col-md-6 my-3">
                    <img class="w-100" src="images/tree-pot.png">
                    <h2 class="fw-light text-center mt-3">SHOP BY SET</h1>
                        <div class="d-flex justify-content-center">
                            <button class="btn btn-outline-secondary btn-sm category-btn">EXPLORE</button>
                        </div>

                </div>

            </div>
        </div>
        <div class="hero-image-area">
            <div class="hero-image">
                <img src="images/hero_background.webp" alt="" class="w-100">
            </div>
            <div class="hero-image-cover d-flex flex-column justify-content-center">
                <p class="text-center visit-p">VISIT</p>
                <h1 class="text-center size-45">DELHI DESIGN STUDIO</h1>
                <p class="text-center address-p">D-3 E-block, Sitapuri Extension, Delhi- 110045</p>
            </div>
        </div>
        <footer class="w-100">
            <div class="container-fluid p-5">
                <div class="row">
                    <div class="col-md-3">
                        <p class="small-og">DELHI DESIGN STUDIO</p>
                        <ul>
                            <li><a href="#">CONTACT</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">SEARCH</a></li>
                            <li><a href="#">RETURN & EXCHANGES</a></li>
                            <li><a href="#">PRIVACY POLICY</a></li>
                            <li><a href="#">SHIPPING </a></li>
                            <li><a href="#">TERMS OF SERVICE</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <p class="small-og">SIGN UP AND SAVE</p>
                        <p class="footer-small-paragraph">Subscribe to get special offers, free giveaways, and
                            once-in-a-lifetime deals.</p>

                        <input type="email" class="footer-email-box" placeholder="Enter Your Email">
                        <button class="btn btn-outline-secondary footer-btn">Subscribe</button>

                        <div class="footer-social-links mt-4">
                            <a href="https://www.instagram.com/unb_interio_official/" target="https://www.instagram.com/unb_interio_official/ "class="text-dark"><i class="fa fa-instagram fa-2x"></i></a>
                            <a href="https://www.facebook.com/unbdesignstudio.design" target="https://www.facebook.com/unbdesignstudio.design" class="text-dark"><i class="fa fa-facebook-square fa-2x"></i></a>
                            <a href="https://twitter.com/home" target="https://twitter.com/home" class="text-dark"><i class="fa fa-twitter fa-2x"></i></a>
                            <a href="https://in.pinterest.com/sumitsharma9736410/" target="https://in.pinterest.com/sumitsharma9736410/" class="text-dark"><i class="fa fa-pinterest fa-2x"></i></a>
                            <a href="https://twitter.com/home" target="https://twitter.com/home" class="text-dark"><i class="fa fa-linkedin fa-2x"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <p class="small-og">CONTACT US</p> <br>
                        <p>CAll US : +918800242774</p>
                        <p>EMAIL ID : newconcept.unb@gmail.com </p>

                    </div>

                    <div class="col-md-12 mt-5">
                        <div class="text-center small-og">
                            <p>&copy; 2022 DDS All Rights Reserved</p>
                            <p>Powered by Dishu</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/iscroll.min.js"></script>
    <script src="js/drawer.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.drawer').drawer();
        });
    </script>

</body>

</html>