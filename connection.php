<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "guvi";


$fname = $_POST['fname'];
$lname = $_POST[ 'lname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$phonecode = $_POST['phonecode'];
$phone = $_POST['phone'];
$gen = $_POST['gen'];

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
	die ("connection failed" . $conn->connect_error);
}

	$sql = "INSERT INTO registration (fname,lname,email,pass,phonecode,phone,gen) VALUES  ('$fname', '$lname', '$email', '$pass', '$phonecode', '$phone', '$gen')";
	
	if ($conn->query($sql)==TRUE) {
	
	    header("Location: login.html");
	}
	else {
		echo "error" . $sql ."<br>". $conn->error;
	}
	$conn->close();
	
?>