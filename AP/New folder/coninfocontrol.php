<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';
	

	if (isset($_POST['submit'])) {
		$heading=$_POST['heading'];
	    $paragraph=$_POST['paragraph'];
		$number1=$_POST['number1'];
		$number2=$_POST['number2'];
		$email=$_POST['email'];
		$location=$_POST['location'];

		$Insert = "INSERT INTO footercontact( heading,paragraph,number1,number2,email,location) VALUES ('$heading','$paragraph','$number1','$number2','$email','$location')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to footer ";
		 	header("Location: coninfo.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add data';
		 	header("Location: coninfo.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH']; 
		$Delete = "DELETE FROM footercontact WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="A User has been Successfully Deleted!";
			header("Location: coninfo.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete a user 2";
			header("Location: coninfo.php");
		}
	}

?>