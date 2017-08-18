<?php
# Databse Connection
	$host 		= 'localhost';
	$user		= 'root';
	$pass		= '';
	$db_name	= 'infohub';
	
	$con = mysqli_connect($host,$user,$pass,$db_name);

	# Check the database Connection
/*
	if ($con) {
		echo "Database Conneected Successfully";
	} else {
		echo "Something Wrong.... Please Check Database Connection";
	}
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title>Information Hub</title>
</head>
<body>
<!-- Heading -->
<h1 class="text-center heading">Student Information Hub</h1>

<!-- Inserting Data -->

<form action="" method="post">
	Student Name: <input type="text" name="name"><br>
	Father Name: <input type="text" name="fathername"><br>
	University: <input type="text" name="university"><br>
	Roll: <input type="text" name="roll"><br>
	Semister: <input type="text" name="semister"><br>
	District: <input type="text" name="district"><br>
	Contact: <input type="text" name="contact"><br>
	Blood Group: <input type="text" name="blood"><br>
	<button type="submit" name="add_info">Add Information</button>
</form>
<?php
	if (isset($_POST['add_info'])) {
		$studentname		= $_POST['name'];
		$fathername			= $_POST['fathername'];
		$university 		= $_POST['university'];
		$roll 				= $_POST['roll'];
		$semister 			= $_POST['semister'];
		$district 			= $_POST['district'];
		$contact 			= $_POST['contact'];
		$blood 				= $_POST['blood'];

		# Insert Query
		$insert_query = "INSERT INTO information (studentName,fatherName,university,roll,semister,district,contact,bloodGroup) VALUES ('$studentname','$fathername','$university','$roll','$semister','$district','$contact','$blood')";
		if (mysqli_query($con,$insert_query)) {
			echo "Information Inserted Successfully";
		} else {
			echo "Something Wrong During Inserting Data. Please try Again !!!!";
		}
	}
?>

<!-- Showing Data From Database -->
<h2>Showing All Infornation</h2>
<?php
	# Show Query
	$show_query = "SELECT * FROM information";
	$result = mysqli_query($con,$show_query);
	$rowcount = mysqli_num_rows($result);
	if ($rowcount>0) {
		while ($row = mysqli_fetch_assoc($result)) {
			$allinfo[] = $row;
		}
		$id = 0;
		?>
		<table>
			<tr>
				<td>#</td>
				<td>Name</td>
				<td>FatherName</td>
				<td>University</td>
				<td>Roll</td>
				<td>Semister</td>
				<td>District</td>
				<td>Contact</td>
				<td>Blood</td>
			</tr>
			<?php foreach ($allinfo as $key) { $id++; ?>
			<tr>
				<td><?php echo $id; ?></td>
				<td><?php echo $key['studentName']; ?></td>
				<td><?php echo $key['fatherName']; ?></td>
				<td><?php echo $key['university']; ?></td>
				<td><?php echo $key['roll']; ?></td>
				<td><?php echo $key['semister']; ?></td>
				<td><?php echo $key['district']; ?></td>
				<td><?php echo $key['contact']; ?></td>
				<td><?php echo $key['bloodGroup']; ?></td>
				<td><a href="delete.php?id=<?php echo $key['id']; ?>">Delete</a></td>
				<td><a href="update.php?id=<?php echo $key['id']; ?>">Update</a></td>
			</tr>
			<?php } ?>
			 <!--  For Delete Look into delete.php page -->
			 <!--  For Update Look into update.php page -->
		</table>

		<?php
	} else{
		echo "No information to show";
	}
?>


<!-- For Search -->
<h2>Showing Search Infornation</h2>
<form action="" method="post">
	<input type="text" name="search_text" placeholder="Name">
	<button type="submit" name="search">Search</button>
</form>
<?php
if(isset($_POST['search'])){
	$search_text = $_POST['search_text'];
	$search_query = "SELECT * FROM information WHERE CONCAT(' ',studentName,fatherName,university,roll,semister,district,contact,bloodGroup) LIKE '%$search_text%'";
	
	$result1 = mysqli_query($con,$search_query);
	$rowcount1 = mysqli_num_rows($result1);
	if ($rowcount1>0) {
		while ($row = mysqli_fetch_assoc($result1)) {
			$search[] = $row;
		}
		$ida = 0;
		?>
		<table>
			<tr>
				<td>#</td>
				<td>Name</td>
				<td>FatherName</td>
				<td>University</td>
				<td>Roll</td>
				<td>Semister</td>
				<td>District</td>
				<td>Contact</td>
				<td>Blood</td>
			</tr>
			<?php foreach ($search as $key) { $ida++; ?>
			<tr>
				<td><?php echo $ida; ?></td>
				<td><?php echo $key['studentName']; ?></td>
				<td><?php echo $key['fatherName']; ?></td>
				<td><?php echo $key['university']; ?></td>
				<td><?php echo $key['roll']; ?></td>
				<td><?php echo $key['semister']; ?></td>
				<td><?php echo $key['district']; ?></td>
				<td><?php echo $key['contact']; ?></td>
				<td><?php echo $key['bloodGroup']; ?></td>
			</tr>
			<?php } ?>
		</table>

		<?php
	} else{
		echo "No information to show";
	}
}
?>
</body>
</html>