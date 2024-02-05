// Start Send code if forget password
let InputOne=document.querySelector("input[name='code1']")
let InputTwo=document.querySelector("input[name='code2']")
let InputThree=document.querySelector("input[name='code3']")
let InputFour=document.querySelector("input[name='code4']")
InputOne.onkeyup=function(){
    InputTwo.focus();
    clearInterval(interval);
}
InputTwo.onkeyup=function(){
    InputThree.focus();
    clearInterval(interval);
}
InputThree.onkeyup=function(){
    InputFour.focus();
    clearInterval(interval);
}
// End Send code if forget password


// Start Time Send
var SpanTime=document.querySelector("#timeSend");
var ResendMess=document.querySelector(".resentMess")
var seconds=0;

function countTime(){
    seconds++;
    if(seconds==60){
        seconds="00";
        clearInterval(interval);
    }
    writeCounter();
}
function writeCounter(){
    SpanTime.innerHTML=`00:${seconds}`;
}
var interval=setInterval(countTime,400)
ResendMess.onclick=function(){
    seconds=0;
    setInterval(countTime,400)
}
// End  Time Send