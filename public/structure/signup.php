<?php 
    require_once("../../includes/session.php");
    require_once("../../includes/connect.php");
    require_once("../../includes/functions.php"); 
    include_once("../../includes/templates/header.php");
    include_once("../../includes/templates/menuheader.php");  /* THE NEW NAV*/
    
?>

<?php

    if(isset($_POST["submit"])) { 
        $username = ucfirst($_POST["username"]);
        $password = ($_POST["password"]);

        $query = "INSERT INTO user (username, password) VALUES ('{$user_username}', '{$user_password}');";

        $result = mysqli_query($connection, $query);

    }
?>

<div class="main">
    <div class="background-position" >            
         <div class="login-box">
            <form action="index.php" method="post">
            <p>First Name:</p><input type="text" name="firstname" value=""/>
            <p>Surname:</p><input type="text" name="surname" value=""/>
            <p>Username:</p> <input type="text" name="username" value=""/>
            <p>Email Address:</p><input type="text" name="email_address" value=""/>
            <p>Password:</p><input type="text" name="password" value=""/>
            
            <input type="submit" name="submit" value="Sign Up!"/>
            </form>
        </div>
    </div> 
</div>


<?php include_once("../../includes/templates/footer.php"); ?>   