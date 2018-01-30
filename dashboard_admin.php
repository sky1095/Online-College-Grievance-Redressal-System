<?php
session_start();
if(isset($_SESSION['firstname'])){
}
else{
    header("location: admin_home.php");
}
?>

<!--

-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Dashboard</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar
    (){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link rel="stylesheet" type="text/css" href="css/style11.css" /><!-- menu style sheet -->
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" /> 
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /> 
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
					<li><a href="dashboard_admin.php">Dashboard</a></li>
					<li><a href="#">Sign Out</a></li>
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
                </form></div>
		<h1><a href="index.php">Injustice</a></h1>
		<div class="clearfix"> </div>
		</section>

<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>«</span></li>
				<li><a href="admin_home.php">Admin Home</a><span>«</span></li>					
				<li>Admin Dashboard</li>
				</ul>
		</div>
	</div>
</div>		
<!-- //breadcrumbs -->
    
    <div class="options-wthree">
    <div class="container">
        <ul>
        <li>
			<a href="director_view.php" class="opt-grids">
				<div class="icon-agileits-w3layouts">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<div class="opt-text-w3layouts">
					<h6>Director</h6>
				</div>
			</a>
			</li>
            <li>
			<a href="hod_view.php" class="opt-grids">
				<div class="icon-agileits-w3layouts">
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<div class="opt-text-w3layouts">
					<h6>HOD</h6>
				</div>
			</a>
			</li>
        </ul>
        </div>
    <div class="container">
		<ul>
			<li>
			<a href="update_admin.php" class="opt-grids">
				<div class="icon-agileits-w3layouts">
					<i class="fa fa-clipboard" aria-hidden="true"></i>
				</div>
				<div class="opt-text-w3layouts">
					<h6>Update Profile</h6>
				</div>
			</a>
			</li>
			
			<li>
			<a href="#" class="opt-grids">
				<div class="icon-agileits-w3layouts">
					<i class="fa fa-comment" aria-hidden="true"></i>
				</div>
				<div class="opt-text-w3layouts">
					<h6>Reply in Messenger</h6>
				</div>
			</a>
			</li>
		</ul>
	</div>
</div>

    
    <!--Footer-->
		<div class="agileinfo_footer_bottom1">
			<div class="container">
					<p>© 2017 Injustice. All rights reserved | Design by <a href="http://sudhanshuyadav.tk">Team Devils</a></p>
				<div class="clearfix"> </div>
			</div>
		</div>
	
<!-- //footer -->

<!-- js -->
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!--jarallax -->
	<script src="js/SmoothScroll.min.js"></script>
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