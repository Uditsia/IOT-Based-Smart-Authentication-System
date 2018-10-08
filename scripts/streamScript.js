window.onload = init();
function init() {
  let liveStream = document.querySelector("#lStream");
  var img = document.querySelector("img");
  let loadingContainer = document.querySelector(".container");
  let imgUrl = document.querySelector("#cam_ip").innerHTML;
  liveStream.src = "" + imgUrl + "/video_feed";

  /* liveStream.onSuccess = () => {
    loadingContainer.style = "display:none;";
    document.querySelector(".liveTxt").textContent = "LIVE";
    console.log("streaming");
  };
  setTimeout(() => {
    if (document.querySelector(".liveTxt").textContent !== "LIVE") {
      location.reload();
    }
  }, 20000);*/

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
}
