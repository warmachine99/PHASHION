<?php
// start session so that errors can be available in this file to print
session_start();

?>

<!doctype php>
<php lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="WebTecher">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>PHASHION&reg; Official Site | Redefining Everyday Style</title>
    

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">    
    
    <!-- Custom styles for this template -->
    <link href="../Custom Styling/carousel.css" rel="stylesheet">  
    


    <style>
      
    </style>

  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">PHASHION</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="../shoes.php">Shoes</a> <!-- if ikeep ../ after the register the shoes bags link when clicked do not come -->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../bags.php">Bags</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../accessories.php">Accessories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">English</a>
          </li>
        </ul>
        
        <form class="d-flex">
            <a href="../index.php" class="btn btn-outline-success">LOGOUT</a>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <!---->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
          <div class="carousel-item active">
              <img class="d-block w-100" src="../Assets/Images/Carousel/shoes.jpg" alt="First slide" style="object-fit: cover;">
              <div class="carousel-caption text-start d-none d-md-block">
                  <h1>We got shoes.</h1>
                  <p>Shoes for days. Shoes for nights. Shoes for every moment.</p>
                  <p><a class="btn btn-lg btn-primary border-white bg-white text-black" href="../shoes.php">Shop Now</a></p>
              </div>
          </div>

          <div class="carousel-item">
              <img class="d-block w-100" src="../Assets/Images/Carousel/bags.jpg" alt="Second slide" style="object-fit: cover;">
              <div class="carousel-caption text-start d-none d-md-block">
                <h1>Don't forget your bag!</h1>
                <p>The perfect sidekick for your next adventure.</p>
                <p><a class="btn btn-lg btn-primary border-white bg-white text-black" href="../bags.php">Shop Now</a></p>
              </div>
          </div>

          <div class="carousel-item">
              <img class="d-block w-100" src="../Assets/Images/Carousel/accessory.jpg" alt="Third slide" style="object-fit: cover;">
              <div class="carousel-caption text-start d-none d-md-block">
                <h1>We'll get you accessories.</h1>
                <p>And they're gonna match your personality.</p>
                <p><a class="btn btn-lg btn-primary border-white bg-white text-black" href="../accessories.php">Shop Now</a></p>
              </div>
          </div>
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
      </a>
  </div>
  <!---->

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">


    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Shoes for every terrian. <span class="text-muted">They???ll blow your mind.</span></h2>
        <p class="lead">If fashion is the armor to survive the reality of everyday life, your feet could never be safer.</p>
      </div>
      <div class="col-md-5">
        <img src="../Assets/Images/Carousel/below/2-shoes.jpg" class="featurette-image img-fluid mx-auto" alt="shoes" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Add your initials. <span class="text-muted">Wear your brand.</span></h2>
        <p class="lead">From complimentary monogramming to the Phashion DIY selection, add your initals to leather goods or a selection of knitwear straight from Phashion.com or visit us in-store for jewelry engraving and Zodiac personalization.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="../Assets/Images/Carousel/below/1-initi.jpg" class="featurette-image img-fluid mx-auto" alt="shoes" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">We've got what you need. <span class="text-muted">Checkmate.</span></h2>
        <p class="lead">"Whoever said that money can't buy happiness, simply didn't know where to go shopping." ???Bo Derek</p>
      </div>
      <div class="col-md-5">
        <img src="../Assets/Images/Carousel/below/3-hat.jpg" class="featurette-image img-fluid mx-auto" alt="shoes" width="500" height="500" preserveAspectRatio="xMidYMid slice" focusable="false">

      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2021 PHASHION, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</php>

