window.onload = init();
function init(){
    let liveStream = document.querySelector("#lStream");
    let time = document.querySelector("#timeView label");
    liveStream.onload = setImg(liveStream);
    let d = new Date;
    setInterval(function(){
       time.innerHTML ="Date:"+Date().slice(0,16)+"Time:"+Date().slice(15,25);
    },300);
    

}
function setImg(liveStream){
    //<----live photo---->
    liveStream.src = "https://icon2.kisspng.com/20180419/kxe/kisspng-check-mark-computer-icons-correct-5ad8925869b090.5548694115241426804329.jpg";
    requestAnimationFrame(setImg);  
}