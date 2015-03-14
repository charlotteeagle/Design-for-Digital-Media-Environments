?>
<?php 
    
    if(isset($_POST["register_submit"])) {
        $firstname = ucfirst($_POST["firstname"]);
        $surname = ($_POST["surname"]);
        $email_address = ucfirst($_POST["email_address"]);
        $username = ucfirst($_POST["username"]);
        $password = ucfirst($_POST["password"]);
            
        
    } else {
        $firstname = "";
        $surname = "";
        $email_address = "";
        $username = "";
        $password = "";
    }
    
?>