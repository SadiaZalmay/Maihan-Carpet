<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';
?>
<?php
  if (isset($_POST['submit'])) {
    $EditHId = $_GET['EditH'];
    $map = $connection-> real_escape_string($_POST['map']);
  

    $Update = "UPDATE footermap SET map = '$map' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="A location has been Successfully Edited!";
      header("Location: fmap.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit location";
      header("Location: fmap.php");
    }
  }
  include 'includes/header.php';
  include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
      
            <div class="form-group">
              <label>map</label>
               <textarea name="map" class="form-control" cols="20" rows="4">
                <?php echo $_GET['map']; ?>
              </textarea>
            </div>
            
            
    </div>
    <div class="modal-footer">
      <a href="fmap.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>