$(document).ready(function(){
    
    //console.log("jquery works"); //used to test results.
    
    $(".login-box").hide(); //selecting element, ie login box. And hiding it. 
    
    $(".toggle-box").click(function() { //click function with response 
        $(".login-box").slideToggle();
                           
    });    
});