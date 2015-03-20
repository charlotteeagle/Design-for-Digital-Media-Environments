<?php 
    require_once("../include/session.php");          // Includes session, mainly to echo user information.
    require_once("../include/connect.php");     // Connect to database   
    require_once("../include/login.php");       // SQL communication between database and php 
    include '../include/templates/header.php'; // Include header
?>



<?php
    if(isset($_SESSION["user"])) {
        include '../include/loggedin-menu.php';     // If user is logged in, add 'add property button'
                                                        // If user is logged in, include form
        } else {
            include '../include/templates/menuheader.php';       // Otherwise, display message logged out
} ?>
      
<div class="main">
    <?php  if(isset($_SESSION["user"])) { ?>
    
        <div class="message-box" >
            <p style="display:inline;"><?php echo ($_SESSION["message"]) ?></p>
            <?php  if(isset($_SESSION["name"])) { ?>
            <p style="display:inline;">Welcome back <?php echo $_SESSION['name']; ?>!</p>
            <?php } ?>
        </div>
    
    <?php } ?>
    
    
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


    
    <div class="house-card">
<?php       
    include '../include/house-card.php';
?>      
    </div>


<?php 
    include_once("../include/templates/footer.php"); // Include footer
?>   
    