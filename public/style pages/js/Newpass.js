let passwordHidden=Array.from(document.querySelectorAll("#passwordHidden"))
let passwordShow=Array.from(document.querySelectorAll(".showPassword"))
let password=Array.from(document.querySelectorAll(".inputNewPass"))



    passwordHidden[0].addEventListener("click",function(){
        passwordHidden[0].style.display="none";
        passwordShow[0].style.display="inline-block";
        password[0].type="text";
        passwordShow[0].onclick=function(){
            passwordHidden[0].style.display="inline-block";
            passwordShow[0].style.display="none";
            password[0].type="password";
        }
    })
    passwordHidden[1].addEventListener("click",function(){
        passwordHidden[1].style.display="none";
        passwordShow[1].style.display="inline-block";
        password[1].type="text";
        passwordShow[1].onclick=function(){
            passwordHidden[1].style.display="inline-block";
            passwordShow[1].style.display="none";
            password[1].type="password";
        }
    })