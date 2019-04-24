<?php

function get_data()
{
	$connect = mysqli_connect("localhost","root","","guvi");
	$query = "SELECT * FROM registration";
	$result = mysqli_query($connect, $query);
	$employee_data = array();
	while ($row = mysqli_fetch_array($result))
	{
		$employee_data[] = array (
		'fname'  => $row["lname"],
		'lname' => $row["lname"],
		'email' => $row["email"],
		'pass' => $row["pass"],
		'phonecode' => $row["phonecode"],
		'phone' => $row["phone"],
		'gen' => $row["gen"],
		);
	}
	return json_encode($employee_data);
}
$file_name = 'json';

if(file_put_contents($file_name, get_data()))
{
	echo $file_name. '<center><h3>file created</h3></center>';
	
}
else
{
	echo "error";
}




?>



