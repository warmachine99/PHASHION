<?php
// Start the session
session_start();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shoes | PHASHION &reg;</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="WEBTECHERS" />

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    
</head>

<body>

    <div class="fh5co-loader"></div>

    <div id="page">
        <nav class="fh5co-nav" role="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-xs-2">
                        <div id="fh5co-logo"><a href="Extra Pages/main.php">PHASHION</a></div>
                    </div>
                    <div class="col-md-6 col-xs-6 text-center menu-1">
                        <ul>
                            <li><a href="Extra Pages/main.php">Home</a></li>
                            <li class="has-dropdown">
                                <a href="#">Shop</a>
                                <ul class="dropdown">
                                    <li><a href="bags.php">Bags</a></li>
                                    <li><a href="accessories.php">Accessories</a></li>
                                </ul>
                            </li>
                            <li><a href="about.php">About</a></li>

                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                        <ul>

                            <li class="shopping-cart"><a href="/Extra Pages/cart.php" class="cart"><span><i class="icon-shopping-cart"></i></span></a></li>
                            <form class="d-flex">
                         <a href="index.php" class="btn btn-outline-success">LOGOUT</a>
                          </form>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>

        <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/shoesImages/main-shoes.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="display-t">
                            <div class="display-tc animate-box" data-animate-effect="fadeIn">
                                <h1>SHOES</h1>
                                <h2>The Best African Shoes In The World</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div id="fh5co-product">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                        <span>Leggo!</span>
                        <h2>Shiny Shoes</h2>
                        <p>These shoes were designed by top Ghanaian shoe designers hand crafted to fit your preferences</p>
                    </div>
                </div>



                <div>


                    <div class="container">
                        <div class="row">
                            <?php

                            include 'settings/db_cred.php';


                            $sel = "SELECT * FROM shoe";
                            $que = mysqli_query($db, $sel);


                            while ($row = mysqli_fetch_array($que)) {
                            ?>



                                <div class="col-md-4 text-center animate-box">
                                    <div class="product">
                                        <div class="product-grid" style="background-image: url(  <?php echo $row['s_image'];  ?> );">
                                            <div class="inner">
                                                <p>
                                                    <a href="Extra Pages/Products/Shoes/one.php?shoe_id= <?php echo $row['s_id'] ?>" class="icon"><i class="icon-shopping-cart"></i></a>
                                                    <a href="Extra Pages/Products/Shoes/one.php" class="icon"><i class="icon-eye"></i></a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="desc">
                                            <h3><a href="Extra Pages/Products/Shoes/one.php"> <?php echo $row['s_name'];  ?></a></h3>
                                            <span class="price"> <?php echo $row['s_price'];  ?> </span>
                                        </div>
                                    </div>
                                </div>



                            <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>


            </div>
                <div id="fh5co-started">
                    <div class="container">
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                                <h2>Newsletter</h2>
                                <p>Find out whenever we drop something new. Wanna join the fast track?</p>
                            </div>
                        </div>
                        <div class="row animate-box">
                            <div class="col-md-8 col-md-offset-2">
                                <form class="form-inline">

                                    <div class="col-md-12 col-sm-12">
                                        <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <footer id="fh5co-footer" role="contentinfo">
                    <div class="container">
                        <div class="row row-pb-md">
                            <div class="col-md-4 fh5co-widget">
                                <h3>PHASHION</h3>
                                <p>Our bodies are beautiful, and celebrating them and being comfortable in them???no matter what age you are???is important.</p>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 col-md-push-1">
                                <ul class="fh5co-footer-links">
                                    <li><a href="Extra Pages/main.php">Home</a></li>
                                    <li><a href="/about.php">About</a></li>
                                    <li><a href="/contact.php">Contact Us</a></li>

                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 col-md-push-1">
                                <ul class="fh5co-footer-links">
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="/bags.php">Bags</a></li>
                                    <li><a href="/accessories.php">Accessories</a></li>
                                </ul>
                            </div>

                        </div>

                        <div class="row copyright">
                            <div class="col-md-12 text-center">
                                <p>
                                    <small class="block">&copy; 2021 WEBTECHERS. All Rights Reserved.</small>
                                    <small class="block">Designed by <a href="PHASION" target="_blank">WEBTECHERS</a>
                                </p>
                                <p>
                                <ul class="fh5co-social-icons">
                                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                                </ul>
                                </p>
                            </div>
                        </div>

                    </div>
                </footer>
            </div>

            <div class="gototop js-top">
                <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
            </div>

            <!-- jQuery -->
            <script src="js/jquery.min.js"></script>
            <!-- jQuery Easing -->
            <script src="js/jquery.easing.1.3.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Waypoints -->
            <script src="js/jquery.waypoints.min.js"></script>
            <!-- Carousel -->
            <script src="js/owl.carousel.min.js"></script>
            <!-- countTo -->
            <script src="js/jquery.countTo.js"></script>
            <!-- Flexslider -->
            <script src="js/jquery.flexslider-min.js"></script>
            <!-- Main -->
            <script src="js/main.js"></script>
</body>

</html>