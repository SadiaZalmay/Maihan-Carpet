<?php
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
      $Firstname = $connection->real_escape_string($_POST['Firstname']);      
      $Lastname = $connection->real_escape_string($_POST['Lastname']);
      $Email = $connection->real_escape_string($_POST['Email']);
      $Subject = $connection->real_escape_string($_POST['Subject']);      
      $Message = $connection->real_escape_string($_POST['Message']);
	
		$Insert = "INSERT INTO consection1 (Firstname, Lastname, Email, Subject, Message) VALUES ('$Firstname','$Lastname','$Email','$Subject','$Message')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to contact message";
		 	header("Location: getintouch.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to contact message';
		 	header("Location: getintouch.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM consection1 WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="Data has been Successfully Deleted!";
			header("Location: getintouch.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete ";
			header("Location: getintouch.php");
		}
	}

?>