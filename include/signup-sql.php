<?php 
    require_once("../include/session.php");
    require_once("../include/connect.php");
?>
<?php                                                   
    if(isset($_POST["signup"])) {  
        $username = ($_POST["username"]);                
        $password = ($_POST["password"]);  
        $firstname = ucfirst($_POST["firstname"]);      
        $lastname = ucfirst($_POST["lastname"]);    
        $email = ($_POST["email"]);                            
    } else { 
        $username = "";                                    
        $password = "";                              
        $firstname = "";                                
        $lastname ="";                                
        $email = "";                                             
    }
?>
<?php                                                   
    if(isset($_POST["signup"])) {    
        if(empty($username)) {                              // If any empty fields, display an error message
            $message = "Please create a username.";
        } else if(empty($password)) {
            $message = "Please create a password.";
        } else if(empty($firstname)) {
            $message = "Please state your firstname.";
        } else if(empty($lastname)) {
            $message = "Please state your lastname";
        }else if(empty($email)) {
            $message = "Please enter your email";
    
            $query = "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}')";
            $result = mysqli_query($connect, $query);   
        
            if($result) {                             
                $_SESSION['message'] = "Success! You've been registered to Bournemouth Homes";   
                header("Location: ../public/signup.php");
            } else {                                    
                $_SESSION['message'] = "Error! You missed something!";
                header("Location: ../public/signup.php");
            }
        }
    }
?>