
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
            $_SESSION["name"] = $user["fistname"];
            $_SESSION["message"] = "welcome back";
        } else {                                        // Otherwise
            $_SESSION["message"] = "NOPE";     // Display message with error logging in
        }
    }
  
?>

