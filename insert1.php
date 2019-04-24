<?php
include('dbconn.php');
if(isset($_POST['fname']))
{
$fname=$_POST['fname']; 
$lname=$_POST['lname']; 
$email=$_POST['email'];
$pass=$_POST['pass'];  
$phonecode=(float)$_POST['phonecode'];
$phone=(float)$_POST['phone'];
$gen=$_POST['gen']; 

$query = "INSERT INTO registration VALUES ('$fname', $lname, '$email', '$pass', '$phonecode', '$phone', '$gen')";
$res = mysqli_query($con,$query); 

}
?>
