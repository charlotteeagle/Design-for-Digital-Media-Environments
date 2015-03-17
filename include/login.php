<!-- SQL Communicaion with databse. Inserting house info -->

<!-------------------------------------------------------- Add Property ---------------------------------------------------------------->


<?php     /*                                              // Add 
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
?>

<?php                                                   // Add user's property to database and display on website
    if(isset($_POST["submit"])) {                       // If post has been submitted
        if(empty($house_title)) {                              // If any empty fields, display an error message
            $message = "You've forgotten to add a house title!";
        } else if(empty($house_price)) {
            $message = "You've forgotten to add a house price!";
        } else if(empty($house_location)) {
            $message = "You've forgotten to add a house location!";
        } else if(empty($house_type)) {
            $message = "You've forgotten to add a house type!";
        }else if(empty($house_bedroomnumber)) {
            $message = "You've forgotten to add a house bedroom number!";
        }else if(empty($house_photo)) {
            $message = "You've forgotten to add a house photo!";
        }else if(empty($house_description)) {
            $message = "Remember to select add a house description!";
        } else {                                        // Otherwise 
            $query = "INSERT INTO posts (house_title, house_price, house_location, house_type, house_bedroomnumber, house_photo, house_description) VALUES ('{$house_title}', '{$house_price}', '{$house_location}', '{$house_type}', '{$house_bedroomnumber}', '{$house_photo}', '{$house_description}')";
            $result = mysqli_query($connect, $query);   
            if($result) {                             
                $message = "Success! Your property has been listed!";   
            } else {                                    // Otherwise display unsuccessful message
                $message = "Oh dear, your listing was unsuccessful."; 
            }
            $house_title = "";                                 // Get user to fill in fields required 
            $house_price = ""; 
            $house_location = ""; 
            $house_type ="";
            $house_bedroomnumber = "";
            $house_photo = "";
            $house_description = "";
        }
    }   */
?>
<!-------------------------------------------------------- Login ---------------------------------------------------------------->
<?php
/*User login*/
    if(isset($_POST["login"])) {                        // If login is successful
        $username = $_POST["username"];
        $password = $_POST["password"];
        $query = "SELECT * FROM users WHERE username='{$username}' AND password='{$password}' LIMIT 1"; // Get username and password
        $result = mysqli_query($connect, $query); 
        if ($user = mysqli_fetch_assoc($result)) {      // started a session so user can login
            $_SESSION["user"] = $user["username"];      // Equal to login details on the database
            $message = "Welcome back!";
        } else {                                        // Otherwise
            $message = "Wrong username/password";       // Display message with error logging in
        }
    }
  
?>
<!-------------------------------------------------------- Register ---------------------------------------------------------------->

<!-------------------------------------------------------- Register ---------------------------------------------------------------->


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
            $message = "You need to create a username!";
        } else if(empty($password)) {
            $message = "You need to create a password!";
        } else if(empty($firstname)) {
            $message = "You didn't input your firstname!";
        } else if(empty($lastname)) {
            $message = "You didn't input your lastname!";
        }else if(empty($email)) {
            $message = "Remember to add your email address!";
        } else {                                        
            $query = "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}')";
            $result = mysqli_query($connect, $query);   
            if($result) {                             
                $message = "Success! You've been registered to Bournemouth Homes";   
            } else {                                    
                $message = "Error, something went wrong!"; 
            }
            $username = "";                                 
            $password = ""; 
            $firstname = ""; 
            $lastname ="";
            $email = "";
        }
    }
?>