<?php

    include_once "../config/dbconnect.php";
    
    $c_id=$_POST['record'];
    $query="DELETE FROM agentlogin where id='$c_id'";


    $data=mysqli_query($conn,$query);

    if($data){
        echo "<script>alert('h');</script>";
        
    }
    else{
        echo"Request Rejection Failed";
    }
    
?>