<?php
    session_start();
    session_destroy(); //Logged out
    header("Location: index.php");
?>