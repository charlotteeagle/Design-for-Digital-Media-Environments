<?php 
    session_start();
    require_once("../include/connect.php"); 
    include_once("../include/templates/header.php");
    include_once("../include/templates/menuheader.php"); /* THE NEW NAV*/  
?>

<div class="main">
    <div class="background-position" >            
         <div class="login-box">
            <form action="form.php" method="post">
            <p>First Name:</p><input type="text" name="firstname" value=""/>
            <p>Surname:</p><input type="text" name="surname" value=""/>
            <p>Email Address:</p><input type="text" name="email_address" value=""/>
            <p>Username:</p> <input type="text" name="username" value=""/>
            <p>Password:</p><input type="text" name="password" value=""/>
            
            <input type="submit" name="submit" value="Sign Up!"/>
            </form>
        </div>
    </div> 
</div>


<?php include_once("../include/templates/footer.php"); ?> 