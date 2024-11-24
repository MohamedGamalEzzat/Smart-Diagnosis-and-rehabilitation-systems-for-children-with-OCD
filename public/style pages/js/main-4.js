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

// for(let i=0;i<=AllVideo.length;i++){
//     if(IconVideo[i]!== undefined){
//         IconVideo[i].onclick=function(){
//             console.log(AllVideo[i]);
//             Src=AllVideo[i].getAttribute("src");
//             playVideo.innerHTML=`
//             <div class="SeeVideo position-relative">
//             <div class="container">
//                 <div class="text">
//                     <p>شرح الفيديو</p>
//                     <h4>ما وراء الظلال: التغلب على العقبات الداخلية</h4>
//                     <p>مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل. مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.</p>
//                 </div>
//                 <div class="mainVideo">
//                     <video src="${Src}" class="VideoJs w-100" controls></video>
//                 </div>
//             </div>
//             <div class="image position-absolute">
//                 <img src="../style pages/image/lightmode.png" alt="" >
//             </div>
//         </div>`;
//         OthersVideo.style.display="flex";
//         }
//     }
// }


// for(let i=0;i<=MoreVideo.length;i++){
//     if(MoreVideoIcon[i]!== undefined){
//         MoreVideoIcon[i].onclick=function(){
//             Src=MoreVideo[i].getAttribute("src");
//             playVideo.innerHTML=`
//             <div class="SeeVideo">
//             <div class="container">
//                 <div class="text">
//                     <p>شرح الفيديو</p>
//                     <h4>ما وراء الظلال: التغلب على العقبات الداخلية</h4>
//                     <p>مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل. مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.</p>
//                 </div>
//                 <div class="mainVideo">
//                     <video src="${Src}" class="VideoJs w-100" controls></video>
//                 </div>
//             </div>
//         </div>`;
//         OthersVideo.style.display="flex";
//         }
//     }
// }
// Start Page personal
var personal = document.querySelector(".ChangeInfo1");
var personal2 = document.querySelector(".ChangeInfo2");
var personal3 = document.querySelector(".ChangeInfo3");
var personal4 = document.querySelector(".ChangeInfo4");
var ChangeEmail = document.getElementById("ChangeEmail");
var ChangePassWord = document.getElementById("ChangePassWord");
var ChangePhoto = document.getElementById("ChangePhoto");
var layerPersonal = document.querySelector(".layerPersonal");
var EmaChange = document.querySelector(".EmaChange");
var Exit=document.querySelector(".out")
var charImage=document.querySelector(".head .char")
var personImg=document.querySelector(".personal .personImg img");
var GameHead=document.getElementById("gameHead");
var clickGame=document.querySelector(".Game .active");
console.log(clickGame);
console.log(GameHead);

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
// if(ChangeEmail){
//     ChangeEmail.addEventListener("click", function() {
//         if(personal.innerHTML==""){
//             personal.innerHTML = `
//             <div class="container text-center">
//                 <div class="text">
//                 </div>
//                 <div class="Inputs">
//                 <i class="fa-regular fa-envelope"></i>
//                 <input type="email" placeholder="البريد الألكتروني الجديد" class="NewEmail">
//                 </div>
//                 <button>تغيير</button>
//             </div>`;
//             var Emailcha = document.querySelector(".NewEmail");
//             var updateEmail = document.querySelector(".ChangeInfo button");
//             updateEmail.addEventListener("click", function() {
//                 localStorage.setItem("email", Emailcha.value);
//                 EmaChange.value = Emailcha.value;
//                 personal.innerHTML = "";
//                 });
//         }else{
//             personal.innerHTML="";
//         }
//     });
// }
// if(ChangePassWord){
//     ChangePassWord.addEventListener("click",function(){
//         if(personal2.innerHTML==""){
//             personal2.innerHTML=`
//             <div class="container text-center">
//                 <div class="text">
//                 </div>
//                 <div class="Inputs">
//                     <i class="fa-solid fa-lock"></i>
//                     <input type="email" placeholder="كلمة المرو الحالية" class="OldPassword">
//                 </div>
//                 <div class="Inputs">
//                 <i class="fa-solid fa-lock"></i>
//                 <input type="email" placeholder="كلمة المرو الجديدة" class="NewPassword">
//                 </div>
//                 <button>تغيير</button>
//             </div>
//             `;
//             var updatePass = document.querySelector(".ChangeInfo button");
//             var OldPassword=document.querySelector(".OldPassword");
//             var NewPassword=document.querySelector(".NewPassword");
//                 updatePass.addEventListener("click",function(){
//                     if(OldPassword.value !=="" && NewPassword.value !=="" ){
//                         personal2.innerHTML=`
//                         <div class="container text-center">
//                             <div class="iconRight">
//                             <i class="fa-solid fa-check"></i>
//                             </div>
//                             <h3>تهانينا !</h3>
//                             <p>تم تغيير كلمة المرور بنجاح</p>
//                             <button class="Back">رجوع</button>
//                         </div>
//                 `;
//                     }
//                     var BackBtn=document.querySelector(".ChangeInfo button.Back");
//                     if(BackBtn){
//                         BackBtn.addEventListener("click", function() {
//                             personal2.innerHTML = "";
//                         });
//                     }
//                 })
//         }else{
//             personal2.innerHTML="";
//         }
//     })
// }

// if(ChangePhoto){
//     ChangePhoto.addEventListener("click",function(){
//         if(personal3.innerHTML==""){
//             personal3.innerHTML=`
//             <div class="container text-center">
//                 <div class="images d-flex justify-content-center">
//                     <div>
//                     <img src="../style pages/image/Man.png" alt="" class="manPhoto">
//                     </div>
//                     <div>
//                         <img src="../style pages/image/Char.png" alt="">
//                     </div>
//                 </div>
//                 <div class="IconImage">
//                     <i class="fa-solid fa-check"></i>
//                     <i class="fa-solid fa-check"></i>
//                 </div>
//                 <button>تغيير</button>
//             </div>
//             `
//             var imgMan=document.querySelector(".ChangeInfo .images div:first-child img");
//             var imgGirl=document.querySelector(".ChangeInfo .images div:last-child img");
//             let layerImage1=document.querySelector(".ChangeInfo .layersImage div:first-child");
//             let layerImage2=document.querySelector(".ChangeInfo .layersImage div:last-child");
//             let iconChooseGirl=document.querySelector(".ChangeInfo .IconImage i:first-child");
//             let iconChooseMan=document.querySelector(".ChangeInfo .IconImage i:last-child");
//             let UpdateImg=document.querySelector(".ChangeInfo button")
//             if(imgMan){
//                 imgMan.addEventListener("click",function(){
//                     iconChooseMan.style.display="block";
//                     iconChooseGirl.style.display="none";
//                     if(UpdateImg){
//                         UpdateImg.addEventListener("click",function(){
//                         charImage.setAttribute("src","../style pages/image/Man.png");
//                         personImg.setAttribute("src","../style pages/image/Man.png");
//                         localStorage.setItem("srcimg","../style pages/image/Man.png")
//                         personal3.innerHTML = "";
//                         })
//                     }
//                 })
//             }
//             if(imgGirl){
//                 imgGirl.addEventListener("click",function(){
//                     iconChooseGirl.style.display="block";
//                     iconChooseMan.style.display="none";
//                     if(UpdateImg){
//                         UpdateImg.addEventListener("click",function(){
//                         charImage.setAttribute("src","../style pages/image/user profile photo.png");
//                         personImg.setAttribute("src","../style pages/image/user profile photo.png");
//                         localStorage.setItem("srcimg","../style pages/image/user profile photo.png");
//                         personal3.innerHTML = "";
//                         })
//                     }
//                 })
//             }
//         }else{
//             personal3.innerHTML = "";
//         }
//     })
// }
if(Exit){
    Exit.addEventListener("click",function(){
        if(personal4.innerHTML==""){
            personal4.innerHTML=`
            <div class="container text-center">
                <div class="Text text-center">
                <span>هل تريد تسجيل الخروج ؟</span><span> إذا كان لديك أي أسئلة أو استفسارات في المستقبل، فلا تتردد في العودة وطرحها.</span>
                </div>
                <div class="links d-flex justify-content-evenly">
                    <a href="logout">تسجيل الخروج</a>
                    <a href="Personal">إلغاء</a>
                </div>
            </div>
                `;
        }else{
            personal4.innerHTML = "";
        }
    })
}

// End  Page personal



// start Page task

var AddTask = document.querySelector(".TodayTasks .content");
var WriteTask = document.querySelector("#WriteTask");
var IconAddTask = document.getElementById("insertTask");

var YesterdayTasks = document.querySelector(".YesterdayTasks .content");
var StoredItems = localStorage.getItem("item");
var storedCheck = localStorage.getItem("check");

if (StoredItems !== null || storedCheck !== null) {
    if (AddTask) {
        AddTask.innerHTML = StoredItems;
    }
}

if (IconAddTask) {
    IconAddTask.addEventListener("click", function () {
        text = WriteTask.value;
        AddBox = document.createElement("div");
        AddBox.classList.add("box", "d-flex", "justify-content-between", "align-items-center", "position-relative");
        AddBox.innerHTML += `
            <h4>${text}</h4>
            <input type="checkbox" class="fs-6 checkTask">
            <i class="fa-solid fa-xmark position-absolute"></i>
            `;
        AddTask.appendChild(AddBox);
        var checkTask = document.querySelector(".checkTask");
        console.log(checkTask);
        localStorage.setItem("item", AddTask.innerHTML);
    });
}
if (AddTask) {
    AddTask.addEventListener("change", function (event) {
        if (event.target.classList.contains("checkTask")) {
            var checkedBox = event.target;
            var boxParent = checkedBox.parentElement;
            if (checkedBox.checked) {
                boxParent.style.backgroundColor = "#FE68BF";
            } else {
                boxParent.style.backgroundColor = "white";
            }
        updateLocalStorage();
        }
    });
}

function updateLocalStorage() {
    localStorage.setItem("item", AddTask.innerHTML);
    var checkTaskList = document.querySelectorAll(".checkTask");
    var checkedStatusList = Array.from(checkTaskList).map(task => task.checked);
    localStorage.setItem("check", JSON.stringify(checkedStatusList));
}

window.addEventListener("load", function () {

    if (StoredItems !== null) {
        AddTask.innerHTML = StoredItems;
    }
    if (storedCheck !== null) {
        var checkedStatusList = JSON.parse(storedCheck);
        var checkTaskList = document.querySelectorAll(".checkTask");
        checkTaskList.forEach((task, index) => {
        task.checked = checkedStatusList[index];
        if (task.checked) {
            task.parentElement.style.backgroundColor = "#FE68BF";
        }
    });
}
});



if(AddTask){
    AddTask.addEventListener("click", function (event) {
        if (event.target.matches("i")) {
            event.target.parentNode.remove();
            localStorage.setItem("item", AddTask.innerHTML);
        }
    });
}
// deleted tasks

// End Page Task

