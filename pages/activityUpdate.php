<?php
$servername = "localhost";
$username = "iotuser";
$password = "iotpass54321";
$dbname = "iotdb";

$slno = $_REQUEST['slno'];
$name = $_REQUEST['name'];
$status = $_REQUEST['status'];

$pin = $_REQUEST['pin'];
if($pin== "act321")
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `activity` SET `person_name`='$name' , `status`='$status' WHERE `sl_no`='$slno' ";

if ($conn->query($sql) === TRUE) {
    echo "activity updated";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
else
{
 echo "invalid pin ".$pin;
}

?> 