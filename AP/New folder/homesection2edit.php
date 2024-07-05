<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';

?>
<?php
  if (isset($_POST['submit'])) {

  	$EditHId = $_GET['EditH'];
    $name = $_POST['name'];
  $paragraph = $_POST['paragraph'];
	$image = $_FILES['file']['name'];
	$dirFolder = $_FILES['file']['tmp_name'];
	$Destination = "img"."/"."Upload"."/".$image;
	move_uploaded_file($dirFolder, $Destination);

    $Update = "UPDATE hsection2 SET image = '$Destination', name = '$name', paragraph = '$paragraph' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="A User has been Successfully Edited!";
      header("Location:homesection2.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit a user";
      header("Location:homesection2.php");
    }
  }
    include 'includes/header.php';
  include 'includes/navbar.php';


?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
      <div class="form-group">
        <label>image</label>
        <input type="file" name="image" class="form-control" value="<?php echo $_GET['image'] ?> ">          
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
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>