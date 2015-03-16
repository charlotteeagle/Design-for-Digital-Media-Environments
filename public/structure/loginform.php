<div class="login-box">

<?php if(isset($_SESSION["user"])) { ?> <!-- If user is logged in, display logout button -->
    <p><?php echo $_SESSION["user"]; ?></p>
        <a href="logout.php"> Logout</a>

<?php } else { ?> <!-- Otherwise, display form to login-->
    <form action="index.php" method="post">
            <p>Username:</p><input type="text" name="username" value=""/>
             <p>Password:</p><input type="text" name="password" value=""/>
            <input type="submit" id="submit" name="login" value="Login">
    </form>

<?php } ?> 
</div>
