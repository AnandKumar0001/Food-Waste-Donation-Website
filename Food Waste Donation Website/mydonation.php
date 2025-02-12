<html>
<head>
<title>My Donations</title>
 <link rel="icon" type="image/x-icon" href="images/logo1.png">
</head>
<body>
<center>
<form method="post">
<input type="submit" value='VIEW ALL USERS' name="view">
</form>
</center>
</body>
</html>
<?php

if(isset($_POST["view"]))
{
  include("config.php");
  $sql="select * from donatenow";
  $rs=mysqli_query($conn,$sql);
  echo"<center><table border='1px'>";
  echo "<th><tr><td>ID</td><td>Name</td><td>Email</td>
  <td>Type of Food</td>
  <td>Date</td>
  <td>Time</td>
  <td>Quantity</td>
  <td>Location</td></tr></th>";
  while($row=mysqli_fetch_array($rs))
  {
    echo"<tr>";
    echo"<td>".$row['id']."</td><td>".$row['fullname']."</td><td>".$row['email']."</td><td>".$row['type']."</td><td>".$row['date']."</td><td>".$row['time']."</td><td>".$row['quantity']."</td><td>".$row['location']."</td></tr>";
  }
  echo"</table></center>";
  mysqli_close($conn);
}
?>