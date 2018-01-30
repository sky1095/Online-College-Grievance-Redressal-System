<?php
session_start();
if(isset($_SESSION['username'])){
 include 'dbh.php';
        $tempMail = $_SESSION['email'];
        $sql = "SELECT token, descrip, date FROM complaints WHERE complaints.email='$tempMail'";
        $result = mysqli_query($conn, $sql);
        
}

else{
    header("location: index.php");
}
//echo $token."<br>";
//echo $descrip;

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Status</title> 
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
			<button class="btn-link" ><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</button>
                <a>     <?php
                    if(isset($_SESSION['username'])){
                        echo $_SESSION['username'];
                    }
                ?>
                </a>
                </form>
			</div>
		<h1><a href="index.php">Injustice</a></h1>
		<div class="clearfix"> </div>
		</section>
    
<!-- breadcrumbs -->
<div class="w3l_agileits_breadcrumbs">
   <div class="container">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>«</span></li>				
                <li><a href="dashboard_stu.php">Student</a><span>«</span></li>
                <li>View Grievance</li>
				</ul>
		</div>
	</div>
</div>		
<!-- //breadcrumbs -->
    <!--Retrive Info from Database-->
    
    <!--//Retrive Info from Database-->
    
    
<div class="options-wthree">
    <div class="container">
         <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Token ID</th>
                    <th>Description</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if( mysqli_num_rows( $result )==0 ){
                    echo '<tr><td colspan="4"><h3 class="text-center">No Complaints Made yet !</h3></td></tr>';
                }else{
                    while( $row = mysqli_fetch_array($result)){
                        $token = $row[0];
                        $descrip = $row[1];
                        $date = $row[2]; 
                        echo "<tr>";
                        echo "<td> {$date} </td>";
                        echo "<td> {$token} </td>";
                        echo "<td> {$descrip} </td>";
                        echo "</tr>";
                }
                }
                ?>
            </tbody>
        </table>
        </div>
	</div>
</div>
    
<br>
    
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


