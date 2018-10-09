window.onload = init();
function init() {
  let liveStream = document.querySelector("#lStream");
  var img = document.querySelector("img");
  let loadingContainer = document.querySelector(".container");
  let imgUrl = document.querySelector("#cam_ip").innerHTML;
  liveStream.src = "" + imgUrl + "/video_feed";

  if (imgUrl != "") {
    loadingContainer.style = "display:none;";

    document.querySelector(".liveTxt").textContent = "LIVE";
    console.log("streaming");
  } else {
    setTimeout(() => {
      if (document.querySelector(".liveTxt").textContent !== "LIVE") {
        location.reload();
      }
    }, 20000);
  }
  var camResponse;
  var camOrder = "status";
  getCamStatus();

  function getCamStatus() {
    var url = imgUrl;
    var settings = {
      async: true,
      crossDomain: true,
      url: url + "/capture_camera?arg=" + camOrder,
      method: "GET",
      headers: {
        "Cache-Control": "no-cache"
      }
    };
    $.ajax(settings).done(function(response) {
      console.log(response);
      camResponse = response;
    });
  }

  let camStatsBtn = document.querySelector(".camStatsBtn");
  camStatsBtn.addEventListener("click", checkCamStats);
  function checkCamStats() {
    getCamStatus();
    if (camResponse == "True") {
    }
  }
  let camBtn = document.querySelector(".camStatsBtn");
  camBtn.addEventListener("click", () => {
    let camB1 = document.querySelector(".camB1");
    camB1.style = "margin-left:60%;color:red;";
    camB1.textContent = "off";
    let camTxt = document.querySelector(".camArmed");
    camTxt.textContent = "Disarmed";
    camTxt.style = "color:red;";
  });
}
