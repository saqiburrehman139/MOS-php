<?php

include('inc/header.php');
include('db.php');
session_start();
if($_SESSION['is_login']){
   
}
else{
echo"<script>location.href='index.php'</script>";

}

$query= "select * from `new_mos`.`submit_request` where req_id={$_SESSION['myid']}";

$data1 =mysqli_query($conn,$query);
$result=mysqli_fetch_assoc($data1);

echo "<div class=''>
<table class='table'>
<tbody>
<tr>
<th>ID</th>
<td>".$result['req_id']."</td>
</tr>
<tr>
<th>Name</th>
<td>".$result['req_name']."</td>
</tr>
<tr>
<th>Email</th>
<td>".$result['email']."</td>
</tr>
<tr>
<th>Request Info</th>
<td>".$result['req_info']."</td>
</tr>
<tr>
<th>Description</th>
<td>".$result['req_des']."</td>
</tr>
<tr>
<td><form class='d-print-none'><input class='btn btn-primary' type='submit'
value='print' onclick='window.print()'</form></td>
</tr>
</tbody>
</table>
</div>";
?>