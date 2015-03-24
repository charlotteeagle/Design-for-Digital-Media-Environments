
<!doctype html>
<html>
    <head>
        <title>Bournemouth Homes</title>
    </head>
<body>
    <div class="menu-header">   
        <div class="buttons">
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="help.php">Help</a>
            <a href="http://dakar.bournemouth.ac.uk/~ceagle/wiki/dokuwiki/doku.php?id=start">Wiki</a>
<?php if(isset($_SESSION["user"])) { ?> 
    <a href="form.php">Add Property</a>
       
<?php } 

    else { ?> 
        
    <a href="signup.php">Sign Up</a> 
                
    
<?php } ?> 
            
        <div class="listed">  

<?php
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
    
   