window.onload = sInit();
function sInit() {
  let createB1 = document.querySelector(".create");
  let createAcc = document.querySelector(".createAcc");
  let createAccMain = document.querySelector(".createAccMain");
  let authMain = document.querySelector(".authMain");
  createB1.addEventListener("click", showCreateAcc);
  function showCreateAcc() {
    createAcc.style = "height:100%;";
    createAccMain.style = "height:90vh";
    authMain.style = "display:none;";
  }
}
