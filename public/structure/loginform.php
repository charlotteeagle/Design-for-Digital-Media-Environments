?>
<?php 
    
    if(isset($_POST["submit"])) {
        $house_title = ucfirst($_POST["house_title"]);
        $house_price = ($_POST["house_price"]);

            
        
    } else {
        $house_title = "";
        $house_price = "";

    }
    
?>