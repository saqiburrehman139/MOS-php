<?php
define('TITLE','Dashboard');
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
    echo"<script>location.href='adminlogin.php'</script>";
}
?>
   <!-- Start sidebar -->
   <?php include('inc/header.php'); ?>
   <!-- End Sidebar -->
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
    
    <!-- Start Footer -->
    <!-- Java script -->
    <?php include('inc/footer.php'); ?>
    <!-- End Footer -->