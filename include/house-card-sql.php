<?php
 if(isset($_POST["search"])) {
        $query = "SELECT * FROM posts WHERE user_id='{$user_id}', house_title='{$house_title}', house_price='{$house_price}', house_location='{$house_location}', house_type='{$house_type}', house_bedroomnumber='{$house_bedroomnumber}', house_photo='{$house_photo}', house_description='{$house_description}', date_added='{$date_added}'";
        $result = mysqli_query($connect, $query); 
        
     while($row = mysqli_fetch_assoc($result)) {
        echo $row["house_id"];
        echo $row["house_title"];
        echo $row["house_location"];
        echo $row["house_type"];
        echo $row["house_bedroomnumber"];
        echo $row["house_photo"];
        echo $row["house_description"]; 
     }
 }
?>

<?php 

    if(isset($_POST["sort"])) {
        $sort = $_POST["sort-by"];
        
        if(strcmp($sort, "new") == 0) {
            $query = "SELECT * FROM posts ORDER BY id DESC";
        } else {
            $query = "SELECT * FROM posts ORDER BY id ASC";
        }
        
    } else {
        $query = "SELECT * FROM posts ORDER BY id DESC";
    }

    if(!$result) {
        die("Query Error");  
    }

?>