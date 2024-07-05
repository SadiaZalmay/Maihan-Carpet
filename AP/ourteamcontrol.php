<?php

	include 'includes/security.php';
	include 'includes/connection.php';
	if (isset($_POST['submit'])) {
		$heading = $connection-> real_escape_string($_POST['heading']);
		$paragraph = $connection-> real_escape_string($_POST['paragraph']);

		$name = $connection-> real_escape_string($_POST['name']);
		$name2 =  $connection-> real_escape_string($_POST['name2']);
		$paragraph2 = $connection-> real_escape_string($_POST['paragraph2']);

		$img = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$img;
		move_uploaded_file($dirFolder, $Destination);


		$Insert = "INSERT INTO aboutsection2 (heading,paragraph,image,name,name2,paragraph2) VALUES ('$heading','$paragraph','$Destination','$name','$name2','$paragraph2')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to about section";
		 	header("Location: ourteam.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to about section';
		 	header("Location: ourteam.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM aboutsection2 WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="A data has been Successfully Deleted!";
			header("Location: ourteam.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete a data 2";
			header("Location: ourteam.php");
		}
	}
?>