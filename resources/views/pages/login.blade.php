<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCD</title>
    <!-- Bootstrap file -->
    <link rel="stylesheet" href="{{asset('../style pages/boot/bootstrap.min.css')}}">
    <!-- css file -->
    <link rel="stylesheet" href="{{asset('../style pages/Css/Style.css')}}">
    <!-- font AWesome -->
    <link rel="stylesheet" href="{{asset('../style pages/Css/all.min.css')}}">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Start SignUp -->
    <div class="login mainBg">
        <div class="content d-flex mainHeight">
            <div class="form">
                <div class="container mainPadding containerPage">
                    <h3 class="mainH3">أهلا بعودتك</h3>
                    <form    action="/ogd" method="POST" >
                        @csrf


                        <input type="text" placeholder="رقم الهاتف أو الإيميل" class="d-block w-75" name='phone'>
                        <input type="password" placeholder="كلمة المرور" class=" w-75 position-relative" name='password'>
                        <i class="fa-regular fa-eye-slash password " id="passwordHiddenLogin"></i>
                        <i class="fa-regular fa-eye showPassword" id="passwordShow" ></i>
                        <div class="loginSubmit">
                            <input type="submit" name='sigup' value="تسجيل الدخول " class="d-block sendBtn text-center w-75">
                            @error('email')
                      <span>{{ $message }}</span>
                     @enderror
                        </div>

                    </form>
                    <div id="showWarning"></div>
                    <div class="ForgetPass"><a href="{{url('ForgetPass')}}">هل نسيت كلمة السر ؟</a></div>

                    <div class="switch">
                        <div class="loginSubmit">


                        </div>
                        <div class="text-center">
                            <a>- أو -</a>
                        </div>
                        <a href="">
                            <img src="{{asset('../style pages/image/Google Logos By hrhasnai (1).png')}}" alt="Google">
                            إنشاء حساب باستخدام حساب جوجل
                        </a>
                        <div class="SwitchLogin position-relative">
                            <span>ليس لديك حساب ؟</span>
                            <a href="{{asset('../pages/SignUp.html')}}" class="d-inline">إنشاء حساب</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leftSide">
                <div class="">
                    <div class="image">
                        <img src="{{asset('../style pages/image/Graduation logo 3.png')}}" alt="logo OCD">
                    </div>
                    <div class="image">
                        <img src="{{asset('../style pages/image/rafiki.png')}}" alt="Parent &child">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End SignUp -->
    <!-- js file -->
    <script src="{{asset('../style pages/boot/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('../style pages/js/main-2.js')}}"></script>
</body>
</html>
