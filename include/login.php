<!-- SQL Communicaion with databse. Inserting house info -->

<?php                                                   // Add 
    if(isset($_POST["submit"])) {  
        $house_title = ucfirst($_POST["house_title"]);                // Insert each field with upper case for first letter
        $house_price = ucfirst($_POST["house_price"]);  
        $house_location = ucfirst($_POST["house_location"]);      
        $house_type = ucfirst($_POST["house_type"]);    
        $house_bedroomnumber = ucfirst($_POST["house_bedroomnumber"]);                
        $house_photo = ucfirst($_POST["house_photo"]);              
        $house_description = ucfirst($_POST["house_description"]);            
    } else { 
        $house_title = "";                                     // Leave each field blank
        $house_price = "";                              
        $house_location = "";                                
        $house_type ="";                                
        $house_bedroomnumber = "";                                     
        $house_photo = "";                                    
        $house_description ="";                                    
    }
    if(isset($_POST["login"])) {                        // If login is successful
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' LIMIT 1"; // Get username and password
        $result = mysqli_query($connect, $query); 
        if ($user = mysqli_fetch_assoc($result)) {      // started a session so user can login
            $_SESSION["user"] = $user["username"];      // Equal to login details on the database
            $message = "Welcome back!";
        } else {                                        // Otherwise
            $message = "Oops! Looks like you've typed something in wrong!";       // Display message with error logging in
        }
    }
?>

<?php                                                   // Add user's recipe to database and display on website
    if(isset($_POST["submit"])) {                       // If post has been submitted
        if(empty($house_title)) {                              // If any empty fields, display an error message
            $message = "Whoops! You forgot to name your recipe!";
        } else if(empty($house_price)) {
            $message = "Oops! You have forgotten to add a method to your recipe!";
        } else if(empty($house_location)) {
            $message = "You forgot to add some methods to your recipe!";
        } else if(empty($house_type)) {
            $message = "Remember to add the ingredients!";
        }else if(empty($house_bedroomnumber)) {
            $message = "Remember to add how long it takes!";
        }else if(empty($house_photo)) {
            $message = "Remember to add the difficulty of your recipe!";
        }else if(empty($house_description)) {
            $message = "Remember to select which course your product lies under!";
        } else {                                        // Otherwise 
            $query = "INSERT INTO posts (house_title, house_price, house_location, house_type, house_bedroomnumber, house_photo, house_description) VALUES ('{$house_title}', '{$house_price}', '{$house_location}', '{$house_type}', '{$house_bedroomnumber}', '{$house_photo}', '{$house_description}')";
            $result = mysqli_query($connect, $query);   
            if($result) {                             
                $message = "Success! Your recipe has been added for everyone to see!";   
            } else {                                    // Otherwise display unsuccessful message
                $message = "Whoops! Something went wrong!"; 
            }
            $house_title = "";                                 // Get user to fill in fields required 
            $house_price = ""; 
            $house_location = ""; 
            $house_type ="";
            $house_bedroomnumber = "";
            $house_photo = "";
            $house_description = "";
        }
    }
?>






<!-- ////////////////////////// register /////////////////////////////////////////////////////////////// -->


<?php                                                   
    if(isset($_POST["submit"])) {  
        $username = ($_POST["username"]);                
        $password = ($_POST["password"]);  
        $firstname = ($_POST["firstname"]);      
        $lastname = ucfirst($_POST["lastname"]);    
        $email = ($_POST["email"]);                            
    } else { 
        $username = "";                                    
        $password = "";                              
        $firstname = "";                                
        $lastname ="";                                
        $email = "";                                             
    }
?>

<?php                                                   
    if(isset($_POST["submit"])) {                    
        if(empty($username)) {                             
            $message = "Whoops! You forgot to type your username!";
        } else if(empty($password)) {
            $message = "Oops! You have forgotten to add a password!";
        } else if(empty($firstname)) {
            $message = "You forgot to add your first name!";
        } else if(empty($lastname)) {
            $message = "Remember to add your last name!";
        }else if(empty($email)) {
            $message = "Remember to add your email address!";
        } else {                                        
            $query = "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}')";
            $result = mysqli_query($connect, $query);   
            if($result) {                             
                $message = "Success!";   
            } else {                                    
                $message = "Error"; 
            }
            $name = "";                                 
            $description = ""; 
            $direction = ""; 
            $ingredient ="";
            $time = "";
            $level = "";
            $course = "";
        }
    }
?>