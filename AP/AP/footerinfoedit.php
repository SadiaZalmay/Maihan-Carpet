<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';
?>
<?php
  if (isset($_POST['submit'])) {
  	$EditHId = $_GET['EditH'];
    $heading = $connection->real_escape_string($_POST['heading']);
    $name = $connection->real_escape_string($_POST['name']);

    $Update = "UPDATE footerinfo SET  heading = '$heading', name = '$name' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="data has been Successfully Edited!";
      header("Location: footerinfo.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit data";
      header("Location: footerinfo.php");
    }
  }
	include 'includes/header.php';
	include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
       <div class="form-group">
              <label>heading</label>
              <input type="text" name="heading" value="<?php echo $_GET['heading'] ?>" class="form-control">          
            </div>
      
             <div class="form-group">
              <label>name</label>
              <input type="text" name="name" value="<?php echo $_GET['name'] ?>" class="form-control" placeholder="Enter name">          
            </div>
            
            
    </div>
    <div class="modal-footer">
      <a href="footerinfo.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>