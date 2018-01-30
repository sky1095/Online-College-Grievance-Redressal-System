<?php

session_start();
include 'dbh.php';

$first = $_POST['first'];
$last = $_POST['last'];
$dept = $_POST['dept'];
$uname = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
/*
echo $first."<br>";
echo $last."<br>";
echo $dept."<br>";
echo $uname."<br>";
echo $email."<br>";
echo $pass."<br>";
*/

$encrypted_pass = password_hash($pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO admin (firstname, lastname, dept, username, mail, pwd) VALUES ('$first', '$last', '$dept', '$uname', '$email', '$encrypted_pass')";

$result = mysqli_query($conn, $sql);

header("Location: admin_home.php");
    
  
?>