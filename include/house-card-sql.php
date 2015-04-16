<?php //If user searches for property, the relevant location will be fetched via the $query. All of the data that is fetched, from that specific location, will be displayed new to old by deafult. 
 if(isset($_POST["location_id"])) {
        $location = $_POST["location_id"];
        $sortOrder = $_POST["sort-by"];
     
        if(strcmp($sortOrder, "new") == 0) {
            $order = "DESC";
        } else {
            $order = "ASC";
        }
     
        $query = "SELECT * FROM posts WHERE house_location ='$location' ORDER BY id $order";
        $result = mysqli_query($connect, $query); 
        // If form request comes from Search Button
 } elseif(isset($_SESSION["location"])) {
        // Form request comes from Sort By Button
        $location = $_SESSION["location"];
        // Use $_SESSION["location"] as a way of remembering our last location choice
 } 
?> 