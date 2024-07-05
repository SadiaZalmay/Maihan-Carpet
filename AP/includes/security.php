<?php 
session_start();
$connection = new mysqli("localhost","root","","maihan") or die($connection->error);
if (!isset($_SESSION['username'])) {
	header('Location: login.php');
}
?>