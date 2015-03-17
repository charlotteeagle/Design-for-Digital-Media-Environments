<?php 
    session_start();
    require_once("../include/connect.php"); 
    include_once("../include/templates/header.php");
    include_once("../include/templates/menuheader.php");

?>

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
            $title_err  = "You've forgotten to add a house title!";
        } else if(empty($house_price)) {
            $price_err = "You've forgotten to add a house price!";
        } else if(empty($house_location)) {
            $location_err = "You've forgotten to add a house location!";
        } else if(empty($house_type)) {
            $type_err = "You've forgotten to add a house type!";
        }else if(empty($house_bedroomnumber)) {
            $number_err = "You've forgotten to add the number of bedrooms!";
        }else if(empty($house_photo)) {
            $photo_err = "You've forgotten to add a house photo!";
        }else if(empty($house_description)) {
            $description_err = "Remember to add a house description!";
        } else {                                        // Otherwise 
            $query = "INSERT INTO posts (user_id, house_title, house_price, house_location, house_type, house_bedroomnumber, house_photo, house_description) VALUES ('{$SESSION_user_id}','{$house_title}', '{$house_price}', '{$house_location}', '{$house_type}', '{$house_bedroomnumber}', '{$house_photo}', '{$house_description}')";
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
  

<!doctype html>
<html>
    
    <body>
        
       <div class="container">  
            
            <div class="box">
                <?php /*
                    if(isset($descriptionerr)) { /*change to above variables */
                     /*   echo $descriptionerr;
                    }*/
                ?>
            
               
            
                <h2>Create Your Listing</h2>
                <p><span class="error">* required field.</span></p> 
                <form action="form.php" method="post"> <!-- action="form.php" = form data sent for processing to form php file -->
                    Listing Title: <input type="text" name="house_title" value="<?php echo $house_title;?>">
                    <span class="error">*<?php echo $titleerr;?></span>
                    <br><br>
                      Guide Price: <input type="number" name="house_price" value="<?php echo $house_price;?>">
                        <span class="error">*<?php echo $priceerr;?></span>
                        <br><br>
                         Location: <select name="house_location">
                            <option value="">--Select--</option> //variable value set to 0 so is seen as empty
                            <option>Bournemouth Centre</option>
                            <option>Winton</option>
                            <option>Boscombe</option>
                            <option>Kinson</option>
                            <option>Throop</option>
                            <option>Wallisdown</option>
                            <option>Southnourne</option>
                            <option>Iford</option>
                            <option>Christchurch</option>
                            <option>Westbourne</option>
                            <option>Parkstone</option>
                            <option>Northbourne</option>
                        </select><span class="error">*<?php echo $locationerr;?></span> 
                    <br><br>
                    Property Type: <select name="house_type">
                            <option value="">--Select--</option>
                            <option>House</option>
                            <option>Flat/Apartment</option>
                            <option>Bungalow</option>
                            <option>Commercial</option>
                        </select><span class="error">*<?php echo $typeerr;?></span>
                    <br><br>
                    Number of bedrooms: <select name="house_bedroomnumber">
                    <!-- values given to options so database will column will only have numbers -->
                            <option value="">--Select--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">More than 8</option>
                        </select><span class="error">*<?php echo $numbererr;?></span>
                    <br><br>
                    Add an image: <input type="text" name="house_photo" value="<?php echo $house_photo;?>">
   <span class="error">*<?php echo $photoerr;?></span> 
                    <br><br>
                    <!-- text area creates a larger box to fit description in -->
                Full Description: <textarea name="house_description" rows="5" cols="40" value="<?php echo $house_description;?>"></textarea><span class="error">*<?php echo $descriptionerr;?></span>
                    
                    <br><br>
                    <input type="submit" name="submit" value="Submit" />
            </form>
 
            
            </div>
        </div>
    </body>
</html>
<?php 
                echo $house_title;
                echo "<br>";
                echo $house_price;
                echo "<br>";
                echo $house_location;
                echo "<br>";
                echo $house_type;
                echo "<br>";
                echo $house_bedroomnumber;
                echo "<br>";
                echo $house_photo;
                echo "<br>";
                echo $house_description;
                echo "<br>";

            ?>

<?php
    
    if(isset ($_POST["submit"])) {
    mysqli_close($connect);
    }

?>

<?php

echo $dbmessage;

?>



<!-- Begin Footer -->
<?php include_once("../include/templates/footer.php"); ?>                      
<!-- End Footer -->