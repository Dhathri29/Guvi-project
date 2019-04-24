<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("guvi");

if(isset($_REQUEST["submit"]))
{
	  $email=$_REQUEST["email"];
	  $pass=$_REQUEST["pass"];
	  $query=mysql_query("select * from registration where email='$email' && pass='$pass'");
	  $rowcount=mysql_num_rows($query);
	  if($rowcount==true)
	  {
		header("Location: details.html");
	  }
	  else
	  {
		   echo "<center>your username and password is wrong</center>";
		
	  }
}

?>