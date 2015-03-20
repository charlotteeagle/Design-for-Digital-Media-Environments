<div class="house-card">
<?php
             //NEED TO SET $result   
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"];
        echo $row["house_title"];
        echo $row["house_location"];
        echo $row["house_type"];
        echo $row["house_bedroomnumber"];
        echo $row["house_photo"];
        echo $row["house_description"];
    }
?>

</div>