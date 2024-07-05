<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		$name1 = $connection->real_escape_string($_POST['name1']);
		$paragraph1 = $connection->real_escape_string($_POST['paragraph1']);

		$name2 = $connection->real_escape_string($_POST['name2']);
		$paragraph2 = $connection->real_escape_string($_POST['paragraph2']);

		$image = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$image;
		move_uploaded_file($dirFolder, $Destination);

		$Insert = "INSERT INTO hpattern (image,name1,paragraph1,name2,paragraph2) VALUES ('$Destination','$name1','$paragraph1','$name2','$paragraph2')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "New Data added successfully";
		 	header("Location: pattern.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot added!';
		 	header("Location: pattern.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM hpattern WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="Data has been Successfully Deleted!";
			header("Location: pattern.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Deleted data!";
			header("Location: pattern.php");
		}
	}
?>