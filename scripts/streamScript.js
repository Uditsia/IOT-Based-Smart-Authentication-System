window.onload = init();
function init() {
  let liveStream = document.querySelector("#lStream");
  //   let time = document.querySelector("#timeView label");
  //   let d = new Date();
  //   setInterval(function() {
  //     time.innerHTML =
  //       "Date:" + Date().slice(0, 16) + "Time:" + Date().slice(15, 25);
  //   }, 300);

  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      console.log("Loged in as:" + user);
    } else {
      window.location = "../index.html";
    }
  });
}
