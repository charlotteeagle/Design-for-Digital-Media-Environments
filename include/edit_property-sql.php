<?php 


             
$query1 = "SELECT * FROM posts WHERE user_id = $_SESSION["id"]";

            $result = mysqli_query($connect, $query1);   
 

?>


<?php                                                   // Add 
    if(isset($_POST["edit_property"])) {  
        $house_title = ucfirst($_POST["house_title"]);                // Insert each field with upper case for first letter
        $house_price = ($_POST["house_price"]);  
        $house_location = ($_POST["house_location"]);      
        $house_type = ($_POST["house_type"]);    
        $house_bedroomnumber = ($_POST["house_bedroomnumber"]);                
        /*$house_photo = ($_POST["house_photo"]);
        $house_photo_path = ($_POST["house_photo_path"]);  */      
        $house_description = ucfirst($_POST["house_description"]);            
    } 
?>

<?php include("../include/edit_upload.php"); ?>

<?php
date_default_timezone_set("Europe/London");
$date_added = date("Y-m-d H:i:s");
?>

<?php                                                   // Add user's property to database and display on website
    if(isset($_POST["edit_property"])) {                       // If post has been submitted
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
    $query = "Update posts (user_id, house_title, house_price, house_location, house_type, house_bedroomnumber, house_photo, house_photo_path, house_description, date_added) VALUES ('{$_SESSION["id"]}','{$house_title}', '{$house_price}', '{$house_location}', '{$house_type}', '{$house_bedroomnumber}', '{$house_photo}','{$house_photo_path}','{$house_description}','{$date_added}')";
            $result = mysqli_query($connect, $query);     
            if($result) {                             
                $dbmessage = "Success! Your LISTING has been updated!";   
            } 
        }
    }
?>
 


<?php
    
    if(isset ($_POST["submit"])) {
    mysqli_close($connect);
    }

?>

<?php if(isset($dbmessage)) {echo $dbmessage;}?>    