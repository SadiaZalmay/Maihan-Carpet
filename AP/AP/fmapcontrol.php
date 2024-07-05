<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		 $map = $connection-> real_escape_string($_POST['map']);
		

		$Insert = "INSERT INTO footermap (map) VALUES ('$map')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New location added to footer";
		 	header("Location: fmap.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to New location';
		 	header("Location: fmap.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM footermap WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="location has been Successfully Deleted!";
			header("Location: fmap.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete a location";
			header("Location: fmap.php");
		}
	}


?>