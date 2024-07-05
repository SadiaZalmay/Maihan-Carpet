<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';

?>
<?php
 if (isset($_POST['submit'])) {

   $EditHId = $_GET['EditH'];
    $icon = $connection->real_escape_string($_POST['icon']);
    $name = $connection->real_escape_string($_POST['name']);
   $filename = $_FILES['file']['name'];

   if(empty($filename)) {
     $Update = "UPDATE footerinsta SET icon ='$icon', name = '$name' WHERE id = '$EditHId'";
      if ($connection->query($Update)) {
        $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
        header("Location:finsta.php");
      }
      else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:finsta.php");
        }
    }
    elseif(!empty($filename)){
    $Image = $_FILES['file']['name'];
    $dirFolder = $_FILES['file']['tmp_name'];
    $Destination = "img"."/"."Upload"."/".$Image;
    move_uploaded_file($dirFolder, $Destination);

    $Update = "UPDATE footerinsta SET icon ='$icon', name = '$name', image = '$Destination' WHERE id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:finsta.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:finsta.php");
        }
      }
      else{
     $Update = "UPDATE footerinsta SET icon ='$icon', name = '$name' WHERE id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:finsta.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:finsta.php");
        }
      }
  }

  include 'includes/header.php';
  include 'includes/navbar.php';


?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        <div class="form-group">
        <label>icon</label>
        <input type="text" name="icon" class="form-control" value="<?php echo $_GET['icon'] ?>">          
      </div>
      
      <div class="form-group">
        <label>name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $_GET['name'] ?>">          
      </div>
      
       <div class="form-group">
        <label>image</label>
        <input type="file" name="file" class="form-control" value=""><?php echo $_GET['image'] ?>          
      </div>
    </div>
    <div class="modal-footer float-left">
      <a href="finsta.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>