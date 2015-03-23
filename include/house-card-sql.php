<?php
 if(isset($_POST["location_id"])) {
        $location = $_POST["location_id"];
        $_SESSION = $location;
        $query = "SELECT * FROM posts WHERE house_location ='$location' ORDER BY id DESC";
        $result = mysqli_query($connect, $query); 
        // If form request comes from Search Button
 } elseif(isset($_SESSION["location"])) {
        // Form request comes from Sort By Button
        $location = $_SESSION["location"];
        // Use $_SESSION["location"] as a way of remembering our last location choice
        if(isset($_POST["sort-by"])) {
            $sort = $_POST["sort-by"];
            if(strcmp($sort, "new") == 0) {
                $query = "SELECT * FROM posts WHERE house_location ='$location' ORDER BY id DESC";
                $result = mysqli_query($connect, $query); 
            } else {
                $query = "SELECT * FROM posts WHERE house_location ='$location' ORDER BY id ASC";
                $result = mysqli_query($connect, $query); 
            }
        } else {
            $query = "SELECT * FROM posts WHERE house_location ='$location' ORDER BY id DESC";
            $result = mysqli_query($connect, $query); 
        }
 } 
     

?> 