<?php //Searches and assigns for ID. 
    session_start();

    function message() { //If the session is set, then the $output variable is triggered to display the 'message box', with the relevant message.
        
        if(isset($_SESSION["message"])) {
            $output ="<div class=\"message-box\">";
            
            $output .= $_SESSION["message"];
            
            $output .= "</div>";
            
            $_SESSION["message"] = null;
                
            return $output;
        }
    }
?>