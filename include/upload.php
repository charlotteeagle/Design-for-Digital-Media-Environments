<?php
if(isset($_POST['add_property']))
{
	$filetmp = $_FILES["house_photo"]["tmp_name"];
	$house_photo = $_FILES["house_photo"]["name"];
	$house_photo_path = "images/".$house_photo;
	
/*	if (!is_dir('images/'.$house_photo)) {    // make the directory if it does not already exist
     mkdir('images/'.$house_photo);           //This helped to establish dakar was the reason image upload failed
 } */
    
    move_uploaded_file($filetmp,$house_photo_path);
}
	
?>