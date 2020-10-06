<?php

include('../db.php');
session_start();
if(isset($_SESSION['is_login'])){
$email=$_SESSION['email'];
}else{
    echo"<script>location.href='adminlogin.php'</script>";
}
$query="SELECT * from requester_data WHERE email='".$email."'";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);
if(isset($_REQUEST['update'])){
if($_REQUEST['rname']==''){
    $msg="<div class='alert alert-warning'>Fill All Fields</div>";
}else{
    $remail=$_REQUEST['remail'];
    $rname=$_REQUEST['rname'];
    $query1="UPDATE `new_mos`.`requester_data` SET `rname` = '$rname' WHERE `email` = '$remail';";
   $data1=mysqli_query($conn,$query1);
   if($data1){
       $msg="<div class='alert alert-success'>Updated</div>";
   }else{
    $msg="<div class='alert alert-danger'>Not Updated</div>";
   }
}
}
else{

}
if(isset($_REQUEST['logout'])){
    session_unset();
    session_destroy();
    echo"<script>location.href='login.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font awsome css -->
    <link rel="stylesheet" href="../css/all.min.css">
    <title>profiles.<?php echo $result['rname'];?></title>
</head>
<body>
<!-- Top Navbar  -->
<nav class='navbar navbar-dark fixed-top bg-primary
fixed-md-nowrap p-1 shadow'>
<a class='navbar-brand col-sm-3 col-md-2 mr-0 ' href='#'>Moosa Online Shop</a> </nav>
    <!-- End Navbar   -->
    <!-- Side bar  -->
     <div class='container-fluid mt-4'>
      <div class='row'>
       <nav class='col-sm-2 bg-light sidebar py-5'>
        <div class='sidebar-sicky'>
         <ul class='nav flex-column'>
         <li class='nav-item'><a class='nav-link active' href="admindashboard.php"><i class='fa fa-tachometer-alt'></i> Dashboard </a></li>
         <li class='nav-item'><a class='nav-link' href="workorder.php"><i class='fa fa-accessible-icon'></i> Work Order</a></li>
         <li class='nav-item'><a class='nav-link' href="request.php"><i class='fa fa-paper-plane'></i>Requests</a></li>
         <li class='nav-item'><a class='nav-link' href="asset.php"><i class='fa fa-paper-plane'></i>Assets</a></li>
         <li class='nav-item'><a class='nav-link' href="tecnition.php"><i class='fa fa-paper-plane'></i> Tecnition</a></li>
         <li class='nav-item'><a class='nav-link' href="requester.php"><i class='fa fa-paper-plane'></i> Requester</a></li>
         <li class='nav-item'><a class='nav-link' href="sellreport.php"><i class='fa fa-paper-plane'></i> Sell Report</a></li>
         <li class='nav-item'><a class='nav-link' href="workreport.php"><i class='fa fa-paper-plane'></i> Work Report</a></li>
         <li class='nav-item'><a class='nav-link' href="changepass.php"><i class='fa fa-key'></i> Chang Password</a></li>
         <li class='nav-item'><a class='nav-link' href="status.php"><i class='fa fa-shopping-cart'></i> Status</a></li>
         <li class='nav-item'><a class='nav-link' href="#"></i><form method='get'><button type='submit'name='logout' class='btn btn-primary'>Logout</button></a></li>
        </ul>
        </div>
       </nav><!-- End Side bar  -->
       <!-- Start profile area  -->
       <div class='col-sm-6 mt-4'>
        <form action="" method='get' class='mt-4'>
         <div class='form-group'>
         <label for="email">Email</label>
         <input type="email" class='form-control' value='<?php echo $_SESSION['email']; ?>' name='remail' id='remail' readonly>
         </div>
         <div class='form-group'>
         <label for="Name">Name</label>
         <input type="text" class='form-control' value='<?php echo $result['rname']; ?>' name='rname' id='rname'>
         </div>
         <!-- <div class='form-group'>
         <label for="Password">Password</label>
         <input type="password" class='form-control' value='<?php echo $result['pass']; ?>' name='pass' id='rpass'>
         </div> -->
         <input type="submit" value="Update" name='update' class='btn btn-primary'>
         <?php if(isset($msg)){echo $msg;}?>
        </form>
       
       </div>
        
       <!-- end profile area -->
      </div>
     
     </div>
    

    <!-- Java Script -->
    <script src='../js/jquery.js'></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>