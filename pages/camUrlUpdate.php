 <?php
$servername = "localhost";
$username = "iotuser";
$password = "iotpass54321";
$dbname = "iotdb";

$ip = $_REQUEST['ip'];

$pin = $_REQUEST['pin'];
if($pin== "cam321")
{
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `camera_ip` SET `ip`='$ip' WHERE `no`=1 ";

if ($conn->query($sql) === TRUE) {
    echo "ip updated";
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