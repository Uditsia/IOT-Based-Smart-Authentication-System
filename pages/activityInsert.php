<?php
$servername = "localhost";
$username = "iotuser";
$password = "iotpass54321";
$dbname = "iotdb";

$frame_url = $_REQUEST['frame_url'];
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

$sql = "INSERT INTO `activity` (`sl_no`, `timestamp`, `person_name`, `frame_url`, `status`) VALUES (NULL, CURRENT_TIMESTAMP, 'NA', '$frame_url', '$status')";

if ($conn->query($sql) === TRUE) {
    echo "activity inserted";
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