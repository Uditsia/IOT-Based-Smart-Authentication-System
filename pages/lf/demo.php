<?php
session_start();

?>

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
		
		.footer {
  padding: 30px; /* Some padding */
  text-align: center; /* Center text*/
  background: #F5BF43; /* Grey background */
}


	.body {
  padding: 350px; /* Some padding */
  text-align: center; /* Center text*/
  background: #CDD5F3;
  color: black;/* Grey background */
}


.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;
  cursor: pointer;
  
   position: absolute;
  left: 50px;
  top: 50px;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button1:hover {
  background-color: #f44336;
  color: white;
}
	
		
	</style>


<body>
    <div class="header">
	         <button class="button button1" onclick="window.location.href='NewFile1.php'">Back</button>
  <h1>User Details</h1>
    </div>
    <div class="body">
    <?php
        echo "hii";

        $con= mysqli_connect("localhost","iotuser", "iotpass54321","iotdb");
        
        echo"hii";
       
         
        echo "hii";
        $user= $_SESSION['user'];
      $pass= $_SESSION['pass'];
       
      echo $user;
      echo $pass;
        
        $query = mysqli_query($con, "SELECT * FROM iotproject WHERE Userid='$user' AND Password= '$pass'");
 
        
 
        while($query_execute=mysqli_fetch_assoc($query)){
            
            echo "<br>";
            echo "NAME: " .$query_execute['Name']; echo "<br>";
            echo "Email: " .$query_execute['Email']; echo "<br>";
            echo "PHONE NUMBER: " .$query_execute['Phn no.']; echo "<br>";
            echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
            
            
        
}
        
       
         
        
            
            
        



     ?>
     </div>
     <div class="footer">
 
</div> 

</body>
</html>
