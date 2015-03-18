<?php
    require("../include/session.php");    
    session_destroy(); //Logged out
    header("Location: index.php");
?>