<div class="house-card">        
            <div class="house-card-image">
            <?php echo $row["house_photo"]; ?>
            </div>
            <h3>User ID: <?php echo $row["user_id"]; ?></h3>
            <h3> Date added:<?php echo $row["date_added"]; ?></h3>
            <h1><?php echo $row ["house_price"]; ?></h1>       
            <h2><?php echo $row["house_location"]; ?></h2>
            <h2><?php echo $row["house_title"]; ?></h2>    
            <p>House Type: <?php echo $row["house_type"]; ?></p>
            <p>Bedroom Number: <?php echo $row["house_bedroomnumber"]; ?></p>                       
</div>