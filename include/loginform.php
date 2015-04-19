<?php if(isset($_SESSION["user"])) { ?> <!-- If user is logged in, display logout button -->
    <div class="toggle-box">  
        <a href="logout.php">Logout</a>
    </div>  
<?php } 

    else { ?> <!-- Otherwise, display form to login-->
        
    <div class="toggle-box">
            <a>Login</a>
    </div> 
            <div class="login-box">
                <form action="index.php" method="post">
                    <p>Username:</p><input type="text" name="username" value=""/>
                    <p>Password:</p><input type="password" name="password" value=""/>
                    <input type="submit" id="submit" name="login" value="Login">
                </form>
            </div>
<?php } ?> 