<?php                                                   // Add 
    if(isset($_POST["submit"])) {  
        $house_title = ucfirst($_POST["house_title"]);                // Insert each field with upper case for first letter
        $house_price = ($_POST["house_price"]);  
        $house_location = ($_POST["house_location"]);      
        $house_type = ($_POST["house_type"]);    
        $house_bedroomnumber = ($_POST["house_bedroomnumber"]);                
        $house_photo = ($_POST["house_photo"]);              
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
            $titleerr  = "You've forgotten to add a house title!";
        } 
        if(empty($house_price)) {
            $priceerr = "You've forgotten to add a house price!";
        } 
        if(empty($house_location)) {
            $locationerr = "You've forgotten to add a house location!";
        } 
        if(empty($house_type)) {
            $typeerr = "You've forgotten to add a house type!";
        }
        if(empty($house_bedroomnumber)) {
            $numbererr = "You've forgotten to add the number of bedrooms!";
        }
        if(empty($house_photo)) {
            $photoerr = "You've forgotten to add a house photo!";
        }
        if(empty($house_description)) {
            $descriptionerr = "Remember to add a house description!";
        } else {                                        // Otherwise 
    $query = "INSERT INTO posts (user_id, house_title, house_price, house_location, house_type, house_bedroomnumber, house_photo, house_description) VALUES ('{$_SESSION["user_id"]}','{$house_title}', '{$house_price}', '{$house_location}', '{$house_type}', '{$house_bedroomnumber}', '{$house_photo}', '{$house_description}')";
            $result = mysqli_query($connect, $query);   
            if($result) {                             
                $dbmessage = "Success! Your property has been listed!";   
            } else {                                    // Otherwise display unsuccessful message
                $dbmessage = "Oh dear, your listing was unsuccessful."; 
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
//if session id not working may need to try escaping " " in query   
