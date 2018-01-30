<?php 
session_start();
include 'dbh.php';

if($_POST && "all required variables are present") {

    
    if($_POST['captcha'] != $_SESSION['digit']) die("Sorry, the CAPTCHA code entered was incorrect!");
    session_destroy();
}


//Generate a random string.
$token = openssl_random_pseudo_bytes(16);
 
//Convert the binary data into hexadecimal representation.
$token = bin2hex($token);
 
$con = $_POST['concern'];
$cat = $_POST['catg'];
$desc = $_POST['descrip'];


$sql = "INSERT INTO anonymous_complain (token, concern, catg, descrip, date) VALUES ('$token', '$con', '$cat', '$desc', NOW())";

$result = mysqli_query($conn, $sql);

//header("Location: index.php");

?>

<html>
    <head>
<style>
.alert {
    padding: 20px;
    background-color: greenyellow;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
    
.wrapper {
    text-align: center;
}

    button{
         height: 60px;
        width: 100px;
    }
    
</style>
    </head>

<body>
<form action="index.php">
<h2>Success! We have Submited your problem and you will get instant update after the next process. Till then sit back and relax and let us handle your problem.</h2>

<h3>IMPORTANT: This is your Token ID. Keep it safe either copy it somewhere or keep a screenshot of this page.</h3>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <strong class="text-center"><?php echo "Token ID: ".$token; ?></strong> 
</div>
    <div class="wrapper">
    <button type="submit">Close</button>
    </div>
    </form>
    </body>
</html>

