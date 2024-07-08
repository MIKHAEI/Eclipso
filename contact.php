<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>sparkle | Contact Us</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<link href="//fonts.googleapis.com/css?family=Alex+Brush&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Farsan&amp;subset=gujarati,latin-ext,vietnamese" rel="stylesheet">
<style>
    body {
        background-image: url('images/bg3.jpg'); /* Ensure this path is correct */
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: center;
    }
    .banner-2 {
        background-color: rgba(0, 0, 0, 0.5); /* Optional: for dark overlay */
    }
</style>
</head>
<body> 
<!-- banner -->
	<div class="banner banner-2">
		<?php include_once('includes/header.php');?>
	
	<div class="clearfix"> </div>
	<!-- //Nav -->
<!-- //banner -->	
<!-- mail -->
<div class="mail" id="mail">
	<div class="container">
		<h4 class="title-w30">Reach Us</h4>
		<div class="agileinfo_mail_grids">
			<div class="col-md-5 contact-left-w3ls">
				<h3>Contact Info</h3>
				 <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
				<div class="visit">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Visit us</h4>
						<p><?php  echo $row['PageDescription'];?></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mail-w3">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Mail us</h4>
						<p><?php  echo $row['Email'];?></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Call us</h4>
						<p>+<?php  echo $row['MobileNumber'];?></p>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="visit">
					<div class="col-md-2 col-sm-2 col-xs-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10 contact-text-agileinf0">
						<h4>Work hours</h4>
						<p><?php  echo $row['Timing'];?></p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div><?php } ?>
			<div class="col-md-7 agileinfo_mail_grid_right">
    <video class="styled-video" width="800" height="400" autoplay loop muted>
        <source src="./images/p4.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>	
</div>
<div class="clearfix"> </div>
<style>
.styled-video {
    border: 5px solid #ccc; /* Adjust border thickness and color */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow for a 3D effect */
    max-width: 80%; /* Ensure responsiveness */
    height: auto; /* Maintain aspect ratio */
}

.agileinfo_mail_grid_right {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px; /* Add padding around the video container */
}

.clearfix {
    clear: both;
}
</style>


		</div>
	</div>
</div>
<!-- //mail -->
</div>
<?php include_once('includes/footer.php');?>

<!-- js-scripts -->			
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<!-- menu -->
<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- //js-scripts -->

</body>
</html>