<?php 
session_start();
include('db.php');
if(isset($_REQUEST['submit'])){
  //checking for empty feilds
  if(($_REQUEST['rinfo']=='')||($_REQUEST['rdes']=='') ||($_REQUEST['rname']=='')
  ||($_REQUEST['adress1']=='')||($_REQUEST['adress2']=='')||($_REQUEST['city']=='')
  ||($_REQUEST['state']=='')||($_REQUEST['zip']=='')||($_REQUEST['email1']=='')
  ||($_REQUEST['mobile']=='')||($_REQUEST['date']=='')){
    $msg='<div class="alert alert-danger col-sm-4">Fill all fields</div>';
  }
    else{
    $info= $_REQUEST['rinfo'];
    $rdes=$_REQUEST['rdes'];
    $rname=$_REQUEST['rname'];
    $adress1=$_REQUEST['adress1'];
    $adress2=$_REQUEST['adress2'];
    $city=$_REQUEST['city'];
    $state=$_REQUEST['state'];
    $zip= $_REQUEST['zip'];
    $email1=$_REQUEST['email1'];
    $mobile=$_REQUEST['mobile'];
    $date=$_REQUEST['date'];
    $query="insert into `new_mos`.`submit_request`(req_info,req_des,req_name,adress1,adress2,city,state,zip,email,mobile,date)
    values('$info','$rdes','$rname','$adress1','$adress2','$city','$state','$zip','$email1','$mobile','$date')";
    $data=mysqli_query($conn,$query);
    if($data){
      $genid=mysqli_insert_id($conn);
      $msg='<div class="alert alert-success">Submitted</div>';
      $_SESSION['myid']=$genid;
      echo"<script>location.href='success.php'</script>";
    }
    else{
      $msg='<div class="alert alert-danger">Not Submitted</div>';
    }
  }
}
?>
<?php include('inc/header.php'); ?>


<div class='col-sm-10 mt-4'>
        <form action="" method='get' class='mt-4'>
         <div class='form-group'>
         <label for="rinfo">Request info</label>
         <input type="text" class='form-control'  name='rinfo' id='rinfo'>
         </div>
         <div class='form-group'>
         <label for="rdes">Description</label>
         <input type="text" class='form-control' placeholder='Write Description' name='rdes' id='rdes'>
         </div>
         <div class='form-group'>
         <label for="Name">Name</label>
         <input type="text" class='form-control'  name='rname' id='rname' placeholder='Name'>
         </div> 
         <div class='form-row'>
          <div class='form-group col-md-6'>
          <label for="adress1">Adress</label>
         <input type="text" class='form-control'  name='adress1' id='adress1' placeholder='Adress Line 1'>
          </div>
          <div class='form-group col-md-6'>
          <label for="adress2">Adress</label>
         <input type="text" class='form-control'  name='adress2' id='adress2' placeholder='Adress Line 2'>
          </div>
         </div>
         <div class='form-row'>
          <div class='form-group col-md-6'>
          <label for="city">City</label>
          <input type="text" name='city' id='city' placeholder='City' class='form-control'>
          </div>
          <div class='form-group col-md-4'>
          <label for="state">State</label>
          <input type="text" name='state' id='state' placeholder='State' class='form-control'>
          </div>
          <div class='form-group col-md-2'>
          <label for="zip">Zip</label>
          <input type="text" name='zip' id='zip' placeholder='zip'  class='form-control' onkeypress="isInputnumber(event)">
          </div>
         </div>
         <div class='form-row'>
          <div class='col-md-6'>
           <label for="email">Email</label>
           <input type="email" name='email1' id='email' value='<?php echo $email; ?>'  class='form-control'>
          </div>
          <div class='col-md-2'>
           <label for="mobile">Mobile</label>
           <input type="text" name='mobile' id='mobile' placeholder='Mobile' class='form-control'>
          </div>
          <div class='col-md-2'>
           <label for="email">Date</label>
           <input type="date" name='date' id='date' placeholder='Date' class='form-control'>
          </div>
         </div>
         
         <input type="submit" value="Submit" id='btn1' name='submit' class='btn btn-primary mt-5'>
         <input type="reset" value="reset" name='reset' class='btn btn-secondary mt-5'>
         <?php if(isset($msg)){echo $msg;}?>
        </form>
   </div>
   <!-- only for numbers -->
   
   <?php include('inc/footer.php');?>
   
   <!-- notify js  -->
   <script src="js/notify.min.js"></script>
<script>
   function isInputnumber(evt){
     var ch = String.formCharCode(evt.which);
     if(!(/[0-9]/.test(ch))){
             evt.preventDefault();
     }
   }
   
   
   </script>

