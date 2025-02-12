<?php

include 'config.php';

require 'vendor/autoload.php';

session_start();

error_reporting(0);






if (isset($_POST["signin"])) {
  $fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
  $msg = mysqli_real_escape_string($conn,($_POST["msg"]));

  $check_email = mysqli_num_rows(mysqli_query($conn, "SELECT email FROM agentlogin WHERE fullname='$fullname'"));


  
   
   if ($check_email > 0) {
    echo "<script>alert('Name Found In record');</script>";
    $sql = "INSERT INTO ag2a (fullname, msg) VALUES ('$fullname', '$msg')";
    $result = mysqli_query($conn, $sql);
    if($result)
    {
      echo "Message Sent";
    }
    else
    {
      echo "Message not sent";
    }
    
  } else {
   echo "<script>alert('Inavlid Name');</script>";
  
    
     
    }   

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
   <link rel="icon" type="image/x-icon" href="images/logo1.png">
  <title>Send Message To admin</title>
</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form action="" method="post" class="sign-in-form">
          <h2 class="title">Send Message To admin</h2>
          <div class="input-field">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Full Name" name="fullname" value="<?php echo $_POST["fullname"]; ?>" required />
          </div>
          <div class="input-field">
            <i class="fas fa-lock"></i>
            <input type="textarea" placeholder="Enter Message Here" name="msg" value="<?php echo $_POST['msg']; ?>" required />
          </div>
          <input type="submit" value="Send" name="signin" class="btn solid" />
        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3> </h3>
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
          
          
          
        </div>
        <img src="img/register.svg" class="image" alt="" />
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <script src="app.js"></script>
</body>
</html>