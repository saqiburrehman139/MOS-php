<?php

include('db.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--- Bootstrap CSS---->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--- Font Awsome CSS---->
    <link rel="stylesheet" href="css/all.min.css">
    <!---- Google Font---->
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">    <!--- Custom CSS---->
    <link rel="stylesheet" href="css/custom.css">
    <title>Moosa Online Shop</title>
</head>
<style>
/* Change navbar color */
.navbar #myMenu .custom-nav .nav-item  a{
    color:#fff;
}
.navbar #myMenu .custom-nav .nav-item  a:hover{
    color:blue;
} 
/* Make header image responsive */
.back-image{
    background-size:cover;
    background-position: center center;
    background-repeat: no-repeat;
    min-height:90vh;
    border-radius:0px;
    margin-top:74px;
}

</style>
<body>
    <!----Start Navigation---->
    <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-3 fixed-top">
    <a href="index.php" class='navbar-brand'>Moosa Online Shop</a>
    <span class='navbar-text font-italic'>Best Place For Online Shopping</span>
    
    <button type="button" class="navbar-toggler" 
    data-toggle="collapse" data-target="#myMenu">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
    <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="#newarr" class="nav-link">Products</a></li>
    <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
    <li class="nav-item"><a href="#contactus" class="nav-link">Contact us</a></li>

    </ul>
    </div>
    </nav>
    <!----End Navigation---->
    <!-- Header -->
    <header class="jumbotron back-image" style="background-image:url(images/banner1.jpg);">
    <div class='myclass mainheading'>
        <h1 class="text-light font-weight-bold">Welcome to,<br> Moosa Online Shop</1>
        <p class="text-light font-italic">Best Place For Online Shopping</p>
        <a href="login.php" class="btn btn-success mr-2">Login</a>
        <a href="#registration" class="btn btn-danger mr-2">Signup</a>
    </div>
    </header>
    <!-- End Header -->
    <!-- Our Aim  -->
    <div class='container'>
    <div class="jumbotron">
    <h3 class="text-center">Our Aim </h3>
    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ab itaque voluptatem voluptatum dicta nesciunt modi dolorem accusamus, vero, esse eos consequatur? Excepturi soluta dolorem consequatur ab molestias atque, unde vitae repellat facere deserunt fugiat, harum, earum architecto temporibus officiis tempora modi corporis amet eos. Unde animi quas nostrum minus.
    </p>
     
    </div>
     
    </div>
    <!-- End Our Aim -->
    <!-- New Arraivals -->
    <div class="container" id='newarr'>
    <h2>New Arrivals</h2>
    <div class='row'>
     <div class='col-md-3'>
      <div class='product-top'>
       <img src="images/pr2.jpg" alt="product2" width="200px" height="250px">
        <div class='overlay'>
         <button type='button'class='btn btn-secondary'
         title='Quick Shop'><i class='fa fa-eye'></i></button>
         <button type='button'class='btn btn-secondary'
         title='Like'><i class='fa fa-heart'></i></button>
         <button type='button'class='btn btn-secondary'
         title='Cart'><i class='fa fa-shopping-cart'></i></button>
        </div>
       </div>
       <div class='product-bottom text-center'>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class="icon-star-empty"></i>
       <h4>Citizen</h4>
       <h6> 5000.00</h6> 
       </div>
      </div>
      <div class='col-md-3'>
      <div class='product-top'>
       <img src="images/pr3.jpg" alt="product3" width="200px" height="250px">
        <div class='overlay'>
         <button type='button'class='btn btn-secondary'
         title='Quick Shop'><i class='fa fa-eye'></i></button>
         <button type='button'class='btn btn-secondary'
         title='Like'><i class='fa fa-heart'></i></button>
         <button type='button'class='btn btn-secondary'
         title='Cart'><i class='fa fa-shopping-cart'></i></button>
        </div>
       </div>
       <div class='product-bottom text-center'>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class="icon-star-empty"></i>
       <h4>Citizen</h4>
       <h6>Rs 5000.00</h6> 
       </div>
      </div>
      <div class='col-md-3'>
      <div class='product-top'>
       <img src="images/pr4.jpg" alt="product4" width="200px" height="250px">
        <div class='overlay'>
         <button type='button'class='btn btn-secondary'
         title='Quick Shop'><i class='fa fa-eye'></i></button>
         <button type='button'class='btn btn-secondary'
         title='Like'><i class='fa fa-heart'></i></button>
         <button type='button'class='btn btn-secondary'
         title='Cart'><i class='fa fa-shopping-cart'></i></button>
        </div>
       </div>
       <div class='product-bottom text-center'>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class="icon-star-empty"></i>
       <h4>Crysma</h4>
       <h6>Rs 3000.00</h6> 
       </div>
      </div>
      <div class='col-md-3'>
      <div class='product-top'>
       <img src="images/pr1.jpg" alt="product1" width="200px" height="250px">
        <div class='overlay'>
         <button type='button'class='btn btn-secondary'
         title='Quick Shop'><i class='fa fa-eye'></i></button>
         <button type='button'class='btn btn-secondary'
         title='Like'><i class='fa fa-heart'></i></button>
         <button type='button'class='btn btn-secondary'
         title='Cart'><i class='fa fa-shopping-cart'></i></button>
        </div>
       </div>
       <div class='product-bottom text-center'>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class='fa fa-star'></i>
       <i class="icon-star-empty"></i>
       <h4>RE</h4>
       <h6>Rs 2000.00</h6> 
       </div>
      </div>
      </div>

    </div>
    <!-- End New arraival -->
    <!-- Start sirvices -->
     
    
    <div class="container text-center" id='services'>
    <h2 class=''> Our Services</h2>
    <div class='row mt-4'>
    <div class='col-sm-4'>
    <a href=""><i class='fa fa-tv fa-8x text-success'></i></a>
    <h4 class='mt-4'>Electronics</h4>
    </div>
    <div class='col-sm-4'>
    <a href=""><i class='fa fa-sliders-h fa-8x text-primary'></i></a>
    <h4 class='mt-4'>Maintenence</h4>
    </div>
    <div class='col-sm-4'>
    <a href=""><i class='fa fa-cogs fa-8x text-info'></i></a>
    <h4 class='mt-4'>Repair</h4>
    </div>
    </div>
    </div>
    <!-- End sirvices -->
    <!-- Start Registration form -->
    <?php include('inc/registration.php') ?>
    <!-- End Registration form -->

    <!-- Start happy costomers -->

    <div class='jumbotraon bg-primary'>
    <div class='container'>
    <h1 class='text-center text-white'>Happy Customers</h1>
    <div class='row'>
    <!-- start 1st col -->
    <div class='col-lg-3 col-sm-6'>
    <div class='card-shadow-lg mb-2 bg-light'>
    <div class='card-body text-center'>
    <img src="images/avtar1.jpg" alt="avtar1.jpg" class='img-fluid'
     style='border-radius:100px; height:150px; width:150px;'>
     <h4 class='card-title'>Samina Raza</h4>
     <p class='card-text'>Lorem ipsum, dolor sit
      amet consectetur adipisicing elit. Dolore, facilis.</p>

    </div>
    </div>
    </div>
    <!-- End 1st col -->
    <!-- start 2nd col -->
    <div class='col-lg-3 col-sm-6'>
    <div class='card-shadow-lg mb-2 bg-light'>
    <div class='card-body text-center'>
    <img src="images/avtar2.jpg" alt="avtar2" class='img-fluid'
     style='border-radius:100px; height:150px; width:150px;'>
     <h4 class='card-title'>Jahanzaib Mirza</h4>
     <p class='card-text'>Lorem ipsum, dolor sit
      amet consectetur adipisicing elit. Dolore, facilis.</p>

    </div>
    </div>
    </div>
    <!-- End 2nd col -->
    <!-- start 3rd col -->
    <div class='col-lg-3 col-sm-6'>
    <div class='card-shadow-lg mb-2 bg-light'>
    <div class='card-body text-center'>
    <img src="images/avtar3.jpg" alt="avtar3" class='img-fluid'
     style='border-radius:100px; height:150px; width:150px;'>
     <h4 class='card-title'>Azhar Iqbal</h4>
     <p class='card-text'>Lorem ipsum, dolor sit
      amet consectetur adipisicing elit. Dolore, facilis.</p>

    </div>
    </div>
    </div>
    <!-- End 3rd col -->
    <!-- start 4th col -->
    <div class='col-lg-3 col-sm-6'>
    <div class='card-shadow-lg mb-2 bg-light'>
    <div class='card-body text-center'>
    <img src="images/avtar4.jpg" alt="avtar4" class='img-fluid'
     style='border-radius:100px; height:150px; width:150px;'>
     <h4 class='card-title'>Faiqa Hameed</h4>
     <p class='card-text'> Lorem ipsum, dolor sit
      amet consectetur adipisicing elit. Dolore, facilis.</p>

    </div>
    </div>
    </div>
    <!-- End 4th col -->
    </div>
    </div>
    
    </div>
    <!-- End Happy customer  -->
    <!-- Start contact us -->
     <div class='container' id='contactus'>
     <h3 class='text-center mb-4'>contact us</h3>
     <div class='row'>
     <!-- first column -->
     <?php  include('inc/contactus.php'); ?>
     
     <!-- end first column -->
     <!-- strat 2nd column -->
     <div class='col-md-4 text-center'>
     <strong> Headquarter</strong><br>
     Moosa Online Shop,<br>
     #332,shah jamal colony,<br>
     Lahore<br>
     Mobile: 0092-3157879139<br>
     <a href="www.moosaonlineshop.com" target='blank'>www.moosaonlineshop.com</a>
     </div>
     <!-- end 2nd column -->
     </div>
     </div>
    <!-- End contact us -->

    <!-- Start Footer -->
    <div class='container-fluid bg-primary mt-5 text-white'>
    <div class='container'>
    <div class='row py-3'>
         <!-- first column -->
    <div class='col-md-4'>
    <span class='pr-2'>Follow Us</span>
    <a href="#" target='blank' class='pr-2 fi-color'>
    <i class="fab fa-facebook-square" style='color:white; height:20px; width:20px'></i></a>
    <a href="#" target='blank' class='pr-2 fi-color'>
    <i class="fab fa-twitter" style='color:white; height:20px; width:20px'></i></a>
    <a href="#" target='blank' class='pr-2 fi-color'>
    <i class="fab fa-instagram" style='color:white; height:20px; width:20px'></i></a>
    <a href="#" target='blank' class='pr-2 fi-color'>
    <i class="fab fa-pinterest" style='color:white; height:20px; width:20px'></i></a>
    <a href="#" target='blank' class='pr-2 fi-color'>
    <i class="fab fa-youtube" style='color:white; height:20px; width:20px'></i></a>
    </div>
    <!-- end 1st column -->
    <!-- start 2nd column -->
    <div class='col-md-4'>
    <span>&copy;2020 Moosa Online Shop </span>
    </div>
    <!-- End 2nd column -->
    <div class='col-md-4'><a href="admin/adminlogin.php" style='color:white; text-decoration:none;'>Admin login</a></div>
    </div>
    </div>
    </div>
    
     <!-- End Fooeter -->

    <!-- Javascript -->
    <script src='js/jquery.js'></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>

</body>
</html>