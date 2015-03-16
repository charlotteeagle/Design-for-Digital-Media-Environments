<?php 
    //Host
    $host = "localhost"; 
    //User
    $user = "root"; 
    //Password
    $password = "Cl54008382"; 
    //Database name
    $db = "Database3";  
    $connect = mysqli_connect($host, $user, $password, $db); 

    if(mysqli_connect_errno()) {
        die(mysqli_connect_errno()); 
    }
?>