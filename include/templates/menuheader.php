<!doctype html>
<html>
    <head>
        <title>Bournemouth Homes</title>
    </head>
<body>
    <div class="menu-header">   <!-- Linking pages with relevant buttons -->
        <div class="buttons">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="help.php">Help</a>
            <a href="http://dakar.bournemouth.ac.uk/~ceagle/wiki/dokuwiki/doku.php?id=start">Wiki</a>
<?php if(isset($_SESSION["user"])) { ?> <!-- If the user is logged in, display 'add property' button --> 
    <a href="form.php">Add Property</a>
       
<?php } 

    else { ?> <!-- Otherwise, display 'signup' button -->
        
    <a href="signup.php">Sign Up</a> 
            
<?php } ?> 
            
            <div class="listed">  

<?php //Displays how many properties have been listed in the database in the last 30 days.
$q = "SELECT `date_added` FROM `posts` where `date_added` < NOW()-30";

$month = mysqli_query($connect, $q);

$num_rows = $month->num_rows;

echo $num_rows;
echo "&nbsp Homes listed in the last month"; 
?>
            </div>
        </div>
    </div> 
</body>     