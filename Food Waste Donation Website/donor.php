<?php

session_start();
error_reporting(0);

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}

include 'config.php';?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="icon" type="image/x-icon" href="images/logo1.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<!--Style.css linking-->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!--Website font Change-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
<!--Nev Bar-->
<section>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">FoodDW</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href=""><?php echo "Welcome " . $_SESSION["fullname"] . "<br>";?><span class="sr-only"></span></a>
        <li class="nav-item active"><a class="nav-link" href="welcome.php">Update Profile<span class="sr-only"></span></a></li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="donatenow.php">Donate Now</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../fooddonated\index.php">My Donation's</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="d2a.php">Send Message to admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../donor\index.php">check Message</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About Us\index.html">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" >Logout</a>
      </li>
  
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</section>
<!--CDN links-->
<section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</section>
<!--Carousel-->
<section>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\image1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Donate Now</h3>
        <p>Help Others!</p></font>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\image2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Be Kid</h3>
        <p>Share Food!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\image3.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
       <h3>Your Waste</h3>
        <p>Can Save Someone's Life!</p>
      </div>   
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
</section>
 <!--Foother-->
<footer> <?php include 'donorfooter.php';?></footer>
</body>
</html>

