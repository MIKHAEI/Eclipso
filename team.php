<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>sparkle | Team</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link href="css/team.css" rel="stylesheet" type="text/css" media="all" /> <!-- Team-CSS -->
<!-- //css files -->
<link href="//fonts.googleapis.com/css?family=Alex+Brush&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Farsan&amp;subset=gujarati,latin-ext,vietnamese" rel="stylesheet">
<style>
    body {
        background-image: url('images/bg4.jpg'); /* Ensure this path is correct */
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
	<div class="banner banner-4">
		
	<!-- Nav -->
	<?php include_once('includes/header.php');?>
	<div class="clearfix"> </div>
<!-- //banner -->
<!-- team section -->
<section class="team-agileinfo" id="team">
	<div class="container">
		<h2 class="title-w30">Our Team</h2>
		<div class="team-grid">
			<?php

$ret=mysqli_query($con,"select tblclasses.*,tblteachers.* from  tblclasses join tblteachers on tblclasses.ID=tblteachers.Classid");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
			<div class="col-lg-3 col-md-3 col-sm-3 team-w3ls" data-aos="zoom-in">
				
				<div class="view view-seventh">
					
					<img src="admin/images/<?php  echo $row['ProfilePic'];?>" alt="" width="300" height="300" class="img-responsive"/>
					<div class="mask1">
						<h4><?php  echo $row['Name'];?></h4>
						<br>
						<h5>Contact Number: <?php  echo $row['MobileNumber'];?></h5>
						<br>
						<h5 >Mail: <?php  echo $row['Email'];?></h5>
						<br>
						<h5>Class: <?php  echo $row['ClassName'];?></h5>
					</div>
					
				</div>
			<br />	
			</div>

			<?php } ?>

			<div class="clearfix"></div>
		</div>
			</div>	
</section>
<!-- //team section -->
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