<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        OCD
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="../style pages/image/Graduation logo 3.png">
    <!-- Bootstrap file -->
    <link rel="stylesheet" href="{{asset('../style pages/boot/bootstrap.min.css')}}">
    <!-- css file -->
    <!-- <link rel="stylesheet" href="../Addition/StyleHome.css"> -->
    <style>
        .image-container {
            display: flex;
            justify-content: center; /* يوضح للعناصر المركزية */
            align-items: center; /* يوضح للعناصر العمودية */
        }

        .circular-image {
            width: 80px; /* تكبير حجم الصورة */
            height: 80px; /* تكبير حجم الصورة */
            border-radius: 50%; /* جعل الصورة دائرية */
            overflow: hidden; /* لضمان عرض صورة دائرية بغض النظر عن حجمها الفعلي */
        }

        .circular-image img {
            width: 100%; /* ضبط الصورة لتمتلئ داخل الطبقة الدائرية */
            height: auto;
            display: block; /* إزالة المساحات البيضاء الزائدة حول الصورة */
            margin: auto; /* توسيط الصورة داخل الدائرة */
        }

    </style>

    <link rel="stylesheet" href="{{asset('../style pages/Css/Style.css')}}">
    <!-- font AWesome -->
    <link rel="stylesheet" href="{{asset('../style pages/Css/all.min.css')}}">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="PagePersonal position-relative">
        <!-- Start Header  -->
        <div class="head justify-content-between">
            <div class="container">
                <div class="content d-flex justify-content-between align-items-center">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid d-flex justify-content-between">
                            <button class="navbar-toggler" id="headBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <div class="links img-char justify-content-start " id="welcome">

                                    @if (Auth::check())

                                    <p>   {{Auth::user()->name}}</p>

                                  @endif
                                    <div class="links img-char justify-content-start">
                                        <div class="image-container">
                                            @if ($userImages->isNotEmpty())
                                                <!-- إذا كان هناك صور متاحة في داخل قاعدة البيانات -->
                                                @foreach ($userImages as $image)
                                                    <img src="{{ asset($image->image_path) }}" alt="User Image" class="circular-image">
                                                @endforeach
                                            @else
                                                <!-- إذا لم يكن هناك صور متاحة في داخل قاعدة البيانات -->
                                                <img src="{{ asset('../style pages/image/user profile photo.png') }}" alt="User Image" class="circular-image">
                                            @endif
                                        </div>
                                    </div>


                                </div>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex ul-learning">
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{url('Personal')}}">الصفحة الشخصية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('Tasks22')}}">المهام</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('game796')}}">الألعاب</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{url('learn')}}">التعلم</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page"   href="{{url('home888')}}">الرئيسية</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="logo">
                        <img src="{{asset('../style pages/image/Graduation logo 3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
            <!-- End Header  -->
            <!-- start personal section -->
            <div class="personal loadingScroll">
                <div class="container d-flex">
                    <div class="personImg text-center">
                        <div class="image-container">
                            @if ($userImages->isNotEmpty())
                                <!-- إذا كان هناك صور متاحة في داخل قاعدة البيانات -->
                                @foreach ($userImages as $image)
                                    <img src="{{ asset($image->image_path) }}" alt="User Image" class="circular-image">
                                @endforeach
                            @else
                                <!-- إذا لم يكن هناك صور متاحة في داخل قاعدة البيانات -->
                                <img src="{{ asset('../style pages/image/user profile photo.png') }}" alt="User Image" class="circular-image">
                            @endif
                        </div>

                        <div class="text">
                            <h4>المعلومات الأساسية</h4>
                            <div>
                                <h5>تغيير بياناتك</h5>
                            </div>
                        </div>
                    </div>
                    <div class="content">



                            <div class="secOne">
                                @if (Auth::check())

                                <div>
                                    <p>اسم المستخدم</p>
                                    <input type="text" value="     {{auth()->user()->name}}">
                                    <p>العمر</p>
                                    <input type="text" value="     {{auth()->user()->Age}}">
                                </div>
                                <div>
                                     <p>التلفون</p>
                                    <input type="text" value="     {{auth()->user()->phone}}" class="d-block AgeInput" >
                                    <p>البريد الاكتروني</p>
                                    <input type="email" value="    {{auth()->user()->email}}" >
                                </div>

                                @endif


                            </div>



                            <div class="secTwo">
                                <ul class="ulOne">
                                    <li id="ChangeEmail">
                                        <i class="fa-regular fa-envelope"></i>
                                        <a href="#">تغيير البريد الإلكتروني</a>
                                    </li>
                                    <div class="ChangeInfo1 ChangeInfo ">
                                    </div>
                                    <li id="ChangePassWord">
                                        <i class="fa-solid fa-lock"></i>
                                        <a href="#">تغيير كلمة المرور</a>
                                    </li>
                                    <div class="ChangeInfo2 ChangeInfo">
                                    </div>
                                    <li id="ChangePhoto">
                                        <i class="fa-solid fa-camera-rotate"></i>
                                        <a href="#">تغيير الصورة الرمزية</a>
                                    </li>
                                    <div class="ChangeInfo3 ChangeInfo">
                                    </div>
                                </ul>
                                <ul class="out">
                                    <li>
                                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                        <a href="#">تسجيل الخروج</a>
                                    </li>
                                    <div class="ChangeInfo4 ChangeInfo">
                                    </div>
                                </ul>
                            </div>


                                <script>




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
if(ChangeEmail){
    ChangeEmail.addEventListener("click", function() {
        if(personal.innerHTML==""){
            personal.innerHTML = `
            <div class="container text-center">

        <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
            @csrf <!-- إضافة CSRF Token -->
                <div class="text">

                            </div>
                    <div class="Inputs">
                        <i class="fa-regular fa-envelope"></i>
                            <input type="text" name="email" value="{{ old('email') }}" placeholder="البريد الألكتروني الجديد" class="NewEmail">
                    </div>
                    <button type="submit" class="updateEmailBtn" id="updateEmailBtn" style="background-color: #4CAF50; color: #fff; border: none; padding: 12px; border-radius: 2px; font-size: 14px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: inline-block; margin-top: 15px;">تحديث</button>
         </form>

            </div>`;
            var Emailcha = document.querySelector(".NewEmail");
            var updateEmail = document.querySelector(".ChangeInfo button");
            updateEmail.addEventListener("click", function() {
                localStorage.setItem("email", Emailcha.value);
                EmaChange.value = Emailcha.value;
                personal.innerHTML = "";
                });
        }else{
            personal.innerHTML="";
        }
    });
}
if(ChangePassWord){
    ChangePassWord.addEventListener("click",function(){
        if(personal2.innerHTML==""){
            personal2.innerHTML=`
            <div class="container text-center">
                <form method="POST" action="{{ route('pass') }}">
                    @csrf <!-- إضافة CSRF Token -->
                        <div class="text">
                                </div>
                                <div class="Inputs">
                                <i class="fa-solid fa-lock"></i>
                                    <input type="password" name="password" placeholder="كلمة المرور الجديدة" class="NewPassword">
                                    </div>
                            <button type="submit" class="updatePasswordBtn" id="updatePasswordBtn" style="background-color: #4CAF50; color: #fff; border: none; padding: 12px; border-radius: 2px; font-size: 14px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: inline-block; margin-top: 15px;">تحديث</button>

                </form>
            </div>
            `;
            var updatePass = document.querySelector(".ChangeInfo button");
            var OldPassword=document.querySelector(".OldPassword");
            var NewPassword=document.querySelector(".NewPassword");
                updatePass.addEventListener("click",function(){
                    if(OldPassword.value !=="" && NewPassword.value !=="" ){
                        personal2.innerHTML=`
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
                            personal2.innerHTML = "";
                        });
                    }
                })
        }else{
            personal2.innerHTML="";
        }
    })
}



if(ChangePhoto){
    ChangePhoto.addEventListener("click",function(){
        if(personal3.innerHTML==""){
            personal3.innerHTML=`
            <div class="container text-center">

                <form action="{{ route('uuuuopppimage') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <label>اختر الصور التي ترغب في استخدامها:</label>
                             @foreach ($images as $image)
                             <div class="images d-flex justify-content-center">

                                <div>
                                    <input type="radio" id="image_{{ $image->id }}" name="image_path" value="{{ asset($image->image_userpro) }}">
                                <label for="image_{{ $image->id }}"><img src="{{ asset($image->image_userpro) }}" alt=""></label>
                               </div>

                            </div>

                             @endforeach
                                 <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                 <button type="submit" class="updateEmailBtn" id="updateEmailBtn" style="background-color: #4CAF50; color: #fff; border: none; padding: 12px; border-radius: 2px; font-size: 14px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: inline-block; margin-top: 15px;">تحديث</button>
                                 </form>

            </div>
            `
            var imgMan=document.querySelector(".ChangeInfo .images div:first-child img");
            var imgGirl=document.querySelector(".ChangeInfo .images div:last-child img");
            let layerImage1=document.querySelector(".ChangeInfo .layersImage div:first-child");
            let layerImage2=document.querySelector(".ChangeInfo .layersImage div:last-child");
            let iconChooseGirl=document.querySelector(".ChangeInfo .IconImage i:first-child");
            let iconChooseMan=document.querySelector(".ChangeInfo .IconImage i:last-child");
            let UpdateImg=document.querySelector(".ChangeInfo button")
            if(imgMan){
                imgMan.addEventListener("click",function(){
                    iconChooseMan.style.display="block";
                    iconChooseGirl.style.display="none";
                    if(UpdateImg){
                        UpdateImg.addEventListener("click",function(){
                        charImage.setAttribute("");
                        personImg.setAttribute("");
                        localStorage.setItem("")
                        personal3.innerHTML = "";
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
                        charImage.setAttribute("src","");
                        personImg.setAttribute("src","");
                        localStorage.setItem("srcimg","");
                        personal3.innerHTML = "";
                        })
                    }
                })
            }
        }else{
            personal3.innerHTML = "";
        }
    })
}









                                    // document.addEventListener("DOMContentLoaded", function () {
                                    //     var ChangeEmail = document.getElementById('ChangeEmail');
                                    //     var ChangePassword = document.getElementById('ChangePassword');
                                    //     var layerPersonal = document.getElementById('layerPersonal');
                                    //     var personal = document.getElementById('personal');

                                    //     if (ChangeEmail) {
                                    //         ChangeEmail.addEventListener("click", function () {
                                    //             showChangeEmailForm();
                                    //         });
                                    //     }

                                    //     if (ChangePassword) {
                                    //         ChangePassword.addEventListener("click", function () {
                                    //             showChangePasswordForm();
                                    //         });
                                    //     }

                                    //     function showChangeEmailForm() {
                                    //         personal.innerHTML = `
                                    //         <div class="container text-center">
                                    //                     <form method="POST" action="{{ route('update.profile') }}" enctype="multipart/form-data">
                                    //                         @csrf <!-- إضافة CSRF Token -->
                                    //                         <div class="text">
                                    //                             <h4>تغيير البريد الألكتروني</h4>
                                    //                         </div>
                                    //                         <div class="Inputs">
                                    //                             <i class="fa-regular fa-envelope"></i>
                                    //                             <input type="text" name="email" value="{{ old('email') }}" placeholder="البريد الألكتروني الجديد" class="NewEmail">
                                    //                         </div>
                                    //                         <button type="submit" class="updateEmailBtn" id="updateEmailBtn" style="background-color: #4CAF50; color: #fff; border: none; padding: 12px; border-radius: 2px; font-size: 14px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: inline-block; margin-top: 15px;">تحديث</button>
                                    //                     </form>
                                    //                 </div>`;
                                    //         showLayerAndBindCloseEvent();
                                    //     }

                                    //     function showChangePasswordForm() {
                                    //         personal.innerHTML = `
                                    //             <div class="container text-center">
                                    //                 <form method="POST" action="{{ route('pass') }}">
                                    //                     @csrf <!-- إضافة CSRF Token -->
                                    //                     <div class="text">
                                    //                         <h4>تغيير كلمة المرور</h4>
                                    //                     </div>

                                    //                     <div class="Inputs">
                                    //                         <i class="fa-solid fa-lock"></i>
                                    //                         <input type="password" name="password" placeholder="كلمة المرور الجديدة">
                                    //                     </div>
                                    //                     <button type="submit" class="updatePasswordBtn" id="updatePasswordBtn" style="background-color: #4CAF50; color: #fff; border: none; padding: 12px; border-radius: 2px; font-size: 14px; cursor: pointer; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); display: inline-block; margin-top: 15px;">تحديث</button>

                                    //                 </form>
                                    //             </div>`;
                                    //         showLayerAndBindCloseEvent();
                                    //     }

                                    //     function showLayerAndBindCloseEvent() {
                                    //         layerPersonal.addEventListener("click", function () {
                                    //             layerPersonal.style.display = "none";
                                    //             personal.innerHTML = "";
                                    //         });
                                    //         layerPersonal.style.display = "block";
                                    //     }
                                    // });
                                </script>





                                {{-- <li id="ChangePhoto">
                                    <i class="fa-solid fa-camera-rotate"></i>
                                    <a href="#">تغيير الصورة الرمزية</a>
                                </li>
                            </ul>
                            <ul class="out">
                                <li>
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                    <a href="#">تسجيل الخروج</a>
                                </li>
                                <div class="ChangeInfo4 ChangeInfo">
                                </div>                        </div> --}}
                    </div>
                </div>
            </div>
            <!-- End personal section -->
            <!-- Start ChangeIfo -->
            <div class="ChangeInfo position-absolute">
            </div>
            <!-- End ChangeIfo -->
            <!-- Start layer -->
            <div class="layerPersonal position-absolute">

            </div>
            <!-- End layer -->
            <!-- Start Footer -->
            <div class="footer">
                <div class="container d-flex content">
                    <div class="box">
                        <img src="../style pages/image/Graduation logo 3.png" alt="">
                        <h6>تمكين الأطفال الذين يعانون من الوسواس القهري: التحرر من الهواجس والأفعال القهرية</h6>
                        <div class="icons d-flex">
                            <img src="{{asset('../style pages/image/youtube.png')}}" alt="">
                            <img src="{{asset('../style pages/image/facebook.png')}}" alt="">
                            <img src="{{asset('../style pages/image/whatsapp.png')}}" alt="">
                        </div>
                    </div>
                    <div class="box">
                        <h4>معلومات الموقع</h4>
                        <ul>
                            <li><a href="{{url('home888')}}">الرئيسية</a></li>
                            <li><a href="{{url('openingPage')}}">ماذا عنا </a></li>
                            <li><a href="{{url('learn')}}">التعلم</a></li>
                            <li><a href="{{url('games796')}}">الألعاب</a></li>
                            <li><a href="{{url('Tasks22')}}">المهام</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h4>معلومات اتصال</h4>
                        <a href="#">+626564465455</a>
                        <a href="#">info@klinik24.com</a>
                    </div>
                </div>
                <div class="container">
                    <div class="last text-center d-flex justify-content-center">
                        Copyright  &copy; <span>OCDear</span> 2023
                    </div>
                </div>
            </div>
            <!-- End Footer -->
    </div>
    <script src="{{asset('../style pages/boot/bootstrap.bundle.min.js')}}"></script>
    <!-- js file -->
    <script src="{{asset('../style pages/js/main-4.js')}}" defer ></script>
</body>






