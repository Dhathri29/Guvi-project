<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "guvi";


$date = $_POST['date'];
$age = $_POST[ 'age'];


$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
	die ("connection failed" . $conn->connect_error);
}

	$sql = "INSERT INTO details (date,age) VALUES  ('$date', '$age')";
	
	if ($conn->query($sql)==TRUE) {
	
	    echo "<center><h1>SUCCESSFULL</h1></center>";
	}
	else {
		echo "error" . $sql ."<br>". $conn->error;
	}
	$conn->close();