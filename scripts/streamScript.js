window.onload = init();
function init() {
  let liveStream = document.querySelector("#lStream");
  var img = document.querySelector("img");
  let loadingContainer = document.querySelector(".container");
  let imgUrl = document.querySelector("#cam_ip").innerHTML;
  liveStream.src = "" + imgUrl + "/video_feed";
  var camStatsSpan = document.querySelector(".connectionStats");
  let camB1 = document.querySelector(".camB1");
  let camTxt = document.querySelector(".camArmed");
  var url = imgUrl;
  var camResponse;
  var camOrder = "status";
  getCamStatus();

  function getCamStatus() {
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
      getResponse(response);
    });
    $.ajax(settings).fail(function(response1) {
      console.log("fail:" + response1);
      fetFailResponse(response1);
    });
  }
  function fetFailResponse(response1) {
    setTimeout(() => {
      location.reload();
    }, 6000);
  }
  function getResponse(response) {
    if (response === "False") {
      camStatsSpan.innerHTML = "Disconnected!!";
      camStatsSpan.style = "color:red;";
      camB1.style = "margin-left:60%;color:red;";
      camB1.textContent = "off";
      camTxt.textContent = "Disarmed";
      camTxt.style = "color:red;";
    } else {
      camStatsSpan.innerHTML = "Connected";
      camStatsSpan.style = "color:rgb(26, 211, 26);";
    }
  }

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
  var settings2 = {
    async: true,
    crossDomain: true,
    url: url + "/capture_camera?arg=start",
    method: "GET",
    headers: {
      "Cache-Control": "no-cache"
    }
  };
  var settings3 = {
    async: true,
    crossDomain: true,
    url: url + "/capture_camera?arg=stop",
    method: "GET",
    headers: {
      "Cache-Control": "no-cache"
    }
  };
  let camBtn = document.querySelector(".camStatsBtn");
  camBtn.addEventListener("click", checkCamStats);
  function checkCamStats() {
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
      if (response === "False") {
        $.ajax(settings2).done(function(response) {
          if (response === "True") {
            camStatsSpan.innerHTML = "Connected";
            camB1.style = "margin-left:0%;color:green;";
            camB1.textContent = "on";
            camTxt.textContent = "Armed";
            camTxt.style = "color: rgba(30, 255, 0, 0.274);";
          }
        });
      } else {
        $.ajax(settings3).done(function(response) {
          if (response === "False") {
            camStatsSpan.innerHTML = "Disconnected!!";
            camB1.style = "margin-left:60%;color:red;";
            camB1.textContent = "off";
            camTxt.textContent = "Disarmed";
            camTxt.style = "color:red;";
          }
        });
      }
    });
  }

  //   camBtn.addEventListener("click", () => {
  //     camB1.style = "margin-left:60%;color:red;";
  //     camB1.textContent = "off";
  //     camTxt.textContent = "Disarmed";
  //     camTxt.style = "color:red;";
  //   });
}
