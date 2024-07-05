<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';

?>
<?php
 if (isset($_POST['submit'])) {

   $EditHId = $_GET['EditH'];
  $name1 = $connection->real_escape_string($_POST['name1']);
  $paragraph1 = $connection->real_escape_string($_POST['paragraph1']);
  $name2 = $connection->real_escape_string($_POST['name2']);
  $paragraph2 = $connection->real_escape_string($_POST['paragraph2']);
   $filename = $_FILES['file']['name'];

   if(empty($filename)) {
     $Update = "UPDATE hpattern SET name1 = '$name1', paragraph1 = '$paragraph1',name2 = '$name2', paragraph2 = '$paragraph2' WHERE id = '$EditHId'";
      if ($connection->query($Update)) {
        $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
        header("Location:pattern.php");
      }
      else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:pattern.php");
        }
    }
    elseif(!empty($filename)){
       $image = $_FILES['file']['name'];
      $dirFolder = $_FILES['file']['tmp_name'];
      $Destination = "img"."/"."Upload"."/".$image;
      move_uploaded_file($dirFolder, $Destination);

      $Update = "UPDATE hpattern SET image = '$Destination', name1 = '$name1', paragraph1 = '$paragraph1',name2 = '$name2', paragraph2 = '$paragraph2' WHERE id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:pattern.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:pattern.php");
        }
      }
      else{
       $Update = "UPDATE hpattern SET name1 = '$name1', paragraph1 = '$paragraph1',name2 = '$name2', paragraph2 = '$paragraph2' WHERE id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:pattern.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:pattern.php");
        }
      }
  }

  include 'includes/header.php';
  include 'includes/navbar.php';


?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
     
      <div class="form-group">
        <label>name</label>
        <input type="text" name="name1" class="form-control" placeholder="Enter heading" value="<?php echo $_GET['name1'] ?>">          
      </div>
      <div class="form-group">
        <label>Paragraph</label>
        <textarea cols="10" rows="6" name="paragraph1" class="form-control" placeholder="Enter paragraph" ><?php echo $_GET['paragraph1'] ?></textarea>
      </div>
       <div class="form-group">
        <label>image</label>
        <input type="file" name="file" class="form-control" value="<?php echo $_GET['image'] ?> ">          
      </div>
      <div class="form-group">
        <label>name2</label>
        <input type="text" name="name2" class="form-control" placeholder="Enter name" value="<?php echo $_GET['name2'] ?>">          
      </div>
      <div class="form-group">
        <label>Paragraph2</label>
        <textarea cols="10" rows="6" name="paragraph2" class="form-control" placeholder="Enter pattern paragraph" ><?php echo $_GET['paragraph2'] ?></textarea>
      </div>
    </div>
    <div class="modal-footer float-left">
      <a href="pattern.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>