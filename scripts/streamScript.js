window.onload = init();
function init() {
  let liveStream = document.querySelector("#lStream");
  let imgUrl = document.querySelector("#cam_ip").innerHTML;
  liveStream.src = imgUrl;

  var url = imgUrl;

  if (imgUrl != "") {
    liveTxt = "LIVE";
  } else {
    setTimeout(() => {
      if (liveTxt !== "LIVE") {
        location.reload();
      }
    }, 20000);
  }
  document.querySelector(".status").addEventListener("click", () => {
    window.open("http://3.18.180.154/pages/activity.php", "_blank");
  });
  document.querySelector(".signOut").addEventListener("click", signOut);
  function signOut() {
    firebase
      .auth()
      .signOut()
      .then(function() {
        console.log("Sign-out successful.");
      })
      .catch(function(error) {
        console.log("An error happened.", error);
      });
  }
  let overlay = document.querySelector(".overlay");
  let lf = document.querySelector(".lf");
  lf.addEventListener("click", () => {
    document.querySelector("iframe").src = "../pages/lf/NewFile1.php";
    overlay.style = "height:100vh;";
  });
  let gas = document.querySelector(".gas");
  gas.addEventListener("click", () => {
    overlay.style = "height:100vh;";
    document.querySelector("iframe").src = "../pages/gas/index.php";
  });
  overlay.addEventListener("click", () => {
    overlay.style = "height:0vh;";
  });
}
