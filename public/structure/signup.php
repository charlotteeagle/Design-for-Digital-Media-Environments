<?php 
    require_once("../../includes/session.php");
    require_once("../../includes/connect.php");
    require_once("../../includes/functions.php"); 
    include_once("../../includes/templates/header.php");
    include_once("../../includes/templates/menuheader.php");  /* THE NEW NAV*/
    
?>

<?php

    if(isset($_POST["submit"])) { 
        $user_username = ucfirst($_POST["user_username"]);
        $user_password = ($_POST["user_password"]);

        $query = "INSERT INTO user (user_username, user_password) VALUES ('{$user_username}', '{$user_password}');";

        $result = mysqli_query($connect, $query);

    }
?>

<div class="main">
    <div class="background-position" >            
         <div class="login-box">
            <form action="index.php" method="post">
            <p>First Name:</p><input type="text" name="user_firstname" value=""/>
            <p>Surname:</p><input type="text" name="user_surname" value=""/>
            <p>Username:</p> <input type="text" name="user_username" value=""/>
            <p>Email Address:</p><input type="text" name="user_email" value=""/>
            <p>Password:</p><input type="text" name="user_password" value=""/>
            
            <input type="submit" name="submit" value="Sign Up!"/>
            </form>
        </div>
    </div> 
</div>


<?php include_once("../../includes/templates/footer.php"); ?>   