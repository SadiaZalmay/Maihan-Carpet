<?php 
// session_start();
  include 'includes/security.php';
  include 'includes/connection.php';
?>
<?php
  if (isset($_POST['submit'])) {

   $EditHId = $_GET['EditH'];
   $filename = $_FILES['image']['name'];

   if(empty($filename)) {
      $Update = "UPDATE header SET id = '$EditHId' WHERE id = '$EditHId'";
      if ($connection->query($Update)) {
        $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
        header("Location:header.php");
      }
      else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:header.php");
        }
    }
    elseif(!empty($filename)){
        $Img = $_FILES['image']['name'];
        $dirFolder = $_FILES['image']['tmp_name'];
        $Destination = "img"."/"."Upload"."/".$Img;
        move_uploaded_file($dirFolder, $Destination);
        $Update = "UPDATE header SET image = '$Destination' WHERE id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:header.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:header.php");
        }
      }
      else{
         $Update = "UPDATE header SET Id = '$EditHId' WHERE id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:header.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:header.php");
        }
      }
  }
 

	include 'includes/header.php';
	include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
     
       <div class="form-group">
        <label>image</label>
        <input type="file" name="image" class="form-control" value=" "> <?php echo $_GET['image'] ?>    
      </div>
    </div>
    <div class="modal-footer float-left">
      <a href="header.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>