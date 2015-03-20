<?php
    require_once("../include/session.php");          // Includes session, mainly to echo user information.
    require_once("../include/connect.php");
>?


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
