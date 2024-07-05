<?php
	include 'header.php';
	include 'AP/includes/connection.php';
?>
		<?php
            $SELECT="SELECT * FROM bsection";
            $result =$connection->query($SELECT);
            $row =$result->fetch_assoc();
            	echo "<section id='home' class='video-hero' style='height: 760px; background:url(AP/$row[Img]); background-size:cover; loop:infinite; background-position: center center;background-attachment:fixed; ' data-section='home'>
					<div class='overlay'></div>
					<div class='display-t text-center'>
						<div class='display-tc'>
							<div class='container'>
								<div class='col-md-10 col-md-offset-1'>
									<div class='animate-box'>
										<h2 style='text-transformation: Uppercase'>$row[Heading]</h2>
										<p class='breadcrumbs'><span><a href='index.php'>Home</a></span> <span>$row[Heading]</span></p>
										</div>
										</div>
									</div>
								</div>
							</div>
				</section>";
		     ?>

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
			
				<div class="row row-pb-md ">
					<?php
						$Select = "SELECT * FROM hpattern WHERE name1 IN ('') ORDER BY id DESC";
						$result = $connection->query($Select);
						while($row = $result->fetch_assoc()){
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


<?php
	include 'footer.php';
	include 'scripts.php';
?>
