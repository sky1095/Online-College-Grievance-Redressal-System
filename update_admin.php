<?php
session_start();
if(isset($_SESSION['firstname'])){
}
else{
    header("location: admin_home.php");
}
?>
<!--
Project Topic : Online Grievance system
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="css/style11.css" /><!-- menu style sheet -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<!-- //font-awesome icons -->

<!-- web-fonts -->  
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
</head>
<body class="bg">
	<div class="overlay overlay-simplegenie">
			<button type="button" class="overlay-close"><i class="fa fa-times" aria-hidden="true"></i></button>
			<nav>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="dashboard_stu.php">Dashboard</a></li>
					<li><a href="logout.php">Sign Out</a></li>
				</ul>
			</nav>
		</div>
		<section class="header-w3ls"> 
			<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
			<div class="bottons-agileits-w3layouts">
			<form action="logout.php">
			<button class="btn" ><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button>
                <a><?php
                    if(isset($_SESSION['firstname'])){
                    echo $_SESSION['firstname'];
                    }
                ?>
                </a>
                </form>
			</div>
		<h1><a href="main.php">Injustice</a></h1>
		<div class="clearfix"> </div>
		</section>
<!-- //menu -->

<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>«</span></li>
				<li><a href="admin_home.php">Admin Home</a><span>«</span></li>
				<li><a href="dashboard_admin.php">Dashboard Admin</a><span>«</span></li>			
				<li>Update Profile</li>
				</ul>
		</div>
	</div>
</div>		
<!-- //breadcrumbs -->
    
<br>
    
<!--Update Form-->
    
    
<div class="container">
       <h1 class="tittle-w3layouts text-center">Update Your Profile</h1> 
       <br>
                <form action="updateAd.php" class="form-horizontal" method="POST" onsubmit="return checkForm(this);">
                        <br>
                    
                    
                    <div class="form-group">
                        <h4 class="control-label col-sm-2" for="firstname">First Name:</h4>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name" required="#">
                            </div>
                    </div>
                     <div class="form-group">
                        <h4 class="control-label col-sm-2" for="lastname">Last Name:</h4>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter Last Name" required="#">
                            </div>
                    </div>
                    <div class="form-group">
                        <h4 class="control-label col-sm-2" for="addr">Username:</h4>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" required="#">
                        </div>
                    </div>
                    <div class="form-group">
                        <h4 class="control-label col-sm-2" for="email">Email:</h4>
                        <div class="col-sm-10">          
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required="#">
                        </div>
                    </div>
                      <div class="form-group">
                        <h4 class="control-label col-sm-2" for="contact">Password:</h4>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="password" name="password" placeholder="Enter Password" required="#">
                        </div>
                    </div>
                      <br>
                    <div class="form-group">
                        <div class="centerFlex">
                        <img src="captcha.php" width="200" height="50" border="1" alt="CAPTCHA">
                        </div>   
                        <div class="centerFlex">
                            <p><input type="text" size="6" maxlength="5" name="captcha" value=""></p><br>
                        </div>
                        <div class="centerFlex">
                            <small>copy the digits from the image into this box</small>
                        </div>
                    </div>
                    <br>
                    
                    <div class="form-group">        
                        <div class="centerFlex">
                            <button id="myBtn" type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        </div>
                    </div>
       </form>
       
</div> 
    
<!--//Update Form-->    
    
<!-- footer -->
	<div class="footer">
		</div>
		<div class="agileinfo_footer_bottom1">
			<div class="container">
					<p>© 2017 Injustice. All rights reserved | Design by <a href="http://sudhanshuyadav.tk">Team Devils</a></p>
				<div class="clearfix"> </div>
			</div>
		</div>
	
<!-- //footer -->

<!-- js -->

 <!--Captcha-->      
<script type="text/javascript">

  function checkForm(form)
  {
    ...

    if(!form.captcha.value.match(/^\d{5}$/)) {
      alert('Please enter the CAPTCHA digits in the box provided');
      form.captcha.focus();
      return false;
    }

    ...

    return true;
  }

</script>    
    <!--//Captcha-->
    
    
    
    
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!--responsiveslides js-->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
			<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 3
							  $("#slider3").responsiveSlides({
								auto: true,
								pager:false,
								nav: true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						  </script>

<!--//responsiveslides js-->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!--jarallax -->
</script>
			<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
<!-- //jarallax -->
<!--menu script-->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/demo1.js"></script>
<!--//menu script-->
<!-- banner -->
<script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
<!-- //banner -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>