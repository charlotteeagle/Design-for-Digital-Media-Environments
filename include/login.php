<!-------------------------------------------------------- Login ------------------------------------------>
<?php
/*User login*/
    if(isset($_POST["login"])) {   
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if(empty($username)) {                              // If any empty fields, display an error message
            $_SESSION['message'] =  "Please enter your username.";
        } else if(empty($password)) {
             $_SESSION['message'] =  "Please enter your password.";
        } else {
            
        $query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' LIMIT 1"; // Get username and password
        $result = mysqli_query($connect, $query); 
        
        if ($user = mysqli_fetch_assoc($result)) {      // started a session so user can login
            $_SESSION["id"] = $user["id"];
            $_SESSION["user"] = $user["username"];      // Equal to login details on the database
            $_SESSION["name"] = $user["firstname"];
            $_SESSION["message"] = "Successfully logged in. Welcome back {$user["username"]}.";
        } else {
            $_SESSION["message"] = "Wrong username/password.";
        }
        
     }
  }
  
?>

