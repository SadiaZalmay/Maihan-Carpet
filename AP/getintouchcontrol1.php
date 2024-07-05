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
		 	$_SESSION['AddDataH'] = "Your message has been send successfully";
		 	header("Location: ../contact.php");
		 
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Your message has not been send successfully';
		 	header("Location:  ../contact.php");
		 
		 }
	}
	
	

?>