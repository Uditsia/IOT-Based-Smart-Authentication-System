    <script src="https://www.gstatic.com/firebasejs/5.5.3/firebase.js"></script>
    <script>
     var config = {
            apiKey: "AIzaSyBLDNV-x3UyRbtbEj1iXk7-kMEwtRHRVh4",
            authDomain: "tat-iot-project.firebaseapp.com",
            databaseURL: "https://tat-iot-project.firebaseio.com",
            projectId: "tat-iot-project",
            storageBucket: "tat-iot-project.appspot.com",
            messagingSenderId: "868602080623"
        };
        firebase.initializeApp(config);

        firebase.auth().onAuthStateChanged(function (user) {
            if (user) {
                console.log("Loged in as:" + user);
            } else {
                window.location = "../index.html";
            }
        });
    </script>
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

$sql = "SELECT * FROM `activity`";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<table id='cam_act' border=1 ><tr><th>sl no</th><th>time</th><th>name</th><th>frame</th><th>status</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td >".$row["sl_no"]."</td>";
        echo "<td >".$row["timestamp"]."</td>";
        echo "<td >".$row["person_name"]."</td>";
        echo "<td ><img src='../frames/".$row["frame_url"]."' alt='captured frame' height='150' width='200'></td>";
        
        if($row["status"]==1)
        {
            echo "<td >Authorized</td>";
        }
        else
        {
            echo "<td >Unauthorized</td>";
        }
        echo "</tr>";
    }
} else {
    echo "No Data Available";
}

$conn->close();


?>