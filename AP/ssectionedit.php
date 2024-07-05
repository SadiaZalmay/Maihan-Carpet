<?php 
// session_start();
  include 'includes/security.php';
  include 'includes/connection.php';
?>
<?php
  if (isset($_POST['submit'])) {

   $EditHId = $_GET['EditH'];
   $Heading =  $connection->real_escape_string($_POST['Heading']);
   $filename = $_FILES['file']['name'];

   if(empty($filename)) {
      $Update = "UPDATE ssection SET  Heading = '$Heading' WHERE Id = '$EditHId'";
      if ($connection->query($Update)) {
        $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
        header("Location:ssection.php");
      }
      else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:ssection.php");
        }
    }
    elseif(!empty($filename)){
        $Img = $_FILES['file']['name'];
        $dirFolder = $_FILES['file']['tmp_name'];
        $Destination = "img"."/"."Upload"."/".$Img;
        move_uploaded_file($dirFolder, $Destination);
        $Update = "UPDATE ssection SET Img = '$Destination', Heading = '$Heading' WHERE Id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:ssection.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:ssection.php");
        }
      }
      else{
         $Update = "UPDATE ssection SET  Heading = '$Heading' WHERE Id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:ssection.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:ssection.php");
        }
      }
  }
    include 'includes/header.php';
    include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
     <div class="modal-body">
            <div class="form-group">
              <label>Img</label>
              <input type="file" name="file" class="form-control" >          
            </div>
            <div class="form-group">
              <label>Heading</label>
              <input type="text" name="Heading" class="form-control" value="<?php echo $_GET['Heading']; ?>">          
            </div>
            

         
      </div>
    <div class="modal-footer float-left">
     <a href="ssection.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>