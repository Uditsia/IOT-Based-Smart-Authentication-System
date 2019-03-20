<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.cycle.all.js" type="text/javascript"></script>
	<script src="js/bootstrap.js"></script>
	<style type="text/css">
		@import url(css/style.css);



	.header {
  padding: 40px; /* some padding */
  text-align: center; /* center the text */
  background: #F5BF43; /* green background */
  color: white; /* white text color */
}

/* Increase the font size of the <h1> element */
.header h1 {
  font-size: 30px;
}

	</style>
	
	<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

/*function navigate(url)
{
	$('#main-container').load(url);
}*/

function divHide(role){
	$('#'+role).hide();
	$('#'+role+'div').fadeIn(1000);	
}

function divShow(role){
	$('#'+role).show();
	$('#'+role+'div').fadeIn(1000);	
}
</script>


</head>
<body>

<div class="header">
<h1> Smart Light & Fan

</div>





<div class="topnav" id="myTopnav">
  <a href="light.php">Appliance Details</a>
  <a href="demo.php">User Details</a>
  <a href="Contact.php">Contact</a>
 
</div>
<div class="col-sm-12 pad-10" id="main-container"> 
<center>
ABOUT THE PROJECT<br>
INFO<br>
WORKING<br>
MAKERS<br>

</center>

 </div>
</body>
</html>