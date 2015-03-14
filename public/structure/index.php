<?php 
    session_start();
    require_once("../../includes/connect.php");
    require_once("../../includes/functions.php"); 
    include_once("../../includes/templates/header.php");
    include_once("../../includes/templates/menuheader.php");  /* THE NEW NAV*/
    
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bournemouth Homes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Play' rel='stylesheet' type='text/css'>
  </head>
  <body>

      
      
<!-- MAIN BODY-->

  <div class="main">
    <div class="background-position" >
        <div class="search-box">
            <div class="search-icon">
                <img src="../../public/images/Search-50.png">
            </div>
                <form action="" method="get"> 
                Search:<select name="house_id">
                            <option value="1">Bournemouth Centre</option>
                            <option value="2">Winton</option>
                            <option value="3">Boscombe</option>
                            <option value="4">Kinson</option>
                            <option value="5">Throop</option>
                            <option value="6">Wallisdown</option>
                            <option value="7">Southnourne</option>
                            <option value="8">Iford</option>
                            <option value="9">Christchurch</option>
                            <option value="10">Westbourne</option>
                            <option value="11">Parkstone</option>
                            <option value="12">Northbourne</option>
                        </select> 
            </form>
        </div>
    </div> 
</div>

      <?php if(isset($_SESSION["user"])) { ?>  
            <p><?php echo $message; ?></p> <!--  If user is logged in, display welcome message -->
      <?php } else { ?>
            <?php echo "Search for a property"; } ?> <!--  Other display instrcutions -->
      
      <?php if(isset($_SESSION["user"])) { ?> <!--  If user is logged in, include the form -->
        <?php  
                        include 'structure/results-form.php';
        ?>
        <?php } ?>
      
  </body>
</html>

<!-- Begin Footer -->

<?php include_once("../../includes/templates/footer.php"); ?>   

<!-- End Footer -->