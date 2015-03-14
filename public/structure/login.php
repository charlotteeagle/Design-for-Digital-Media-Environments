<?php 
    session_start();
    require_once("../../includes/connect.php");
    require_once("../../includes/functions.php"); 
    include_once("../../includes/templates/header.php");
    include_once("../../includes/templates/menuheader.php");  /* THE NEW NAV*/
    
?>
    <div class="login-box">
        <form action="loginform.php" method="post">
            <p>Username:</p> <input type="text" name="username" value=""/>
            <p>Password:</p><input type="text" name="password" value=""/>
            <input type="submit" name="submit" value="Login"/>
        </form>
    </div>

<!-- Begin Footer -->

<?php include_once("../../includes/templates/footer.php"); ?>   
<!-- End Footer -->