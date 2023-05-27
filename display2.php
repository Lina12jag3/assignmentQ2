<html lang="en">
<head>
	
	<title>student mangement system</title>
	<style>
	#header{
			height: 10%;
			width:100% ;
			top:2;
			background-color:black;
			position: fixed;
			color: white;}

	.update, .delete{
   background-color: green;
		color: white;
		border: 0;
		outline: none;
		border-radius: 5px;
		width:60px;
		cursor: pointer;
	}		
	.delete
	{
		background-color:red;}
		
		</style>
		<?php 
	
  include("connection.php");
  $name= $_GET['name'];

	$query="SELECT * FROM student WHERE name='$name'";
$data = mysqli_query($conn, $query);
$total =mysqli_num_rows($data);		
$result=mysqli_fetch_assoc($data);

?>
	</head>
	<body bgcolor="95B9C7">
		<div id="header">
		<center><h2>Student Management System</h2></center>
		
	</div><<br><br>
	<div id="topleft_side">
 <form action="" method='GET'>
 <table align ="topleft">

 <tr>
<td>
 <input type="submit"  name="search student"  value ="search student">
</td>
</tr>


</table>
</form>
</div>
<div id ="right_side" ><br><br>
	<div id="demo">
		<?php
	if(isset($_GET['search_student']))
	{
		?>
		<center>
			<form action ="display.php" method="GET">
				Enter Name:
				<input type ="text" name ="name">
				<input type="submit" name="search_by_name_for_search" value="search">
			</form>
		</center>
	
		<?php
}
	
		if (isset($_GET['search']))
		{
			$roll=$_GET['name'];
	$query = "SELECT * FROM student WHERE 'name'=$name";
$query_run = mysqli_query($conn, $query);
$new_data = mysqli_fetch_assoc($query_run);
    mysqli_free_result($query_run);
}

		
</div>
</div>

<table border ="1" width = "600" height= "60" cell spacing = "5" align= "center">

<tr bgcolor ="BDB76B">
		<th>Student name</th>
		
<th> Roll number</th>
<th>Department</th>
<th>Hostel</th>
<th>operation</th> 
</tr>




<?php
include( "connection.php");

$query="SELECT * FROM `student`";
$data = mysqli_query($conn, $query);
$total =mysqli_num_rows($data);
$result=mysqli_fetch_assoc($data);



if($total!=0)
{
	

	
	while($result=mysqli_fetch_assoc($data))
	//echo "table has records";
		
{
		echo"
	<tr bgcolor ='FFFFE0' >
	<td>".$result['name']."</td>
	<td>".$result['Roll_number']."</td>
<td>".$result['department']."</td>
<td>".$result[ 'hostel']."</td> 
<td>
<a href='update.php?name=$result[name]'
><input type='submit' value='update' class ='update'</a>
<a href='delete.php?name=$result[name]'><input type='submit' value='delete' class ='delete'</a>
</td> </tr>";

}
}
else
{
	echo "no records found";
}

?>

</table>

</body>
</html>