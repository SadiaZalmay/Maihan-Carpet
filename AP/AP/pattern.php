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
	        <h5 class="modal-title" id="exampleModalLongTitle">Add Home pattern</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	       <form action="patterncontrol.php" method="post" enctype="multipart/form-data">
	        <div class="modal-body">
	          
            <div class="form-group">
              <label>Name1</label>
              <input type="text" name="name1" class="form-control">          
            </div>
            
            <div class="form-group">
              <label>Paragraph1</label>              
              <textarea cols="10" rows="6" name="paragraph1" class="form-control" placeholder="Enter Paragraph1" ></textarea>
            </div>

              <div class="form-group">
              <label>Image</label>
              <input type="file" name="file" class="form-control">          
            </div>

            <div class="form-group">
              <label>Name2</label>
              <input type="text" name="name2" class="form-control">          
            </div>
            
            <div class="form-group">
              <label>Paragraph2</label>              
              <textarea cols="10" rows="6" name="paragraph2" class="form-control" placeholder="Enter Pattern paragraph" ></textarea>
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
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"  
                      name="search1" >
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
           Pattern Page
            <form action="code.php" method="post">
              <input  type="submit" name="multipattern" value="Delete multiple data" class="btn btn-danger float-right">
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
          $select = "SELECT * FROM hpattern WHERE id LIKE '%".$search."%' OR name1 LIKE '%". $search ."%' OR paragraph1 LIKE '%". $search ."%' OR image LIKE '%". $search ."%' OR name2 LIKE '%". $search ."%' OR paragraph2 LIKE '%". $search ."%'";
          $result = $connection -> query($select); 
        ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Check</th>
            <th>id</th>
            <th>Heading</th>
            <th>Paragraph</th>
            <th>Image</th>
            <th>Subheading</th>
            <th>Paragraph</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($result-> num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                echo "<tr> <td><input type='checkbox' value='$row[id]' name='chk[]' ></td>".
                 "<td> $row[id] </td>".
                  "<td>$row[name1]</td>".
                  "<td>$row[paragraph1]</td>".                  
                  "<td><img src='$row[image]' height='auto' width='50px'> </td>".
                  "<td>$row[name2]</td>".
                  "<td>$row[paragraph2]</td>".
                  "<td><a href='patternedit.php?EditH=$row[id]&name1=",urlencode($row['name1']),"&paragraph1=",urlencode($row['paragraph1']),"&name2=",urlencode($row['name2']),"&paragraph2=",urlencode($row['paragraph2']),"&image=",urlencode($row['image']),"' class='btn btn-primary'>Edit</a></td>".
                    "<td><a href='patterncontrol.php?deleteH=$row[id]' class='btn btn-danger'>Delete</a></td></tr>";
            }
          }
          ?>
        </tbody>
      </table>
        <?php
      }else{
        $select = "SELECT * FROM hpattern ORDER BY Id LIMIT $start, $record";
        $result = $connection -> query($select);
      ?>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Check</th>
            <th>id</th>
            <th>Heading</th>
            <th>Paragraph</th>
            <th>Image</th>
            <th>Subheading</th>
            <th>Paragraph</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if ($result-> num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                 echo "<tr> <td><input type='checkbox' value='$row[id]' name='chk[]' ></td>".
                            "<td> $row[id] </td>".
                            "<td>$row[name1]</td>".
                            "<td>$row[paragraph1]</td>".                  
                            "<td><img src='$row[image]' height='auto' width='50px'> </td>".
                            "<td>$row[name2]</td>".
                            "<td>$row[paragraph2]</td>".
                            "<td><a href='patternedit.php?EditH=$row[id]&name1=",urlencode($row['name1']),"&paragraph1=",urlencode($row['paragraph1']),"&name2=",urlencode($row['name2']),"&paragraph2=",urlencode($row['paragraph2']),"&image=",urlencode($row['image']),"' class='btn btn-primary'>Edit</a></td>".
                            "<td><a href='patterncontrol.php?deleteH=$row[id]' class='btn btn-danger'>Delete</a></td></tr>";
            }
          }
          ?>
         
        </tbody>
      </table>
    </div
    >
       <div class="center">
        <div class="pagination">
            <?php
              $page_query = "SELECT * FROM hpattern ORDER BY Id ";
              $page_result = $connection->query($page_query);
              $total_records = $page_result -> num_rows;
              $total_pages = ceil($total_records/$record);
              for ($i=1; $i <=$total_pages ; $i++) { 
            
                echo "<a href='pattern.php?page=$i'>$i</a>";               
                   
                }
              }
            ?>
          </div>
      </div>
    </div>
  </form>
    </div>
  </div>
</div>

<?php
	include 'includes/footer.php';
	include 'includes/scripts.php';
?>