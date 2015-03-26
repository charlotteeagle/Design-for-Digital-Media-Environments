<?php 
    require_once("../include/session.php");
    require_once("../include/connect.php");
    include_once("../include/templates/header.php");
    include_once("../include/templates/menuheader.php"); 
    require_once("../include/house-card-sql.php");
    /*include '../include/house-card-sql.php';*/
?>



<?php

$id = $_GET["id"];

$sql = "SELECT * FROM posts Where id='$id'";
$result = mysqli_query($connect, $sql);
$value = mysqli_fetch_object($result);


$user_id = $value->user_id;
$date_added = $value->house_photo;
$house_photo = $value->house_photo;
$house_price = $value->house_price;
$house_title = $value->house_title;
$house_location = $value->house_location;
$house_type = $value->house_type;
$house_bedroomnumber = $value->house_bedroomnumber;
$house_description = $value->house_description;
$house_photo_path = $value->house_photo_path; 
require_once("../include/house-card.php");
?>  

    
 
    
    
  
    
    
    




