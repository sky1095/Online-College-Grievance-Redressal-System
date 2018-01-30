                                                    <!--Main Page-->
<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="google-signin-client_id" content="353954069095-sck05o7smnrps3rf55n11ht12csvscdp.apps.googleusercontent.com">
    
    
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
					<!--<li><a href="logout.php">Sign Out</a></li>-->
				</ul>
			</nav>
		</div>
		<section class="header-w3ls"> 
			<button id="trigger-overlay" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
			<div class="bottons-agileits-w3layouts">
			<a class="page-scroll" href="#myModal2" data-toggle="modal"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>.
			<a class="page-scroll" href="#myModal3" data-toggle="modal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Register</a>
			</div>
		<h1><a  href="index.php">Injustice</a></h1>
		<div class="clearfix"> </div>
		</section>
<!-- //menu -->
<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->     
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>Login</h5>
										<form action="login.php" method="POST">
											<input type="text" class="email" name="email" placeholder="Email" required=""/>
											<input type="password" class="password" name="pass" placeholder="Password" required=""/>
											<div class="wthree-text"> 
												<ul> 
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox">
															<span> Remember me ?</span> 
														</label> 
													</li>
													<li> <a href="#">Forgot password?</a> </li>
												</ul>
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
												<input name="login" type="submit" value="LOGIN">  	
											</div>	
										</form>

										</div>  
									</div>
						</div>  
				</div> <!-- //login-page -->
			</div>
		</div>
	<!-- //modal --> 
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div> 
				<div class="modal-body login-page "><!-- login-page -->     
									<div class="login-top sign-top">
										<div class="agileits-login">
										<h5>Register</h5>
										<form action="signup.php" method="POST">
                                            <input type="text" name="firstName" placeholder="First Name" required=""/>
                                            <input type="text" name="lastName" placeholder="Last Name" required=""/>
											<input type="text" name="userName" placeholder="Username" required=""/>
											<input type="email" name="Email" placeholder="Email" required=""/>
                                            <input type="text" name="rollNo" placeholder="Roll No." required=""/>
                                            <input type="text" name="college" placeholder="College" required=""/>
											<input type="password" name="pass" placeholder="Password" required=""/>
											<div class="wthree-text"> 
												<ul> 
													<li>
														<label class="anim">
															<input type="checkbox" class="checkbox" required="#">
															<span> I accept the terms of use</span> 
														</label> 
													</li>
												</ul>
												<div class="clearfix"> </div>
											</div>  
											<div class="w3ls-submit"> 
												<input type="submit" value="Register">  	
											</div>	
										</form>

										</div>  
									</div>
						</div>  
				</div> <!-- //login-page -->
			</div>
		</div>
	<!-- //modal --> 

<!-- banner -->
	<div class="banner-silder">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
									<h3></h3>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
									<h3></h3>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
									<h3></h3>
								</div>
								
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top3">
							<div class="container">
								<div class="agileits-banner-info">
									<h3></h3>
								</div>
								
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
      </div>
    <br>
<!-- //banner -->
<!-- banner-bottom -->
    <h1 class="text-center">Welcome to College Grievance Portal</h1>
<!-- //banner-bottom -->
<!--Services-->
<div class="options-wthree">
    <div class="container">
		<ul>
			<li>
			<a href="anonymous.php" class="opt-grids">
				<div class="icon-agileits-w3layouts">
					<i class="fa fa-user" aria-hidden="true"></i>
				</div>
				<div class="opt-text-w3layouts">
					<h6>Anonymous</h6>
				</div>
			</a>
			</li>
			<li>
			<a href="admin_home.php" class="opt-grids">
				<div class="icon-agileits-w3layouts">
					<i class="fa fa-lock" aria-hidden="true"></i>
				</div>
				<div class="opt-text-w3layouts">
					<h6>Admin</h6>
				</div>
			</a>
			</li>
		</ul>
	</div>
</div>
    
    <!--Counter-->
    <div align=center><a href='http://www.counter12.com'><img src='http://www.counter12.com/img-A2yw6AYw6y1W9Wa4-29.gif' border='0' alt='counter'></a><script type='text/javascript' src='http://www.counter12.com/ad.js?id=A2yw6AYw6y1W9Wa4'></script></div>
    <!--//Counter-->
<br>
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
<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
<!-- //js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!--Google Api Script-->
<script src="https://apis.google.com/js/platform.js" async defer></script>

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
<script src="js/SmoothScroll.min.js"></script>
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