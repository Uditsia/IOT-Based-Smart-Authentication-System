<?php
session_start();


$con= mysqli_connect("localhost","iotuser", "iotpass54321","iotdb");

//echo"1111";
$user= $_SESSION['user'];
$pass= $_SESSION['pass'];

//echo $user;
// echo $pass;


/*while($query_execute=mysqli_fetch_assoc($query)){

echo "DATE & TIME:" .$query_execute['Timestamp']; echo "<br>";
echo "LDR:" .$query_execute['LDR']; echo "<br>";
echo "TEMPERATURE: " .$query_execute['Temp']; echo "<br>";
echo "HUMIDITY: " .$query_execute['Humidity']; echo "<br>";

echo "<br>";

if($query_execute['PIR']=="1")
{echo "PRESENT";}
else {echo "ABSENT";}
echo "<br>";
if($query_execute['Bulb']=="1")
{echo "<img src='images/15bb4aca887bf24b86b543be71a4e163.png'    style='height: 150px;'></img>";}
else {echo "<img src='images/85e2b59ddbd5fa48cd130d4d386065ae.png' style='height: 150px;'></img>";}
if($query_execute['Fan']=="1")
{echo "<img src='images/animated-fan-image-0009.gif'  style='height: 150px;'></img>";}
else {echo "<img src='images/fan_PNG14458.png'  style='height: 150px;'></img>";}



}


echo "<script language='JavaScript' type='text/javascript'>
setInterval(()=>{
location.reload();
},5000);
</script>";*/







?>
     
     
     
     
     
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="7">
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
  background: #1abc9c; /* green background */
  color: white; /* white text color */
}

/* Increase the font size of the <h1> element */
.header h1 {
  font-size: 30px;
}


.body {
  padding: 220px; /* Some padding */
  text-align: center; /* Center text*/
  background: #CDD5F3;
  color: black;/* Grey background */
}

		
		.footer {
  padding: 30px; 
  text-align: center;
  background: #25BAAB;
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
	
	<script>
	


	
	

	</script>
	
	</head>
	
	<body>
	    
	     <div class="header">
	         <button class="button button1" onclick="window.location.href='NewFile1.php'">Back</button>
  <h1>Appliance Details</h1>
 
</div> 

<div class="body">
	    <center>
	    
	    <form>
	    
	    <?php
	    
	    
	    
	    $query = mysqli_query($con, "SELECT * FROM `User` WHERE Userid='S1' ORDER BY `Timestamp` DESC LIMIT 1 ");
	        
	        
	        $rows = mysqli_num_rows($query);
	        //echo $rows;
	        
	        if($rows == 1){
	        
	    while($query_execute=mysqli_fetch_assoc($query)){
            
            echo "DATE & TIME:" .$query_execute['Timestamp']; echo "<br>";
           echo "LDR:" .$query_execute['LDR']; echo "<br>";
            echo "TEMPERATURE: " .$query_execute['Temp']; echo "<br>";
            echo "HUMIDITY: " .$query_execute['Humidity']; echo "<br>";
        
            echo "<br>";
            
             if($query_execute['PIR']=="1")
            {echo "PRESENT";}
            else {echo "ABSENT";}
           echo "<br>";
            if($query_execute['Bulb']=="1")
            {echo "<img src='images/15bb4aca887bf24b86b543be71a4e163.png'    style='height: 150px;'></img>";}
            else {echo "<img src='images/85e2b59ddbd5fa48cd130d4d386065ae.png' style='height: 150px;'></img>";}
            echo "<br>";
            ?>
            

            
            <?php
            
            echo "<br>";
            
            if($query_execute['Fan']=="1")
            {echo "<img src='images/animated-fan-image-0009.gif'  style='height: 150px;'></img>";}
            else {echo "<img src='images/fan_PNG14458.png'  style='height: 150px;'></img>";}
	    }
	        }
	        
	        else
	        {echo "No Records Found";}
	   
	    
	    echo "<br>";
	    ?>
	   
	    <php
	    
           
	    ?>
	        
	        
</form></center>
</div>
 <div class="footer">
  
</div> 
</body>
     
     
</html>

