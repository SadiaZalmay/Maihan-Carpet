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
	        <h5 class="modal-title" id="exampleModalLongTitle">Add blog section </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	       <form action="psectioncontrol.php" method="post" enctype="multipart/form-data">
	        <div class="modal-body">
	          <div class="form-group">
	            <label>Img</label>
	            <input type="file" name="file" class="form-control">          
	          </div>
            <div class="form-group">
              <label>Heading</label>
              <input type="text" name="Heading" class="form-control">          
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
      <h6 class="m-0 font-weight-bold text-primary">  Pattern Section
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
        $record = 3;
        $page = '';
        if (isset($_GET["page"])) {
          $page = $_GET["page"];
        }
        else{
           $page =1;
        }
        $start = ($page-1)*$record;

        $select = "SELECT * FROM bsection ORDER BY Id LIMIT $start, $record";
        $result = $connection -> query($select);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>Img</th>
            <th>Heading</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($result-> num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr> <td> $row[Id] </td>".
                          "<td><img src='$row[Img]' height='auto' width='50px'> </td>".
                          "<td>$row[Heading]</td>".
                          "<td><a href='psectionedit.php?EditH=$row[Id]&Img=$row[Img]&Heading=$row[Heading]'><button class='btn btn-primary'>Edit</button></a></td>".
                           "<td><a href='psectioncontrol.php?deleteH=$row[Id]'><button class='btn btn-danger'>Delete</button></a></td></tr>";
              }
            }
          ?>
         
        </tbody>
      </table>
       <div class="center">
        <div class="pagination">
         <!--  <a href="#" onclick="window.history.go(-1); return false;" >&laquo;</a> -->
            <?php
              $page_query = "SELECT * FROM bsection ORDER BY Id ";
              $page_result = $connection->query($page_query);
              $total_records = $page_result -> num_rows;
              $total_pages = ceil($total_records/$record);
              for ($i=1; $i <=$total_pages ; $i++) { 
            
                echo "<a href='psection.php?page=$i'>$i</a>";               
                   
                }
            ?>
              <!-- <a href='services.php'>&raquo;</a> -->
          </div>
      </div>
    </div>
  </div>
</div>

<?php
	include 'includes/footer.php';
	include 'includes/scripts.php';
?>