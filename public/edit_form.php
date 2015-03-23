<?php 
    require_once("../include/session.php"); 
    require_once("../include/connect.php"); 
    include_once("../include/templates/header.php");
    include_once("../include/templates/menuheader.php");
    include("../include/edit_property-sql.php");
    
?>


        
       <div class="container">  
            
            <div class="box">
               
            
                <h2>Edit Your Listing</h2>
                <p><span class="error">* required field.</span></p> 
                <form enctype="multipart/form-data" action="form.php" method="post"> <!-- action="form.php" = form data sent for processing to form php file -->
                    Listing Title: <input type="text" name="house_title" value="<?php echo $house_title;?>">
                    <span class="error">*<?php if(isset($titleerr)) {echo $titleerr;}?></span>
                    
              
                    
                    <br><br>
                      Guide Price: <input type="number" name="house_price" value="<?php echo $house_price;?>">
                        <span class="error">*<?php if(isset($priceerr)) {echo $priceerr;}?></span>
                        <br><br>
                         Location: <select name="house_location" value="<?php echo $house_location; ?>">
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
                        </select><span class="error">*<?php if(isset($locationerr)) {echo $locationerr;}?></span> 
                    <br><br>
                    Property Type: <select name="house_type" value="<?php echo $house_type;?>">

                            <option value="">--Select--</option>
                            <option>House</option>
                            <option>Flat/Apartment</option>
                            <option>Bungalow</option>
                            <option>Commercial</option>
                        </select><span class="error">*<?php if(isset($typeerr)) {echo $typeerr;}?></span>
                    <br><br>
                    Number of bedrooms: <select name="house_bedroomnumber" value="<?php echo $house_bedroomnumber;?>">
                    <!-- values given to options so database columns will only have numbers -->
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
                        </select><span class="error">*<?php if(isset($numbererr)) {echo $numbererr;}?></span>
                    <br><br>
                    Add an image: <input type="file" name="house_photo" id="fileToUpload" value="<?php echo $house_photo;}?>">
                    <span class="error">*<?php if(isset($photoerr)) {echo $photoerr;}?></span> 

                    <br><br>
                    <!-- text area creates a larger box to fit description in -->
                Full Description: <textarea name="house_description" rows="5" cols="40" value="<?php echo $house_description;}?>"></textarea>                
                <span class="error">*<?php if(isset($descriptionerr)) {echo $descriptionerr;}?></span>
                    
                    <br><br>
                    <input type="submit" name="edit_property" value="Submit" />
            </form>
 
            
            </div>
        </div>


 
<!-- Begin Footer -->
<?php include_once("../include/templates/footer.php"); ?>                      
<!-- End Footer -->