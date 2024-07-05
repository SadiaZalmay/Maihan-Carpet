<?php
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		$name = $connection->real_escape_string($_POST['name']);
		$paragraph =  $connection->real_escape_string($_POST['paragraph']);
   		$url = $connection->real_escape_string($_POST['url']);


		$Insert = "INSERT INTO aboutsection1 (url,name,paragraph) VALUES ('$url','$name','$paragraph')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "New Data added successfully!";
		 	header("Location: aboutus.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! New Data can not added!';
		 	header("Location: aboutus.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM aboutsection1 WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="Successfully Deleted!";
			header("Location: aboutus.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete!";
			header("Location: aboutus.php");
		}
	}

?>