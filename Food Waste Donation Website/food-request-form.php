<?php

include 'config.php';

session_start();
error_reporting(0);

if (isset($_POST["Submit"])) {

  $fullname = mysqli_real_escape_string($conn,($_POST["singup_fullname"])); 
  $email = mysqli_real_escape_string($conn, ($_POST["signup_email"]));
  $orgn = mysqli_real_escape_string($conn,($_POST["signup_orgn"]));

  $date= mysqli_real_escape_string($conn,($_POST["signup_date"]));
  $time= mysqli_real_escape_string($conn,($_POST["signup_time"]));

  $location= mysqli_real_escape_string($conn,($_POST["location"]));
  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM ngo WHERE email='$email'"));
  $check_fullname = mysqli_num_rows(mysqli_query($conn, "SELECT fullname FROM ngo WHERE fullname='$fullname'"));
  $check_orgn = mysqli_num_rows(mysqli_query($conn, "SELECT orgn FROM ngo WHERE fullname='$dn'"));
  echo $fullname.$email.$type.$date.$time.$quantity.$location;


   if ($check_fullname<1) {
    echo "<script>alert('Invalid Needy Name.');</script>";
  } 

  
    if ($check_email< 1) {
    echo "<script>alert('Invalid Needy Email.');</script>";
  }
    if($check_orgn<1)
  {
    echo "<script>alert('Invalid Organisation Name.');</script>";
  }
  
  if($check_fullname>0&&$check_email>0&&$check_orgn>0){
    $sql="INSERT INTO `foodrequest`(`fullname`, `email`, `orgn`,  `date`, `time`, `location`,`status`) VALUES ('$fullname','$email','$orgn','$date','$time','$location','0')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo"<script>alert('Form Submition Successful');</script>";
      $_POST["signup_full_name"] = "";
      $_POST["signup_email"] = "";
      $_POST["signup_password"] = "";
      $_POST["signup_cpassword"] = "";
      echo '<script>window.location="ngo.php"</script>';
      }
      
      else{
        echo"<script>alert('Form not Submited');</script>";

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
  <title>Needy Form</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          
        <form action="" class="sign-up-form" method="post">
          <h2 class="title">Food Request Form</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Needy Name" name="singup_fullname" value="<?php echo $_POST["signup_fullname"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-envelope"></i>
            <input type="email" placeholder="Email Address" name="signup_email" value="<?php echo $_POST["signup_email"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Organisation Name" name="signup_orgn" value="<?php echo $_POST["signup_dn"]; ?>" required />
          </div>
          
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="date" placeholder="Date" name="signup_date" value="<?php echo $_POST["signup_date"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="time" placeholder="Time" name="signup_time" value="<?php echo $_POST["signup_time"]; ?>" required />
          </div>
          
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="textarea" placeholder="Location" name="location" value="<?php echo $_POST["location"]; ?>" required />
          </div>
         
          
          <input type="submit" class="btn" name="Submit" value="Submit" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3></h3>
          <p>

            
          </p>
          
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