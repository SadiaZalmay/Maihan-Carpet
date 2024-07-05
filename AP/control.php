<?php
	include 'includes/security.php';
	include 'includes/connection.php';
	
	if (isset($_POST['registration'])) {
		$Username = $_POST['Username'];
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];
		$ConfirmPassword = $_POST['ConfirmPassword'];
		$UserType = $_POST['UserType'];
		if ($Password === $ConfirmPassword) {
			$Insert = "INSERT INTO registration (Username, Email, Password) VALUES ('$Username','$Email','$Password')";
			 if ($connection->query($Insert)) {
			 	$_SESSION['AddDataR'] = "Hurray! New Register to Admin Panel";
			 	header("Location: registration.php");
			 }
			 else{
			 	$_SESSION['AddDataFailR'] = 'Ooops! Sorry! Cannot Register to Admin Panel 1';
			 	header("Location: registration.php");
			 }
		}
		 else{
			 	$_SESSION['AddDataFailR'] = 'Ooops! Password doesnot match';
			 	header("Location: registration.php");
			 }
	}
	if (isset($_GET['deleteR'])) {
		$dRid = $_GET['deleteR'];
		$Delete = "DELETE FROM registration WHERE id = '$dRid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteRSuccess']="A User has been Successfully Deleted!";
			header("Location: registration.php");
		}
		else{
			$_SESSION['DeleteRFail']="Ooops! Can't Delete a user 2";
			header("Location: registration.php");
		}
	}

	
	
?>
