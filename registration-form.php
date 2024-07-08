<?php
session_start();
//error_reporting(0);
include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {

$regnum=mt_rand(100000000, 999999999);
 $name=$_POST['name'];
     $email=$_POST['email'];
    $telephone=$_POST['telephone'];
    $class=$_POST['class'];
    $gender=$_POST['gender'];
    $message=$_POST['message'];
$query=mysqli_query($con, "insert into  tblregistration(RegistrationNumber,ClassID,Name,TelephoneNumber,Email,Gender,Message) value('$regnum','$class','$name','$telephone','$email','$gender','$message')");
   if ($query) {
   echo '<script>alert("Your class has been book successfully. Registration Number is "+"'.$regnum.'")</script>';

echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>sparkle | Registration Form</title>

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
        background-image: url('images/bg2.jpg'); /* Ensure this path is correct */
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
		
	<!-- Nav -->
<?php include_once('includes/header.php');?>
	<div class="clearfix"> </div>
	<!-- //Nav -->
<!-- //banner -->	
<!-- mail -->
<div class="mail" id="mail">
	<div class="container">
		<h2 class="title-w30">Registration Form</h2>
		<div class="agileinfo_mail_grids">
			
			<div class="col-md-11 agileinfo_mail_grid_right">
				<form action="#" method="post">
					<div class="col-md-6 col-sm-6 wthree_contact_left_grid">
						<input type="text" name="name" placeholder="Name" required="true">
						<input type="email" name="email" placeholder="Email" required="true">
					</div>
					
					<div class="col-md-6 col-sm-6 wthree_contact_left_grid">
						<input type="text" name="telephone" placeholder="Telephone" required="true" maxlength="10" pattern="[0-9]+">
						<select  name="class" required="true" class="form-control" style="margin-top:3%">
							<option value="">Select Class</option>
							<?php
$ret=mysqli_query($con,"select *from  tblclasses");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
<option value="<?php  echo $row['ID'];?>"><?php  echo $row['ClassName'];?></option><?php 
$cnt=$cnt+1;
}?>
						</select>
					</div>
					<div class="col-md-12 col-sm-6" style="margin-top: 1%">
						<h5 style="color: white">Gender</h5>
								 <p style="text-align: left;"> <input type="radio"  name="gender" id="gender" value="Female" checked="true" >Female &nbsp; <input type="radio" name="gender" id="gender" value="Male">Male</p>
					</div>
					
					<div class="clearfix"> </div>
					<!-- <textarea name="message" placeholder="Message...." required="true"></textarea> -->
					<input type="submit" value="Submit" name="submit">
					<input type="reset" value="Clear">
				</form>
			</div>
			<div class="clearfix"> </div>
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
