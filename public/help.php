<?php 
    require_once("../include/session.php");   
    require_once("../include/connect.php"); 
    include_once("../include/templates/header.php");
    include_once("../include/templates/menuheader.php");
?>
<head>
<meta name="viewport" content="initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Abeezee:400|Open+Sans:400,600,700|Source+Sans+Pro:400,600">
	<link rel="stylesheet" type="text/css" href="demo.css">

	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../public/js/help.js"></script>
</head>

    <div class="help">    
<div class="helpmain">
    <h1 align= "center" style="font-size: 3em">Bournemouth Homes Help</h1>
                <img class="img-width" src="images/View_from_balloon,_facing_Swanage_-_geograph.org.uk_-_317087.jpg">


	<div class="accordion">
			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-1">What Is Bournemouth Homes</a>
				<div id="accordion-1" class="accordion-section-content">
					<p style="font-size: 1.8em">Bournemouth Homes is an easy to use and efficient web application which allows you to search houses for sale in the Bournemouth area, showing you the locations, prices and house images in order for you to find your perfect home. As well as displaying search results you are able to post your own properties through entering the appropriate information, after signing up. </p>
				</div>
			</div>

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-2">How To Search</a>
				<div id="accordion-2" class="accordion-section-content">
					<p style="font-size: 1.8em">There is no need to sign up to Bournemouth Homes in order to browse through the house listings. On the home page you are able to filter the house results by choosing the location you desire from the drop down menu.  You are then given the option the sort your results by showing the newest or oldest listings first.  Clicking on find will reveal the results below. </p>
				</div>
			</div>

			<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-3">How To Sign Up / Log In</a>
				<div id="accordion-3" class="accordion-section-content">
					<p style="font-size: 1.8em">If you are interested in posting your own houses for sale you will need to sign up to Bournemouth Homes. This quick and easy process entails you filling out an account form which asks for your name, email and password. You can sign up by clicking on the 'sign up' button, which can be found in the top navigation bar. Once you have signed up, you can easily log in the next time you return or time out by clicking on 'login' on the top right hand corner of the home page. After entering your username and password correctly you will be greeted back. From then on you may submit your properties to the listings.</p>
				</div>
			</div>
        <div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-4">Track The Web Applications Development</a>
				<div id="accordion-4" class="accordion-section-content">
					<p style="font-size: 1.8em">Interested in the development and creation of this property web application? Click on the wiki button placed in the top navigation bar to see our groups research and thoughts during the planning process for our web application task. 
To see the group members individual thoughts and ideas towards this task, click on the name below to see the linked members blog...</p>
                    <li><a href= " http://chrislangley666.wordpress.com" style="font-size:1.8em">Chris's Blog</a></li>
                    <li><a href="http://davidwattsdmd.wordpress.com" style="font-size:1.8em">David's Blog</a></li>
                    <li><a href="http://charlotteeagle.wordpress.com" style="font-size:1.8em">Charlotte's Blog</a></li>
				</div>
			</div>
		</div>

	</div>     
</div>

<!-- Begin Footer -->
<?php include_once("../include/templates/footer.php"); ?> 
<!-- End Footer -->