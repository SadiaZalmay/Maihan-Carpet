<?php 

  include 'includes/security.php';
  include 'includes/connection.php';
?>
<?php
if (isset($_POST['submit'])) {

   $EditHId = $_GET['EditH'];

    $heading = $connection-> real_escape_string($_POST['heading']);
    $paragraph = $connection-> real_escape_string($_POST['paragraph']);

    $name = $connection-> real_escape_string($_POST['name']);
    $name2 =  $connection-> real_escape_string($_POST['name2']);
    $paragraph2 = $connection-> real_escape_string($_POST['paragraph2']);

   $filename = $_FILES['file']['name'];

   if(empty($filename)) {
       $Update = "UPDATE aboutsection2 SET   heading = '$heading', paragraph ='$paragraph', name ='$name',  name2 ='$name2', paragraph2 ='$paragraph2' WHERE Id = '$EditHId'";
      if ($connection->query($Update)) {
        $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
        header("Location:ourteam.php");
      }
      else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:ourteam.php");
        }
    }
    elseif(!empty($filename)){
        $Img = $_FILES['file']['name'];
        $dirFolder = $_FILES['file']['tmp_name'];
        $Destination = "img"."/"."Upload"."/".$Img;
        move_uploaded_file($dirFolder, $Destination);
       $Update = "UPDATE aboutsection2 SET   heading = '$heading', paragraph ='$paragraph',image='$Destination', name ='$name',  name2 ='$name2', paragraph2 ='$paragraph2' WHERE Id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:ourteam.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:ourteam.php");
        }
      }
      else{
               $Update = "UPDATE aboutsection2 SET   heading = '$heading', paragraph ='$paragraph',name ='$name',  name2 ='$name2', paragraph2 ='$paragraph2' WHERE Id = '$EditHId'";
        if ($connection->query($Update)) {
          $_SESSION['EditHSuccess']="Data has been Successfully Edited!";
         header("Location:ourteam.php");
        }
        else {
          $_SESSION['EditHFail']="Data has not been Edited!";
         header("Location:ourteam.php");
        }
      }
  }
  // if (isset($_POST['submit'])) {
  // 	$EditHId = $_GET['EditH'];
  //   $heading = $connection-> real_escape_string($_POST['heading']);
  //   $paragraph = $connection-> real_escape_string($_POST['paragraph']);

  //   $name = $connection-> real_escape_string($_POST['name']);
  //   $name2 =  $connection-> real_escape_string($_POST['name2']);
  //   $paragraph2 = $connection-> real_escape_string($_POST['paragraph2']);

  //   $img = $_FILES['file']['name'];
  //   $dirFolder = $_FILES['file']['tmp_name'];
  //   $Destination = "img"."/"."Upload"."/".$img;
  //   move_uploaded_file($dirFolder, $Destination);
  	

  //   $Update = "UPDATE aboutsection2 SET   heading = '$heading', paragraph ='$paragraph',image='$Destination', name ='$name',  name2 ='$name2', paragraph2 ='$paragraph2' WHERE Id = '$EditHId'";
  //   if ($connection->query($Update)) {
  //     $_SESSION['EditHSuccess']="A data has been Successfully Edited!";
  //     header("Location: ourteam.php");
  //   }
  //   else{
  //     $_SESSION['EditHFail']="Ooops! Can't Edit a data";
  //     header("Location: ourteam.php");
  //   }
  // }
    include 'includes/header.php';
    include 'includes/navbar.php';
?>

 <form action="" method="post" enctype="multipart/form-data">
     <div class="modal-body">
        <div class="form-group">
              <label>Heading</label>
              <input type="text" name="heading" class="form-control" placeholder="Enter main heading " value="<?php echo $_GET['heading']; ?>">          
            </div>
            
            <div class="form-group">
              <label>Paragraph</label>              
              <textarea cols="10" rows="6" name="paragraph" class="form-control" placeholder="Enter main paragraph"><?php echo $_GET['paragraph']; ?></textarea>
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="file" class="form-control">  <?php echo $_GET['image']; ?>       
            </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control" placeholder="Enter the name" value="<?php echo $_GET['name']; ?>">
                          </div>

            <div class="form-group">
              <label>Subtitle</label>
              <input type="text" name="name2" class="form-control" placeholder="Enter the title" value="<?php echo $_GET['name2']; ?>">          
            </div>
            
            <div class="form-group">
              <label>Paragraph 2</label>              
              <textarea cols="10" rows="6" name="paragraph2" class="form-control" placeholder="Enter paragraph 2"><?php echo $_GET['paragraph2']; ?> </textarea>
           </div>
          
      </div>
    <div class="modal-footer float-left">
      <a href="ourteam.php" > <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
      <input type="submit" name="submit" class="btn btn-primary" value="Save">
    </div>
  </form>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>