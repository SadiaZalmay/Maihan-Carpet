<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';

?>
<?php
  if (isset($_POST['submit'])) {
    $EditHId = $_GET['EditH'];
    $paragraph = $connection->real_escape_string($_POST['paragraph']);
    $name = $connection->real_escape_string($_POST['name']);      
    $icon = $connection->real_escape_string($_POST['icon']);

    $Update = "UPDATE footerabout SET icon ='$icon', name = '$name', paragraph = '$paragraph' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
      header("Location:fabout.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit data";
      header("Location:fabout.php");
    }
  }
    include 'includes/header.php';
  include 'includes/navbar.php';


?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        
      <div class="form-group">
        <label>name</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $_GET['name'] ?>">          
      </div>
      
       <div class="form-group">
        <label>paragraph</label>
        <input type="text" name="paragraph" class="form-control" value="<?php echo $_GET['paragraph'] ?> ">  

        <div class="form-group">
        <label>icon</label>
        <input type="text" name="icon" class="form-control" value="<?php echo $_GET['icon'] ?>">          
      </div>
              
      </div>
    </div>
    <div class="modal-footer float-left">
      <a href="fabout.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>