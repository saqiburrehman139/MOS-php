<?php include('inc/header.php');?>
<div class='col-sm-6 mt-4'>
        <form action="" method='get' class='mt-4'>
         <div class='form-group'>
         <label for="email">Email</label>
         <input type="email" class='form-control' value='<?php echo $result['email']; ?>' name='remail' id='remail' readonly>
         </div>
         <div class='form-group'>
         <label for="Name">Name</label>
         <input type="text" class='form-control' value='<?php echo $result['rname']; ?>' name='rname' id='rname'>
         </div>
         <div class='form-group'>
         <label for="Password">Password</label>
         <input type="password" class='form-control' value='<?php echo $result['pass']; ?>' name='pass' id='rpass'>
         </div> 
         <input type="submit" value="Update" name='update' class='btn btn-primary'>
         <?php if(isset($msg)){echo $msg;}?>
        </form>
       
       </div>
<?php include('inc/footer.php');?>