<?php 
    session_start();
    require_once("../include/connect.php");     // Connect to database   
    require_once("../include/login.php");       // SQL communication between database and php 
    include 'structure/header.php'; // Include header
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
        include 'structure/loggedin-menu.php';                // If user is logged in, add 'add property button'
                                                                        // If user is logged in, include form
        } else {
            include 'structure/menuheader.php';                        // Otherwise, display message logged out
} ?>
      
<div class="main">
    <div class="background-position" >
<?php 
    include 'structure/loginform.php';
?>
        
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

    <div class="loggedin-box" >
          
<?php if(isset($_SESSION["user"])) {   
          echo $message;                            //  If user is logged in, display welcome message
          echo "IM LOGGED IN!";
                                                    // If user is logged in, include form
      } else {
          echo "You're not logged in. Click the 'Sign Up' button to register.";                       // Otherwise, display message logged out
} ?>              
    </div>
    
    <div class="house-card">
        <div class="house-image"></div> 
<?php       
    include 'house-card.php';
?>      
    </div>


<?php 
    include_once("structure/footer.php"); // Include footer
?>   
      
  </body>
</html>