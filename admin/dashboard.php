<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['odrsaid']==0)) {
  header('location:logout.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>sparkle | Admin Dashboard</title>

<script type="application/x-javascript"> 
  addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
  function hideURLbar(){ window.scrollTo(0,1); } 
</script>
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
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<!--Calender-->
<link rel="stylesheet" href="css/clndr.css" type="text/css" />
<script src="js/underscore-min.js" type="text/javascript"></script>
<script src="js/moment-2.2.1.js" type="text/javascript"></script>
<script src="js/clndr.js" type="text/javascript"></script>
<script src="js/site.js" type="text/javascript"></script>
<!--End Calender-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<!-- Custom CSS for Video Background -->
<style>
    .video-background {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%; 
        min-height: 100%;
        z-index: -1;
    }
    .content {
        position: relative;
        z-index: 1;
    }
    .transparent-background {
        background: transparent !important;
    }
    .transparent-text {
        color: #fff; /* Adjust text color for better visibility */
    }
</style>
</head> 
<body class="cbp-spmenu-push">
<video autoplay loop muted class="video-background">
    <source src="../images/p2.mp4" type="video/mp4">
    Your browser does not support the video tag.
</video>

<div class="main-content transparent-background">
  <?php include_once('includes/sidebar.php');?>
  <?php include_once('includes/header.php');?>
  
  <div id="page-wrapper" class="row calender widget-shadow transparent-background">
    <div class="main-page transparent-background">
      <div class="row calender widget-shadow transparent-background">
        <div class="row-one">
          <div class="col-md-4 widget transparent-background transparent-text">
            <?php $query1=mysqli_query($con,"Select * from tblclasses");
            $totalclasses=mysqli_num_rows($query1);
            ?>
            <div class="stats-left ">
              <h5>Total</h5>
              <h4>Classes</h4>
            </div>
            <div class="stats-right">
              <label> <?php echo $totalclasses;?></label>
            </div>
            <div class="clearfix"> </div> 
          </div>
          <div class="col-md-4 widget states-mdl transparent-background transparent-text">
            <?php $query2=mysqli_query($con,"Select * from tblteachers");
            $totalteacher=mysqli_num_rows($query2);
            ?>
            <div class="stats-left">
              <h5>Total</h5>
              <h4>Teachers</h4>
            </div>
            <div class="stats-right">
              <label> <?php echo $totalteacher;?></label>
            </div>
            <div class="clearfix"> </div> 
          </div>
          <div class="col-md-4 widget states-last transparent-background transparent-text">
            <?php $query3=mysqli_query($con,"Select * from tblregistration");
            $totalreg=mysqli_num_rows($query3);
            ?>
            <div class="stats-left">
              <h5>Total</h5>
              <h4>Registration</h4>
            </div>
            <div class="stats-right">
              <label><?php echo $totalreg;?></label>
            </div>
            <div class="clearfix"> </div> 
          </div>
          <div class="clearfix"> </div> 
        </div>
      </div>

      <div class="row calender widget-shadow transparent-background">
        <div class="row-one">
          <div class="col-md-4 widget transparent-background transparent-text">
            <?php $query4=mysqli_query($con,"Select * from tblregistration where Status='Selected'");
            $totalselreg=mysqli_num_rows($query4);
            ?>
            <div class="stats-left ">
              <h5>Total</h5>
              <h4>Selected Reg</h4>
            </div>
            <div class="stats-right">
              <label> <?php echo $totalselreg;?></label>
            </div>
            <div class="clearfix"> </div> 
          </div>
          <div class="col-md-4 widget states-mdl transparent-background transparent-text">
            <?php $query5=mysqli_query($con,"Select * from tblregistration where Status='Rejected'");
            $totalrejreg=mysqli_num_rows($query5);
            ?>
            <div class="stats-left">
              <h5>Total</h5>
              <h4>Rejected Reg</h4>
            </div>
            <div class="stats-right">
              <label> <?php echo $totalrejreg;?></label>
            </div>
            <div class="clearfix"> </div> 
          </div>
          <div class="col-md-4 widget states-last transparent-background transparent-text">
            <?php
            $query6=mysqli_query($con,"Select * from tblregistration where Status is null");
            $totalnewreg=mysqli_num_rows($query6);
            ?>
            <div class="stats-left">
              <h5>Total</h5>
              <h4>New Reg</h4>
            </div>
            <div class="stats-right">
              <label> <?php echo $totalnewreg;?></label>
            </div>
            <div class="clearfix"> </div> 
          </div>
          <div class="clearfix"> </div> 
        </div>
      </div>
    </div>
  </div>
  <!--footer-->
  <?php include_once('includes/footer.php');?>
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
