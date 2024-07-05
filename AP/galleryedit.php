<?php 
// session_start();
include 'includes/security.php';
  include 'includes/connection.php';

?>
<?php
if (isset($_POST['submit'])) {

   $EditHId = $_GET['EditH'];
    $name = $connection->real_escape_string($_POST['name']);
    $paragraph =  $connection->real_escape_string($_POST['paragraph']);

    $price = $connection->real_escape_string($_POST['price']);
    $flag = $connection->real_escape_string($_POST['flag']);

    $filename = $_FILES['file']['name'];

   if(empty($filename)) {
     $Update = "UPDATE gallery SET  name = '$name', paragraph = '$paragraph',price = '$price',flag = '$flag' WHERE id = '$EditHId'";
      if ($connection->query($Update)) {
        $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
        header("Location:gallery.php");
      }
      else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:gallery.php");
        }
    }
    elseif(!empty($filename)){
    $image = $_FILES['file']['name'];
    $dirFolder = $_FILES['file']['tmp_name'];
    $Destination = "img"."/"."Upload"."/".$image;
    move_uploaded_file($dirFolder, $Destination);
         $Update = "UPDATE gallery SET  name = '$name', paragraph = '$paragraph',image = '$Destination',price = '$price',flag = '$flag' WHERE id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:gallery.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:gallery.php");
        }
      }
      else{
         $Update = "UPDATE gallery SET  Heading = '$Heading' WHERE Id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:gallery.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:gallery.php");
        }
      }
  }
  // if (isset($_POST['submit'])) {
  // 	$EditHId = $_GET['EditH'];
  //   $name = $connection->real_escape_string($_POST['name']);
  //   $paragraph =  $connection->real_escape_string($_POST['paragraph']);
  //   $image = $_FILES['file']['name'];
  //   $dirFolder = $_FILES['file']['tmp_name'];
  //   $Destination = "img"."/"."Upload"."/".$image;
  //   move_uploaded_file($dirFolder, $Destination);
  //   $price = $connection->real_escape_string($_POST['price']);
  //   $flag = $connection->real_escape_string($_POST['flag']);

  //   $Update = "UPDATE gallery SET  name = '$name', paragraph = '$paragraph',image = '$Destination',price = '$price',flag = '$flag' WHERE id = '$EditHId'";
  //   if ($connection->query($Update)) {
  //     $_SESSION['EditHSuccess']="data has been Successfully Edited!";
  //     header("Location:gallery.php");
  //   }
  //   else{
  //     $_SESSION['EditHFail']="Ooops! Can't Edit data";
  //     header("Location:gallery.php");
  //   }
  // }
    include 'includes/header.php';
    include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-body">
     
      <div class="form-group">
        <label>Heading</label>
        <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $_GET['name'] ?>">          
      </div>
      <div class="form-group">
        <label>Paragraph</label>
        <textarea cols="10" rows="6" name="paragraph" class="form-control" placeholder="Enter paragraph" ><?php echo $_GET['paragraph'] ?></textarea>
      </div>
       <div class="form-group">
        <label>Image</label>
        <input type="file" name="file" class="form-control" value=""><?php echo $_GET['image'] ?>          
      </div>
       <div class="form-group">
        <label>Price</label>
        <input type="text" name="price" class="form-control" placeholder="Enter price" value="<?php echo $_GET['price'] ?>">          
      </div>
       <div class="form-group">
          <label>Flag</label>
          <input type="number" name="flag"  class="form-control" value="<?php echo $_GET['flag'] ?>">          
       </div>
    </div>
    <div class="modal-footer float-left">
      <a href="gallery.php"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>