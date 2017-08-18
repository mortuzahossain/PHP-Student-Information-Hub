<?php
# Databse Connection
	$host 		= 'localhost';
	$user		= 'root';
	$pass		= '';
	$db_name	= 'infohub';
	
	$con = mysqli_connect($host,$user,$pass,$db_name);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1 class="text-center heading">Student Information Hub</h1>

<!-- Update Data -->

<form action="" method="post">
	Student Name: <input type="text" name="name"><br>
	Father Name: <input type="text" name="fathername"><br>
	University: <input type="text" name="university"><br>
	Roll: <input type="text" name="roll"><br>
	Semister: <input type="text" name="semister"><br>
	District: <input type="text" name="district"><br>
	Contact: <input type="text" name="contact"><br>
	Blood Group: <input type="text" name="blood"><br>
	<button type="submit" name="update">Update Information</button>
</form>
<?php
	#ID form URL
	$id = $_GET['id'];
	
	if (isset($_POST['update'])) {
		$studentname		= $_POST['name'];
		$fathername			= $_POST['fathername'];
		$university 		= $_POST['university'];
		$roll 				= $_POST['roll'];
		$semister 			= $_POST['semister'];
		$district 			= $_POST['district'];
		$contact 			= $_POST['contact'];
		$blood 				= $_POST['blood'];

		# Update Query
		$update_query = "UPDATE information SET studentName= '$studentname',fatherName= '$fathername',university= '$university',roll= '$roll',semister= '$semister',district= '$district',contact= '$contact',bloodGroup= '$blood' WHERE id = $id";
		if (mysqli_query($con,$update_query)) {
			header('Location: index.php');
		} else {
			echo "Something Wrong During Inserting Data. Please try Again !!!!";
		}
	}
?>





</body>
</html>