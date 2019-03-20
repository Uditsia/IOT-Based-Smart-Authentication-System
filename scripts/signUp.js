window.onload = sInit();
function sInit() {
  let signinCreate = document.querySelector(".create");
  let createAcc = document.querySelector(".createAcc");
  let createAccMain = document.querySelector(".createAccMain");
  let authMain = document.querySelector(".authMain");
  let closeBtn = document.querySelector(".close");
  let fName = document.querySelector("#fName");
  let signupAccBtn = document.querySelector(".createB1");
  let createEmail = document.querySelector("#cEmail").value;
  let createPassword = document.querySelector("#cPass").value;

  signupAccBtn.addEventListener("click", runCheck);
  signinCreate.addEventListener("click", showCreateAcc);
  function showCreateAcc() {
    createAcc.style = "height:100vh;";
    createAccMain.style = "height:60vh";
    authMain.style = "display:none;";
    fName.focus();
  }
  closeBtn.addEventListener("click", closeCreate);
  function closeCreate() {
    createAcc.style = "height:0;";
    createAccMain.style = "height:0";
    setTimeout(() => {
      authMain.style = "display:block;";
      email.focus();
    }, 500);
  }
  function runCheck(evt) {
    let createEmail = document.querySelector("#cEmail").value;
    let createPassword = document.querySelector("#cPass").value;
    let ccPass = document.querySelector("#ccPass").value;
    let cEmail = document.querySelector("#cEmail");
    let cPass = document.querySelector("#cPass");
    let pCode = document.querySelector("#pCode");
    var errorSpan = document.querySelector(".signup_error");
    if (cEmail.checkValidity()) {
      if (cPass.checkValidity()) {
        if (pCode.checkValidity()) {
          runCreateAcc(createEmail, createPassword);
        }
      }
    }
  }
  function runCreateAcc(createEmail, createPassword) {
    firebase
      .auth()
      .createUserWithEmailAndPassword(createEmail, createPassword)

      .catch(function(error) {
        var errorMessage = error.message;
        console.log("signUp error", error);
        document.getElementById("signup_error").innerHTML = errorMessage;
      });
    firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
        window.location = "pages/stream.php";
      } else {
        console.log("not logged in");
      }
    });
  }
}
