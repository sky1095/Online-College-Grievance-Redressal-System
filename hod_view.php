<?php
session_start();
if(isset($_SESSION['firstname'])){
  include 'dbh.php';
        $tempuser = $_SESSION['username'];
        $sql = "SELECT name, descrip, date, dept, contact FROM complaints WHERE complaints.concern='HOD' ORDER BY date DESC";
        $result = mysqli_query($conn, $sql);   
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
				<li><a href="dashboard_admin.php">Admin Dashboard</a><span>«</span></li>					
				<li>HOD View</li>
				</ul>
		</div>
	</div>
</div>		
<!-- //breadcrumbs -->
    <br>
    <!--Panel-->

<div class="container">
	<div class="row">

		<section class="content">
			<h1>New Grievances Concerned to HOD</h1><br>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="Success">Success</button>
								<button type="button" class="btn btn-warning btn-filter" data-target="Pending">Pending</button>
								<button type="button" class="btn btn-danger btn-filter" data-target="cancelado">Cancel</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">All</button>
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
                                    <?php
                if( mysqli_num_rows( $result )==0 ){
                    echo '<tr><td colspan="4"><h3 class="text-center">No Complaints to show!</h3></td></tr>';
                }else{
                     while( $row = mysqli_fetch_array($result)){
                         $name = $row[0];
                        $descrip = $row[1];
                        $date = $row[2]; 
                        $dept = $row[3];
                        $contact = $row[4];
                         
							echo "<tr data-status='Pending'>
                                                        <td>
                                                        <div class='ckbox'>    
                                                        <input type='checkbox' id='checkbox1'>
                                                        <label for='checkbox1'></label>
                                                        </div>
                                                        </td>
                                                        <td>
                                                        <a href='javascript:;' class='star'>
                                                        <i class='glyphicon glyphicon-star'></i>
                                                        </a>
                                                        </td>
                                                        <td>
                                                        <div class='media'>
                                                        <a href='#' class='pull-left'>
                                                        <img src='https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg' class='media-photo'>
                                                        </a>
                                                        <div class='media-body'>
                                                        <span class='media-meta pull-right'>$date</span>
                                                        <h4 class='title'>
														$name ($dept) 
														<span class='pull-right Pending'>(Pending)</span>
													</h4>
                                                     <h6>Contact : $contact</h6>
													<p class='summary'>$descrip</p>
												</div>
											</div>
										</td>
									</tr>";
                                        }
                                    }
                                    ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="content-footer">
					
				</div>
			</div>
		</section>
		
	</div>
</div>    
    
    <!--//Panel-->
   
    <!--Footer-->
		<div class="agileinfo_footer_bottom1">
			<div class="container">
					<p>© 2017 Injustice. All rights reserved | Design by <a href="http://sudhanshuyadav.tk">Team Devils</a></p>
				<div class="clearfix"> </div>
			</div>
		</div>
	
<!-- //footer -->

<!-- js -->
<script>
    
$(document).ready(function () {

	$('.star').on('click', function () {
      $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {
      $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });

 });
    </script>
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