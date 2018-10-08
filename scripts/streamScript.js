window.onload = init();
function init() {
  let liveStream = document.querySelector("#lStream");
  var img = document.querySelector("img");
  let loadingContainer = document.querySelector(".container");

  img.onload = () => {
    loadingContainer.style = "display:none;";
    console.log("streaming");
  };
}
