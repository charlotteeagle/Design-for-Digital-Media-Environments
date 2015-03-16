<?php 
    require_once("../includes/session.php");
    require_once("../../includes/connect.php");
    require_once("../../includes/functions.php"); 
    include_once("../../includes/templates/header.php");
    include_once("../../includes/templates/menuheader.php");  /* THE NEW NAV*/
    
?>

<?php 
    
    if(isset($_POST["login"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $query = "SELECT * FROM users WHERE username='{$user_username}' AND password='{$user_password}' LIMIT 1";
        
        $result = mysqli_query($connection, $query);
        
        if($user = mysqli_fetch_assoc($result)) {
            $_SESSION["message"] = "Success, welcome back {$user["username"]}";
        } else {
            $_SESSION["message"] = "Wrong username/password";
        }
        
    }

    redirectTo("index.php");


?>​

<div class="main">
    <div class="background-position" >            
        <div class="login-box">
            <form action="loginform.php" method="post">
                <p>Username:</p> <input type="text" name="username" value=""/>
                <p>Password:</p><input type="text" name="password" value=""/>
                <input type="submit" name="login" value="Login"/>
            </form>
        </div>
    </div> 
</div>


    

<?php include_once("../../includes/templates/footer.php"); ?>   
