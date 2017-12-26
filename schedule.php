<!DOCTYPE html>
<?php session_start();
include_once('config.php');

$sql="SELECT * FROM `device`";
$query=mysql_query($sql,$dbcon);
//echo $row['status'] ;
?>

<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fitness &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <script src="library/modernizr-2.6.2.min.js"></script>
    
</head>

<body id="schedule-page">
    <div id="fh5co-wrapper">
        <div id="fh5co-page">
            <div id="fh5co-header">
                <header id="fh5co-header-section">
                    <div class="container">
                        <div class="nav-header"> <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                            <h1 id="fh5co-logo"><a href="index.html">Fit<span>ness</span></a></h1>
                            <!-- START #fh5co-menu-wrap -->
							
							


						  <nav id="fh5co-menu-wrap" role="navigation">
                                <ul class="sf-menu" id="fh5co-primary-menu">
                                       <li class="active"> <a href="classes.html" class="fh5co-sub-ddown">LOGGEDIN</a>
                                        <ul class="fh5co-sub-menu">
                                            <li><a href="#"><?php echo $_SESSION['username'] ?></a></li>
                                            <li><a href="../logout.php">LOGOUT</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
							
							
                        </div>
                    </div>
                </header>
            </div>
            <!-- end:fh5co-header -->
            <div class="fh5co-parallax sub-pages" style="background-image: url(images/home-image-5.jpg);" data-stellar-background-ratio="0.5">
                <div class="overlay"></div>
            </div>
            <!-- end: fh5co-parallax -->
            <!-- end:fh5co-hero -->
            <div id="fh5co-schedule-section" class="fh5co-lightgray-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="heading-section text-center animate-box">
                                <h2>devices</h2> </div>
                        </div>
                    </div>
                    <div class="row animate-box">
                        
                        <div class="row text-center">
                            <div class="col-md-12 schedule-container">
							<form action="valid.php" method="post>
                                <div class="schedule-content active" data-day="sunday">
														<?php while($row = mysql_fetch_assoc($query)){ ?>

                                    <div class="col-md-3 col-sm-6">
                                        <div class="program program-schedule"> <img src="images/fit-dumbell.svg" ><input hidden name='device'  value=" <?php echo $row['device'] ?>"/>
                                           <span><?php echo $row['devicename'] ?></span> <button type="submit" name="status" value=' <?php echo $row['status'] ?>' class="active" ><h3>  <?php echo $row['status'] ?></h3></button></div>
                                    </div>
														<?php } ?>
									</form>
                                </div>
                                </div>
                                <!-- END sched-content -->
                              
                                <!-- END sched-content -->
                             
                                <!-- END sched-content -->
       
    </div>
    <!-- END fh5co-wrapper -->
    <!-- jQuery -->
    <script src="library/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="library/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="library/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="library/jquery.waypoints.min.js"></script>
    <!-- Stellar -->
    <script src="library/jquery.stellar.min.js"></script>
    <!-- Superfish -->
    <script src="library/hoverIntent.js"></script>
    <script src="library/superfish.js"></script>
    <!-- Main JS (Do not remove) -->
    <script src="library/main.js"></script>
</body>

</html>