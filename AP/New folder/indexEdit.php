<?php 
    
  include 'includes/security.php';
  include 'includes/connection.php';
?>
<?php
  if (isset($_POST['indexedit'])) {

  	$EditHId = $_GET['EditH'];
  	echo $EditHId;
	$Title = $_POST['Title'];
	$Paragraph = $_POST['Paragraph'];

	$Image = $_FILES['file']['name'];
	$dirFolder = $_FILES['file']['tmp_name'];
	$Destination = "img"."/"."Upload"."/".$Image;
	move_uploaded_file($dirFolder, $Destination);

    $Update = "UPDATE about SET Image = '$Destination', Title = '$Title', Paragraph = '$Paragraph' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="A User has been Successfully Edited!";
      header("Location: indexform.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit a user";
      header("Location: indexform.php");
    }
  }
	include 'includes/header.php';
	include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
      <div class="form-group">
        <label>Picture</label>
        <input type="file" name="file" class="form-control" value="<?php echo $_GET['Image'] ?> ">          
      </div>
      <div class="form-group">
        <label>Title</label>
        <input type="text" name="Title" class="form-control" placeholder="Enter Title" value="<?php echo $_GET['Title'] ?>">          
      </div>
      <div class="form-group">
        <label>Paragraph</label>
        <textarea cols="10" rows="6" name="Paragraph" class="form-control" placeholder="Enter Paragraph" ><?php echo $_GET['Paragraph'] ?></textarea>    
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <input type="submit" name="indexedit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>