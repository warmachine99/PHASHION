<?php
// start session so that errors can be available in this file to print
session_start();

?>
<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="WebTecher">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>PHASHION&reg; Official Site | Redefining Everyday Style</title>

  <!-- Removing the / brings the css -->
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Custom Styling/cover.css" rel="stylesheet">

</head>

<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">PHASHION</h3>
                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="/Extra Pages/main.php">Home</a>
                    <a class="nav-link" href="/Extra Pages/about-us.html">About Us</a>
                    <a class="nav-link" href="#">Sign In</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <!--
        <h1>Cover your page.</h1> -->
            <p class="lead">Welcome to Phashion.</p>
            <p class="lead">We'll make you look good. Guaranteed.</p>
            <p class="lead">
                <a href="Extra Pages/main.php" class="btn btn-lg btn-secondary fw-bold border-white bg-white">SHOP</a>
            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p>for <a href="https://www.ashesi.edu.gh/" target="_blank" class="text-white">Ashesi University's</a> Final
                Web Technologies Project, by <a href="https://twitter.com/project-moony"
                    class="text-white">WebTecher</a>.</p>
        </footer>
    </div>

    <!-- form  -->


    <div class="form" action="database.php"   method="POST" enctype="multipart/form-data">
        <h2>Login Here</h2>
        
        <input type="email" id="email" name="email" placeholder="Enter Email Here">
        <input type="password" id="password" name="password" placeholder="Enter Password Here">
        <button class="btnn"><a href="Extra Pages/main.php">Login</a></button>
    
        <p class="link">Don't have an account<br>
            <a href="register.php">Sign up </a> here</a>
        </p>
        <p class="liw">Log in with</p>
    
        <div class="icons">
            <a href="https://www.facebook.com/">
                <ion-icon name="logo-facebook"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-instagram"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-twitter"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-google"></ion-icon>
            </a>
            <a href="#">
                <ion-icon name="logo-skype"></ion-icon>
            </a>
        </div>
    
    </div>
    

    <!-- end -->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="/Scripts/script.js"></script>

</body>

</html>



<!-- 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Styling/main_style.css">

    <title>PHASHION &reg; Official Site | Redefining Everyday Style
    </title>
</head>

<body>
    <script src="/Scripts/script.js"></script>

    <div class="home">
        <header>

            
            <notif_bar id="alert" align="center">
                <marquee behavior="scroll" bgcolor="#bb3434" direction="left" scrollamount="13">
                <span style="font-size: 20px; color:#ffffff">ALERT: International Insanity Crisis Still Ongoing: Keep Your Head On- ALWAYS Wear Your Helmet!</span>
                <button class="close-button" aria-label="Close alert" type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
                </marquee>
                <button></button>
            </notif_bar>
             -->

            <!--
            <div class="navbar">
                <nav class="upper">
                    <ul id="left">
                        <li><a href="#">Ghana</a></li>
                        <li>English</li>
                        <li><a href="">Client Services</a></li>
                    </ul>

                    <ul id="right">
                        <li><a href="#">Sign In</a></li>
                        <li><a href="#">Cart</a></li>
                        <li><a href="#">Search</a></li>
                    </ul>
                </nav>

                <h2 id="logo">PHASHION</h2>

                <nav class="lower">
                    <ul>
                        <li><a href="#">WHAT'S NEW</a></li>
                        <li><a href="#">CLOTHES</a></li>
                        <li><a href="./Extra Pages/bags.html">BAGS</a></li>
                        <li><a href="/Extra Pages/shoe.html">SHOES</a></li>
                        <li><a href="/Extra Pages/accessory.html">ACCESSORIES</a></li>
                    </ul>
                </nav>
            </div>

        </header>

    </div>


    <main>

    </main>

    <footer>

    </footer>

</body>

</html> -->