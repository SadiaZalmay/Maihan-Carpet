<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';
?>

<?php
  if (isset($_POST['submit'])) {
    $EditHId = $_GET['EditH'];
     $heading = $_POST['heading'];
     $paragraph = $_POST['paragraph'];
     $number1 = $_POST['number1'];
     $number2 = $_POST['number2'];
     $email= $_POST['email'];
     $location = $_POST['location'];

    $Update = "UPDATE footercontact SET heading ='$heading', paragraph = '$paragraph', number1 = '$number1', number2 = '$number2', email = '$email', location = '$location' WHERE id = '$EditHId'";
    if ($connection->query($Update)) {
      $_SESSION['EditHSuccess']="A User has been Successfully Edited!";
      header("Location:coninfo.php");
    }
    else{
      $_SESSION['EditHFail']="Ooops! Can't Edit a user";
      header("Location:coninfo.php");
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
        <input type="text" name="paragraph" class="form-control" value="<?php echo $_GET['paragraph'] ?> ">      </div>

     
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
        <input type="text" name="email" class="form-control" value="<?php echo $_GET['email'] ?>">          
      </div>

        <div class="form-group">
        <label>location</label>
        <input type="text" name="location" class="form-control" value="<?php echo $_GET['location'] ?>">          
      </div>
              
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