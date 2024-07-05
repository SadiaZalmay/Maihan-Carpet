<?php
	include 'header.php';
	include 'AP/includes/connection.php';
?>
		<?php
            $SELECT="SELECT * FROM ssection";
            $result =$connection->query($SELECT);
            $row =$result->fetch_assoc();
            	echo "<section id='home' class='video-hero' style='height: 800px; background:url(AP/$row[Img]); background-size:cover; loop:infinite; background-position: center center;background-attachment:fixed;' data-section='home'>
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
				<div class="row box d-flex justify-content-center">
					<?php
						$Select = "SELECT * FROM hsection1 WHERE Heading NOT IN ('Services') ";
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
					// echo "<div class='col-md-4 text-center animate-box '>
					// 	<div class='services text-center ' >
					// 		<img src='AP/$row[Img]' class='card-img-top embed-responsive'>
					// 		<div class='desc' style='margin-top: 20px'>
					// 			<h3>$row[Heading]</h3>
					// 			<p style='text-align:justify;'>$row[Paragraph]</p>
					// 		</div>
					// 	</div>
					// </div>";
					// }
					?>
				</div>
			</div>
		</div>
			
	
		
<?php
	include 'footer.php';
	include 'scripts.php';
?>



	</body>
</html>
		