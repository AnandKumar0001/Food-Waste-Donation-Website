<?php
include 'config.php';
session_start();
error_reporting(0);
if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}
if (isset($_POST["Submit"])) {

  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"])); 
  $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));
  $otpf = mysqli_real_escape_string($conn,($_POST["singup_otp"]));
  $email= mysqli_real_escape_string($conn,($_POST["signup_email"]));
  
$check_otp = mysqli_num_rows(mysqli_query($conn, "SELECT token FROM donorlogin WHERE token='$otpf'"));


  
   if ($check_otp != 1) {
    echo "<script>alert('Incorrect Otp.');</script>";
  }
  else{

    echo "<script>alert('Correct Otp.');</script>";

  if ($password !== $cpassword) {
    echo "<script>alert('Password did not match.');</script>";
  } 
   else {
    $sql ="UPDATE donorlogin SET password='$password' WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo"<script>alert('Password changed Successful');</script>";
      echo"<script>window.location('donorlogin.php')</script>";
      $_POST["signup_full_name"] = "";
      $_POST["signup_email"] = "";
      $_POST["signup_password"] = "";
      $_POST["signup_cpassword"] = "";
      echo '<script>window.location="donorlogin.php"</script>';
      }
      else{
        echo "<script>alert('Password change failed');</script>";
        
      }
    }
  }
 }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="icon" type="image/x-icon" href="images/logo1.png">
  <link rel="stylesheet" href="style.css" />
  <title>Donor Login And Singup</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Donor Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="otp" name="singup_otp" value="<?php echo $_POST["signup_otp"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email Address" name="signup_email" value="<?php echo $_POST["signup_email"]; ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="signup_password" value="<?php echo $_POST["signup_password"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Confirm Password" name="signup_cpassword" value="<?php echo $_POST["signup_cpassword"]; ?>" required />
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

           Donor
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