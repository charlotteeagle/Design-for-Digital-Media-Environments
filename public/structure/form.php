<?php 
    session_start();
    require_once("../../includes/connect.php"); 
    require_once("../../includes/functions.php"); 
    include_once("../../includes/templates/header.php");
    include_once("../../includes/templates/menuheader.php");

?>

<?php 
    /* without this code block the form submits but with all fields empty even when populated*/
    /* define variables and intiialise with emtyy values */
    if(isset($_POST["submit"])) {
        $house_title = ucfirst($_POST["house_title"]);
        $house_price = ($_POST["house_price"]);
        $house_location = ($_POST["house_location"]);
        $house_type = ($_POST["house_type"]);
        $house_bedroomnumber = ($_POST["house_bedroomnumber"]);
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
    
?>

<?php /* see http://www.w3schools.com/php/php_form_url_email.asp for help on this */
        if(isset($_POST["submit"])) {
        
        if(empty($house_title)) {
            $titleerr = "Invalid property title";
        
        }else{
            $house_title = $_POST[house_title];
        }
        
         if(empty($house_price)) {
            $priceerr = "Invalid Price";
        
        }else{
            $house_price = $_POST[house_price];
        } 
        
        if(empty($house_location)) {
            $locationerr = "Invalid Location";
        
        }else{
            $house_location = $_POST[house_location];
        } 
        
        if(empty($house_type)) {
            $typeerr = "Invalid Property Type";
        
        }else{
            $house_type = $_POST[house_type];
        } 
        
        if(empty($house_bedroomnumber)) {
            $numbererr = "Invalid Bedroom Number";
        
        }else{
            $house_bedroomnumber = $_POST[house_bedroomnumber];
        } 
        
        if(empty($house_photo)) {
            $photoerr = "Invalid Photo";
        
        }else{
            $house_photo = $_POST[house_photo];
        } 
        
        if(empty($house_description)) {
            $descriptionerr = "Invalid Description";
        }else{
            $house_description = $_POST[house_description];
        }
        
    }
      
?>



<!doctype html>
<html>
    
    <body>
        
      <!--  <div class="container">  
            
            <div class="box"> -->
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
            </div>
        </div>
    </body>
</html>

<?php

$query = "INSERT INTO house (house_title, house_price, house_location, house_type, house_bedroomnumber, house_photo, house_description) VALUES ('{$house_title}', '{$house_price}', '{$house_location}',               '{$house_type}', '{$house_bedroomnumber}', '{$house_photo}', '{$house_description}')";
 
    $result = mysqli_query($connect, $query); 

    if($result) {
        $dbmessage = "Success"; 
        } else {
            $dbmessage = "Failed";
 
    }
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
<?php include_once("../../includes/templates/footer.php"); ?>                      
<!-- End Footer -->