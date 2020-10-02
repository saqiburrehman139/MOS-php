<?php

include('inc/header.php');
include('db.php');
session_start();
if($_SESSION['is_login']){
   $_SESSION['email']=$remail;
   $_SESSION['myid']=$id;
}
else{
echo"<script>location.href='index.php'</script>";

}
$query= "select * from `new_mos`.`submit_request` where req_id={$_SESSION['myid']}";

$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);
echo $data['req_id'];
?>