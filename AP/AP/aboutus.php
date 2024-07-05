<?php
	include 'includes/connection.php';
	include 'includes/header.php';
 	include 'includes/security.php';
	include 'includes/navbar.php';
?>
	<div class="modal fade" id="addadminpanelfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Add blog section 1 </h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	       <form action="aboutuscontrol.php" method="post" enctype="multipart/form-data">
	        <div class="modal-body">
	          <div class="form-group">
	            <label>Youtube</label>
	            <input type="text" name="url" class="form-control">          
	          </div>
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" class="form-control">          
            </div>
            
            <div class="form-group">
              <label>Paragraph</label>              
              <textarea cols="10" rows="6" name="paragraph" class="form-control" placeholder="Enter Paragraph" ></textarea>
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
      <div class="row">
        <div class="col-6">
         <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="" method="post">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"  name="search1">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="search">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
     
        <div class="col-6 ">
          <h6 class="m-0 font-weight-bold text-primary ">    
           About Page
            <button type="button" class="btn btn-primary float-right" data-toggle="modal"  data-target="#addadminpanelfile">
              Add Data
            </button>
          </h6>
        </div>
      </div>
    </div>
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

        if (isset($_POST['search'])) {
          $search = preg_replace("#[^0-9a-z]#i","", $_POST['search1']);
          $select = "SELECT * FROM aboutsection1 WHERE name LIKE '%". $search ."%' OR paragraph LIKE '%". $search ."%'";
          $result = $connection -> query($select); 
         
         ?>

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>URL</th>
            <th>Name</th>
            <th>Paragraph</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($result-> num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr> <td> $row[id] </td>".
                          "<td>$row[url]</td>".
                          "<td>$row[name]</td>".
                          "<td>$row[paragraph]</td>".
                          "<td><a href='aboutusedit.php?EditH=$row[id]&url=",urlencode($row['url']),"&name=",urlencode($row['name']),"&paragraph=",urlencode($row['paragraph']),"'><button class='btn btn-primary'>Edit</button></a></td>".
                           "<td><a href='aboutuscontrol.php?deleteH=$row[id]'><button class='btn btn-danger'>Delete</button></a></td></tr>";
              }
            }
         
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?php
        }
        else{
        $select = "SELECT * FROM aboutsection1 ORDER BY Id LIMIT $start, $record";
        $result = $connection -> query($select);
        ?>
       
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>id</th>
            <th>Youtube URL</th>
            <th>Name</th>
            <th>Paragraph</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($result-> num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
               echo "<tr> <td> $row[id] </td>".
                          "<td>$row[url]</td>".
                          "<td>$row[name]</td>".
                          "<td>$row[paragraph]</td>".
                          "<td><a href='aboutusedit.php?EditH=$row[id]&url=",urlencode($row['url']),"&name=",urlencode($row['name']),"&paragraph=",urlencode($row['paragraph']),"'><button class='btn btn-primary'>Edit</button></a></td>".
                           "<td><a href='aboutuscontrol.php?deleteH=$row[id]'><button class='btn btn-danger'>Delete</button></a></td></tr>";
              }
            }
          
          ?>
        </tbody>
      </table>
       <div class="center">
        <div class="pagination">
       <!--    <a href="#" onclick="window.history.go(-1); return false;" >&laquo;</a> -->
            <?php
              $page_query = "SELECT * FROM aboutsection1 ORDER BY Id ";
              $page_result = $connection->query($page_query);
              $total_records = $page_result -> num_rows;
              $total_pages = ceil($total_records/$record);
              for ($i=1; $i <=$total_pages ; $i++) { 
            
                echo "<a href='aboutus.php?page=$i'>$i</a>";               
                    $GLOBALS["i"];
                }
              }
                  ?>
              <!-- <a href='aboutus.php' >&raquo;</a> -->
              
          </div>
      </div>
    </div>
  </div>
</div>

<?php
	include 'includes/footer.php';
	include 'includes/scripts.php';
?>