
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>SPARKLE DANCE ACADEMY | Home Page</title>

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" /> <!-- Flexslider-CSS -->
<!-- //css files -->
<link href="//fonts.googleapis.com/css?family=Alex+Brush&amp;subset=latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Farsan&amp;subset=gujarati,latin-ext,vietnamese" rel="stylesheet">
</head>
<body> 
<!-- banner -->
<div class="main-agile">
    <div class="banner">
        <div class="w3l-overlay">
            <video autoplay muted loop id="bg-video">
                <source src="./images/video/dance.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="container">
                <h1><a class="w3l-logo" href="index.php">SPARKLE DANCE ACADEMY<span></span></a></h1>
                <div class="w3l_banner_info">
                    <section class="slider">
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="wthree_banner_info_grid">
                                        <h6>DANCE</h6>
                                        <h3>Every dance tells a story!</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="wthree_banner_info_grid">
                                        <h6>DANCE</h6>
                                        <h3>ನೃತ್ಯವು ಜೀವಾಳದ ಸಂಗೀತವಾಗಿದೆ!</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="wthree_banner_info_grid">
                                        <h2>DANCE</h2>
                                        <h3>नृत्य जीवन का सार है, दिल का गीत।</h3>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav -->
    <?php include_once('includes/header.php');?>
    <div class="clearfix"> </div>
    <!-- //Nav -->
</div>

<!-- //banner -->
	

<?php include_once('includes/footer.php');?>


<!-- js-scripts -->		
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
<!-- //js -->
<!-- flexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function(){
  $('.flexslider').flexslider({
	animation: "slide",
	start: function(slider){
	  $('body').removeClass('loading');
	}
  });
});
</script>
<!-- //flexSlider -->
<!-- menu -->
<script type="text/javascript" src="js/main.js"></script>
<!-- //menu -->
<!-- smooth scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- //smooth scrolling -->
<!-- //js-scripts -->

</body>
</html>