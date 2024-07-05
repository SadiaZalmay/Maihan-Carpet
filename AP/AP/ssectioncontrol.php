<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {

		$Heading = $connection->real_escape_string($_POST['Heading']);
		$Img = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$Img;
		move_uploaded_file($dirFolder, $Destination);

		$Insert = "INSERT INTO ssection (Img,Heading) VALUES ('$Destination','$Heading')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data added!";
		 	header("Location: ssection.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot be added!';
		 	header("Location: ssection.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM ssection WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="Data Successfully Deleted!";
			header("Location: ssection.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete!";
			header("Location: ssection.php");
		}
	}


?>