    <?php
$servername = "localhost";
$username = "id7403524_cam_db_ur";
$password = "iot12345";
$dbname = "id7403524_cam_db";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `activity` WHERE `person_name`='NA'";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "".$row["sl_no"]."=".$row["frame_url"].",";
       
    }
} else {
    echo "";
}

$conn->close();


?>