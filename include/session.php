 <?php /*
    session_start();

    

    function message() {
        
        if(isset($SESSION)["message"]) {
            $output ="<div class=\"message-box\">";
            
            $output .= $_SESSION["message"];
            
            $output .= "</div>";
            
            $_SESSION["message"] = null;
                
            return $output;
        }
    }


*/ ?>


<?php if(isset($_SESSION["user"])) {   
          echo $message;                            //  If user is logged in, display welcome message
      
                                                    // If user is logged in, include form
      } else {
          echo "You're not logged in. Click the 'Sign Up' button to register.";                       // Otherwise, display message logged out
} ?> 