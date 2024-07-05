<?php
include 'includes/security.php';
include 'includes/connection.php';

       if (isset($_POST["multipattern"])) {
        $chk = $_POST["chk"];
        $a = implode(",", $chk);
        $delete = "DELETE FROM hpattern WHERE id in($a)";
        if ($connection->query($delete)) {
		 	$_SESSION['AddDataH'] = "Multiple row has been deleted successfully!";
		 	header("Location: pattern.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot delete';
			header("Location: pattern.php");
		 }

      }
       if (isset($_POST["multiservices"])) {
        $chk = $_POST["chk"];
        $a = implode(",", $chk);
        $delete = "DELETE FROM hsection1 WHERE id in($a)";
        if ($connection->query($delete)) {
		 	$_SESSION['AddDataH'] = "Multiple delete";
		 	header("Location: services.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot delete';
			header("Location: services.php");
		 }

      }
      if (isset($_POST["multigallery"])) {
        $chk = $_POST["chk"];
        $a = implode(",", $chk);
        $delete = "DELETE FROM gallery WHERE id in($a)";
        if ($connection->query($delete)) {
		 	$_SESSION['AddDataH'] = "Multiple delete";
		 	header("Location: gallery.php");
		 }
		 else{
		 	die($connection->error);
		 	$_SESSION['AddDataFailH'] = 'Ooops! Sorry! Cannot delete';
			header("Location: gallery.php");
		 }

      }
?>