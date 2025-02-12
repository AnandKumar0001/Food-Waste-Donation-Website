<?php

include 'config.php';




session_start();

error_reporting(0);




if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}
if (isset($_POST["Submit"])) {

 
  $otpf = mysqli_real_escape_string($conn,($_POST["signup_otp"]));
  
  $check_otp = mysqli_num_rows(mysqli_query($conn, "SELECT token FROM ngo WHERE token='$otpf'"));


  
   if ($check_otp != 1) {
    echo "<script>alert('Incorrect Otp.');</script>";
  }
  else
  {

  echo "<script>alert('Correct Otp.');</script>";
  $update = mysqli_query($conn, "UPDATE ngo SET status='1' WHERE token='$otpf'");

    $result = mysqli_query($conn, $check_otp);
    if ($result) {
      }
      else{
      echo"<script>alert('registration Successful');</script>";
      $_POST["signup_full_name"] = "";
      $_POST["signup_email"] = "";
      $_POST["signup_password"] = "";
      $_POST["signup_cpassword"] = "";
      $_POST["signup_otp"] = "";
      
      
              }
               echo "<script>alert('Verifed');</script>";
      echo '<script>window.location="ngologin.php"</script>';
     
    }
  }
  


  
  
  
  
 



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>Needy Singin And Singup</title>
   <link rel="icon" type="image/x-icon" href="images/logo1.png">
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Needy Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="otp" name="signup_otp" value="<?php echo $_POST["signup_otp"]; ?>" required />
          </div>
        
          
          <input type="submit" class="btn" name="Submit" value="Submit" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>New here ?</h3>
          <p>

          Needy
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Sign up
          </button>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>One of us ?</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
            laboriosam ad deleniti.
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Sign in
          </button>
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>
</html>