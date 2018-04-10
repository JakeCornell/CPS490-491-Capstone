<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GetFit &mdash; Programs </title>
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
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
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
                                        <button class="btn btn-lg btn-primary btn-block" onClick="javascript:auth();return false;">Login</button>
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
                            <p>

                                <body>
                                    <h3>Search  Programs</h3>
                                    <p>You may search by either name</p>
                                    <form method="post" action="programs.php?go" id="searchform">
                                        <input type="text" name="query">
                                        <input type="submit" name="submit" value="Search">
                                    </form>
                                    <div class=result-wrapper>
                                        <?php
                                        $prog_name = false;
                                        if(isset($_POST['submit'])){
                                            if(isset($_GET['go'])){
                                                if(isset($_POST['query'])){
                                                    $query=$_POST['query'];
                                                    if(preg_match("/^[  a-zA-Z]+/", $_POST['query'])){
                                                    //echo $prog_name;
                                                    //connect  to the database
                                                    $db=mysqli_connect  ("localhost", "root",  "Goleafs18") or die ('I cannot connect to the database  because: ' . mysqli_error());
                                                    //-select  the database to use
                                                    //session_start();
                                                    $mydb=mysqli_select_db($db, "get_fit");
                                                    $min_length = 3;
                                                    //-query the database table
                                                    if(strlen($query) >= $min_length){
                                                    $query = htmlspecialchars($query); 
                                                    // changes characters used in html to their equivalents, for example: < to &gt;

                                                    $query = mysqli_real_escape_string($db, $query);
                                                    // makes sure nobody uses SQL injection

                                                    //$raw_results = mysqli_query($db, "SELECT * FROM programs 
                                                    //$raw_results = mysqli_query($db, "SELECT * FROM programs 
                                                    //INNER JOIN tags ON programs.prog_id = tags.program_id AND tags.tag LIKE '%".$query."%';") or die(mysql_error());
                                                    $raw_results = mysqli_query($db, "SELECT * FROM programs WHERE MATCH(tags) AGAINST('%".$query."%')
                                                    ORDER BY MATCH(tags) AGAINST('%".$query."%') DESC;") or die(mysqli_error());
                                                    //$raw_results = mysqli_query($db, "SELECT * FROM programs INNER JOIN tags ON programs.prog_id = tags.program_id
                                                    //,MATCH(tags) AGAINST(+$query*) AS 'relevance' FROM tags WHERE MATCH(tag) AGAINST('+$query*' IN BOOLEAN MODE)
                                                    //ORDER BY relevance DESC'") or die(mysqli_error());
                                                    //$sql = "SELECT *,MATCH(tags) AGAINST(+$string*) AS `relevance` FROM `cds` WHERE MATCH(tags) AGAINST('+$string*' IN BOOLEAN MODE) ORDER BY relevance DESC;";
                                                    if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following

                                                        while($results = mysqli_fetch_array($raw_results)){
                                                        // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop

                                                        echo "<div class=search-result><h3>".$results['prog_name']."</h3>";
                                                        echo "<h4>".$results['description']."</h4>";
                                                        echo "<h4>".$results['link']."</h4></div>";
                                                        // posts results gotten from database(title and text) you can also show id ($results['id'])
                                                        }

                                                    }
                                                    else{ // if there is no matching rows do following
                                                        echo "No results";
                                                    }

                                                }
                                                else{ // if query length is less than minimum
                                                    echo "Minimum length is ".$min_length;
                                                }
                                            }
                                        }
                                    }
                                    }
                                    ?>
                                    </div>
                                </body>
                            </p>
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