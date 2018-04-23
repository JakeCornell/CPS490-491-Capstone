
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GetFit</title>
	<!--<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />-->

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
        <?php include 'header.php'; ?>		
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
							<!-- -->
						</div>
                        <div class="accountInfo">
                            <?php
                            $db=mysqli_connect  ("localhost", "root",  "Goleafs18") or die ('I cannot connect to the database  because: ' . mysqli_error());
                            $mydb=mysqli_select_db($db, "get_fit");
                            $query = $_SESSION['username'];
                            if (!isset($_GET['id']))
                            {
                                echo 'No ID was given...';
                                exit;
                            } else {
                                $entID = $_GET['id'];
                            }
                            $sql = mysqli_query($db, "Delete From usergoals where entryID = '$entID';") or die (mysqli_error($db));
                            $query = htmlspecialchars($query); 
                            $query = mysqli_real_escape_string($db, $query);
                            $raw_results = mysqli_query($db, "Select * From useraccount where username = '$query';") or die (mysqli_error($db));
                            if(mysqli_num_rows($raw_results) > 0){
                                while($results = mysqli_fetch_array($raw_results)){
                                    echo "<p>".$results['email']."</p>";
                                    $id = $results['id'];
                                }
                            }
                            else{ // if there is no matching rows do following
                                echo "No results";
                            }
                            ?>
                            <h2>Fitness Profile</h2>
                            <?php
                                
                            $raw_results = mysqli_query($db, "SELECT * FROM fitnessprofile where id = $id;") or die (mysqli_error($db));   
                            if(mysqli_num_rows($raw_results) > 0){
                                while($results = mysqli_fetch_array($raw_results)){
                                    echo "<p> Weight (pounds)<p>";
                                    echo "<p>".$results['weight']."</p>";
                                    echo "<p> Height (inches)<p>";
                                    echo "<p>".$results['height']."</p>";
                                }
                            }
                            else{ // if there is no matching rows do following
                                echo "No results";
                            }
                            //get fitness profile info
                            $raw_results = mysqli_query($db, "SELECT * FROM usergoals where id = $id;") or die (mysqli_error($db));
                            echo "<p>Here are your goals</p>";
                            echo "<p>Each exercise is displayed with a goal weight, bodyweight and date</p>";
                            echo "<p>To remove a goal, simply click the corespoonding X on the side of the table</p>";
                            echo "<table>";
                            echo "<tr><td>Excercise</td><td>Weight</td><td>Bodyweight</td><td>Date</td></tr>";
                            if(mysqli_num_rows($raw_results) > 0){
                                while($results = mysqli_fetch_array($raw_results)){
                                    $exid = $results['id'];
                                    $excercise = $results['excercise'];
                                    $weight = $results['weight'];
                                    $bodyweight = $results['bodyweight'];
                                    $date = $results['date'];
                                    echo "<tr><td>".$excercise."</td><td>".$weight."</td><td>".$bodyweight."</td><td>".$date."</td>";
                                    echo "<td><a href='delete.php?id=" .$results['entryID']. "'>X</a></td></tr>";
                                }
                            }
                            else{ // if there is no matching rows do following
                                echo "No results";
                            }
                            echo "</table>";
                            ?>
                            <form method="post" action="fitnessProfile.php?go" id="goalForm">
                                <h2>New Goal Creation</h2>
                                <h3>Excercise</h3>
                                <input type="text" name="Excercise">
                                <h3>Weight</h3>
                                <input type="text" name="Weight">
                                <h3>Bodyweight</h3>
                                <input type="text" name="Bodyweight">
                                <h3>Date</h3>
                                <input type="date" name="Date">
                                <input type="submit" name="submit" value="Submit">
                            </form>
                            <?php
                            if (isset($_POST['Excercise'])){
                                $excersice = $_POST['Excercise'];
                            } else {
                                $excersice = "";
                            }
                            if (isset($_POST['Weight'])){
                                $weight = $_POST['Weight'];
                            } else {
                                $weight = "";
                            }
                            if (isset($_POST['Bodyweight'])){
                                $bodyWeight = $_POST['Bodyweight'];
                            } else {
                                $bodyWeight = "";
                            }
                            if (isset($_POST['Date'])){
                                $date = $_POST['Date'];
                            } else {
                                $date = "";
                            }
                            $db=mysqli_connect  ("localhost", "root",  "Goleafs18") or die ('I cannot connect to the database  because: ' . mysqli_error());
                            $mydb=mysqli_select_db($db, "get_fit");
                            $query = $_SESSION['username'];
                            $query = htmlspecialchars($query); 
                            $query = mysqli_real_escape_string($db, $query);
                            $raw_results = mysqli_query($db, "Select * From useraccount where username = '$query';") or die (mysqli_error($db));
                            if(mysqli_num_rows($raw_results) > 0){
                                while($results = mysqli_fetch_array($raw_results)){
                                    $id = $results['id'];
                                }
                            }
                            if ($bodyWeight != 0){
                            $sql = mysqli_query($db, "Insert Into usergoals (id, excercise, weight, bodyweight, date) Values ('$id', '$excersice','$weight','$bodyWeight','$date');") or die (mysqli_error($db));
                            }
                            ?>
                        </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'footer.php'; ?>
	

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

