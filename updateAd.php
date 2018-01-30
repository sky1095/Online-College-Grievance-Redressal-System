<?php 

session_start();
if(isset($_SESSION['firstname'])){
}
else{
    header("location: admin_home.php");
}
include 'dbh.php';
$aid = $_SESSION['admin_id'];

$first = $_POST['firstname'];
$last = $_POST['lastname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

/*
echo $first."<br>";
echo $last."<br>";
echo $uname."<br>";
echo $email."<br>";
echo $pass."<br>";
echo $aid;
*/

//$encrypted_pass = password_hash($pass, PASSWORD_DEFAULT);

$sql = "UPDATE admin SET firstname = '$first', lastname = '$last', username = '$uname', email = '$email', pass = '$pass'  WHERE admin_id = '$aid'";
$result = mysqli_query($conn,$sql);

if ($result){
   echo "<p style='color:blue;text-align:center;'> Records saved </p>";
    }
else{
    echo "Update isnt successful";
}
   //header("location:profiletest.php");


?>