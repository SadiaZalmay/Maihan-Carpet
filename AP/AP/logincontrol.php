<?php
	include 'includes/security.php';
	include 'includes/connection.php';
	
if (isset($_POST['Login'])) {
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];

	$Select = "SELECT * FROM registration WHERE  Email = '$Email' AND BINARY Password = '$Password'";
	$result = $connection->query($Select);
	if ($connection->query($Select)) {
		$fetch = $result -> fetch_assoc();
		$_SESSION['id'] = $fetch['id'];
		$_SESSION['Email'] = $fetch['Email'];
		$_SESSION['username'] = $fetch['Username'] ;
		header("Location: hsection.php");

	}else{
		
		$_SESSION['loginFail'] = "Email / Password is Invalid";
		header("Location: login.php");
	}
}
?>