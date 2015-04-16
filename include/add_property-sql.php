<?php   // If property is submitted run the following code
    if(isset($_POST["add_property"])) {  
        $house_title = ucfirst($_POST["house_title"]); // Insert each field into the database with upper case first letter (ucfirst).  Each variable is inserted into the Database using $query
        $house_price = ($_POST["house_price"]);  
        $house_location = ($_POST["house_location"]);      
        $house_type = ($_POST["house_type"]);    
        $house_bedroomnumber = ($_POST["house_bedroomnumber"]);                    
        $house_description = ucfirst($_POST["house_description"]);            
    } else { 
        $house_title = "";         // Leave each field empty
        $house_price = "";                              
        $house_location = "";                                
        $house_type ="";                                
        $house_bedroomnumber = "";                                     
        $house_photo = "";   
        $house_photo_path = "";
        $house_description ="";                                    
    }
?>

<?php include("../include/upload.php"); ?> <!-- Include image upload abilty -->

<?php
date_default_timezone_set("Europe/London"); /* set timezone and date format for database entry */
$date_added = date("Y-m-d H:i:s");
?>

<?php     // Add user's property to database and display on website
    if(isset($_POST["add_property"])) {   // If post has been submitted and there are any empty fields, display an error message
        if(empty($house_title)) {         
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
        } else {                                        
            
            /* If all field are populated run sql query to insert the data */
            $query = "INSERT INTO posts (user_id, house_title, house_price, house_location, house_type, house_bedroomnumber, house_photo, house_photo_path, house_description, date_added) VALUES ('{$_SESSION["id"]}','{$house_title}', '{$house_price}', '{$house_location}', '{$house_type}', '{$house_bedroomnumber}', '{$house_photo}','{$house_photo_path}','{$house_description}','{$date_added}')";
            
            $result = mysqli_query($connect, $query);   
            if($result) {                              
                header('Location: congrats.php');
            }
        }
    }
?>
 
<?php /* echo for testing the form
                
                echo $house_title;
                echo "&nbsp &nbsp";
                echo $house_price;
                echo "&nbsp &nbsp";
                echo $house_location;
                echo "&nbsp &nbsp";
                echo $house_type;
                echo "&nbsp &nbsp";
                echo $house_bedroomnumber;
                echo "&nbsp &nbsp";
                echo $house_photo;
                echo "&nbsp &nbsp";
                echo $house_description;
                echo "&nbsp &nbsp";
                */
?>  