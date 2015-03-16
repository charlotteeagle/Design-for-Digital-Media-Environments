<p>HOUSE CARD</p>

<?php
    while($row = mysqli_fetch_assoc($result)) {
        echo $house_title;
    }
?>

<p><?php echo $house_title; ?></p>


