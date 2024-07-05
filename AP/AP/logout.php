<?php
session_start();
	if (isset($_POST['Logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('Location: login.php');
	}
?>