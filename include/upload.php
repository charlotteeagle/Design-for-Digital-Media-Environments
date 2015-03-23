<?php
if(isset($_POST['add_property']))
{
	$filetmp = $_FILES["house_photo"]["tmp_name"];
	$house_photo = $_FILES["house_photo"]["name"];
	$house_photo_path = "images/".$house_photo;
	
	if (!is_dir('images/'.$house_photo)) {    
     mkdir('images/'.$house_photo);   
 }
    
    move_uploaded_file($filetmp,$house_photo_path);
}
	
?>