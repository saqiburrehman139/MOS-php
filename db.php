<?php

$host='localhost';
$user='root';
$pass='';
$db  ='new_mos';
$db_port='3306';
// creat connection

$conn= new mysqli($host,$user,$pass,$db,$db_port);
// checking connection
if($conn->connect_error){
    die('Connection Failled');
}




?>