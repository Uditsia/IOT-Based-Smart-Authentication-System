
<?php

$servername = "localhost";
$username = "iotuser";
$password = "iotpass54321";
$dbname = "iotdb";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ip FROM `camera_ip` WHERE `no`=1 ";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["ip"];
    }
} else {
    echo "";
}

$conn->close();


?>