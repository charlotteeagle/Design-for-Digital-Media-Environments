<?php 
    require_once("../include/session.php");   
    require_once("../include/connect.php"); 
    include_once("../include/templates/header.php");
    include_once("../include/templates/menuheader.php"); /* THE NEW NAV*/  
?>

<div class="main">
<?php    if(isset($_SESSION["message"])) { ?>
        
    <div class="message-box" >
            <p><?php echo $_SESSION['message']; ?></p>
        </div>
    
}?>    
    <div class="background-position" >            
         <div class="login-box">
            <form action="../include/signup-sql" method="post">
            <p>Username:</p><input type="text" name="username" value=""/>
            <p>Password:</p><input type="text" name="password" value=""/>
            <p>Firstname:</p><input type="text" name="firstname" value=""/>
            <p>Lastname:</p> <input type="text" name="lastname" value=""/>
            <p>Email Address:</p><input type="text" name="email" value=""/>
            
            <input type="submit" name="signup" value="Sign Up!"/>
            </form>
        </div>
    </div> 
</div>


<?php include_once("../include/templates/footer.php"); ?> 