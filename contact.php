<?php
session_start();
	include 'header.php';
	include 'AP/includes/connection.php';
?>
		<?php
            $SELECT="SELECT * FROM csection";
            $result =$connection->query($SELECT);
            $row =$result->fetch_assoc();
            	echo "

            	<section id='home' class='video-hero' style='height: 800px; background:url(AP/$row[Img]); background-size:cover; loop:infinite; background-position: center center;background-attachment:fixed; ' data-section='home'>

					<div class='overlay'></div>
					<div class='display-t text-center'>
						<div class='display-tc'>
							<div class='container'>
								<div class='col-md-10 col-md-offset-1'>
									<div class='animate-box'>
										<h2>$row[Heading]</h2>
										<p class='breadcrumbs'><span><a href='index.php'>Home</a></span> <span>
												$row[Paragraph]</span></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					
				</section>";
			
		?>

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<?php
					      if (isset($_SESSION['AddDataH']) && $_SESSION['AddDataH'] !='') {
					        echo "<b class='text-success'>".$_SESSION['AddDataH']."</b>";
					        unset($_SESSION['AddDataH']);
					      }
					      if (isset($_SESSION['AddDataFailH']) && $_SESSION['AddDataFailH'] !='') {
					        echo "<b class='text-success'>".$_SESSION['AddDataFailH']."</b>";
					        unset($_SESSION['AddDataFailH']);
					      }
					?>
					<div class="col-md-4 col-md-push-8 animate-box">
						<?php
							$select = "SELECT * FROM footercontact";
							$result = $connection->query($select);
							$row = $result -> fetch_assoc();
							echo "
								<h2>$row[heading]</h2>
								<div class='row'>
									<div class='col-md-12'>
										<div class='contact-info-wrap-flex'>
											<div class='con-info'>
												<p><span><i class='icon-location-2'></i></span>$row[paragraph]</p>
											</div>
											<div class='con-info'>
												<p>
													<span><i class='icon-phone3'></i></span>$row[number1]<br>
													<span><i class='icon-phone3'></i></span>$row[number1]
												</p>
											</div>
											<div class='con-info'>
												<p>	
													<span><i class='icon-paperplane'></i></span> 
													<a href='mailto:maihan@gmail.com'>$row[email]</a>
												</p>
											</div>
											<div class='con-info'>
												<p><span><i class='icon-globe'></i></span>$row[location]</p>
											</div>
										</div>
									</div>
								</div>";
						?>
										
					</div>
					<div class="col-md-8 col-md-pull-4 animate-box">
						<h2>Get In Touch</h2>
						<form action="AP/getintouchcontrol1.php" method="post">
							<div class="row form-group">
				              <div class="col-md-6">
				                 <label>Firstname</label>
				                <input type="text" name="Firstname" class="form-control" placeholder="Your Firstname" required>
				              </div>
				              <div class="col-md-6">
				                <label>Lastname</label>
				                <input type="text" name="Lastname" class="form-control" placeholder="Your Lastname" required>
				              </div>
						    </div>
						    <div class="row form-group">
						    	<div class="col-md-6">
					                <label>Email</label>
					                <input type="Email" name="Email" class="form-control" placeholder="Your Email" required>
					            </div>
						    	<div class="col-md-6">
					                <label>Subject</label>
					                <input type="text" name="Subject" class="form-control" placeholder="Your subject of this message" required>
					            </div>
						    </div>
						    <div class="row form-group">      
				              <div class="col-md-12">
				                <label>Message</label>
				                <textarea type="text" name="Message" class="form-control" cols="10" rows="5"placeholder="Your message" required></textarea>   
				              </div>
				            </div>

							<div class="form-group">
								<input type="submit" name="submit" value="Send Message" class="btn btn-primary">
							</div>
						</form>		
					</div>
				</div>
			</div>
		</div>

<?php
	include 'footer.php';
	include 'scripts.php';



	
?>
	<!-- <div class="col-md-8 col-md-pull-4 animate-box"> -->
						<?php
							// $select = "SELECT * FROM consection1";
							// $result = $connection->query($select);
							// $row = $result -> fetch_assoc();
						// 	echo "
						// <h2>$row[Header]</h2>
						// <form action='#'>
						// 	<div class='row form-group'>
						// 		<div class='col-md-6'>
						// 			<label for='$row[Name1]'>$row[Name1]</label>
						// 			<input type='text' id='fname' class='form-control' placeholder='Your name'>
						// 		</div>
						// 		<div class='col-md-6'>
						// 		 <label for='$row[Name2]'>$row[Name2]</label>
						// 			<input type='text' id='lname' class='form-control' placeholder='Your lastname'>
						// 		</div>
						// 	</div>

						// 	<div class='row form-group'>
						// 		<div class='col-md-12'>
						// 			<label for='$row[Name3]'>$row[Name3]</label>
						// 			<input type='text' id='email' class='form-control' placeholder='Your email '>
						// 		</div>
						// 	</div>

						// 	<div class='row form-group'>
						// 		<div class='col-md-12'>
						// 			<label for='$row[Name4]'>$row[Name4]</label>
						// 			<input type='text' id='subject' class='form-control' placeholder='Your subject of this message'>
						// 		</div>
						// 	</div>

						// 	<div class='row form-group'>
						// 		<div class='col-md-12'>
						// 			<label for='$row[Name5]'>$row[Name5]</label>
						// 			<textarea name='message' id='message' cols='30' rows='10' class='form-control' placeholder='Say something about us'></textarea>";
									?>
								<!-- </div>
							</div>
							<div class="form-group">
								<input type="submit" value="Send Message" class="btn btn-primary">
							</div>
						</form>		
					</div> -->
