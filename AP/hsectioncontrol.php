<?php
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		$Heading = $connection->real_escape_string($_POST['Heading']);
		$Paragraph =  $connection->real_escape_string($_POST['Paragraph']);
		$Img = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$Img;
		move_uploaded_file($dirFolder, $Destination);

		$Insert = "INSERT INTO hsection (Img,Heading,Paragraph) VALUES ('$Destination','$Heading','$Paragraph')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data added!";
		 	header("Location: hsection.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot be added';
		 	header("Location: hsection.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM hsection WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="A User has been Successfully Deleted!";
			header("Location: hsection.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete a user 2";
			header("Location: hsection.php");
		}
	}


?>