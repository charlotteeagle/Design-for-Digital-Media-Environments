<?php 
    
    if(isset($_POST["submit"])) {
        $house_title = ucfirst($_POST["house_title"]);
        $house_price = ($_POST["house_price"]);
        $house_location = ucfirst($_POST["house_location"]);
        $house_type = ucfirst($_POST["house_type"]);
        $house_bedroomnumber = ucfirst($_POST["house_bedroomnumber"]);
        $house_photo = ($_POST["house_photo"]);
        $house_description = ucfirst($_POST["house_description"]);
            
        
    } else {
        $house_title = "";
        $house_price = "";
        $house_location = "";
        $house_type = "";
        $house_bedroomnumber = "";
        $house_photo = "";
        $house_description = "";
            
    }
    if(isset($_POST["insert"])) {                        // If login is successful
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' LIMIT 1"; // Get          username and password
        $result = mysqli_query($connect, $query); 
        if ($user = mysqli_fetch_assoc($result)) {      // started a session so user can login
            $_SESSION["user"] = $user["username"];      // Equal to login details on the database
            $message = "Welcome back!";
        } else {                                        // Otherwise
            $message = "Incorrect username/password";       // Display message with error logging in
        }
    }
?>