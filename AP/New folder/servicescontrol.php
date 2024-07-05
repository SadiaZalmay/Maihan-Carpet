<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		$Heading = $_POST['Heading'];
		$Paragraph = $_POST['Paragraph'];
		$Paragraph1 = $_POST['Paragraph1'];
		$img = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$img;
		move_uploaded_file($dirFolder, $Destination);

		$Insert = "INSERT INTO services (img,Heading,Paragraph,Paragraph1) VALUES ('$Destination','$Heading','$Paragraph','$Paragraph1')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to  section";
		 	header("Location: services.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to  section';
		 	header("Location: services.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM services WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="as been Successfully Deleted!";
			header("Location: services.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete ";
			header("Location: services.php");
		}
	}


?>