<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';
	

	if (isset($_POST['submit'])) {
		$paragraph = $connection->real_escape_string($_POST['paragraph']);
    	$name = $connection->real_escape_string($_POST['name']);   

		$Insert = "INSERT INTO footerabout(paragraph,name) VALUES ('$paragraph','$name')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to footer ";
		 	header("Location: fabout.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add data';
		 	header("Location: fabout.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH']; 
		$Delete = "DELETE FROM footerabout WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="Data has been Successfully Deleted!";
			header("Location: fabout.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete data";
			header("Location: fabout.php");
		}
	}

?>