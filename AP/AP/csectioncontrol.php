<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		$Heading =  $connection->real_escape_string($_POST['Heading']);
		$Img = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$Img;
		move_uploaded_file($dirFolder, $Destination);

		$Insert = "INSERT INTO csection (Img,Heading) VALUES ('$Destination','$Heading')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to section";
		 	header("Location: csection.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to section';
		 	header("Location: csection.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM csection WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="Data has been Successfully Deleted!";
			header("Location: csection.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete data";
			header("Location: csection.php");
		}
	}


?>