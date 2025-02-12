<!-- Sidebar -->
<div class="sidebar" id="mySidebar">
<div class="side-header">
    <img src="./assets/images/logo.png" width="120" height="120" alt="Swiss Collection"> 
    <h5 style="margin-top:10px;"><?php echo "Welcome " . $_SESSION["fullname"] . "<br>";?></h5>
</div>

<hr style="border:1px solid; background-color:#8a7b6d; border-color:#3B3131;">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="./index.php" ><i class="fa fa-home"></i> Dashboard</a>
    <a href="#Donor's Details"  onclick="showCustomers()" ><i class="fa fa-users"></i> Donor's Details</a>
    <a href="#Agent Details"   onclick="showCategory()" ><i class="fa fa-th-large"></i> Agent's Detail</a>
     <a href="#adminView/viewadmin.php"   onclick="showAdmin()" ><i class="fa fa-th-large"></i> Admin Login Request</a>
    <a href="#sizes"   onclick="showSizes()" ><i class="fa fa-th"></i> Food Donated</a>
    <a href="#productsizes"   onclick="showProductSizes()" ><i class="fa fa-th-list"></i>Contact Us Details </a>    
    <a href="#products"   onclick="showProductItems()" ><i class="fa fa-th"></i>Donation's Request</a>
    <a href="#foodrequest" onclick="showfoodrequest()"><i class="fa fa-th"></i>Food Requests</a>
    <a href="#orders" onclick="showOrders()"><i class="fa fa-list"></i> Messages</a>
     <a href="../Food Waste Donation Website\a2d.php"><i class="fa fa-list"></i> Send Message To Donor</a>
       <a href="../Food Waste Donation Website\a2ag.php"><i class="fa fa-list"></i> Send Message To Agent</a>
        <a href="../Food Waste Donation Website\a2n.php"><i class="fa fa-list"></i> Send Message To Needy</a>
  

  
  <!---->
</div>
 
<div id="main">
    <button class="openbtn" onclick="openNav()"><i class="fa fa-home"></i></button>
</div>


