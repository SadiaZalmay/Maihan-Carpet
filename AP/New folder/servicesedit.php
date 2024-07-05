<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';
?>
<?php
  if (isset($_POST['submit'])) {

  	$EditHId = $_GET['EditH'];
    $Heading = $_POST['Heading'];
    $Paragraph  = $_POST['Paragraph'];
    $Paragraph1 = $_POST['Paragraph1'];
  	$img =       $_FILES['file']['name'];
  	$dirFolder = $_FILES['file']['tmp_name'];
  	$Destination = "img"."/"."Upload"."/".$img;
	move_uploaded_file($dirFolder, $Destination);

    $Update = "UPDATE services SET img = '$Destination', Heading = '$Heading', Paragraph = '$Paragraph', Paragraph1 = '$Paragraph1' WHERE Id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']=" has been Successfully Edited!";
      header("Location:services.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit ";
      header("Location:services.php");
    }
  }
    include 'includes/header.php';
  include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
     <div class="modal-body">
            <div class="form-group">
              <label>img</label>
              <input type="file" <?php echo $_GET['img']; ?> name="file" class="form-control" >          
            </div>
            <div class="form-group">
              <label>Heading</label>
              <input type="text" <?php echo $_GET['Heading']; ?> name="Heading" class="form-control" >          
            </div>
            
            <div class="form-group">
              <label>Paragraph</label>              
              <textarea cols="10" rows="6" name="Paragraph" class="form-control" placeholder="Enter Paragraph" ><?php echo $_GET['Paragraph']; ?></textarea>
         </div>
          <div class="form-group">
              <label>Paragraph1</label>              
              <textarea cols="10" rows="6" name="Paragraph1" class="form-control" placeholder="Enter Paragraph1" ><?php echo $_GET['Paragraph1']; ?></textarea>
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