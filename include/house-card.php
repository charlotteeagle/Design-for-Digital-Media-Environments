<div class="house-card">
    
                <div class="house-image">
                   <img style="display: inline-block;"src="../public/images/Search-50.png"> <?php echo $row["house_photo"]; ?>   
                
    
                    <p style="display:inline; margin-left: 250px">User ID: <?php echo $row["user_id"]; ?></p>
                    <p style="display:inline;"> Date added:<?php echo $row["date_added"]; ?></p>
            
    
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
                        <p>House Type: <?php echo $row["house_type"]; ?></p>
                </div>
                
                <div class="house-bedroomnumber">
                        <p>Bedroom Number: <?php echo $row["house_bedroomnumber"]; ?></p>
                </div>
                 
                </div>
                
</div>