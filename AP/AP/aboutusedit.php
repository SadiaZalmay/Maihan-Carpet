<?php 

  include 'includes/security.php';
  include 'includes/connection.php';

?>
<?php
  if (isset($_POST['submit'])) {

  	$EditHId = $_GET['EditH'];
    $url = $connection->real_escape_string($_POST['url']);
    $name = $connection->real_escape_string($_POST['name']);
    $paragraph =  $connection->real_escape_string($_POST['paragraph']);


    $Update = "UPDATE aboutsection1 SET url = '$url', name = '$name', paragraph = '$paragraph' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="Edit Successfully!";
      header("Location:aboutus.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit data";
      header("Location:aboutus.php");
    }
  }
  
    include 'includes/header.php';
	  include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
      <div class="form-group">
        <label>Youtube Link</label>
        <input type="text" name="url" class="form-control" value="<?php echo $_GET['url'] ?>">    
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
     <a href="aboutus.php" > <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input  type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>