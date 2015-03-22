<?php
  $bg = array('b1.jpg', 'b2.jpg', 'b3.jpg', 'b4.jpg', 'b5.jpg', 'b6.jpg', 'b7.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>

<!doctype html>
<html>
    <head>
        <title>Bournemouth Homes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'> 
        <link href='css/normal.css' rel='stylesheet' type='text/css'> 
        <link href='css/styles.css' rel='stylesheet' type='text/css'> 
    </head>
<!--HEADER -->
 <body>
    <div class="header">
        <div class="logo-box">
          <a href="index.php"><img src="images/logo.png"></a>
        </div> 
    </div>    
    