
<div >
  <h2>Donation's Request</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">ID</th>
        <th class="text-center">Name</th>
        <th class="text-center">Email</th>
        <th class="text-center">Type&nbspof&nbspfood</th>
        <th class="text-center">Date&nbsp&nbsp&nbsp&nbsp&nbsp</th>
        <th class="text-center">Time</th>
        <th class="text-center">Quantity&nbsp&nbsp&nbsp&nbsp</th>
        <th class="text-center">Location&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
        <th class="text-center" colspan="3">Actions</th>        
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from donatenow  WHERE status=0";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["id"]?></td>
      <td><?=$row["fullname"]?></td>
      <td><?=$row["email"]?></td>      
      <td><?=$row["type"]?></td> 
      <td><?=$row["date"]?></td>     
      <td><?=$row["time"]?></td> 
      <td><?=$row["quantity"]?></td> 
      <td><?=$row["location"]?></td> 
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?=$row['id']?>')">Edit</button></td>
      <td><button class="btn btn-success" style="height:40px" onclick="Approve('<?=$row['id']?>')">✓</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?=$row['id']?>')">X</button></td>
      
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Request
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Donation Request</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Donor Name:</label>
              <input type="text" class="form-control" id="fullname" required>
            </div>
            <div class="form-group">
              <label for="price">Email</label>
              <input type="text" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label for="qty">Type of Food</label>
              <input type="text" class="form-control" id="type" required>
            </div>
            <div class="form-group">
              <label for="qty">Date</label>
              <input type="date" class="form-control" id="date" required>
            </div>
            <div class="form-group">
              <label for="qty">Time</label>
              <input type="time" class="form-control" id="time" required>
            </div>
            <div class="form-group">
              <label>Quantity</label>
              <select id="quantity" >
                <option disabled selected></option>
                <?php

                  $sql="SELECT quantity from donatenow";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['id']."'>".$row['quantity'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label for="qty">Location</label>
              <input type="text" class="form-control" id="location" required>
            </div>
            <!--<div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file">
            </div>-->
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Request</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   