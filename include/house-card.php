<?php

    if(isset($_POST["search"])) { 
  
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["id"];
        echo $row["house_title"];
        echo $row["house_location"];
        echo $row["house_type"];
        echo $row["house_bedroomnumber"];
        echo $row["house_photo"];
        echo $row["house_description"];
        
        $result = mysqli_query($connect, $query); 
    }
        
  }
?>