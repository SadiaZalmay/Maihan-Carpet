<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';

?>
<?php
  if (isset($_POST['submit'])) {

     $EditHId = $_GET['EditH'];
     $name =  $connection->real_escape_string($_POST['name']);
     $paragraph =  $connection->real_escape_string($_POST['paragraph']);
     $filename = $_FILES['file']['name'];

     if(empty($filename)) {
      $Update = "UPDATE hsection2 SET name = '$name', paragraph = '$paragraph' WHERE id = '$EditHId'";
      if ($connection->query($Update)) {
        $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
        header("Location:habout.php");
      }
      else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:habout.php");
        }
    }
    elseif(!empty($filename)){
        $image = $_FILES['file']['name'];
        $dirFolder = $_FILES['file']['tmp_name'];
        $Destination = "img"."/"."Upload"."/".$image;
        move_uploaded_file($dirFolder, $Destination);
        $Update = "UPDATE hsection2 SET  name = '$name', paragraph = '$paragraph',image = '$Destination' WHERE id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:habout.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:habout.php");
        }
      }
      else{
         $Update = "UPDATE hsection2 SET  name = '$name', paragraph = '$paragraph' WHERE id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:habout.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:habout.php");
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
        <input type="file" name="file" class="form-control" value="<?php echo $_GET['image'] ?> ">          
      </div>
      <div class="form-group">
        <label>name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $_GET['name'] ?>">          
      </div>
      <div class="form-group">
        <label>Paragraph</label>
        <textarea cols="10" rows="6" name="paragraph" class="form-control" placeholder="Enter paragraph" ><?php echo $_GET['paragraph'] ?></textarea>    
      </div>
    </div>
    <div class="modal-footer float-left">
      <a href="habout.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>