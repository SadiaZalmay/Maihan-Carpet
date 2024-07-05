<?php
	include 'header.php';
	include 'AP/includes/connection.php';
?>
		<?php
            $SELECT="SELECT * FROM asection";
            $result =$connection->query($SELECT);
            $row =$result->fetch_assoc();
            	echo "<section id='home' class='video-hero' style='height: 800px; background:url(AP/$row[Img]); background-size:cover;  background-position: center center;background-attachment:fixed; ' data-section='home'>

					<div class='overlay' ></div>
					<div class='display-t text-center'>
						<div class='display-tc'>
							<div class='container'>
								<div class='col-md-10 col-md-offset-1'>
									<div class='animate-box'>
										<h2 style='text-transformation: Uppercase;'>$row[Heading]</h2>
										<p class='breadcrumbs'><span><a href='index.php'>Home</a></span> <span>$row[Heading]</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
				</section>";
		?>



 		<div id="colorlib-about">
			<div class="container">
				<div class="row row-pb-lg">
					
					<?php
        			$SELECT="SELECT * FROM aboutsection1 ORDER BY id DESC LIMIT 1";
        			$result =$connection->query($SELECT);
       		    	while($row =$result->fetch_assoc()){

	            		echo 	"<div class='col-md-6 animate-box'>
	            					<div class='video colorlib-video' >
										 <iframe width='555' height='360' src='https://www.youtube.com/embed/bTDFhaP4zOw?autoplay=1'></iframe>						
									</div>
								</div>
								<div class='col-md-6 animate-box'>
									<h2>$row[name]</h2>
									<p> $row[paragraph]</p>
								</div>";
						}
					?>
				</div>
			     <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box" >
			           <?php
			        	$SELECT="SELECT heading,paragraph FROM aboutsection2 ORDER BY id Asc LIMIT 1 ";
			        	$result =$connection->query($SELECT);
			       		while($row =$result->fetch_assoc()){
				        	echo "<h2>$row[heading]</h2>
				        	      <p class='text-center'>$row[paragraph]</p>";
			        	}
			        	   ?>
					</div>
				</div>
				<div class="row">
				<?php	
					$SELECT="SELECT name,name2,paragraph2,image FROM aboutsection2 WHERE heading IN ('') ORDER BY id Asc";
			        $result =$connection->query($SELECT);
		            while($row =$result->fetch_assoc()){
		            	echo "<div class='col-md-3 text-center animate-box'>
								<div class='staff-entry'>
									<a href='#' class='staff-img' style='background-image: url(AP/$row[image]);'></a>
									<div class='desc'>
										<h3>$row[name]</h3>
										<span>$row[name2]</span>
										<p>$row[paragraph2]</p>
									</div>
								</div>
							</div>";
					}

				?>
				</div>.

				
			</div>
		</div>
				
<?php
	include 'footer.php';
	include 'scripts.php';
?>


