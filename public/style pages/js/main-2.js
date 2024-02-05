
// Start login 
let passwordHidden=document.querySelector("#passwordHiddenLogin")
let passwordShow=document.querySelector("#passwordShow")
let password=document.querySelector("input[type='password']")

passwordHidden.addEventListener("click",function(){
    passwordHidden.style.display="none";
    passwordShow.style.display="inline-block";
    password.type="text";
    passwordShow.onclick=function(){
        passwordHidden.style.display="inline-block";
        passwordShow.style.display="none";
        password.type="password";
    }
})

passwordHidden.addEventListener("click",function(){
    passwordHidden.style.display="none";
    passwordShow.style.display="inline-block";
    password.type="text";
    passwordShow.addEventListener("click",function(){
        passwordHidden.style.display="inline-block";
        passwordShow.style.display="none";
        password.type="password";
    })
})
// End login
