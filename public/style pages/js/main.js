

// Start SignIn

let FirstName=document.querySelector("input[name='fName'")
let LastName=document.querySelector("input[name='LName']")
let phone=document.querySelector("input[name='phoneOR Email']")
let password=document.querySelector("input[name='password']")
let SendCreation=document.querySelector("#SendCreation")
let passwordHidden=document.querySelector("#passwordHidden")
let passwordShow=document.querySelector(".showPassword")
let showWarning=document.getElementById("showWarning");

SendCreation.addEventListener("click", function(e){
    if(FirstName.value==="" ||LastName.value=== ""|| phone.value==""|| password.value==""){
        e.preventDefault();
        FirstName.placeholder="يجب ادخال الاسم الاول";
        LastName.placeholder="يجب ادخال الاسم الاخير";
        phone.placeholder="يجب ادخال الاسم رقم الهاتف او الإيميل";
        password.placeholder="يجب ادخال كلمة المرور";
        FirstName.setAttribute("class","ColorPlaceholder")
        LastName.setAttribute("class","ColorPlaceholder")
        phone.setAttribute("id","ColorPlaceholder2")
        password.setAttribute("id","ColorPlaceholder3")
    }else if(FirstName.value!="" ||LastName.value!= ""|| phone.value!=""|| password.value!=""){
        if(password.value.length>=8){
            
        }else{

        }
    }
});
password.addEventListener("keyup",function(){
    if(password.value.length>=8){
    showWarning.innerHTML="";
    }else{
        showWarning.innerHTML="يجب الا تقل كلمه المرور عن 8 ";
        showWarning.style.color="red";
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

// End SignIn
