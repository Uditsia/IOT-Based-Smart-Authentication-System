<?php

    // Prepare variables for database connection
   
    $handler = new PDO('mysql:host=localhost;dbname=iotdb','iotuser','iotpass54321');
    echo 'connected';

    $gasvalue=$_GET['gasvalue'];
    $fan=$_GET['fstatus'];
    $buzzer=$_GET['bstatus'];
    
	echo $fan;
	echo $buzzer;
   
	//$gas = 25;
	//$fan = 30;
	//$buzzer = 145;
	
   
    // Prepare the SQL statement

    $sql1 = "INSERT INTO `Gasmonitoring` (`sensorid`, `value`, `fan`, `buzzer`, `time`) VALUES (1, '$gasvalue', '$fan', '$buzzer', CURRENT_TIMESTAMP)";    
    $query1 = $handler->prepare($sql1);

    // Execute statement
    $query1->execute();
/*
     $sql2 = "INSERT INTO `Gasmonitoring` (`sensorid`, `value`, `time`) VALUES (2, '$fan', CURRENT_TIMESTAMP)";    
    $query2 = $handler->prepare($sql2);

    // Execute statement
    $query2->execute();

     $sql3 = "INSERT INTO `Gasmonitoring` (`sensorid`, `value`, `time`) VALUES (3, '$buzzer', CURRENT_TIMESTAMP)";    
    $query3 = $handler->prepare($sql3);
    
    // Execute statement
    $query3->execute();
*/
 
?>
