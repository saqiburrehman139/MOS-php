<?php
include('db.php');
session_start();
if(isset($_SESSION['is_login'])){
    $email=$_SESSION['email'];
}
else{
    echo"<script>location.href='login.php'</script>";
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
    <script src='js/jquery.js'></script>
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font awsome css -->
    <link rel="stylesheet" href="css/all.min.css">
     <!-- notify js  -->
   <script src="js/notify.min.js"></script>
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
         <li class='nav-item'><a class='nav-link active' href="profile.php"><i class='fa fa-user'></i> Profile </a></li>
         <li class='nav-item'><a class='nav-link' href="submit.php"><i class='fa fa-request'></i>Submit Request</a></li>
         <li class='nav-item'><a class='nav-link' href="changepass.php"><i class='fa fa-key'></i> Chang Password</a></li>
         <li class='nav-item'><a class='nav-link' href="status.php"><i class='fa fa-shopping-cart'></i> Status</a></li>
         <li class='nav-item'><a class='nav-link' href="#"><form method='get'><input type="submit" name='logout' value='Logout'></form></a></li>
        </ul>
        </div>
       </nav><!-- End Side bar  -->
       <!-- Start profile area  -->
      
        
      