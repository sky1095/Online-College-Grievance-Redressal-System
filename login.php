<?php

session_start();
include 'dbh.php';

$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM students WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pass = $row['pass'];
$hash = password_verify($pass, $hash_pass);


if($hash==0){
    exit();
}

else{
    $sql = "SELECT * FROM students WHERE email='$email' AND pass='$hash_pass' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if(!$row){
        echo "Invalid Username or Password";
    } 
    else{
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['stu_id'] = $row['stu_id'];
        header("Location: dashboard_stu.php");

    }
        
}



    
?>