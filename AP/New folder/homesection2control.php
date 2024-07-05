<?php
// session_start();
	include 'includes/security.php';
	include 'includes/connection.php';

	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$paragraph = $_POST['paragraph'];
		$image = $_FILES['file']['name'];
		$dirFolder = $_FILES['file']['tmp_name'];
		$Destination = "img"."/"."Upload"."/".$image;
		move_uploaded_file($dirFolder, $Destination);


		$Insert = "INSERT INTO hsection2 (image,name,paragraph) VALUES ('$Destination','$name','$paragraph')";
		 if ($connection->query($Insert)) {
		 	$_SESSION['AddDataH'] = "Hurray! New Data add to Home Page";
		 	header("Location: homesection2.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot add to Home Page';
		 	header("Location: homesection2.php");
		 }
	}
	
	if (isset($_GET['deleteH'])) {
		$dHid = $_GET['deleteH'];
		$Delete = "DELETE FROM hsection2 WHERE id = '$dHid'";
		if ($connection->query($Delete)){
			$_SESSION['DeleteHSuccess']="A User has been Successfully Deleted!";
			header("Location: homesection2.php");
		}
		else{
			$_SESSION['DeleteHFail']="Ooops! Can't Delete a user 2";
			header("Location: homesection2.php");
		}
	}


	// if (isset($_POST['Login'])) {
	// 	$Email = $_POST['Email'];
	// 	$Password = $_POST['Password'];

	// 	$Select = "SELECT * FROM about WHERE  Email = '$Email' AND Password ='$Password'";
	// 	$result = $connection->query($Select) ;
	// 	$rowno = $result-> num_rows;
	// 	$fetch = $result -> fetch_assoc();
	// 	if ($rowno > 0)  {
	// 		$UserType = $fetch;
	// 		var_dump($UserType);
	// 		echo "string";
	// 		if ($UserType['UserType'] === "Admin") {
	// 			$_SESSION['username'] = $Email;
	// 			echo $_SESSION['username'];
	// 			header("Location: index.php");
	// 		}
	// 		else if ($UserType['UserType'] === "User") {
	// 			$_SESSION['username'] = $Email;
	// 			echo $_SESSION['username'];
	// 			header("Location: ../index.php");
	// 		}
	// 	}else{
	// 		$_SESSION['loginFail'] = "Email / Password is Invalid";
	// 		header("Location: login.php");
	// 	}
	// }
	
?>