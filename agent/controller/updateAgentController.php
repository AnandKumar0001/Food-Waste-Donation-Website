<?php
    include_once "../config/dbconnect.php";

    $id=$_POST['id'];
    $fullname= $_POST['fullname'];
    $email= $_POST['email'];
    $password= $_POST['passowrd'];
    $mob= $_POST['mob'];

    /*if( isset($_FILES['newImage']) ){
        
        $location="./uploads/";
        $img = $_FILES['newImage']['name'];
        $tmp = $_FILES['newImage']['tmp_name'];
        $dir = '../uploads/';
        $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
        $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
        $image =rand(1000,1000000).".".$ext;
        $final_image=$location. $image;
        if (in_array($ext, $valid_extensions)) {
            $path = UPLOAD_PATH . $image;
            move_uploaded_file($tmp, $dir.$image);
        }
    }else{
        $final_image=$_POST['existingImage'];
    }*/
    $updateAgent = mysqli_query($conn,"UPDATE agentlogin SET 
        fullname='$fullname', 
        email='$email', 
        password='$password',
        mob='$mob' WHERE id='$id'");


    if($updateAgent)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>