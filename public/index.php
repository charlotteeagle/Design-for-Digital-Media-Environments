<?php 
    require("../include/session.php");          // Includes session, mainly to echo user information.
    require_once("../include/connect.php");     // Connect to database   
    require_once("../include/login.php");       // SQL communication between database and php 
    include '../include/templates/header.php'; // Include header
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
    if(isset($_SESSION["user"])) {   
        include '../include/loggedin-menu.php';                // If user is logged in, add 'add property button'
                                                                        // If user is logged in, include form
        } else {
            include '../include/templates/menuheader.php';                        // Otherwise, display message logged out
} ?>
      
<div class="main">
    <div class="background-position" >
<?php 
    include '../include/loginform.php';
?>
        
 <div class="search-box">
        <div class="search-icon">
            <img src="images/Search-50.png">
        </div>
            <?php 
                include '../include/search-dropdown.php';
            ?>
        </div>
    </div> 
</div>

    <div class="loggedin-box" >
                       
    </div>
    
    <div class="house-card">
        <div class="house-image"></div> 
<?php       
    include '../include/house-card.php';
?>      
    </div>


<?php 
    include_once("../include/templates/footer.php"); // Include footer
?>   
      
  </body>
</html>