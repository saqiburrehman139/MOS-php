<?php

include('../db.php');
session_start();
if(isset($_SESSION['is_login'])){
$email=$_SESSION['email'];
}else{
    echo"<script>location.href='adminlogin.php'</script>";
}
$query="SELECT * from requester_data";
$data=mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data);

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
       <!-- Start dashboard 2nd column  -->
       <div class='col-sm-9 col-md-10'>
       <div class="row text-center mx-5">
        <div class="col-sm-4 mt-5">
         <div class='card text-white bg-primary mb-3'style='max-width:18rem;'>
          <div class='card-header'>Requests Received </div>
           <div class='card-body'>
            <div class='card-title'> 52 </div>
            <a class='btn text-white' href="#">View</a>
          </div>
         </div>        
        </div>
        <div class="col-sm-4 mt-5">
         <div class='card text-white bg-info mb-3'style='max-width:18rem;'>
          <div class='card-header'>Assigned Work </div>
           <div class='card-body'>
            <div class='card-title'> 10 </div>
            <a class='btn text-white' href="#">View</a>
          </div>
         </div>        
        </div>
        <div class="col-sm-4 mt-5">
         <div class='card text-white bg-success mb-3'style='max-width:18rem;'>
          <div class='card-header'>No Of Tecnitions </div>
           <div class='card-body'>
            <div class='card-title'> 2 </div>
            <a class='btn text-white' href="#">View</a>
          </div>
         </div>        
        </div>
        </div>
        <div class='mx-5 mt-5 text-center'>
        <p class='bg-dark text-white p-2'>List Of Requesters</p>
<table class='table'>
<thead>
<tr>
<th>Requester ID</th>
<th>Name</th>
<th>Email</th>
</tr>
</thead>
<tbody>
<?php
        {while($result=mysqli_fetch_assoc($data)){
        echo "
<tr>
<td>".$result['id']."</td>
<td>".$result['rname']."</td>
<td>".$result['email']."</td>
</tr>
</tbody>
";
        }}
        ?>
        </table>
       </div>
       </div>
       <!-- end dashboard 2nd column -->
      </div>
     
     </div>
    

    <!-- Java Script -->
    <script src='../js/jquery.js'></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
</body>
</html>