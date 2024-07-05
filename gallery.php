<?php
	include 'header.php';
	include 'AP/includes/connection.php';
?>
		<?php
            $SELECT="SELECT * FROM gsection";
            $result =$connection->query($SELECT);
            $row =$result->fetch_assoc();
            	echo "<section id='home' class='video-hero' style='height: 800px; background:url(AP/$row[Img]); background-size:cover; loop:infinite; background-position: center center;background-attachment:fixed; ' data-section='home'>

					<div class='overlay'></div>
					<div class='display-t text-center'>
						<div class='display-tc'>
							<div class='container'>
								<div class='col-md-10 col-md-offset-1'>
									<div class='animate-box'>
										<h2 style='text-transformation: uppercase'>$row[Heading]</h2>
										<p class='breadcrumbs'><span><a href='index.php'>Home</a></span> <span>$row[Heading]</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
			</section>";
		?>

		
		<div class="colorlib-gallery">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
						<?php
			                $SELECT="SELECT name,paragraph FROM gallery LIMIT 1";
			                $result =$connection->query($SELECT);
			                while($row =$result->fetch_assoc()){
			                	echo 	"<h2>$row[name]</h2>
										<p>$row[paragraph]</p>";
			                }
						?>
					</div>
			 	</div>
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
				        ?>
			 	<div class="row">
			 		
			 		<?php
					 	for ($i=1; $i <= 4; $i++) { 
					?>
					<div class="col-sm-3 col-md-3 no-gutters">
						<?php
							$Select = "SELECT image,price from gallery WHERE flag = '$i' ORDER BY id LIMIT $start, $record";
							$result = $connection->query($Select);
							while($row =$result->fetch_assoc()){
								echo"
									<a href='AP/$row[image]' class='gallery-img image-popup-link animate-box'>
										<img class='img-responsive' src='AP/$row[image]' alt=''>
										<div class='desc text-center'>
											<h2>prices</h2>
											<p class='category'><span>$row[price]</span></p>
										</div>
									</a>";   
							}
				    	?>
				    </div>
				    <?php
				 		}
				 	?>
				</div>
					<div class="center mt-4 pt-5">
						<div class="pagination">
						<!--  <a href="gallery.php?page" >&laquo;</a> -->
						<?php
						  $page_query = "SELECT * FROM gallery ORDER BY id ";
						  $page_result = $connection->query($page_query);
						  $total_records = $page_result -> num_rows;
						  $total_pages = ceil($total_records/12);
						  for ($i=1; $i <=$total_pages ; $i++) { 
						    echo "<a href='gallery.php?page=$i'>$i</a>";    
						    }
						?>
						  <!-- <a href='gallery.php'>&raquo;</a> -->
						</div>
					</div>
				</div>
			</div>
		</div>

						
	<?php
	include 'footer.php';
	include 'scripts.php';
?>
	</body>
</html> 

