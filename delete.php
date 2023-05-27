<?php
include("connection.php");
	$name = $_GET['name'];
$query= "DELETE FROM student WHERE name='$name'";
$data=mysqli_query($conn,$query);
if ($data)
{
	echo "record deleted";
}
else
{
	echo " failed to delete";
}
?>