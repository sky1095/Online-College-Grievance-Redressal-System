<?php

session_start();
include 'dbh.php';

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$uname = $_POST['userName'];
$email = $_POST['Email'];
$roll = $_POST['rollNo'];
$college = $_POST['college'];
$pass = $_POST['pass'];
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

$sql = "INSERT INTO students (first, last, username, email, roll, college, pass) VALUES ('$first', '$last', '$uname', '$email', '$roll', '$college', '$encrypted_pass')";

$result = mysqli_query($conn, $sql);

header("Location: index.php");
    
    
?>