<?php 
    require_once("../include/session.php");
    require_once("../include/connect.php");
    include_once("../include/templates/header.php");
    include_once("../include/templates/menuheader.php"); 
    require_once("../include/house-card-sql.php");
    /*include '../include/house-card-sql.php';*/
?>



<?php


$id = $_GET["id"];

$sql = "SELECT * FROM posts Where id='$id'";
$result = mysqli_query($connect, $sql);
$value = mysqli_fetch_object($result);


$user_id = $value->user_id;
$date_added = $value->house_photo;
$house_photo = $value->house_photo;
$house_price = $value->house_price;
$house_title = $value->house_title;
$house_location = $value->house_location;
$house_type = $value->house_type;
$house_bedroomnumber = $value->house_bedroomnumber;
$house_description = $value->house_description;
$house_photo_path = $value->house_photo_path; 
?>  


<div class="house-card2">
    
    
                <div class="house-image">
                  <a href="<?php echo $house_photo_path; ?>">
                </a>
                        
                    <img style="width: 290px; height: 230; float:left;" alt="OOPS the Image is Missing" src="<?php echo $house_photo_path; ?>"> 
                
                <div class="user-id-box">
                     User ID: <?php echo $user_id; ?>
                     Date added:<?php echo $date_added; ?>
                </div>
    
                <div class="house-price">
                        £<?php echo $house_price; ?>
                </div>

                <div class="house-location">
                        <?php echo $house_location; ?>
                </div>
        
                <div class="house-title">
                        <?php echo $house_title; ?>
                </div>

                <div class="house-type">
                        House Type: <?php echo $house_type; ?>
                </div>
                
                <div class="house-bedroomnumber">
                       Number of Bedrooms: <?php echo $house_bedroomnumber; ?>
                </div>
                 
                </div>
    
               <div class="house-description">
                        <?php echo $house_description; ?>
                </div>
           
              
</div>

 
    
    
  
    
    
    




