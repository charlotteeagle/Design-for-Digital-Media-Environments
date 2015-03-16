<?php 
    session_start();
    require_once("../include/connect.php");     // Connect to database   
    require_once("../include/login.php");  // SQL communication between database and php 
    include 'structure/menuheader.php'; //Include menuheader    
?>

<div class="main">
    <div class="background-position" >            
    </div> 
</div>

<?php 
    include_once("structure/footer.php"); //Include footer
?>  
