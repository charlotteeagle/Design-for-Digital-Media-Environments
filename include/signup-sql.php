<?php
    require_once("../include/session.php");
    require_once("../include/connect.php");
?>

<?php   // If the user clicks the 'signup' button, the code runs.                                       
    if(isset($_POST["signup"])) {  
        $username = ($_POST["username"]); //Creating variable, assigning their detials to it. 
        $password = ($_POST["password"]);  
        $firstname = ucfirst($_POST["firstname"]);      
        $lastname = ucfirst($_POST["lastname"]);    
        $email = ($_POST["email"]);                            
    } 
?>

<?php                                                   
    if(isset($_POST["signup"])) {    
        if(empty($username)) {       // If any empty fields, display an error message
            $_SESSION['message'] =  "Please create a username.";
            header("Location: ../public/signup.php");
        } else if(empty($password)) {
            $_SESSION['message'] = "Please create a password.";
            header("Location: ../public/signup.php");
        } else if(empty($firstname)) {
            $_SESSION['message'] =  "Please state your firstname.";
            header("Location: ../public/signup.php");
        } else if(empty($lastname)) {
            $_SESSION['message'] =  "Please state your lastname";
            header("Location: ../public/signup.php");
        } else if(empty($email)) {
            $_SESSION['message'] =  "Please enter your email";
            header("Location: ../public/signup.php");
        } else {   

//If all fields are inputted, insert credentials into database, in the 'users' table, in the correct columns. 
            $query = "INSERT INTO users (username, password, firstname, lastname, email) VALUES ('{$username}', '{$password}', '{$firstname}', '{$lastname}', '{$email}')";
            $result = mysqli_query($connect, $query);   
        
            if($result) {  //If the data is saved successfully, display message:                 
                $_SESSION['message'] = "Success! You've been registered to Bournemouth Homes";   
                header("Location: ../public/signup.php");//keeps them onto signup.php, to hold session
            } else {    //Otherwise, display message:                                
                $_SESSION['message'] = "Error! You missed something!";
                header("Location: ../public/signup.php"); //keeps them onto signup.php, to hold session
            }
        }
    }
?>