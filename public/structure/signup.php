<?php 
    session_start();
    require_once("../../includes/connect.php");
    require_once("../../includes/functions.php"); 
    include_once("../../includes/templates/header.php");
    include_once("../../includes/templates/menuheader.php");  /* THE NEW NAV*/
    
?>


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

<div class="main">
    <div class="background-position" >            
         <div class="login-box">
            <form action="signupform.php" method="post">
            <p>First Name:</p><input type="text" name="firstname" value=""/>
            <p>Surname:</p><input type="text" name="surname" value=""/>
            <p>Email Address:</p><input type="text" name="email_address" value=""/>
            <p>Username:</p> <input type="text" name="username" value=""/>
            <p>Password:</p><input type="text" name="password" value=""/>
            
            <input type="submit" name="register_submit" value="Sign Up!"/>
            </form>
    </div>
    </div> 
</div>


   

<!-- Begin Footer -->

<?php include_once("../../includes/templates/footer.php"); ?>   

<!-- End Footer -->