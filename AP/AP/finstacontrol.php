<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		$icon = $connection->real_escape_string($_POST['icon']);
		$name = $connection->real_escape_string($_POST['name']);

		$Image = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$Image;
		move_uploaded_file($dirFolder, $Destination);

		$Insert = "INSERT INTO footerinsta (image,icon,name) VALUES ('$Destination','$icon','$name')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to footer ";
		 	header("Location: finsta.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add data';
		 	header("Location: finsta.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH']; 
		$Delete = "DELETE FROM footerinsta WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="Data has been Successfully Deleted!";
			header("Location: finsta.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete data";
			header("Location: finsta.php");
		}
	}

	
?>