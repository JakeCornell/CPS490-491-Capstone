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

		<div id="fh5co-header">
			<header id="fh5co-header-section">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
						<h1 id="fh5co-logo"><a href="login.php">Git<span>Fit</span></a></h1>
						
					</div>
				</div>
			</header>		
		</div>

		<div class="fh5co-parallax" style="background-image: url(images/home-image-3.jpg);" data-stellar-background-ratio="1.0">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
						<div class="fh5co-intro fh5co-table-cell animate-box">
							<h1 class="text-center">Commit To Be Fit</h1>
							<p>Join our talented and supportive community today!</a></p>
							 <form class="form-login" action="processLogin.php" method="POST">
								
								<label for="userID" class="sr-only">Username</label>
								<input type="text" id="userID" name="userID" class="form-control" placeholder="Email address" required autofocus>
								<label for="passID" class="sr-only">Password</label>
								<input type="password" id="passID" name="passID" class="form-control" placeholder="Password" required>
								<BR>
								<button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

	
		<!--<?php  
		/*
			if(isset($_POST["submit"])){  
			  
				if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
				    $user=$_POST['user'];  
				    $pass=$_POST['pass'];  
				  
				    $con=mysql_connect('localhost','root','') or die(mysql_error());  
				    mysql_select_db('gitfit') or die("cannot select DB");  
				  
				    $query=mysql_query("SELECT * FROM accounts WHERE username='".$user."' AND password='".$pass."'");  
				    $numrows=mysql_num_rows($query);  
				    if($numrows!=0){  
				    	while($row=mysql_fetch_assoc($query)){  
				  		  $dbusername=$row['username'];  
				   		  $dbpassword=$row['password'];  
				   		}  
				  
				    	if($user == $dbusername && $pass == $dbpassword){  
				    		session_start();  
				    		$_SESSION['sess_user']=$user;  
			
				    		 
				    		header("Location: index.php");  
				    	}  
				    } else {  
				    	echo "Invalid username or password!";  
				    }  
				  
				} else {  
				    echo "All fields are required!";  
				}  
			}  */
		?>-->  
		
	








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