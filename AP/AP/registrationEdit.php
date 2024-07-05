<?php 
    
  include 'includes/security.php';
    $connection = new mysqli("localhost","root","","maihan") or die($connection->error);
?>

<?php
  if (isset($_POST['registrationEdit'])) {
    $EditRId = $_GET['EditR'];
    $Username = $_POST['Username'];
    $Email = $connection->real_escape_string($_POST['Email']);
    $Password = $connection->real_escape_string($_POST['Password']);
    $ConfirmPassword = $connection->real_escape_string($_POST['ConfirmPassword']);
   if ($Password === $ConfirmPassword) {
    $Update = "UPDATE registration SET Username = '$Username', Email = '$Email', Password = '$Password' WHERE id = '$EditRId'";
    if ($connection->query($Update)) {
      $_SESSION['EditRSuccess']="A User has been Successfully Edited!";
      header("Location: registration.php");
    }
  }
    else{
      $_SESSION['EditRFail']="Ooops! Can't Edit a user";
      header("Location: registration.php");
    }
  }
  include 'includes/header.php';
  include 'includes/navbar.php';
?>

         <form action="" method="post">
          <div class="modal-body">
            <div class="form-group">
              <label>UserName</label>
              <input type="text" name="Username" class="form-control" placeholder="Enter Username" value="<?php echo $_GET['Username'] ?>">          
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="Email" class="form-control" placeholder="Enter Email" value="<?php echo $_GET['Email'] ?>">          
            </div>

            </div>
          <div class="modal-footer">
            <a href="registration.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
            <input type="submit" name="registrationEdit" class="btn btn-primary" value="Save">
          </div>
        </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>