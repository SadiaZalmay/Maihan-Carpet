<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';
?>
<?php
  if (isset($_POST['submit'])) {
  	$EditHId = $_GET['EditH'];
    $name = $_POST['name'];

    $Update = "UPDATE navbar SET name = '$name' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="A User has been Successfully Edited!";
      header("Location: navbar.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit a user";
      header("Location: navbar.php");
    }
  }
	include 'includes/header.php';
	include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
      
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" value="<?php echo $_GET['name'] ?>">          
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