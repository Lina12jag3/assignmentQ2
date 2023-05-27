<?php include ("connection.php");
	$name = $_GET['name'];

	$query="SELECT * FROM `student` WHERE  name='$name'";

$data = mysqli_query($conn, $query);

$result=mysqli_fetch_assoc($data);
?>

<html>
<head>
<title>Student information</title>

</head>
 <body bgcolor="teal">
  <h2 align=center> FILL BELOW DETAILS:</h2>
 
<style>

.student-form {
  width: 400px;
  margin: 0 auto;
}

/* Form labels */
.student-form label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

/* Form input fields */
.student-form input[type="text"],
.student-form input[type="number"],
.student-form select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

/* Form submit button */
.student-form input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.student-form input[type="submit"]:hover {
  background-color: #45a049;
}

/* Form field validation error message */
.student-form .error-message {
  color: red;
  font-size: 12px;
  margin-top: -10px;
  margin-bottom: 10px;
}

/* Success message */
.student-form .success-message {
  color: green;
  font-size: 14px;
  margin-top: -10px;
  margin-bottom: 10px;
}
</style>
<form class="student-form">
	
  <label >Name:</label>
  <input type="text"   name="name" 
  <input type="text"  value="<?php echo $result['name']; ?>"required>


  <label for="rollno">Roll Number:</label>
  <input type="text" id="rollno" name="rollno"  value="<?php echo $result['Roll_number']; ?>" required>

  <label for="department">Department:</label>
  <input type="text" id="department" name="department"  value="<?php echo $result['department']; ?>" required>

  <label for="hostel">Hostel:</label>
  <select id="hostel1" name="hostel">
    <option value="hostel1">	Hostel 1</option>

    <option value="hostel2">Hostel 2</option>
    <option value="hostel3">Hostel 3</option>
    
  <option value="hostel12">Hostel 4</option>
    <option value="hostel5">Hostel 5</option>
    <option value="hostel6">Hostel 6</option>
    <option value="hostel7">Hostel 7</option>
    <option value="hostel8">Hostel 8</option>
    <option value="hostel9">Hostel 9</option>
    <option value="hostel10">Hostel 10</option>
    <option value="hostel11">Hostel Tansa</option>
    <option value="hostel4">Hostel 11</option>
    <option value="hostel5">Hostel 12</option>
    <option value="hostel6">Hostel 13</option>
    <option value="hostel7">Hostel 14</option>
    <option value="hostel8">Hostel 15</option>
    <option value="hostel9">Hostel 16</option>
    <option value="hostel10">Hostel 17</option>
    <option value="hostel11">Hostel 18</option>
  </select>

  <input type="submit" value="update details" name="update">
</body>
</form>
</html>

<?php 

if(isset($_GET['update']))
{
	$name = $_GET['name'];
	$rn = $_GET['Roll_number'];
    $dp = $_GET['department'];
    $hs = $_GET['hostel'];

$query= "INSERT INTO student (name,Roll_number,department,hostel) VALUES('$name','$rn','$dp','$hs')";

$query = "UPDATE student SET name='$name',Roll_number='$rn',department='$dp',hostel='$hs' WHERE name='$name'";

$data=mysqli_query($conn,$query);

   if($data)
{
	 echo "record updated ";
?>
<meta http-equiv = "refresh" content = "0; url = http://localhost/php/display.php" />
<?php


}

	else

{
	echo "Failed to update";
}
}

?>
