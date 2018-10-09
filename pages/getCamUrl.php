<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#62000ea">
    <link rel="icon" sizes="192x192" href="../resorces/Imgs/index-page/profilePic.png">
    <title>Live Stream</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../styles/streamStyle.css" />
    <link rel="stylesheet" href="../styles/loadingAnimation.css">
    <link rel="stylesheet" href="../styles/navStyle.css">
    <script src="https://www.gstatic.com/firebasejs/5.5.3/firebase.js"></script>
    <script>
        // Initialize Firebase
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
</head>

<body>
    <header>
        <nav>
            <div class="profile navEle"></div>
            <div class="signOut navEle"></div>
            <div class="status navEle"></div>
            <div></div>
        </nav>
    </header>

    <section>
        <article>
            <div class="liveBox">
                <div class="liveSym">
                    <div class="redDot"></div><label class="liveTxt">Loading...</label>
                </div>
                <div class="container">
                    <p>Buffering...</p>
                    <i class="loading" title="loading" alt="Loading...">
                        <div class="loadRound lr-1"></div>
                        <div class="loadRound lr-2"></div>
                        <div class="loadRound lr-3"></div>
                    </i>
                </div>

                <img id="lStream" width="620px" height="462px">
                <!-- <img id="lStream" src="http://www.visitgreece.gr/deployedFiles/StaticFiles/Photos/Generic%20Contents/Forests/mountains_2_560.jpg"
                    width="620px" height="462px"> -->
                <!-- <div class="timeView" id="timeView"> <label>Date: Time:</label></div> -->
                <div class="streamControl" id="streamControl"></div>
            </div>
            <div class="camStats">
                <div class="camStatsBtn">
                    <span class="hiddenBtn HB1">on</span>
                    <button class="camB1">on</button>
                    <span class="hiddenBtn HB2">off</span>
                </div>
                <span class="camArmed">Armed</span><br>
                <span class="camStatsTxt">Cam Status:<span>Connected</span></span>
            </div>
        </article>
    </section>
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

$sql = "SELECT ip FROM `camera_ip` WHERE `no`=1 ";

$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<h3 id='cam_ip' hidden>".$row["ip"]."</h3>";
    }
} else {
    echo "";
}

$conn->close();


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../scripts/streamScript.js"></script>
</body>

</html>