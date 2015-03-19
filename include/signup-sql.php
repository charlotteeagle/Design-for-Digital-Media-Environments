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
        if(empty($username)) {                             
            $_SESSION['message'] = "You need to create a username!";
                header("Location: ../public/signup.php");
        } else if(empty($password)) {
            $_SESSION['message'] = "You need to create a password!";
                header("Location: ../public/signup.php");
        } else if(empty($firstname)) {
            $_SESSION['message'] = "You didn't input your firstname!";
                header("Location: ../public/signup.php");
        } else if(empty($lastname)) {
            $_SESSION['message'] = "You didn't input your lastname!";
                header("Location: ../public/signup.php");
        }else if(empty($email)) {
            $_SESSION['message'] = "Remember to add your email address!";
                header("Location: ../public/signup.php");
        } else {                                        
            $query = "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}')";
            $result = mysqli_query($connect, $query);   
        }
            if($result) {                             
                $_SESSION['message'] = "Success! You've been registered to Bournemouth Homes";   
                header("Location: ../public/signup.php");
            } else {                                    
                $_SESSION['message'] = "Error, something went wrong!";
                header("Location: ../public/signup.php");
            }
    }
?>