
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        OCD signup
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="../style pages/image/Graduation logo 3.png">
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

    <div class="sign mainBg">
        <div class="content d-flex mainHeight">
            <div class="form">
                <div class="container mainPadding containerPage">
                    <h3 class="mainH3">إنشاء حساب</h3>


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <form method="POST" action="{{route('signup.store')}}">
                        @csrf
                        <div class="name">
                            <input type="text" placeholder=" اسم الطفل" name="name" id="fName">
                            <input type="text" placeholder="العمر  " name="Age" >
                        </div>

                        <input type="text email" placeholder="  الإيميل" class="d-block w-75" name="email">
                        <input type="text"   placeholder="رقم الهاتف  " class="d-block w-75" name="phone">
                        
                        <input type="password" placeholder="كلمة المرور" class=" w-75 position-relative" name="password">
                        <i class="fa-regular fa-eye-slash password " id="passwordHidden"></i>
                        <i class="fa-regular fa-eye showPassword" ></i>
                        {{-- <input type="password" placeholder=" تأكيد كلمة المرور" class=" w-75 position-relative" name="password">
                        <i class="fa-regular fa-eye-slash password " id="passwordHidden"></i>
                        <i class="fa-regular fa-eye showPassword" ></i> --}}

                        <div id="showWarning"></div>
                        <div class="switch">
                            <input type="submit" name='sigup' value="إنشاء حساب" class="d-block sendBtn text-center w-75">


                    </form>
                        <div class="text-center ">
                            <a>- أو -</a>
                        </div>

                        <a href="">
                            <img src="{{asset('../style pages/image/Google Logos By hrhasnai (1).png')}}" alt="Google">
                            إنشاء حساب باستخدام حساب جوجل
                        </a>
                        <div class="SwitchLogin position-relative">
                            <span>لديك حساب بالفعل ؟</span>
                            <a href="{{url('login')}}" class="d-inline"> تسجيل الدخول</a>
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
    <script src="{{asset('../style pages/js/main.js')}}"></script>
</body>
</html>
