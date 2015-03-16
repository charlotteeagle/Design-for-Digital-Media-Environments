
<!doctype html>
<html>
    <head>
        <title>Bournemouth Homes</title>
        <link href="css/styles.css" rel="stylesheet">
    </head>
    


   
<!--Menu Header -->
<body>
    <div class="menu-header">   
        
        <div class="buttons">
            
            <?php if(isset($_SESSION["user"])) {   
  
                include 'structure/loggedin-menu.php';                // If user is logged in, add 'add property button'
                                                                        // If user is logged in, include form
            } else {
                echo include 'structure/menuheader.php';        
            ?>
            
            <a href="../index.php" class="on">Home</a>
            <a href="../../public/structure/about.php">About Us</a>
            <a href="../../public/structure/help.php">Help</a>
            <a href="http://dakar.bournemouth.ac.uk/~ceagle/wiki/dokuwiki/doku.php?id=start">Wiki</a>
            <a href="../../public/structure/signup.php">Sign Up</a>
            
            
        </div>
     </div> 
</body>    