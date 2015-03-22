<?php if(isset($_SESSION["user"])) { ?> <!-- If user is logged in, display logout button -->
        <a href="logout.php"> Logout</a>

<?php } 

    else { ?> <!-- Otherwise, display form to login-->
        
    <div class="toggle-box">
            <a>Login</a>
                <div class="login-box">
                    <form action="index.php" method="post">
                        <p>Username:</p><input type="text" name="username" value=""/>
                        <p>Password:</p><input type="text" name="password" value=""/>
                        <input type="submit" id="submit" name="login" value="Login">
                    </form>
                </div>
    </div> 

<?php } ?> 

