window.onload = init();
function init() {
  let liveStream = document.querySelector("#lStream");
  var img = document.querySelector("img");
  let loadingContainer = document.querySelector(".container");

  img.onload = () => {
    loadingContainer.style = "display:none;";
    document.querySelector(".liveTxt").textContent = "LIVE";
    console.log("streaming");
  };
  setTimeout(() => {
    if (document.querySelector(".liveTxt").textContent !== "LIVE") {
      location.reload();
    }
  }, 10000);
}
