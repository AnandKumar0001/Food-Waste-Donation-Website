<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION["user_id"])) {
  header("Location: welcome.php");
}

if (isset($_POST["sendotp"])) {
   
  $mob = mysqli_real_escape_string($conn, $_POST["mob"]);
  $otpd = mysqli_real_escape_string($conn, $_POST["otpf"]);
  $password = mysqli_real_escape_string($conn, md5($_POST["signup_password"]));
  $cpassword = mysqli_real_escape_string($conn, md5($_POST["signup_cpassword"]));
  $otp = rand(1000,9999);
  $phone ="+91"."$mob"; // target number; includes ISD
  $api_key = 'de784ae9-fedf-11ec-9c12-0200cd936042'; // API Key
  $req = "https://2factor.in/API/V1/".$api_key."/SMS/".$phone."/".$otp;

  $sms = file_get_contents($req);
  $sms_status = json_decode($sms, true);
  if($sms_status['Status'] !== 'Success') {
    $err['error'] = 'Could not send OTP to '.$phone;
  }
  $check_mob = mysqli_query($conn, "SELECT * FROM donorlogin WHERE mob='$mob'");
  if (mysqli_num_rows($check_mob) > 0) {
    $data = mysqli_fetch_assoc($check_mob);
     $update = mysqli_query($conn, "UPDATE donorlogin SET token='$otp' WHERE mob='$mob'");
      echo "<script>alert('Otp Sent');</script>";
     echo '<script>window.location="otpform-donor.php"</script>';   
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
  <title>Sign in & Sign up Form - Pure Coding</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Reset Password</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Mobile Number" name="mob" value="<?php echo $_POST['mob']; ?>" required pattern="[789][0-9]{9}$"/>
          </div>
          <input type="submit" value="Send Otp" name="sendotp" class="btn solid" />

        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Forgot Password ?</h3>
          <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
            ex ratione. Aliquid!
          </p>
        </div>
        <img src="img/log.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>

</html>