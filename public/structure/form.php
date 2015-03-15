<?php 
    session_start();
    require_once("../../includes/connect.php"); 
    require_once("../../includes/functions.php"); 
    include_once("../../includes/templates/header.php");
    include_once("../../includes/templates/menuheader.php");

?>

<?php 
    
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

<?php 
    if(isset($_POST["submit"])) {
        
        if(empty($house_title)) {
            $message = "Invalid property title";
        
        } 
        
         if(empty($house_price)) {
            $message = "Invalid Price";
        
        } 
        
        if(empty($house_location)) {
            $message = "Invalid Location";
        
        } 
        
        if(empty($house_type)) {
            $message = "Invalid Property Type";
        
        } 
        
        if(empty($house_bedroomnumber)) {
            $message = "Invalid Price";
        
        } 
        
        if(empty($house_photo)) {
            $message = "Invalid Photo";
        
        } 
        
        if(empty($house_description)) {
            $message = "Invalid Description";
        }
        
    }
      
        
    


?>


<!doctype html>
<html>
    
    <body>
        
        <div class="container">  
            <p>Create Your Listing</p>
            <div class="box">
                <?php 
                    if(isset($message)) {
                        echo $message;
                    }
                ?>
            
            
        
        
            
            
                <form action="form.php" method="post"> //action="form.php" = form data sent for processing to form php file
                    Listing Title: <input type="text" name="house_title" value="" />
                    <br><br>
                      Guide Price: <input type="number" name="house_price" value="" />
                    <br><br>
                         Location: <select name="house_location">
                            <option value="">--Select--</option>
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
                        </select> 
                    <br><br>
                    Property Type: <select name="house_type">
                            <option value="">--Select--</option>
                            <option>House</option>
                            <option>Flat/Apartment</option>
                            <option>Bungalow</option>
                            <option>Commercial</option>
                        </select>
                    <br><br>
                    Number of bedrooms: <select name="house_bedroomnumber">
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
                        </select>
                    <br><br>
                    Add an image: <input type="text" name="house_photo" value="" />
                    <br><br>
                    <!-- text area creates a larger box to fit description in -->
                    Full Description: <textarea name="full description" rows="5" cols="40"></textarea>
                    <br><br>
                    <input type="submit" name="submit" value="Submit" />
            </form>

            
            <?php 
                echo $house_title;
                echo $house_price;
                echo $house_location;
                echo $house_type;
                echo $house_bedroomnumber;
                echo $house_photo;
                echo $house_description;

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