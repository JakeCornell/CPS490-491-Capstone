
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GitFit</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="index.html">Get<span>Fit</span></a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<li class="active">
									<a href="index.html">Home</a>
								</li>
								<li>
									<a href="store.php" class="fh5co-sub-ddown">Store</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="left-sidebar.html">Supplements</a></li>
									 	<li><a href="right-sidebar.html">Equipment</a></li>
									</ul>
								</li>
								<li>
									<a href="schedule.html">Programs</a>
								</li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
                                <li><a href="contact.html">Account</a></li>
								<!-- <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li> -->
							</ul>
						</nav>
					</div>
				</div>
			</header>		
		</div>
		<!-- login modal -->
		<div id="loginModal" class="modal fade" role="dialog">
  			<div class="modal-dialog " role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h4 class="modal-title" id="myModalLabel">Login</h4>
		      </div>
		      <div class="modal-body">		
				<div id="page-wrapper">
		            <div class="container-fluid">
					 <form class="form-signin">
						<h2 class="form-signin-heading">Please Login</h2>
						<label for="userID" class="sr-only">Username</label>
						<input type="text" id="userID" class="form-control" placeholder="Email address" required autofocus>
						<label for="passID" class="sr-only">Password</label>
						<input type="password" id="passID" class="form-control" placeholder="Password" required>
						<BR>
						<button class="btn btn-lg btn-primary btn-block"  onClick="javascript:auth();return false;" >Login</button>
					</form>
					</div>
				</div>
			</div>
		      </div>
    </div>
		</div>
		  
		<!-- end:fh5co-header -->
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/home-image.jpg);">
				<div class="desc animate-box">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<h2>Fitness &amp; Health <br>is a <b>Mentality</b></h2>
								<p><span>Custom workout routines just for you!</span></p>
								<span><a class="btn btn-primary" href="#">Start Your Journey</a></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-4 animate-box">
							<h3 class="section-title">About Us</h3>
							<p>We are three computer science students with a passion for fitness. Our Goal with this project is to proviode our users a wealth of information about fitness as well as a one stop shop for their equipment and suplement needs. </p>
						</div>

						<div class="col-md-4 animate-box">
							<h3 class="section-title">Our Address</h3>
							<ul class="contact-info">
								<li><i class="icon-map-marker"></i>300 College Park, Dayton, OH 45469</li>
								<li><i class="icon-phone"></i>+ 1235 2355 98</li>
								<li><i class="icon-envelope"></i><a href="#">fit@getfit.com</a></li>
							</ul>
						</div>
						<div class="col-md-4 animate-box">
							<h3 class="section-title">Drop us a line</h3>
							<form class="contact-form">
								<div class="form-group">
									<label for="name" class="sr-only">Name</label>
									<input type="name" class="form-control" id="name" placeholder="Name">
								</div>
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="email" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="message" class="sr-only">Message</label>
									<textarea class="form-control" id="message" rows="7" placeholder="Message"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="btn-submit" class="btn btn-send-message btn-md" value="Send Message">
								</div>
							</form>
						</div>
					</div>
					<div class="row copy-right">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>

	</body>
</html>

