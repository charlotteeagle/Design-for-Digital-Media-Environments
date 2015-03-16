<?php 
    session_start();
    require_once("../include/connect.php");     // Connect to database   
    require_once("../include/login.php");  // SQL communication between database and php 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bournemouth Homes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
  </head>
<body>

      
<?php
    include 'structure/header.php'; // Include header
    include 'structure/menuheader.php'; //Include menuheader
?>
      
<div class="main">
    <div class="background-position" >
        <div class="search-box">
            <div class="search-icon">
                <img src="images/Search-50.png">
            </div>
            <?php 
                include 'structure/search-dropdown.php';
            ?>
        </div>
    </div> 
</div>
    
<?php  
    include 'house-card.php';
?>      
      
<?php if(isset($_SESSION["user"])) {   
          echo $message;                            //  If user is logged in, display welcome message
          echo "IM LOGGED IN!";
          include 'structure/results-form.php';     // If user is logged in, include form
      } else {
          echo "LOGGED OUT!";                       // Otherwise, display message logged out
} ?>              


<?php 
    include_once("structure/footer.php"); // Include footer
?>   
      
  </body>
</html>