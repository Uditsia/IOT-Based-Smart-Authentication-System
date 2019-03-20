(() => {
  let overlay = document.querySelector(".overlay");
  let lf = document.querySelector(".lf");
  lf.addEventListener("click", () => {
    overlay.style = "height:100vh;";
  });
  let gas = document.querySelector(".gas");
  gas.addEventListener("click", () => {
    overlay.style = "height:100vh;";
    document.querySelector("iframe").src = "../pages/gas/index.php";
  });
})();
