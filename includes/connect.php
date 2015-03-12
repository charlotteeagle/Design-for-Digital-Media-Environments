<?php
/*
        define("DB_SERVER", "localhost");
    define("DB_USER", "YOUR USERNAME");
    define("DB_PASS", "YOUR DATABASE PASSWORD");
    define("DB_NAME", "NAME OF DATABSE"); 

    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
    */
?>

<?php

$user = 'root';
$password = 'root';
$db = 'property';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

?>