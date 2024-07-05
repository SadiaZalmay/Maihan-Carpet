<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';
	

	if (isset($_POST['submit'])) {
$heading = $connection->real_escape_string($_POST['heading']);
     $paragraph = $connection->real_escape_string($_POST['paragraph']);
     $number1 = $connection->real_escape_string($_POST['number1']);
     $number2 = $connection->real_escape_string($_POST['number2']);
     $email= $connection->real_escape_string($_POST['email']);
     $location = $connection->real_escape_string($_POST['location']);

		$Insert = "INSERT INTO footercontact( heading,paragraph,number1,number2,email,location) VALUES ('$heading','$paragraph','$number1','$number2','$email','$location')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to footer ";
		 	header("Location: fcontact.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add data';
		 	header("Location: fcontact.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH']; 
		$Delete = "DELETE FROM footercontact WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="data has been Successfully Deleted!";
			header("Location: fcontact.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete data 2";
			header("Location: fcontact.php");
		}
	}	
?>