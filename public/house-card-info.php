<?php 
    require_once("../include/session.php");
    require_once("../include/connect.php");
    include_once("../include/templates/header.php");
    include_once("../include/templates/menuheader.php"); 
    require_once("../include/house-card-sql.php");
    include '../include/house-card.php';
    include '../include/house-card-sql.php';
?>


<div class="house-card">
<?php

$id = $_GET["id"];

 $qy = "SELECT * FROM posts"; 
 $result = mysqli_query($connect, $qy);


$house_photo = $value->house_photo;
$house_price = $value->house_price;
$house_title = $value->house_title;
$house_location = $value->house_location;
$house_type = $value->house_type;
$house_bedroomnumber = $value->house_bedroomnumber;
$house_description = $value->house_description;
    
?>   
</div>    
    
    
    




