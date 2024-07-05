
<?php
	include 'AP/includes/connection.php';
?>
	<div id="colorlib-instagram" >
		<div class="row">
			<div class=" col-md-12 col-md-offset-0 colorlib-heading text-center animate-box">
				<?php
					$select = "SELECT * FROM footerinsta";
					$result = $connection->query($select);
					$row = $result -> fetch_assoc();
					echo 
						"<h2><i class='$row[icon]'></i> $row[name]</h2>";
				?>
			</div>
		</div>
		<div class="row">
			<div class="instagram-entry animate-box">
				<?php
					while ($row = $result -> fetch_assoc()) {
						echo 
							"<a href='AP/$row[image]' class='instagram image-popup-link  text-center' style='background-image: url(AP/$row[image])';>
							</a>";
					}
				?>
			</div>
		</div>
	</div>
	<footer id="colorlib-footer">
		<div class="container">
			<div class="row row-pb-md" >
				<div  class=" col-sm-12 col-md-3 colorlib-widget">
					<?php
						$select = "SELECT * FROM footerabout";
						$result = $connection->query($select);
						$row = $result -> fetch_assoc();
						echo "<h4>$row[name]</h4>
							  <p>$row[paragraph]</p>";
					?>
				</div>
				<div  class="col-sm-12 col-md-2 colorlib-widget">
					<?php
						$select = "SELECT * FROM footerinfo";
						$result = $connection->query($select);
						$row = $result -> fetch_assoc();
						echo "<h4>$row[heading]</h4>";			
					?>
					<p>
						<ul class="colorlib-footer-links ">
							<?php
								while ($row = $result -> fetch_assoc()) {
									echo "<li><a href='$row[name].php'><i class='icon-check'></i>$row[name]</a></li>";
								}
							?>
						</ul>
					</p>
				</div>
				<div  class="col-sm-12 col-md-4 colorlib-widget">
					<?php
						$select = "SELECT * FROM footercontact";
						$result = $connection->query($select);
						$row = $result -> fetch_assoc();
						echo "
							<h4>$row[heading]</h4>
							<ul class='colorlib-footer-links'>
								<li>$row[paragraph]</li>
								<li><a href='tel:$row[number1]'><i class='icon-phone'></i> $row[number1]</a></li>
								<li><a href='tel:$row[number2]'><i class='icon-phone'></i> $row[number2]</a></li>
								<li><a href='$row[email]'><i class='icon-envelope'></i> $row[email]</a></li>
								<li><a href='$row[location]'><i class='icon-location4'></i> $row[location]</a></li>
							</ul>";
					?>
				</div>
				<div  class="col-sm-12 col-md-3 colorlib-widget">
	                   	<?php
							$select = "SELECT * FROM footermap";
							$result = $connection->query($select);
							$row = $result -> fetch_assoc();
							echo "<iframe width='240' height='270' id='gmap_canvas' src='$row[map]' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' ></iframe>";
						?>
	            </div>
	         </div>
	    </div>
		<div class="copy">
			<div class="container-fluid">
				<div class="row">
					<div class=" col-md-12 text-center">
						<p>
							<small class="block">
								Copyright &copy;
								<script>document.write(new Date().getFullYear());</script> 
								All rights reserved | These carpets are made with 
								<i class="icon-heart" aria-hidden="true"></i> by 
								<a href="#" target="_self">Maihan Carpet</a>
							</small><br> 
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>
<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>


	</body>
</html>