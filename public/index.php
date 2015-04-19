<?php 
    require_once("../include/session.php");     // Includes session, mainly to identify the user
    require_once("../include/connect.php");     // Connect to database   
    require_once("../include/login.php");       // SQL communication between database and php 
    require_once("../include/house-card-sql.php");  //call card info/fetch data
    include '../include/templates/header.php'; // Include header
    include '../include/templates/menuheader.php'; //include menu
?>
      
<div class="main">
    <!-- If user is logged in display message box. Within message box, echo 'message'(Successfully logged in. Welcome back - user's 'username') and users first name. (see login.php) -->
    <?php  if(isset($_SESSION["user"])) { ?>
    
        <div class="message-box" >
            <p style="display:inline;"><?php echo ($_SESSION["message"]) ?></p>
            <?php  if(isset($_SESSION["name"])) { ?>
            <p style="display:inline;">Welcome back <?php echo $_SESSION['name']; ?>!</p>
            <?php } ?>
        </div>
    
    <?php } ?>
    <!-- MESSAGE TEST -->
    <?php  if(isset($_SESSION["loginmessage"])) { ?>
    
        <div class="message-box" >
            <p style="display:inline;"><?php echo ($_SESSION["loginmessage"]) ?></p>
        </div>
   <?php   } ?>
    <!-- -->
    <div class="background-position" >
<?php 
    include '../include/loginform.php'; //include login form
?>
        
 <div class="search-box">
        <div class="search-icon">
            <img src="images/Search-50.png">
        </div>
            <?php 
                include '../include/search-dropdown.php'; //Includes location and sort options
            ?>
        </div>
    </div>  
</div>

<!-- If 'search' is clicked display locations via id, eg bournemouth centre. Also display results box -->
<?php if(isset($_POST["location_id"])) { ?>
<div class="results-box">
    <h2 style="display:inline;"> Your Results:</h2>
<?php } ?>

</div>

<?php if(isset($_POST["location_id"])) { 
        while($row = mysqli_fetch_assoc($result)) {
            include '../include/house-card.php'; //If search is made include house card, where the data is fetched and displayed. Via location id.
        }     
     }?>

<?php 
    include_once("../include/templates/footer.php"); // Include footer
?>     