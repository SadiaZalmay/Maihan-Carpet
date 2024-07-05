<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		$Heading = $connection->real_escape_string($_POST['Heading']);
		$Paragraph =  $connection->real_escape_string($_POST['Paragraph']);

		$img = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$img;
		move_uploaded_file($dirFolder, $Destination);

		$Insert = "INSERT INTO hsection1 (img,Heading,Paragraph) VALUES ('$Destination','$Heading','$Paragraph')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to Home section";
		 	header("Location: services.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to Home section';
		 	header("Location: services.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM hsection1 WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="A Data has been Successfully Deleted!";
			header("Location: services.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete  data ";
			header("Location: services.php");
		}
	}


?>