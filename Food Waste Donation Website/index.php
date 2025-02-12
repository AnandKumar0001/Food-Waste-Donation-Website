
<!DOCTYPE html>
<html>
<head>
  <title>Food Donation Website</title>
  <link rel="icon" type="image/x-icon" href="images/logo1.png">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
  <a class="navbar-brand" href="index.php">FDW</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="donorlogin.php">Donor</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="adminlogin.php">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="agentlogin.php">Agent</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="ngologin.php">Needy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About Us\index.html">About Us</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#payment">Help Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact Us</a>
      </li>
  
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
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
      <img src="images\p1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3><font color="black">Donate Foood</h3>
        <p>Help Other!</p></font>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\p2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Distribute Food</h3>
        <p>Be The Change!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images\p3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
       <h3>Don't Waste Food</h3>
        <p>Give It To Needy!</p>
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
<!--CDN links-->
<section>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</section>
 
<!--About Us-->  

    <section>
        <div class="container-fluid">
            <h1 class="text-center text-capitalize pt-5">About us</h1>
              <hr class="w-25 mx-auto pt-5">
               <div class="row mb-5">
                  <div class="col-lg-6 col-md-6 col-12">
                      <img src="images\p4.jpg"class="img-fluid">
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                      <h1>We Are Food Waste Preventers </h1>
                      <h3>
                      <p>
                          For many people in the world, food waste has become a habit. Buying more food than we need at markets, letting fruits and vegetables spoil at home or taking larger portions than we can eat.
                          <br>It’s a big problem. In fact, worldwide, tonnes of edible food are lost or wasted every day. Between harvest and retail alone, around 14 percent of all food produced globally is lost. Huge quantities of food are also wasted in retail or at the consumer level.
                      </p></h3>
                      <a href="About Us\index.html" class="btn btn-success">Know More</a>
                  </div>
              </div>
            </div>
    </section>
<!--Payment-->  

    <section id="payment">
        <div class="container-fluid">
            <h1 class="text-center text-capitalize pt-5">Want To Contribute For A Chanage</h1>
              <hr class="w-25 mx-auto pt-5">
               <div class="row mb-5">
                  <div class="col-lg-6 col-md-6 col-12">
                      <img src="images\payment.png"class="img-fluid">
                  </div>
                  <div class="col-lg-6 col-md-6 col-12">
                      <h1>Help Us By Donating Money</h1>
                      <h2>Be The Change</h3>
                      <p><h2>
                          Scan The QR code  and Pay!!
                          <br>Thank You Very Much!!

                      </p></h2>
                      <p><h2>“We ourselves feel that what we are doing is just a drop in the ocean. But the ocean would be less because of that missing drop.” Mother Teresa</p></h2>
                  
                  </div>
              </div>
            </div>
    </section>
<!--Services-->
    <section class="my-5" id="services">
      <div class="py-5">
              <h1 class="text-center text-capitalize pt-5">Our Services</h1>
              <hr class="w-25 mx-auto pt-5">
          </div>
              
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <img class="card-img-top" src="images\admin.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Admin</h4>
                  <p class="card-text">Admin Panel </p>
                  <a href="adminlogin.php" class="btn btn-primary">Click Here</a>
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <img class="card-img-top" src="images\donor.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Donor</h4>
                  <p class="card-text">Donate Now </p>
                  <a href="donorlogin.php" class="btn btn-primary">Click Here</a>
                </div>
              </div>
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card">
                <img class="card-img-top" src="images\agent.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Agents</h4>
                  <p class="card-text">Provide Food Now</p>
                  <a href="agentlogin.php" class="btn btn-primary">Click Here</a>
                </div>
              </div>   
        </div>
      </div>
    </div>          
    </section>
    <section>
    
<!--Contact US-->
     <section class="my-5" id="contact">
      <div class="py-5">
              <h1 class="text-center text-capitalize pt-5">Contact Us</h1>
          </div>
      <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
          <div class="form-group"> 
            <label>Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control" required>
          </div>
          <div class="form-group"> 
            <label>Email</label>
            <input type="text" name="email" autocomplete="off" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
          </div>
          <div class="form-group"> 
            <label>Mobile Number</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control" required pattern="[789][0-9]{9}$">
          </div>
          <div class="form-group"> 
            <label>Comments</label>
            <input type="text" name="comments" autocomplete="off" class="form-control" required>
            <!--<textarea class="form-control" name="comments" required>
            </textarea>-->
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </section>
<!--Footer-->

<?php include 'footer.php';?>

</body>
</html>
