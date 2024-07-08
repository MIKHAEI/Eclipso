<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>sparkle | Classes</title>

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
	<div class="banner banner-3">
		
	<!-- Nav -->
	<?php include_once('includes/header.php');?>
	<div class="clearfix"> </div>
	<!-- //Nav -->
<!-- //banner -->	
<!-- classes-section -->	
<div class="classes-w3l">
	<div class="container">
		<h2 class="title-w30">Our Classes</h2>
		<div class="first-class-w3l">
			<?php

$ret=mysqli_query($con,"select * from  tblclasses");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
			<div class="col-md-4 col-xs-4 col-news-top">
				<a href="#" data-toggle="modal" data-target="#myModal<?php  echo $row['ID'];?>" class="date-in">
					<img class="img-responsive mix-in" src="admin/danceimg/<?php  echo $row['DanceImage'];?>" alt="">
					<div class="month-in">
						<span class="like"><?php  echo $row['ClassName'];?></span>
					</div>
				</a>
				<div class="clearfix"> </div>
				<br/>
			</div>
			<?php } ?>

		</div>
	
	</div>
</div>
</div>
<!-- Modal-1 -->	<?php

$ret=mysqli_query($con,"select * from  tblclasses");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<div class="modal fade" id="myModal<?php  echo $row['ID'];?>" tabindex="-1" role="dialog" >

	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4><?php  echo $row['ClassName'];?></h4>
					
					<img src="admin/danceimg/<?php  echo $row['DanceImage'];?>" alt="blog-image" />
					<span><?php  echo $row['ClassDesc'];?>.</span>
					<h4>Fee: <?php  echo $row['Cost'];?></h4>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
	
</div>
<?php } ?>
<!-- //Modal-1 -->
<!-- //classes-section -->
<!-- copyright -->
<?php include_once('includes/footer.php');?>
<!-- //copyright -->

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