<?php

	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
      $Header = $connection->real_escape_string($_POST['Header']);
      $Firstname = $connection->real_escape_string($_POST['Firstname']);      
      $Lastname = $connection->real_escape_string($_POST['Lastname']);
      $Subject = $connection->real_escape_string($_POST['Subject']);      
      $Message = $connection->real_escape_string($_POST['Message']);
	
		$Insert = "INSERT INTO consection1 (Header,Firstname, Lastname, Subject, Message) VALUES ('$Header','$Firstname','$Lastname','$Subject','$Message')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to contact message";
		 	header("Location: consection1.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to contact message';
		 	header("Location: consection1.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM consection1 WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="A User has been Successfully Deleted!";
			header("Location: consection1.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete a user 2";
			header("Location: consection1.php");
		}
	}

?>