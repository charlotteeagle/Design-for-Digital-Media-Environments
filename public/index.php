<?php 
    require("../include/session.php");          // Includes session, mainly to echo user information.
    require_once("../include/connect.php");     // Connect to database   
    require_once("../include/login.php");       // SQL communication between database and php 
    include '../include/templates/header.php'; // Include header
?>

<?php echo message(); ?>

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
    