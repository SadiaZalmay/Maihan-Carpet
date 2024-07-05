<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';
?>

<?php
  if (isset($_POST['submit'])) {
    $EditHId = $_GET['EditH'];
     $heading = $connection->real_escape_string($_POST['heading']);
     $paragraph = $connection->real_escape_string($_POST['paragraph']);
     $number1 = $connection->real_escape_string($_POST['number1']);
     $number2 = $connection->real_escape_string($_POST['number2']);
     $email   = $connection->real_escape_string($_POST['email']);
     $location = $connection->real_escape_string($_POST['location']);

    $Update = "UPDATE footercontact SET heading ='$heading', paragraph = '$paragraph', number1 = '$number1', number2 = '$number2', email = '$email', location = '$location' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="A User has been Successfully Edited!";
      header("Location:fcontact.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit a user";
      header("Location:fcontact.php");
    }
  }
    include 'includes/header.php';
  include 'includes/navbar.php';


?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
        
      <div class="form-group">
        <label>heading</label>
        <input type="text" name="heading" class="form-control" placeholder="Enter heading" value="<?php echo $_GET['heading'] ?>">          
      </div>
      
      <div class="form-group">
        <label>paragraph</label>s
        <textarea type="text" name="paragraph" cols="10" rows="5" class="form-control" 
          ><?php echo $_GET['paragraph'] ?></textarea>
      </div>

      <div class="form-group">
        <label>number1</label>
        <input type="text" name="number1" class="form-control" value="<?php echo $_GET['number1'] ?>">          
      </div>

       <div class="form-group">
        <label>number2</label>
        <input type="text" name="number2" class="form-control" value="<?php echo $_GET['number2'] ?>">          
      </div>

      <div class="form-group">
        <label>email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $_GET['email'] ?>">          
      </div>

      <div class="form-group">
        <label>location</label>
        <input type="text" name="location" class="form-control" value="<?php echo $_GET['location'] ?>">          
      </div>
              
    </div>
    <div class="modal-footer float-left">
      <a href="fcontact.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>