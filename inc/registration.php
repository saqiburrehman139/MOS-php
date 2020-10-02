<?php
include("db.php");
if(isset($_REQUEST['rsignup'])){
// checking for empty feilds
if(($_REQUEST['rname']=='')||($_REQUEST['remail']=='')||($_REQUEST['rpass']=='')){
    $regmsg= "<div class='alert alert-warning' role='alert'>All Feilds Are Reqiured";
}else{
    // checking for email new or alreay registerd
$sql= "select email from `requester_data` where email='".$_REQUEST['remail']."'";
$result=mysqli_query($conn,$sql);
if($result->num_rows==1){
    $regmsg= "<div class='alert alert-info' role='alert'>Email Already Registerd";
}else{
// inserting data into db
$name=$_REQUEST['rname'];
$email=$_REQUEST['remail'];
$passowrd=$_REQUEST['rpass'];
$query="insert into`new_mos`.`requester_data`(name,email,password)values('$name','$email','$passowrd')";
$data=mysqli_query($conn,$query);
if($data){
    $regmsg="<div class='alert alert-success' role='alert'>Successfully Registerd";
}
else{
    $regmsg="<div class='alert alert-danger' role='alert'>Not Registerd";
}
}
}
}

?>
<div class='container pt-5' id='registration'>
    <h4 class='text-center'>Creat an acount</h4>
    <div class='row mt-4 mb-4'>
    <div class='col-md-6 offset-md-3'>
    <form action="" method='post' class='shadow-lg p-4'>
    <div class='form-group'>
    <i class='fa fa-user'></i><label for="name" class='font-weight-bold pl-2'>Name</label>
    <input type="text" name='rname' placeholder='Name'class='form-control'>
   </div>
   <div class='form-group'>
    <i class='fa fa-user'></i><label for="email" class='font-weight-bold pl-2'>Email</label>
    <input type="email" name='remail' placeholder='Email'class='form-control'>
    <small class='form-text'>We'll never share your email with anone else </small>
    </div>
    <div class='form-group'>
    <i class='fa fa-key'></i><label for="password" class='font-weight-bold pl-2'>Password</label>
    <input type="password" name='rpass' placeholder='Password'class='form-control'>
    </div>
    <button type='submit' class='btn btn-primary mt-5 btn-block shadow-sm font-weight-bold'
    name='rsignup'>Sign up</button>
    <em style='font-size:10px;'>Note - by clicking sign up, Your Agree to Our Terms,
    Data Policy and Cookie Policy.</em><?php if(isset($regmsg)){ echo"<small>$regmsg</small>";}?>
    </form>
    </div>
    </div>
    </div>