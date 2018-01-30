<?php

session_start();
include 'dbh.php';

$pass = $_POST['pass'];

$sql = "SELECT * FROM admin WHERE pass='$pass'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$hash_pass = $row['pass'];
$hash = password_verify($pass, $hash_pass);

/*
if($hash==0){
    echo "Unlucky !";
}

else{*/

    if(!$row){
        echo "Invalid Username or Password";
    } 
    else{
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['admin_id'] = $row['admin_id'];
        header("Location: dashboard_admin.php");

    }

    
?>