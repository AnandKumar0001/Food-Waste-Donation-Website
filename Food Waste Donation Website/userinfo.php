<?php
$con = mysqli_connect('localhost','root');
if($con)
{
	echo "<script>alert('Connection Ready');</script>";
}
else
{
	echo "<script>alert('Connection Failed');</script>";
}
mysqli_select_db($con,'fdw');
$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comments=$_POST['comments'];
$query = "insert into userinfodata (user,email,mob,comment)
values('$user','$email','$mobile','$comments')";
mysqli_query($con,$query);
echo "<script>alert('Sent To Admin.');</script>";
echo '<script>window.location="index.php"</script>';
?>