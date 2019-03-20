<?php
$con= mysqli_connect("localhost","iotuser", "iotpass54321","iotdb");

session_start();

 // $_SESSION['user']=$user;
  
$user=$_GET['userid'];
$now=new DateTime(null,new DateTimeZone('Asia/Kolkata'));
$dt=$now->format('y-m-d H:i:s');

$PIR=$_GET['pir'];
$LDR=$_GET['ldr'];

$temp =$_GET['temp'];
$humidity =$_GET['hum'];
$bulb =$_GET['bulb'];
$fan =$_GET['fan'];


//$sql = "insert into User values ('$user','$PIR','$temp' ,'$humidity', '$bulb', '$fan','$LDR')";
$sql = "INSERT INTO `User` VALUES ('$user','$PIR','$temp' ,'$humidity', '$bulb', '$fan','$LDR', '$dt')";




if($con->query($sql)){
    
    echo"DATA INSERTED";
}
else
echo"error";