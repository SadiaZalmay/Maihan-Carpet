<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';
?>
<?php
  if (isset($_POST['submit'])) {
      $EditHId = $_GET['EditH'];
      $Header = $connection->real_escape_string($_POST['Header']);
      $Firstname = $connection->real_escape_string($_POST['Firstname']);      
      $Lastname = $connection->real_escape_string($_POST['Lastname']);
      $Subject = $connection->real_escape_string($_POST['Subject']);      
      $Message = $connection->real_escape_string($_POST['Message']);

    $Update = "UPDATE consection1 SET Header = '$Header', Firstname = '$Firstname', Lastname = '$Lastname' , Subject = '$Subject', Message = '$Message' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="A data has been Successfully Edited!";
      header("Location: consection1.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit a data";
      header("Location: consection1.php");
    }
  }
	include 'includes/header.php';
	include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
      <div class="form-group">
        <label>Header</label>
        <input type="text" name="Header" class="form-control" value="<?php echo $_GET['Header'] ?>"> 
      </div>
      <div class="form-group">
        <label>Firstname</label>
        <input type="text" name="Firstname" class="form-control" value="<?php echo $_GET['Firstname'] ?>">
      </div>
      <div class="form-group">
        <label>Lastname</label>
        <input type="text" name="Lastname" class="form-control" value="<?php echo $_GET['Lastname'] ?>">
      </div>
      <div class="form-group">
        <label>Subject</label>
        <input type="text" name="Subject" class="form-control" value="<?php echo $_GET['Subject'] ?>">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea type="text" name="Message" class="form-control" cols="10" rows="5"><?php echo $_GET['Message'] ?></textarea>   
      </div>
    </div>
    <div class="modal-footer">
      <a href="consection1.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>