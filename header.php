<?php
	include 'AP/includes/connection.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Maihan Carpets</title>
		 <link rel="icon" href="AP/m.png">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta property="og:title" content=""/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content=""/>
		<meta property="og:site_name" content=""/>
		<meta property="og:description" content=""/>
		<meta name="twitter:title" content="" />
		<meta name="twitter:image" content="" />
		<meta name="twitter:url" content="" />
		<meta name="twitter:card" content="" />
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/style.css">

		<script src="js/modernizr-2.6.2.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

		</head>
		<body>
			
		<div class="colorlib-loader"></div>

		<div id="page">
			<nav class="colorlib-nav" role="navigation">
				<div class="top-menu">
					<div class="container">
						<div class="row">
							<div class="col-sm-2 col-sm-push-5 col-md-2 col-md-push-5 text-center">
								<?php
									$select="SELECT * FROM header Limit 1";
									$result=$connection->query($select);
									$row=$result->fetch_assoc();
									echo   "<div id='colorlib-logo'>
												<a href='index.php'>
													<img src='AP/$row[image]' width='100px' height='auto'>
												</a>
											</div>";							
								?>
							</div>
							<div class="col-sm-5 col-sm-pull-2 col-md-5 col-md-pull-2 text-right menu-1">
								<ul>
									<li ><a href="index.php">Home</a></li>
									<li ><a href="gallery.php">Gallery</a></li>
									<li ><a href="services.php">Services</a></li>
								</ul>
							</div>
							<div class="col-sm-5 col-md-5 text-left menu-1">
								<ul>
									<li><a href="pattern.php">Pattern</a></li>
									<li><a href="about.php">About</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>