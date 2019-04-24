<?php
$server ="localhost";
$username="";
$password="";
$db ="guvi";
$con = mysqli_connect($server,$username,$password,$db);
if(!$con)
{
  echo "not connected";
  }
else
{
echo "connected...";
}
?>

