<?php 
    session_start();
    require_once("../../includes/connect.php");
    require_once("../../includes/functions.php"); 
    include_once("../../includes/templates/header.php");
    include_once("../../includes/templates/menuheader.php");  /* THE NEW NAV*/
    
?>
<div class="main">
    <div class="background-position" >            
         <div class="login-box">
            <form action="signupform.php" method="post">
            <p>First Name:</p><input type="text" name="firstname" value=""/>
            <p>Surname:</p><input type="text" name="surname" value=""/>
            <p>Username:</p> <input type="text" name="username" value=""/>
            <p>Password:</p><input type="text" name="password" value=""/>
            <p>Email:</p><input type="text" name="email" value=""/>
            <input type="submit" name="submit" value="Sign Up!"/>
            </form>
    </div>
    </div> 
</div>


   

<!-- Begin Footer -->

<?php include_once("../../includes/templates/footer.php"); ?>   

<!-- End Footer -->