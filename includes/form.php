<?php 
    
    if(isset($_POST["submit"])) {
        $house_title = ucfirst($_POST["house_title"]);
        $house_price = ($_POST["house_price"]);
        $house_location = ucfirst($_POST["house_location"]);
        $house_type = ucfirst($_POST["house_type"]);
        $house_bedroomnumber = ucfirst($_POST["house_bedroomnumber"]);
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
            
            <div class="box">
                <?php 
                    if(isset($message)) {
                        echo $message;
                    }
                ?>
            </div>
            
        
        
            
            
                <form action="form.php" method="post">
                    Listing Title: <input type="text" name="house_title" value="" />
                      Guide Price: <input type="number" name="house_price" value="" />
                         Location: <select name="house_location">
                            <option value="">--Select--</option>
                            <option value="1">Bournemouth Centre</option>
                            <option value="2">Winton</option>
                            <option value="3">Boscombe</option>
                            <option value="4">Kinson</option>
                            <option value="5">Throop</option>
                            <option value="6">Wallisdown</option>
                            <option value="7">Southnourne</option>
                            <option value="8">Iford</option>
                            <option value="9">Christchurch</option>
                            <option value="10">Westbourne</option>
                            <option value="11">Parkstone</option>
                            <option value="12">Northbourne</option>
                        </select> 
                    Property Type: <select name="house_type">
                            <option value="">--Select--</option>
                            <option value="1">House</option>
                            <option value="2">Flat/Apartment</option>
                            <option value="3">Bungalow</option>
                            <option value="4">Commercial</option>
                        </select>
                    Number of bedrooms: <select name="house_bedroomnumber">
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
                    Add an image: <input type="text" name="house_photo" value="" />
                    Full Description: <input type="image" name="house_description" value="" />
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
    </body>
</html>
                    