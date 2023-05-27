<?php
// connect to database
$servername="localhost";
$username="lina";
$password="12345678";
$dbname="student_info"; 

$conn = mysqli_connect($servername,$username,$password,$dbname);
	
if($conn)
{
		echo " ";}

else
		{
			echo 'connection failed';
		}
?>
<html>
<head>

