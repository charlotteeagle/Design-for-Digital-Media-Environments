<?php 
    session_start();
    require_once("../includes/connect.php");
    require_once("../includes/functions.php"); 
    include_once("../includes/templates/header.php")
    include_once("../includes/templates/nav.php"); 

?>
        
        




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BH Homes</title>
    <link rel="stylesheet" href="css/stylesheet.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
  </head>
  <body>

      
<!-- MAIN BODY-->

  <div class="main">

    <div class="background-position" >
        <div class="search-box">
            <div class="search-icon">
                <img src="images/Search-50.png">
            </div>
                <form action="" method="get" > 
                Search: <select name="house_id">
                    <option value="">--Select--</option>
                    <option value="1">Poole</option>
                    <option value="2">Bournemouth</option>
                </select> 
                </form>
        </div>
    </div>
      
  </div>


  </body>
</html>

<?php include_once("../includes/templates/footer.php"); ?>        