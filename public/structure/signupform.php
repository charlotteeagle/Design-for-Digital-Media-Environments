 <?php require_once("../../includes/connect.php"); ?>

<?php 
    
    if(isset($_POST["register_submit"])) {
        $firstname = ucfirst($_POST["firstname"]);
        $surname = ($_POST["surname"]);
        $email_address = ucfirst($_POST["email_address"]);
        $username = ucfirst($_POST["username"]);
        $password = ucfirst($_POST["password"]);
            
        
    } else {
        $firstname = "";
        $surname = "";
        $email_address = "";
        $username = "";
        $password = "";
    }
    
?>

<?php
$query = "INSERT INTO users(firstname, surname, email_address, username, password) VALUES ('{$firstname}', '{$surname}', '{$email_address}', '{$username}', '{$password}')";
 
    $result = mysqli_query($connect, $query); 

    if($result) {
        $message = "Success"; 
        } else {
            $message = "Failed";
 
    }
?>