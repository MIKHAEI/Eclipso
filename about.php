<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>sparkel | About Us</title>

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
        background-image: url('images/bg1.jpg'); /* Ensure this path is correct */
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
	<div class="banner-2">
	
		<?php include_once('includes/header.php');?>
		<div class="clearfix"> </div>
		
	<!-- about section -->
	<section class="about-w3l" id="about">
		<div class="container">

			<h2 class="title-w30">SPARKLE</h2>
			<?php

$ret=mysqli_query($con,"select * from tblpage where PageType='aboutus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<h3>Let the RHYTHM guide your steps.</h3>
				
			<p><?php  echo $row['PageDescription'];?></p>
				
			</div>
			<?php } ?>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div id="slideshow-banner">
					<ul>
						<?php

$ret=mysqli_query($con,"select * from tblclasses");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
						<li class="slideshow-item"><img src="admin/danceimg/<?php  echo $row['DanceImage'];?>" alt="" width="500" height="500" class="img-responsive"/></li>
						<?php } ?>
						
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!-- //about section -->
</div>
<?php include_once('includes/footer.php');?>

<!-- js-scripts -->			
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<!-- js for about section -->
<script type="text/javascript" src="js/jquery.slide.js"></script>
<script type="text/javascript">
$('#slideshow-banner').slide({
	cdTime : 5000,      
	controllerLeftButton : "images/left.png",   
	controllerRightButton : "images/right.png"   
});
</script>
<!-- //js for about section -->
<!-- menu -->
<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- //js-scripts -->

</body>
</html>