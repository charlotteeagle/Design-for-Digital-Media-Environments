<div class="house-card">
    
    
                <div class="house-image">
                   <img style="width: 290px; height: 230px; float:left;" alt="Oops the image is missing!" src="<?php echo $row["house_photo_path"]; ?> ">   
                
                <div class="user-id-box">
                   User ID: <?php echo $row["user_id"]; ?>
                   Date added:<?php echo $row["date_added"]; ?>
                </div>
    
                <div class="house-price">
                        <?php echo $row ["house_price"]; ?>
                </div>

                <div class="house-location">
                        <?php echo $row["house_location"]; ?>
                </div>
        
                <div class="house-title">
                        <?php echo $row["house_title"]; ?>
                </div>

                <div class="house-type">
                        House Type: <?php echo $row["house_type"]; ?>
                </div>
                
                <div class="house-bedroomnumber">
                        Bedroom Number: <?php echo $row["house_bedroomnumber"]; ?>
                </div>
                 
                </div>
    
             <div> <a href="house-card-info.php?id=<?php echo $row["id"];?>">
                    <div class="more-info">
                        <p style="cursor:pointer;"> Click Me!</p>
                   </a>
                    </div>
            </div>
              
</div>


<!--<div> <a href="house-card-info.php?id=<?/*php echo $row["id"];*/?>"> 
                      <div  class="house-location">
                        <?php /*echo $row["house_location"];*/ ?>
                   </a>
                        </div>
                      
                        </div> -->          
<!-- <INPUT TYPE="button" onClick="house-card-info.php?id=<?/*php echo $row["id"];*/?>"> -->