<?php
	include 'header.php';
	include 'AP/includes/connection.php';
?>
		<?php
            $SELECT="SELECT * FROM hsection";
            $result =$connection->query($SELECT);
            $row =$result->fetch_assoc();
            	echo "

            	<section id='home' class='video-hero' style='height: 800px; background:url(AP/$row[Img]); background-size:cover; background-position: center center;background-attachment:fixed; ' data-section='home'>
					<div class='overlay'></div>
					<div class='display-t text-center'>
						<div class='display-tc'>
							<div class='container'>
								<div class='col-md-10 col-md-offset-1'>
									<div class='animate-box'>
										<h2>$row[Heading]</h2>
										<p><a href='gallery.php' class='btn btn-primary btn-custom'>$row[Paragraph]</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>";
			
		?>
		 <div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class='col-md-8 col-md-offset-2 text-center colorlib-heading animate-box'>				
						<?php
							$Select = "SELECT Heading, Paragraph FROM hsection1 LIMIT 1";
							$result = $connection->query($Select);
							while($row =$result->fetch_assoc()){
								echo
										"<h2>$row[Heading]</h2>
										<p>$row[Paragraph]</p>";
							}
						?>
					</div>
				</div>
				<?php
					$Select = "SELECT * FROM hsection1 LIMIT 1,3 ";
					$result = $connection->query($Select);
					while($row =$result->fetch_assoc()){
						echo "<div class='col-md-4 animate-box' >
								<article class='article-entry'>
									<a href='pattern.php' class='blog-img' style='background-image: url(AP/$row[Img]);'></a>
									<div class='desc'>
										<h3>$row[Heading]</h3>
										<p >$row[Paragraph]</p>
										
									</div>
								</article>
							</div>";
						}
				?>
			</div>
		</div> 
		
		<?php
			$Select = "SELECT * FROM hsection2 LIMIT 1";
			$result = $connection->query($Select);
			$row =$result->fetch_assoc();
				echo "<div class='colorlib-about-flex'>
						<div class='col-half about-flex-img animate-box' style='background-image: url(AP/$row[image]);'></div>
						<div class='col-half'>
							<div class='row'>
								<div class='col-md-12 col-md-pull-2 animate-box'>
									<div class='about-desc'>
										<h2>$row[name]</h2>
										<p> $row[paragraph]</p>
									</div>
								</div>
							</div>
						</div>
					</div>";
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
			 	<div class="row">
				 	<?php
				 	for ($i=1; $i <= 4; $i++) { 
				 		?>

						<div class="col-sm-3 col-md-3 no-gutters">
							<?php
								$Select = "SELECT * from gallery WHERE flag = '$i' LIMIT 3";
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
			</div>
		</div>

		<div class="colorlib-blog">
			<div class="container">
				<div class="row ">
					<div class='col-md-8 col-md-offset-2 text-center colorlib-heading animate-box'>				
						<?php
							$Select = "SELECT * FROM hpattern LIMIT 1";
							$result = $connection->query($Select);
							while($row =$result->fetch_assoc()){
								echo
									"<h2>$row[name1]</h2>
									<p>$row[paragraph1]</p>";
							}
							
						?>
					</div>
				</div>
			
				<div class="row  box">
					<?php
						$Select = "SELECT * FROM hpattern WHERE name1 IN ('') LIMIT 1, 3";
						$result = $connection->query($Select);
						while($row =$result->fetch_assoc()){
						echo "<div class='col-md-4 animate-box' >
								<article class='article-entry'>
									<a href='pattern.php' class='blog-img' style='background-image: url(AP/$row[image]);'></a>
									<div class='desc'>
										<h2><a href='pattern.html'>$row[name2]</a></h2>
										<p>$row[paragraph2]</p>
									</div>
								</article>
							</div>";
						}
					?> 						
				</div>
			 </div>
		 </div>
	</div>
			
<?php
	include 'footer.php';
	include 'scripts.php';
?>
