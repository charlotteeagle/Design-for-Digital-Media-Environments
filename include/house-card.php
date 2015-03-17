<p>HOUSE CARD</p>

<?php
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

<p><?php echo $id; ?></p>
<p><?php echo $house_title; ?></p>
<p><?php echo $house_location; ?></p>
<p><?php echo $house_type; ?></p>
<p><?php echo $house_bedroomnumber; ?></p>
<p><?php echo $house_photo; ?></p>
<p><?php echo $house_description; ?></p>

echo $house_title;
echo $house_location;    
echo $house_type;
echo $house_bedroomnumber;
echo $house_photo;
echo $house_description;