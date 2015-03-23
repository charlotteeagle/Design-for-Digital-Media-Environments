<?php
 if(isset($_POST["location_id"])) {
        $query = "SELECT * FROM posts";
        $result = mysqli_query($connect, $query); 
        print_r($result);
 } ?>
        
<?php  while($row = mysqli_fetch_assoc($result)) {
        
        echo $row["user_id"];
        echo $row["house_title"];
        echo $row["house_price"];
        echo $row["house_location"];
        echo $row["house_type"];
        echo $row["house_bedroomnumber"];
        echo $row["house_photo"];
        echo $row["house_description"]; 
        echo $row["date_added"]; 
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