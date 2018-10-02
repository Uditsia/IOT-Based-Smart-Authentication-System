window.onload =init();
function init(){

    document.querySelector("#s1").addEventListener("click", function(evt){

        let email = document.querySelector("#email");
        let emailCheck = email.checkValidity()
        if (emailCheck){
            sub1Transition();
        }else{
            
        }




       function sub1Transition(){
       let authSub1 = document.querySelector("#authSub1");
       authSub1.style="left:-700px;opacity:0;";
       let authSub2 = document.querySelector("#authSub2");
       authSub2.style="left:30%;opacity:1;";
       setTimeout(function(){ document.querySelector("#pass").focus();},1000);
       
       //HR width
       let hr = document.querySelector(".hr1");
       hr.style="width:100%;";
       setTimeout(function(){hr.style="width:60%;"},1000);
       }

    });
    
    document.querySelector("#back").addEventListener("click",function(){
        authSub1.style="left:30%;opacity:1;";
        authSub2.style="left:948px;opacity:0;";
        document.querySelector("#email").focus();
    });



}