
<?php
//    if(isset($_POST["search"])) { 
// 
//    while($row = mysqli_fetch_assoc($result)) {
//        echo $row["house_id"];
//        echo $row["house_title"];
//        echo $row["house_location"];
//        echo $row["house_type"];
//        echo $row["house_bedroomnumber"];
//        echo $row["house_photo"];
//        echo $row["house_description"];
//        
//        $result = mysqli_query($connect, $query); 
//    }
//        
//  }
?>

<?php
 if(isset($_POST["search"])) {
        $query = "SELECT * FROM posts WHERE house_id='{$house_id}', house_title='{$house_title}', house_location='{$house_location}', house_type='{$house_type}', house_bedroomnumber='{$house_bedroomnumber}', house_photo='{$house_photo}', house_description='{$house_description}' ";
        
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