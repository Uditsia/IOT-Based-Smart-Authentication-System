window.onload = init();
function init(){
    let liveStream = document.querySelector("#lStream");
    liveStream.onload = setImg(liveStream);
}
function setImg(liveStream){
    liveStream.src = "https://icon2.kisspng.com/20180419/kxe/kisspng-check-mark-computer-icons-correct-5ad8925869b090.5548694115241426804329.jpg";
    requestAnimationFrame(setImg);
}