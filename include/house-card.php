<div class="house-card">
                    
                <div class="user-id-box">
                <?php echo $row["user_id"]; ?>
                </div>
                
                <div class="house-image">
                <?php echo $row["house_photo"]; ?>
                </div>
                    
                <div class="house-price">
                <p>£<?php echo $row ["house_price"]; ?></p>
                </div>
    
                <div class="house-title">
                <?php echo $row["house_title"]; ?>
                </div>
                
                <div class="house-location">
                <?php echo $row["house_location"]; ?>
                </div>
                
                <div class="house-type">
                <?php echo $row["house_type"]; ?>
                </div>
                
                <div class="house-bedroomnumber">
                <?php echo $row["house_bedroomnumber"]; ?>
                </div>
                
                <div class="house-description">
                <?php echo $row["house_description"]; ?>
                </div>
                
                
                <div class="date-added">
                <?php echo $row["date_added"]; ?>
                </div>
</div>