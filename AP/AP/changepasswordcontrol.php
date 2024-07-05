<?php
	include 'includes/security.php';
	include 'includes/connection.php';

	$profile = $_SESSION['username'];
	$profileid =  $_SESSION['id'];

	// if ($profile) {
	// 	header("Location: login.php");
	// }
	if (isset($_POST['change'])) {
		$OldPassword = $_POST['OldPassword'];
		$NewPassword = $_POST['NewPassword'];
		$ConfirmPassword = $_POST['ConfirmPassword'];
		$select = "SELECT Password FROM registration WHERE id = $profileid";
		$result = $connection->query($select);
		$row = $result->fetch_assoc();
			$password = $row['Password'];
			echo $password;
			if ($password === $OldPassword){
				if ($NewPassword === $ConfirmPassword) {
					$update ="UPDATE registration SET Password = '$NewPassword' WHERE id = '$profileid'";
					$connection->query($update);
					echo "<script>alert('New Password & Confirm Password does match')</script>";
						$_SESSION['changesucces'] = "Your Password is changed Successfully";
						header("Location: login.php");
				}
				else{
					echo "<script>alert('New Password & Confirm Password does not match')</script>";
					$_SESSION['changefail'] = "Your Password does not changed ";
					header("Location: login.php");
				}
			}else{
					echo "<script>alert('Old Password does not match')</script>";
					$_SESSION['changefail'] = "Your Password does not changed ";
					header("Location: login.php");
				}
		

	}