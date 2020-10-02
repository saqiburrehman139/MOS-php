<?php
session_start();
include('db.php');
if(!isset($_SESSION['is_login'])){
if(isset($_REQUEST['signin'])){
$email=mysqli_real_escape_string($conn,trim($_REQUEST['remail']));
$pass=mysqli_real_escape_string($conn,trim($_REQUEST['pass']));
$query="SELECT email, pass FROM requester_data WHERE email='".$email."' AND pass='".$pass."' limit 1";
$result=mysqli_query($conn,$query);
if($result->num_rows == 1){
    $_SESSION['is_login']= true;
    $_SESSION['email']=$email;
    $msg="<div class='alert alert-success mt-4'>Login Success</div>";
    echo"<script>location.href='profile.php'</script>";
    exit;
}
else{
    $msg="<div class='alert alert-warning mt-4'>Login Failed</div>";
}
}
else{
    echo'Register first';
}
}else{
    echo"<script>location.href='profile.php'</script>";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font awsome css -->
    <link rel="stylesheet" href="css/all.min.css">
    <title>Login</title>
</head>
<body class='bg-primary'>
<div class='mt-5 text-center'style='font-size:30px'>
<i class='fa fa-stethoscope text-light'></i>
<span class='text-light'>Moosa Online Shop</span>
</div>
<p class='text-center text-light' style='font-size:20px'>
<i class='fa fa-user-secret text-light'></i>Log in here </p>
<!-- Log in Form -->
 <div class='container-fluid'>
  <div class='row justify-content-center'>
   <div class='col-sm-6 col-md-4'>
    <form action="" method='post' class='shadow-lg p-4'>
     <div class='form-group'>
     <label for="email" class='font-weight-bold text-light'><i class='fa fa-user text-light'>
     </i> User Email</label><br>
     <input type="email" class='form-control' placeholder='Email' name='remail' >
     <small class='form-text text-light'>We'll never share youre data with anyone elase.</small>
     </div>
     <div class='form-group'>
     <label for='password'  class='font-weight-bold text-light'><i class='fa fa-key text-light'>
     </i> Password</label><br>
     <input type="password" class='form-control' placeholder='Password' name='pass' >
     </div>
     <button  type='submit' name='signin' class='btn btn-outline-light btn-block mt-4 shadow-sm'>Login</button>
    <?php if(isset($msg)){echo $msg;}?>
    </form>
    <div ><a href="index.php" style='text-decoration:none; color:white;'>Back To Home</a></div> 
   </div>
  </div>
 </div>
<!-- End Login Form -->
    <!-- Java Script -->
    <script src='js/jquery.js'></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>