<?php

    include_once "../config/dbconnect.php";
    
    $p_id=$_POST['record'];
    $query="update login set adminr='1'  where id='$p_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        

        echo"<script>alert('Request Approve');</script> ";
    }
    else{
        echo"Not able to Approve";
    }
    
?>