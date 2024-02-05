let btn=document.getElementById("headBtn");
let loading=document.querySelector(".loadingScroll")
btn.onclick=function(){
    loading.style.marginTop="200px";
    btn.onclick=function(){
    loading.style.marginTop="0px";
    }
}
// End Scrolls


// Start Video Page
var IconVideoContent=document.querySelector(".learnVideo .box")
var IconVideo=Array.from(document.querySelectorAll(".learnVideo .box .image"))
var playVideo=document.querySelector(".playVideo");
var AllVideo=Array.from(document.querySelectorAll(".learnVideo .image video"))
var OthersVideo=document.querySelector(".OthersVideo")


var MoreVideo=Array.from(document.querySelectorAll(".OthersVideo video"))
var MoreVideoIcon=Array.from(document.querySelectorAll(".OthersVideo .box .video"))
console.log(MoreVideoIcon);

for(let i=0;i<=AllVideo.length;i++){
    if(IconVideo[i]!== undefined){
        IconVideo[i].onclick=function(){
            console.log(AllVideo[i]);
            Src=AllVideo[i].getAttribute("src");
            playVideo.innerHTML=`
            <div class="SeeVideo position-relative">
            <div class="container">
                <div class="text">
                    <p>شرح الفيديو</p>
                    <h4>ما وراء الظلال: التغلب على العقبات الداخلية</h4>
                    <p>مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل. مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.</p>
                </div>
                <div class="mainVideo">
                    <video src="${Src}" class="VideoJs w-100" controls></video>
                </div>
            </div>
            <div class="image position-absolute">
                <img src="../style pages/image/lightmode.png" alt="" >
            </div>
        </div>`;
        OthersVideo.style.display="flex";
        }
    }
}


for(let i=0;i<=MoreVideo.length;i++){
    if(MoreVideoIcon[i]!== undefined){
        MoreVideoIcon[i].onclick=function(){
            Src=MoreVideo[i].getAttribute("src");
            playVideo.innerHTML=`
            <div class="SeeVideo">
            <div class="container">
                <div class="text">
                    <p>شرح الفيديو</p>
                    <h4>ما وراء الظلال: التغلب على العقبات الداخلية</h4>
                    <p>مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل. مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.</p>
                </div>
                <div class="mainVideo">
                    <video src="${Src}" class="VideoJs w-100" controls></video>
                </div>
            </div>
        </div>`;
        OthersVideo.style.display="flex";
        }
    }
}
// Start Page personal
var personal = document.querySelector(".ChangeInfo");
var ChangeEmail = document.getElementById("ChangeEmail");
var ChangePassWord = document.getElementById("ChangePassWord");
var ChangePhoto = document.getElementById("ChangePhoto");
var layerPersonal = document.querySelector(".layerPersonal");
var EmaChange = document.querySelector(".EmaChange");
var Exit=document.querySelector(".out")
var charImage=document.querySelector(".head .char")
var personImg=document.querySelector(".personal .personImg img")
console.log(Exit);

var storedEmail = localStorage.getItem("email");
if (storedEmail!==null && EmaChange) {
    EmaChange.value = storedEmail;
}
var storedImg=localStorage.getItem("srcimg");
    
if(personImg){
    window.addEventListener("load", function () {
        if (storedImg !== null) {
            charImage.setAttribute("src", storedImg);
            personImg.setAttribute("src", storedImg);
        }
    });
}


if(ChangeEmail){
    ChangeEmail.addEventListener("click", function() {
        personal.innerHTML = `
        <div class="container text-center">
            <div class="text">
            <h3>تغيير البريد الألكتروني</h3>
            </div>
            <div class="Inputs">
            <i class="fa-regular fa-envelope"></i>
            <input type="email" placeholder="البريد الألكتروني الجديد" class="NewEmail">
            </div>
            <button>تغيير</button>
        </div>`;
        layerPersonal.addEventListener("click",function(){
            layerPersonal.style.display = "none";
            personal.innerHTML = "";
        })
        layerPersonal.style.display = "block";
        var Emailcha = document.querySelector(".NewEmail");
        var updateEmail = document.querySelector(".ChangeInfo button");
        updateEmail.addEventListener("click", function() {
            localStorage.setItem("email", Emailcha.value);
            EmaChange.value = Emailcha.value;
            layerPersonal.style.display = "none";
            personal.innerHTML = "";
            });
    });
}

if(ChangePassWord){
    ChangePassWord.addEventListener("click",function(){
        personal.innerHTML=`
        <div class="container text-center">
            <div class="text">
                <h3>تغيير كلمة المرور</h3>
            </div>
            <div class="Inputs">
                <i class="fa-solid fa-lock"></i>
                <input type="email" placeholder="كلمة المرو الحالية" class="OldPassword">
            </div>
            <div class="Inputs">
            <i class="fa-solid fa-lock"></i>
            <input type="email" placeholder="كلمة المرو الجديدة" class="NewPassword">
            </div>
            <button>تغيير</button>
        </div>
        `;
        layerPersonal.style.display = "block";
        var updatePass = document.querySelector(".ChangeInfo button");
        var OldPassword=document.querySelector(".OldPassword");
        var NewPassword=document.querySelector(".NewPassword");
            updatePass.addEventListener("click",function(){
                if(OldPassword.value !=="" && NewPassword.value !=="" ){
                    personal.innerHTML=`
                    <div class="container text-center">
                        <div class="iconRight">
                        <i class="fa-solid fa-check"></i>
                        </div>
                        <h3>تهانينا !</h3>
                        <p>تم تغيير كلمة المرور بنجاح</p>
                        <button class="Back">رجوع</button>
                    </div>
            `;
                }
                var BackBtn=document.querySelector(".ChangeInfo button.Back");
                if(BackBtn){
                    BackBtn.addEventListener("click", function() {
                        layerPersonal.style.display = "none";
                        personal.innerHTML = "";
                    });
                }
            })
            layerPersonal.addEventListener("click",function(){
                    layerPersonal.style.display = "none";
                    personal.innerHTML = "";
                })
            layerPersonal.style.display="block";
    })
    
}
if(ChangePhoto){
    ChangePhoto.addEventListener("click",function(){
        personal.innerHTML=`
        <div class="container text-center">
            <div class="text">
                <h3>تغيير كلمة المرور</h3>
            </div>
            <div class="images d-flex justify-content-center">
                <div>
                <img src="../style pages/image/Man.png" alt="" class="manPhoto">
                </div>
                <div>
                    <img src="../style pages/image/Char.png" alt="">
                </div>
            </div>
            <div class="IconImage">
                <i class="fa-solid fa-check"></i>
                <i class="fa-solid fa-check"></i>
            </div>
            <button>تغيير</button>
        </div>
        `
        layerPersonal.style.display="block";
        var imgMan=document.querySelector(".ChangeInfo .images div:first-child img");
        var imgGirl=document.querySelector(".ChangeInfo .images div:last-child img");
        let layerImage1=document.querySelector(".ChangeInfo .layersImage div:first-child");
        let layerImage2=document.querySelector(".ChangeInfo .layersImage div:last-child");
        let iconChooseGirl=document.querySelector(".ChangeInfo .IconImage i:first-child");
        let iconChooseMan=document.querySelector(".ChangeInfo .IconImage i:last-child");
        let UpdateImg=document.querySelector(".ChangeInfo button")
        console.log(imgMan);
        console.log(imgGirl);
        if(imgMan){
            imgMan.addEventListener("click",function(){
                iconChooseMan.style.display="block";
                iconChooseGirl.style.display="none";
                if(UpdateImg){
                    UpdateImg.addEventListener("click",function(){
                    charImage.setAttribute("src","../style pages/image/Man.png");
                    personImg.setAttribute("src","../style pages/image/Man.png");
                    localStorage.setItem("srcimg","../style pages/image/Man.png")
                    layerPersonal.style.display="none";
                    personal.innerHTML = "";
                    })
                }
            })
        }
        if(imgGirl){
            imgGirl.addEventListener("click",function(){
                iconChooseGirl.style.display="block";
                iconChooseMan.style.display="none";
                if(UpdateImg){
                    UpdateImg.addEventListener("click",function(){
                    charImage.setAttribute("src","../style pages/image/user profile photo.png");
                    personImg.setAttribute("src","../style pages/image/user profile photo.png");
                    localStorage.setItem("srcimg","../style pages/image/user profile photo.png");
                    layerPersonal.style.display="none";
                    personal.innerHTML = "";
                    })
                }
            })
        }
    })
    layerPersonal.addEventListener("click",function(){
        layerPersonal.style.display = "none";
        personal.innerHTML = "";
    })
}
if(Exit){
    Exit.addEventListener("click",function(){
        personal.innerHTML=`
    <div class="container text-center">
        <div class="text">
            <h3> تسجيل الخروج </h3>
        </div>
        <div class="Text text-center">
        <span>هل تريد تسجيل الخروج ؟</span><span> إذا كان لديك أي أسئلة أو استفسارات في المستقبل، فلا تتردد في العودة وطرحها.</span>
        </div>
        <div class="links d-flex justify-content-evenly">
            <a href="../pages/login.html">تسجيل الخروج</a>
            <a href="../pages/Personal.html">إلغاء</a>
        </div>
    </div>
        `;
        layerPersonal.style.display = "block";
        layerPersonal.addEventListener("click",function(){
            layerPersonal.style.display = "none";
            personal.innerHTML = "";
        })
    })
}

// End  Page personal



// start Page task

var AddTask = document.querySelector(".TodayTasks .content");
var WriteTask = document.querySelector("#WriteTask");
var IconAddTask = document.getElementById("insertTask");

var YesterdayTasks = document.querySelector(".YesterdayTasks .content");
var StoredItems = localStorage.getItem("item");

if (StoredItems !== null) {
    AddTask.innerHTML = StoredItems;
}

if (IconAddTask) {
    IconAddTask.addEventListener("click", function () {
    text = WriteTask.value;
    AddBox = document.createElement("div");
    AddBox.classList.add("box", "d-flex", "justify-content-between", "align-items-center");
    AddBox.style.backgroundColor = BGColor();

    AddBox.innerHTML += `
        <h4>${text}</h4>
        <i class="fa-solid fa-trash"></i>
        `;
    AddTask.appendChild(AddBox);
    localStorage.setItem("item", AddTask.innerHTML);
    });
}

AddTask.addEventListener("click", function (event) {
    if (event.target.matches("i")) {
    event.target.parentNode.remove();
    localStorage.setItem("item", AddTask.innerHTML);
    }
});

function BGColor() {
    const colors = ["#00B2FF", "#BA64CA", "#FE68BF", "#FF0000", "##00994F"];
    return colors[Math.floor(Math.random() * colors.length)];
}


// // End Page Task
