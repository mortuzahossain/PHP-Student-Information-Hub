<?php

# Database Connection
	$host 		= 'localhost';
	$user		= 'root';
	$pass		= '';
	$db_name	= 'infohub';
	
	$con = mysqli_connect($host,$user,$pass,$db_name);

# Receve the id from url sending by the <a> tag
	$id = $_GET['id'];

# Delete Query
	$delete_query = "DELETE FROM information WHERE id = $id";
	if (mysqli_query($con,$delete_query)) {
		header('Location: index.php');
	} else {
		echo "Something Wrong . Please Check delete.php";
	}


?>