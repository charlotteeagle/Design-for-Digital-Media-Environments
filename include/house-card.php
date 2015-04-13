<div class="house-card">
    
    
                <div class="house-image">
                    <a href="house-card-info.php?id=<?php echo $row["id"];?>">
                   <img style="width: 290px; height: 230px; float:left;" alt="Oops the image is missing!" src="<?php echo $row["house_photo_path"]; ?> ">  
                    </a>
    
                <div class="house-price">
                 £ &nbsp;<?php echo $row ["house_price"]; ?></div>

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
                         Number of Bedrooms: <?php echo $row["house_bedroomnumber"]; ?>
                </div>
                
                <div class="user-id-box">
                   User ID: <?php echo $row["user_id"]; ?>
                   Date added:<?php echo $row["date_added"]; ?>
                </div>
                    
                 
                
    
             <div> <a href="house-card-info.php?id=<?php echo $row["id"];?>">
            
                        <p style="cursor:pointer;"> More Info</p>
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