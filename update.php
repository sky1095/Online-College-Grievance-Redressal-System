<?php 

session_start();
if(isset($_SESSION['username'])){
}
else{
    header("location: main.php");
}
include 'dbh.php';
$id = $_SESSION['stu_id'];

$first = $_POST['firstname'];
$last = $_POST['lastname'];
$uname = $_POST['username'];
$email = $_POST['email'];
$roll = $_POST['roll'];
$college = $_POST['college'];
$pass = $_POST['password'];
/*
echo $first."<br>";
echo $last."<br>";
echo $uname."<br>";
echo $email."<br>";
echo $roll."<br>";
echo $college."<br>";
echo $pass."<br>";
*/
$encrypted_pass = password_hash($pass, PASSWORD_DEFAULT);

$sql = "UPDATE students SET first = '$first', last = '$last', username = '$uname', email = '$email', roll = '$roll', college = '$college', pass = '$encrypted_pass'  WHERE stu_id = '$id'";
$result = mysqli_query($conn,$sql);

if ($result){
   echo "<p style='color:blue;text-align:center;'> Records saved </p>";
    }
else{
    echo "Update isnt successful";
}
   //header("location:profiletest.php");



?>