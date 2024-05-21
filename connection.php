<?php 
$host="localhost";
$user="root";
$password='';
$db_name="hostelmanagement";

$cON= mysqli_connect($host,$user,$password,$db_name);
if(mysqli_connect_error()) 
{
    die("faileD to connect with MYSQL:".mysqli_connect_error());

}
?>