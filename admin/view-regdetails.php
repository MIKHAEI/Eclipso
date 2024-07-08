<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
    if (strlen($_SESSION['odrsaid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $remark=$_POST['remark'];
      $status=$_POST['status'];
     
    
     
   $query=mysqli_query($con, "update  tblregistration set Remark='$remark',Status='$status' where ID='$cid'");
    if ($query) {
    
     echo '<script>alert("Registration request has been updated.")</script>';
     echo "<script>window.location.href ='all-registration.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }

  
}
  

  ?>
<!DOCTYPE HTML>
<html>
<head>
<title>ODRS || View Registration</title>

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
				<div class="tables">
					<h3 class="title1">View Registration</h3>
					
					
				
					<div class="table-responsive bs-example widget-shadow">
						
						<h4>View Registration:</h4>
						<?php
$cid=$_GET['viewid'];
$ret=mysqli_query($con,"select tblregistration.ID, tblregistration.RegistrationNumber,tblregistration.ClassID as rcid,tblregistration.Name,tblregistration.TelephoneNumber,tblregistration.Email as remail,tblregistration.Gender,tblregistration.Message,tblregistration.RegDate,tblregistration.Status,tblregistration.Remark,tblregistration.UpdationDate,tblclasses.ClassName,tblclasses.ClassDesc,tblclasses.Cost,tblclasses.DanceImage 
  from tblregistration join tblclasses on tblclasses.ID=tblregistration.ClassID where tblregistration.ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
						<table class="table table-bordered">
							<tr align="center">
                  
<td colspan="4" style="font-size:20px;color:blue">
 Registration Number: <?php  echo $row['RegistrationNumber'];;?></td></tr>
                  <tr>
  <tr>
<th>Name</th>
    <td><?php  echo $row['Name'];?></td>
    <th>Email</th>
    <td><?php  echo $row['remail'];?></td>
  </tr>

   <tr>
    <th>Mobile Number</th>
    <td><?php  echo $row['TelephoneNumber'];?></td>
     <th>Gender</th>
    <td><?php  echo $row['Gender'];?></td>
  </tr>
  
<tr>
    <th>Class Name</th>
    <td><?php  echo $row['ClassName'];?></td>
     <th>Message</th>
    <td><?php  echo $row['Message'];?></td>
  </tr>
<tr>
    <th>Status</th>
    <td > <?php  
if($row['Status']=="Selected")
{
  echo "Selected";
}

if($row['Status']=="Rejected")
{
  echo "Rejected";
}
if($row['Status']=="")
{
  echo "Not Updated Yet";
}

     ;?></td>
     <th>Registration Date</th>
    <td><?php  echo $row['UpdationDate'];?></td>
  </tr>
						</table>
   <table class="table table-bordered">
     <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 <a href="view-teacherdetails.php?tviewid=<?php echo $row['rcid'];?>">View Teachers of Respective Class</a></td></tr>

   </table> 
   <table class="table table-bordered">
     <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Class Details</td></tr>
 <tr>
    <th>Class Name</th>
    <td><?php  echo $row['ClassName'];?></td>
     <th>Class Description</th>
    <td><?php  echo $row['ClassDesc'];?></td>
  </tr>
<tr>
    <th>Fee</th>
    <td><?php  echo $row['Cost'];?></td>
     <th>Dance Image</th>
    <td><img src="danceimg/<?php  echo $row['DanceImage'];?>" height="100" width="100"></td>
  </tr>
   </table>        
						<table class="table table-bordered">
							<?php if($row['Status']==""){ ?>


<form name="submit" method="post" enctype="multipart/form-data"> 

<tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="" rows="12" cols="14" class="form-control wd-450" required="true"></textarea></td>
   </tr>

  <tr>
    <th>Status :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
     <option value="Selected" selected="true">Selected</option>
     <option value="Rejected">Rejected</option>
   </select></td>
  </tr>

  <tr align="center">
    <td colspan="2"><button type="submit" name="submit" class="btn btn-az-primary pd-x-20">Submit</button></td>
  </tr>
  </form>
<?php } else { ?>
						</table>
						<table class="table table-bordered">
							<tr>
    <th>Remark</th>
    <td><?php echo $row['Remark']; ?></td>
  </tr>


<tr>
<th>Remark date</th>
<td><?php echo $row['UpdationDate']; ?>  </td></tr>

						</table>
						<?php } ?>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<!--footer-->
		
        <!--//footer-->
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
<?php }  ?>