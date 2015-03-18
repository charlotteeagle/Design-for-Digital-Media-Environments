<?php 
    
    function redirectTo($toPage) {
        header("/header.php: " . $toPage);
        exit; 
    }


?>