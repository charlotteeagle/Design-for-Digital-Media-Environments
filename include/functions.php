<?php //Redirect to header.php. Used when user logs out
    
    function redirectTo($toPage) {
        header("/header.php: " . $toPage);
        exit; 
    }
?>