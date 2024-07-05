<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';
	if (isset($_POST['submit'])){
		$image = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$image;
		move_uploaded_file($dirFolder, $Destination);

		$Insert = "INSERT INTO header (image) VALUES ('$Destination')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to Header";
		 	header("Location: header.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to Header';
		 	header("Location: header.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM header WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="Data has been Successfully Deleted!";
			header("Location: header.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete data";
			header("Location: header.php");
		}
	}

?>