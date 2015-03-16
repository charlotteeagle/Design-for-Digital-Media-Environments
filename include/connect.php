<?php
/*
    define("DB_SERVER", "localhost");
    define("DB_USER", "YOUR USERNAME");
    define("DB_PASS", "YOUR DATABASE PASSWORD");
    define("DB_NAME", "NAME OF DATABSE"); 

    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
    */
?>

<?php   /*

$user = 'root';
$password = 'Cl54008382';
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
);*/

?>
<?php
/*
$user = 'root';
$password = 'root';
$db = 'property';
$host = 'localhost';
$port = 8889;

$link = mysqli_init();
$success = mysqli_real_connect(
 
   $host, 
   $user, 
   $password, 
   $db,
   $port
); */
?>

<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASS", "root");
    define("DB_NAME", "Database3"); 
    define("DB_PORT", "8889");

    $connect = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME, DB_PORT);

    if(mysqli_connect_errno()) {
        die("Database connection failed: " . 
        mysqli_connect_error() . 
        " (" . mysqli_connect_errno() . ")"
        );
    }
    
?>

