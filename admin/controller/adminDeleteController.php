<?php

    include_once "../config/dbconnect.php";
    
    $c_id=$_POST['record'];
    $query="DELETE FROM login where id='$c_id'";


    $data=mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('Deleted');</script>";
        
    }
    else{
        echo"Request Rejection Failed";
    }
    
?>