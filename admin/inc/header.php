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
    <title><?php echo TITLE; ?></title>
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
         <li class='nav-item'><a class="nav-link active" href="admindashboard.php"><i class='fa fa-tachometer-alt'></i> Dashboard </a></li>
         <li class='nav-item'><a class='nav-link' href="workorder.php"><i class='fa fa-cogs'></i> Work Order</a></li>
         <li class='nav-item'><a class='nav-link' href="request.php"><i class='fa fa-user-circle'></i> Requests</a></li>
         <li class='nav-item'><a class='nav-link' href="asset.php"><i class='fa fa-paper-plane'></i> Assets</a></li>
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
