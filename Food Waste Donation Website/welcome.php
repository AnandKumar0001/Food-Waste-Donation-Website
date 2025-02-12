<?php

session_start();
error_reporting(0);

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
}


include 'config.php';

if (isset($_POST["submit"])) {
    $full_name = mysqli_real_escape_string($conn, $_POST["full_name"]);
    $password = mysqli_real_escape_string($conn, md5($_POST["password"]));
    $cpassword = mysqli_real_escape_string($conn, md5($_POST["cpassword"]));

    if ($password === $cpassword) {
        $photo_name = mysqli_real_escape_string($conn, $_FILES["photo"]["name"]);
        $photo_tmp_name = $_FILES["photo"]["tmp_name"];
        $photo_size = $_FILES["photo"]["size"];
        $photo_new_name = rand() . $photo_name;

        if ($photo_size > 5242880) {
            echo "<script>alert('Photo is very big. Maximum photo uploading size is 5MB.');</script>";
        } else {
            $sql = "UPDATE donorlogin SET fullname='$full_name', password='$password', photo='$photo_new_name' WHERE id='{$_SESSION["user_id"]}'";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Profile Updated successfully.');</script>";
                move_uploaded_file($photo_tmp_name, "uploads/" . $photo_new_name);
            } else {
                echo "<script>alert('Profile can not Updated.');</script>";
                echo  $conn->error;
            }
        }
    } else {
        echo "<script>alert('Password not matched. Please try again.');</script>";
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
  <title>Update Profile</title>
</head>
<body>
         <p>Wanna logout?
            <a href="logout.php">Click Here</a>
        
          
            <a href="donor.php">Donor Page</a>
        </p>
    <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
    
   
        <h2></h2>
        <form action="" method="post" enctype="multipart/form-data">
            <?php

            $sql = "SELECT * FROM donorlogin WHERE id='{$_SESSION["user_id"]}'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>     <label >Fulll Name</label>
                    <div class="">

                        <input type="text" id="full_name" name="full_name" placeholder="Full Name" value="<?php echo $row['fullname']; ?>" required>
                    </div>
                    <label >Email</label>
                    <div class="">
                        <input type="email" id="email" name="email" placeholder="Email Address" value="<?php echo $row['email'];?>"  required disabled="disabled">
                    </div>
                    <label >Password</label>
                    <div class="">
                        <input type="password" id="password" name="password" placeholder="Password" value="<?php echo $row['password']; ?>" required>
                    </div>
                    <label >Confirm Password</label>
                    <div class="">
                        <input type="password" id="cpassword" name="cpassword" placeholder="Confirm Password" value="<?php echo $row['password']; ?>" required>
                    </div>
                    
                    <label>Photo</label>
                    <div class="">
                        <input type="file" accept="image/*" id="photo" name="photo">
                    </div>

                    
            <?php
                }
            }

            ?>
            <div>
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>
       </div>
            </div>
</body>

</html>
