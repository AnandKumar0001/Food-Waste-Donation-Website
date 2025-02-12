<?php
include 'config.php';
session_start();
error_reporting(0);
if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}

if (isset($_POST["verify"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["signup_full_name"]);
  $email = mysqli_real_escape_string($conn, $_POST["signup_email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
  $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));
  $_SESSION["fullname"] = "$full_name";
  
$mob = mysqli_real_escape_string($conn,($_POST["signup_mobile"]));


  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM donorlogin WHERE email='$email'"));

  if ($password !== $cpassword) {
    echo "<script>alert('Password did not match.');</script>";
  } elseif ($check_email > 0) {
    echo "<script>alert('Email already exists in our database.');</script>";
  } else {
    $otp = rand(1000,9999);
$phone ="+91"."$mob";
  $api_key = 'de784ae9-fedf-11ec-9c12-0200cd936042'; // API Key
  $req = "https://2factor.in/API/V1/".$api_key."/SMS/".$phone."/".$otp;

  $sms = file_get_contents($req);
  $sms_status = json_decode($sms, true);
  if($sms_status['Status'] !== 'Success') {
    $err['error'] = 'Could not send OTP to '.$phone;
  }
    $sql = "INSERT INTO donorlogin (fullname, email, password, token, status,mob) VALUES ('$full_name', '$email', '$password', '$otp', '0','$mob')";
    $result = mysqli_query($conn, $sql);
    
    echo '<script>window.location="verifydonor.php"</script>';


    if ($result) {
      echo "<script>alert('Registration Successful');</script>";
      $_POST["signup_full_name"] = "";
      $_POST["signup_email"] = "";
      $_POST["signup_password"] = "";
      $_POST["signup_cpassword"] = "";
      }
      else{
        echo "<script>alert('Registration Failed');</script>";
      }
  }
 }

if (isset($_POST["signin"])) {
  $full_name = mysqli_real_escape_string($conn, $_POST["fullname"]);
 
  $email = mysqli_real_escape_string($conn, $_POST["email"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
  $check_fullname = mysqli_num_rows(mysqli_query($conn, "SELECT fullname FROM donorlogin WHERE fullname='$full_name'"));

  $check_email = mysqli_query($conn, "SELECT id FROM donorlogin WHERE email='$email' AND password='$password' AND status='1'");
   $_SESSION["fullname"] = "$full_name";
   echo"$full_name";
   
   echo'$_SESSION["fullname"] ';
if ($check_fullname < 1) {
    echo "<script>alert('Invalid Name.');</script>";
  } 
else{
  if (mysqli_num_rows($check_email) > 0) {
    $row = mysqli_fetch_assoc($check_email);
    $_SESSION["user_id"] = $row['id'];
    echo '<script>alert("Login Successful ")</script>';
   echo '<script>window.location="donor.php"</script>';
  } else {
    echo "<script>alert('Login details is incorrect. Please try again.');</script>";
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
  <title>Donor Login and Singup</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Donor Sign in</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="fullname" value="<?php echo $_POST["fullname"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email Address" name="email" value="<?php echo $_POST['email']; ?>" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required />
          </div>
          <input type="submit" value="Login" name="signin" class="btn solid" />
          <p style="display: flex;justify-content: center;align-items: center;margin-top: 20px;"><a href="forgot-password-donor.php" style="color: #4590ef;">Forgot Password?</a></p>
        </form>
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Donor Sign up</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="signup_full_name" value="<?php echo $_POST["signup_full_name"]; ?>" required />
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
          <div class="input-field">
            <i class="fas fa-lock"></i>
                   <input type="mobilenumber" placeholder="Mobile Number" name="signup_mobile" value="<?php echo $_POST["signup_mobile"]; ?>" required  pattern="[1-9]{1}[0-9]{9}"/>
          </div>
          <input type="submit" class="btn" name="verify" value="verify" />
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
            Donor
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Donor Sign in
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