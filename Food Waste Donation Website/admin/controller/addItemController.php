
<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $fullname = $_POST['fullname'];
        $email= $_POST['email'];
        $type = $_POST['type'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $quantity = $_POST['quantity'];
        $location = $_POST['location'];


       
            
       // $name = $_FILES['file']['name'];
        //$temp = $_FILES['file']['tmp_name'];
    
        //$location="./uploads/";
        //$image=$location.$name;

       // $target_dir="../uploads/";
       // $finalImage=$target_dir.$name;

        //move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO donatenow
         (fullname,email,type,date,time,quantity,location) 
         VALUES ('$fullname','$email',$type,'$date','$time',&quantity,&location)");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>