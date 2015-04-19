<?php
/*If the user clicks the 'login' button, the code below will run. When the user attempts to login, their detials are posted and compared to the credentials in the database. If incorrect, the session will not begin, therefore, they will not have the 'write' access, ie, add property ability. */
    if(isset($_POST["login"])) {   
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if(empty($username)) {    // If any empty fields, display an error message
            $_SESSION['loginmessage'] =  "Please enter your username.";
        } else if(empty($password)) {
             $_SESSION['loginmessage'] =  "Please enter your password.";
        } else {
            
        $query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' LIMIT 1"; // Get username and password from the 'users' table and check if correct. 
        $result = mysqli_query($connect, $query); 
        
        // Creating variables for the user's identifiers, ie ID, username, firstname.     
        if ($user = mysqli_fetch_assoc($result)) {      // started a session so user can login
            $_SESSION["id"] = $user["id"];
            $_SESSION["user"] = $user["username"];      // Equal to login details on the database
            $_SESSION["name"] = $user["firstname"];
            $_SESSION["message"] = "Successfully logged in. Welcome back {$user["username"]}.";
        } else {
            $_SESSION["loginmessage"] = "Wrong username/password.";
        }  
     }
  }
?>