<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
	$heading = $connection->real_escape_string($_POST['heading']);
    $name = $connection->real_escape_string($_POST['name']);
		

		$Insert = "INSERT INTO footerinfo (heading,name) VALUES ('$heading','$name')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to  footer info";
		 	header("Location: footerinfo.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to  footer info';
		 	header("Location: footerinfo.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM footerinfo WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="data has been Successfully Deleted!";
			header("Location: footerinfo.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete data";
			header("Location: footerinfo.php");
		}
	}


?>