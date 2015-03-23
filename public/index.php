<?php 
    require_once("../include/session.php");          // Includes session, mainly to echo user information.
    require_once("../include/connect.php");     // Connect to database   
    require_once("../include/login.php");       // SQL communication between database and php 
    include '../include/templates/header.php'; // Include header
    include '../include/templates/menuheader.php';
?>
      
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

<?php if(isset($_POST["search"])) { ?>

<?php 
                include '../include/sort-box.php';
?>
            <div class="house-card">
                <div class="house-image"></div>
                <div class="house-title"></div>
                <div class="house-price"></div>
                <div class="house-location"></div>
                <div class="house-type"></div>
                <div class="house-bedroomnumber"></div>
                <div class="house-description"></div>
                <div class="date-added"></div>
            </div>
            

<?php } ?>

 
   
<?php 
    include_once("../include/templates/footer.php"); // Include footer
?>   
    