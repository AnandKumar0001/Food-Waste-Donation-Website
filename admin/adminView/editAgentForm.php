
<div class="container p-5">

<h4>Edit Agent Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM agentlogin WHERE id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
      $agentID=$row1["id"];
?>
<form id="update-Items" onsubmit="updateAgent()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="id" value="<?=$row1['id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Agent Name:</label>
      <input type="text" class="form-control" id="fullname" value="<?=$row1['fullname']?>">
    </div>
    <div class="form-group">
      <label for="desc">Email</label>
      <input type="text" class="form-control" id="email" value="<?=$row1['email']?>">
    </div> 
    <div class="form-group">
      <label for="price">Password</label>
      <input type="password" class="form-control" id="password" value="<?=$row1['password']?>">
    </div>
    <div class="form-group">
      <label for="price">Mobile Number</label>
      <input type="number" class="form-control" id="mob" value="<?=$row1['mob']?>">
    </div>
    <!--<div class="form-group">
      <label>Category:</label>
      <select id="category">
        <?php
          $sql="SELECT * from agentlogin WHERE id='$ID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['id'] ."'>" .$row['fullname'] ."</option>";
            }
          }
        ?>
        <?php
          $sql="SELECT * from agentlogin WHERE id!='$ID'";
          $result = $conn-> query($sql);
          if ($result-> num_rows > 0){
            while($row = $result-> fetch_assoc()){
              echo"<option value='". $row['id'] ."'>" .$row['fullname'] ."</option>";
            }
          }
        ?>
      </select>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["product_image"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['product_image']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>-->
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Agent</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>