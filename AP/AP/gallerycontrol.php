<?php

	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		$name = $connection->real_escape_string($_POST['name']);
		$paragraph =  $connection->real_escape_string($_POST['paragraph']);
		$image = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$image;
		move_uploaded_file($dirFolder, $Destination);
		$price = $connection->real_escape_string($_POST['price']);
		$flag = $connection->real_escape_string($_POST['flag']);


		$Insert = "INSERT INTO gallery (name,paragraph,image,price,flag) VALUES ('$name','$paragraph','$Destination','$price','$flag')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to gallery";
		 	header("Location: gallery.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to gallery';
		 	header("Location: gallery.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM gallery WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="A User has been Successfully Deleted!";
			header("Location: gallery.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete a user 2";
			header("Location: gallery.php");
		}
	}
?>