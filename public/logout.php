<?php
    require_once("../include/session.php"); // Includes session to identify the user
    session_destroy(); //End user session when logout clicked
    header("Location: index.php");
?>