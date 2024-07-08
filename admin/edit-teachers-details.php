<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odrsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $classid=$_POST['class'];
    $name=$_POST['name'];
   $mobnum=$_POST['mobnum'];
    $email=$_POST['email'];
    $tid=$_GET['editid'];
    $query=mysqli_query($con, "update tblteachers set Classid='$classid',Name='$name',MobileNumber='$mobnum',Email='$email' where ID='$tid'");
    if ($query) {
    	echo "<script>alert('Teacher detail has been updated.');</script>"; 
    		echo "<script>window.location.href = 'manage-teachers.php'</script>";   
   
  }
  else
    {
    echo "<script>alert('Something Went Wrong. Please try again.');</script>";  	
    }

  }

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>sparkle | Update Teachers</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		 <?php include_once('includes/sidebar.php');?>
		<!--left-fixed -navigation-->
		<!-- header-starts -->
	 <?php include_once('includes/header.php');?>
		<!-- //header-ends -->
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h3 class="title1">Update Teachers</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4>Update Teachers:</h4>
						</div>
						<div class="form-body">
							<form method="post" enctype="multipart/form-data">
								<?php
								$tid=$_GET['editid'];
$ret=mysqli_query($con,"select tblclasses.ID as cid,tblclasses.ClassName,tblteachers.Name,tblteachers.MobileNumber,tblteachers.Email, tblteachers.ID as tid,tblteachers.Classid,tblteachers.ProfilePic,tblteachers.JoiningDate from  tblclasses join tblteachers on tblclasses.ID=tblteachers.Classid where tblteachers.ID='$tid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
								<p style="font-size:16px; color:red" align="center"> 
   <div class="form-group"> <label for="exampleInputEmail1">Class</label> <select class="form-control" id="class" name="class" >
<option value="<?php  echo $row['Classid'];?>"><?php  echo $row['ClassName'];?></option>
<?php
$ret1=mysqli_query($con,"select *from  tblclasses");
$cnt=1;
while ($row1=mysqli_fetch_array($ret1)) {

?>
<option value="<?php  echo $row1['ID'];?>"><?php  echo $row1['ClassName'];?></option><?php 
$cnt=$cnt+1;
}?>
   </select> </div>
							 <div class="form-group"> <label for="exampleInputEmail1">Name</label> <input type="text" class="form-control" id="name" name="name" value="<?php  echo $row['Name'];?>" required="true"> </div> 
							 <div class="form-group"> <label for="exampleInputEmail1">Mobile Number</label> <input type="text" class="form-control" id="mobnum" name="mobnum" value="<?php  echo $row['MobileNumber'];?>" required="true" maxlength="10" pattern="[0-9]+"> </div>
							 <div class="form-group"> <label for="exampleInputPassword1">Email</label> <input type="email" id="email" name="email" class="form-control" value="<?php  echo $row['Email'];?>" required="true"> </div>
							<div class="form-group"> <label for="exampleInputPassword1">Profile Pic</label> <img src="images/<?php  echo $row['ProfilePic'];?>" width="100" height="100"> <a href="changeimage1.php?editid=<?php echo $row['tid'];?>"> &nbsp; Edit Image</a> </div>
							<div class="form-group"> <label for="exampleInputPassword1">Joining Date</label> <input type="text" class="form-control" value="<?php  echo $row['JoiningDate'];?>" readonly="true"> </div>
							<?php 
$cnt=$cnt+1;
}?>
							  <button type="submit" name="submit" class="btn btn-default">Update</button> </form> 
						</div>
						
					</div>
				
				
			</div>
		</div>
		 <?php include_once('includes/footer.php');?>
	</div>
	<!-- Classie -->
		<script src="js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>
<?php } ?>