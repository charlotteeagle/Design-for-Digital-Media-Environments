<div class="house-card">

                <div class="user-id-box">
                    <p style="display:inline;">User ID: <?php echo $row["user_id"]; ?></p>
                    <p style="display:inline;"> Date added:<?php echo $row["date_added"]; ?></p>
                    
                </div>
    
                <div class="house-price">
                        <?php echo $row ["house_price"]; ?>
                </div>

                <div class="house-location">
                        <?php echo $row["house_location"]; ?>
                </div>
            
                <div class="house-image">
                        <?php echo $row["house_photo"]; ?>
                    
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