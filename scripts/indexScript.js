window.onload = init();
function init() {
  let email = document.querySelector("#email");
  document.querySelector("#s1").addEventListener("click", eValidity);

  //sign in check

  firebase.auth().onAuthStateChanged(function(user) {
    if (user) {
      window.location = "../pages/getCamUrl.php";
    } else {
      console.log("not logged in");
    }
  });

  function eValidity(evt) {
    let emailCheck = email.checkValidity();
    if (emailCheck) {
      sub1Transition();
    } else {
      let eContainer = document.querySelector(".containerEmail");
      let errorB1 = document.querySelector(".containerEmail button");
      errorB1.textContent = "Invalid Email!";
      eContainer.style = "background-color:red;";
      errorB1.style = "background-color:red;";
      email.focus();
      email.addEventListener("input", function() {
        errorB1.textContent = "Next";
        errorB1.style = "background-color:#6200ea;";
        eContainer.style = "background-color:#6200ea;";
      });
    }

    function sub1Transition() {
      let authSub1 = document.querySelector("#authSub1");
      authSub1.style = "left:-700px;opacity:0;";
      let authSub2 = document.querySelector("#authSub2");
      authSub2.style = "left:30%;opacity:1;";
      setTimeout(function() {
        document.querySelector("#pass").focus();
      }, 1000);

      //HR width
      let hr = document.querySelector(".hr1");
      hr.style = "width:100%;";
      setTimeout(function() {
        hr.style = "width:60%;";
      }, 1000);
    }
  }
  email.addEventListener("keypress", function(evt) {
    const key = evt.keyCode;
    if (key === 13) {
      eValidity();
    }
  });
  let s2 = document.querySelector("#s2");
  s2.addEventListener("click", auth);
  document.querySelector("#back").addEventListener("click", function() {
    authSub1.style = "left:30%;opacity:1;";
    authSub2.style = "left:948px;opacity:0;";
    document.querySelector("#email").focus();
  });

  function auth() {
    email = document.getElementById("email").value;
    password = document.getElementById("pass").value;
    firebase
      .auth()
      .signInWithEmailAndPassword(email, password)
      .catch(function(error) {
        // Handle Errors here.
        var errorCode = error.code;
        var errorMessage = error.message;
        document.getElementById("signinError").innerHTML = errorMessage;
        setTimeout(clear, 5000);
        function clear() {
          document.getElementById("signinError").innerHTML = "";
        }
        // ...
        console.log(errorCode);
        console.log(errorMessage);
      });
    firebase.auth().onAuthStateChanged(function(user) {
      if (user) {
        console.log("Signed in:", user);
        window.location = "../pages/getCamUrl.php";
      } else {
        console.log("not signed in");
      }
    });
  }
}
