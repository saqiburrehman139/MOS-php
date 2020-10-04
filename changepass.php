<?php include('inc/header.php');
  if(isset($_REQUEST['update'])){
    $remail=$_REQUEST['remail'];
    $pass=$_REQUEST['rpass'];
     $query1="UPDATE `new_mos`.`requester_data` SET`pass` = '$pass' WHERE `email` = '$remail';";
     $data1=mysqli_query($conn,$query1);
  }
?>

<div class='col-sm-6 mt-4'>
        <form action="" method='get' class='mt-4'>
         <div class='form-group'>
         <label for="email">Email</label>
         <input type="email" class='form-control' value='<?php echo $result['email']; ?>' name='remail' id='remail' readonly>
         </div>
        
         <div class='form-group'>
         <label for="Password">New Password</label>
         <input type="text" class='form-control' value='<?php echo $result['pass']; ?>' name='rpass' id='rpass'>
         </div> 
         <input type="submit" value="Update" name='update' class='btn btn-primary'>
         <?php if(isset($msg)){echo $msg;}?>
        </form>
       
       </div>
<?php include('inc/footer.php');?>
