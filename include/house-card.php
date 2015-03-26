<div class="house-card">
    
                <div class="house-image">
                   <img style="display: inline-block;"src="../public/images/Search-50.png"> <?php echo $row["house_photo"]; ?>   
                    
                                    
                </div>
                
                <div class="house-price">
            <p style="display:inline; margin-left: 250px">User ID: <?php echo $row["user_id"]; ?></p>
            <p style="display:inline;"> Date added:<?php echo $row["date_added"]; ?></p>
            
    
                
                        <?php echo $row ["house_price"]; ?>
                

    
                        <?php echo $row["house_location"]; ?>
            
        
             
                        <?php echo $row["house_title"]; ?>
                

              
                        <p>House Type: <?php echo $row["house_type"]; ?></p>
               
                
               
                        <p>Bedroom Number: <?php echo $row["house_bedroomnumber"]; ?></p>
               
                 
                </div>
