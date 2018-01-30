<?php
    $conn = mysqli_connect("localhost", "root", "mysql", "cgs");
    
    if(!$conn){
        die("Conection Failed : ".mysqli_connect_error());
    }
    
?>
