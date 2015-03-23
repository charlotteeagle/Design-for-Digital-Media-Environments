<?php
 if(isset($_POST["location_id"])) {
        $location = $_POST["location_id"];
        $query = "SELECT * FROM posts WHERE house_location ='$location'";
        $result = mysqli_query($connect, $query); 
 } ?>

<?php 

    if(isset($_POST["sort-by"])) {
        $sort = $_POST["sort-by"];
        
        if(strcmp($sort, "new") == 0) {
            $query = "SELECT * FROM posts ORDER BY id DESC";
            $result = mysqli_query($connect, $query); 
        } else {
            $query = "SELECT * FROM posts ORDER BY id ASC";
            $result = mysqli_query($connect, $query); 
        }
        
    } else {
        $query = "SELECT * FROM posts ORDER BY id DESC";
        $result = mysqli_query($connect, $query); 
    }

?>