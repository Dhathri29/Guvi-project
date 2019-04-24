<?php
include('dbconn.php');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$phonecode=$_POST['phonecode'];
$phone=$_POST['phone'];
$gen=$_POST['gen'];

if (!empty($fname) || !empty($lame) || !empty($email) || !empty($pass) || !empty($phonecode) || !empty($phone) || !empty($gen)) {
   $host = "localhost";
   $dbUsername="root";
   $dbPassword = "";
   $dbname="guvi";
   
   $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

   if(mysqli_connect_error()) {
   die('Connect Error('.mysqli_connect_error().')'.mysqli_connect_error());
} else {
	 $SELECT = "SELECT email From registration Where email= ? Limit 1";
	 $INSERT = "INSERI Into registration(fname, lname, email, pass, phonecode, phone, gen) values(?, ?, ?, ?, ? ?, ?)";
	 
	 $stmt = $conn->prepare($SELECT);
	 $stmt->bind_param("s", $email);
	 $stmt->execute();
	 $stmt->bind_result($email);
	 $stmt->store_result();
	 $rnum = $stmt->num_rows;
	 
	 if($rnum==0) {
		 $stmt-> close();
		 
		 $stmt = $conn->prepare($INSERT);
		 $stmt->bind_param("ssssiis", $fname, $lname, $email, $pass, $phonecode, $phone, $gen);
		 $stmt->ececute();
		 echo "successful";
	 }	 else {
		 echo "already registered email ";
	 }
     $stmt->close();
     $conn->close();	 
	 
	 
}
   
   
} else {
	echo "all fields are required";
	die();
}  	
	
	



?>
