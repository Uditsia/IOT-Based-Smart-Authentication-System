window.onload =init();
function init(){
    document.querySelector("#s1").addEventListener("click", function(evt){

       let authSub1 = document.querySelector("#authSub1");
       authSub1.style="left:-950px;opacity:0;";
       let authSub2 = document.querySelector("#authSub2");
       authSub2.style="left:30%;opacity:1;";

       //HR width
       document.querySelector(".hr1").style="width:100%;";
    });
}