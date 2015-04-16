<?php
if(isset($_POST['add_property'])) //If the add property form is submitted, the image is uploaded to the images folder and defines the path of the image
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