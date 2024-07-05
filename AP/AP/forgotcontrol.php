<?php
	include 'includes/connection.php';
	if (isset($_POST['submit'])) {
		$email = $_POST['email'];
		$select = "SELECT * FROM registration WHERE email = '$email'";
		$result = $connection->query($select);
		$count = $result -> num_rows;
		$row= $result ->fetch_assoc();
		if ($count > 0) {
			//echo $row['Password'];



			
		}
	}


?>