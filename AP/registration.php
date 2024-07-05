<?php 
// session_start();
	include 'includes/header.php';
  include 'includes/security.php';
	include 'includes/navbar.php';

?>
	<!-- Modal -->
	<div class="modal fade" id="addadminpanelfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Add Admin Profile</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	       <form action="control.php" method="post">
	        <div class="modal-body">
	          <div class="form-group">
	            <label>UserName</label>
	            <input type="text" name="Username" class="form-control" placeholder="Enter Username">   
	          </div>
	          <div class="form-group">
	            <label>Email</label>
	            <input type="email" name="Email" class="form-control" placeholder="Enter Email"> 
	          </div>
	          <div class="form-group">
	            <label>Password</label>
	            <input type="password" name="Password" class="form-control" placeholder="Enter Password">
	          </div>
	          <div class="form-group">
	            <label>Confirm Password</label>
	            <input type="password" name="ConfirmPassword" class="form-control" placeholder="Enter Password">          
	          </div>
	        </div>
	        <div class="modal-footer">
	          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	          <input type="submit" name="registration" class="btn btn-primary" value="Save">
	        </div>
	      </form>
	    </div>
  	</div>
</div>

<div class="container-fluid">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"> Admin Panel
        <button type="button" class="btn btn-primary" data-toggle="modal"  data-target="#addadminpanelfile">
          Add Admin Profile
        </button>
      </h6>
    </div>
  </div>
  <div class="card-body">
    <?php
      if (isset($_SESSION['AddDataR']) && $_SESSION['AddDataR'] !='') {
        echo "<b class='text-success'>".$_SESSION['AddDataR']."</b>";
        unset($_SESSION['AddDataR']);
      }
       if (isset($_SESSION['AddDataFailR']) && $_SESSION['AddDataFailR'] !='') {
        echo "<b class='text-danger'>".$_SESSION['AddDataFailR']."</b>";
       unset($_SESSION['AddDataFailR']);
      }
      if (isset($_SESSION['DeleteRSuccess']) && $_SESSION['DeleteRSuccess'] !='') {
        echo "<b class='text-success'>".$_SESSION['DeleteRSuccess']."</b>";
       unset($_SESSION['DeleteRSuccess']);
      }
      if (isset($_SESSION['DeleteRFail']) && $_SESSION['DeleteRFail'] !='') {
        echo "<b class='text-danger'>".$_SESSION['DeleteRFail']."</b>";
       unset($_SESSION['DeleteRFail']);
      }
       if (isset($_SESSION['EditRSuccess']) && $_SESSION['EditRSuccess'] !='') {
        echo "<b class='text-success'>".$_SESSION['EditRSuccess']."</b>";
       unset($_SESSION['EditRSuccess']);
      }
      if (isset($_SESSION['EditRFail']) && $_SESSION['EditRFail'] !='') {
        echo "<b class='text-danger'>".$_SESSION['EditRFail']."</b>";
       unset($_SESSION['EditRFail']);
      }
    ?>
    <div class="table-responsive">
      <?php
        $connection = new mysqli("127.0.0.1","root","","maihan");
        $select = "SELECT * FROM registration";
        $result = $connection -> query($select);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>User Name</th>
            <th>Email</th> 
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($result-> num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr> <td> $row[id] </td>".
                          "<td> $row[Username] </td>".
                          "<td> $row[Email] </td>".
                          "<td> $row[Password] </td>".
                          "<td><a href='registrationEdit.php?EditR=$row[id]&Username=$row[Username]&Email=",urlencode($row['Email']),"&Password=",urlencode($row['Password']),"'><button class='btn btn-info'>Edit</button></a></td>".
                           "<td><a href='control.php?deleteR=$row[id]'><button class='btn btn-danger'>Delete</button></a></td></tr>";
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