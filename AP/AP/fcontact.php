<?php
// session_start();
  include 'includes/connection.php';
  include 'includes/header.php';
   include 'includes/security.php';
  include 'includes/navbar.php';
?>
  <div class="modal fade" id="addadminpanelfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add footer contact</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
         <form action="fcontactcontrol.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label>heading</label>
              <input type="text" name="heading" class="form-control">          
            </div>

            <div class="form-group">
              <label>paragraph</label>
              <textarea type="text" name="paragraph" class="form-control">  </textarea>        
            </div>

            <div class="form-group">
              <label>number1</label>
              <input type="text" name="number1" class="form-control">          
            </div>

            <div class="form-group">
              <label>number2</label>
              <input type="text" name="number2" class="form-control">          
            </div>

            <div class="form-group">
              <label>email</label>
              <input type="email" name="email" class="form-control">          
            </div>

            <div class="form-group">
              <label>location</label>
              <input type="text" name="location" class="form-control">          
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
          </div>
        </form>
      </div>
    </div>
</div>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"> Footer Contact
        <button type="button" class="btn btn-primary float-right" data-toggle="modal"  data-target="#addadminpanelfile">
          Add Data
        </button>
      </h6>
    </div>
  </div>
  <div class="card-body">
    <?php
      if (isset($_SESSION['AddDataH']) && $_SESSION['AddDataH'] !='') {
        echo "<b class='text-success'>".$_SESSION['AddDataH']."</b>";
        unset($_SESSION['AddDataH']);
      }
       if (isset($_SESSION['AddDataFailH']) && $_SESSION['AddDataFailH'] !='') {
        echo "<b class='text-danger'>".$_SESSION['AddDataFailH']."</b>";
       unset($_SESSION['AddDataFailH']);
      }
      if (isset($_SESSION['DeleteHSuccess']) && $_SESSION['DeleteHSuccess'] !='') {
        echo "<b class='text-success'>".$_SESSION['DeleteHSuccess']."</b>";
       unset($_SESSION['DeleteHSuccess']);
      }
      if (isset($_SESSION['DeleteHFail']) && $_SESSION['DeleteHFail'] !='') {
        echo "<b class='text-danger'>".$_SESSION['DeleteHFail']."</b>";
       unset($_SESSION['DeleteHFail']);
      }
       if (isset($_SESSION['EditHSuccess']) && $_SESSION['EditHSuccess'] !='') {
        echo "<b class='text-success'>".$_SESSION['EditHSuccess']."</b>";
       unset($_SESSION['EditHSuccess']);
      }
      if (isset($_SESSION['EditHFail']) && $_SESSION['EditHFail'] !='') {
        echo "<b class='text-danger'>".$_SESSION['EditHFail']."</b>";
       unset($_SESSION['EditHFail']);
      }
    ?>
    <div class="table-responsive">
      <?php
        $select = "SELECT * FROM footercontact";
        $result = $connection -> query($select);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>heading</th>
             <th>paragraph</th>
             <th>number1</th>
             <th>number2</th>
             <th>email</th>
             <th>location</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($result-> num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr> <td> $row[id] </td>".
                " <td> $row[heading] </td>".
                " <td> $row[paragraph] </td>".
                " <td> $row[number1] </td>".
                " <td> $row[number2] </td>".
                " <td> $row[email] </td>".
                " <td> $row[location] </td>".                      
                          
                "<td><a href='fcontactedit.php?EditH=$row[id]&heading=",urlencode($row['heading']),"&paragraph=",urlencode($row['paragraph']),"&number1=",urlencode($row['number1']),"&number2=",urlencode($row['number2']),"&email=",urlencode($row['email']),"&location=",urlencode($row['location']),"'><button class='btn btn-primary'>Edit</button></a></td>".
               "<td><a href='fcontactcontrol.php?deleteH=$row[id]'><button class='btn btn-danger'>Delete</button></a></td></tr>";
              }
            }
          ?>
         
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php
  include 'includes/footer.php';
  include 'includes/scripts.php';
?>