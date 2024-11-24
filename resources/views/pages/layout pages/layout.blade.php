<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        OCD   @yield('title')
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="../style pages/image/Graduation logo 3.png">
    <!-- Bootstrap file -->
    <link rel="stylesheet" href="{{asset('../style pages/boot/bootstrap.min.css')}}">
    <!-- css file -->
    <!-- <link rel="stylesheet" href="../Addition/StyleHome.css"> -->
    <link rel="stylesheet" href="{{asset('../style pages/Css/Style.css')}}">
    <!-- font AWesome -->
    <link rel="stylesheet" href="{{asset('../style pages/Css/all.min.css')}}">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="home">
        <!-- Start header -->
        <div class="head">
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
                                    <span>
                                        أهلا: {{Auth::user()->name}}
                                    </span>
                                    @else
                                    <a href="{{url('SignUp')}}">إنشاء حساب</a>
                                    <a href="{{url('login')}}">تسجيل الدخول</a>
                                    @endif
                                    <span><i class="fa-solid fa-hand"></i></span>
                                </div>



                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex ">
                                    @if (Auth::check())
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('Personal')}}">الصفحة الشخصية</a>
                                    </li>
                                    @endif
                                <li class="nav-item">
                                    <a class="nav-link"href="{{url('Tasks')}}">المهام</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('game')}}">الألعاب</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('learn')}}">التعلم</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"   href="{{url('home78')}}">الرئيسية</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="logo">
                        <img src="../style pages/image/Graduation logo 3.png" alt="">
                    </div>
                </div>

            </div>
        </div>
        <!-- End header -->


@yield('content')


    <!-- End Tasks -->
    <!-- Start Footer -->
    <div class="footer">
        <div class="container d-flex content">
            <div class="box">
                <img src="{{asset('../style pages/image/Graduation logo 3.png')}}" alt="">
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
                    <li><a href="{{url('home')}}">الرئيسية</a></li>
                        <li><a href="#">ماذا عنا </a></li>
                        <li><a href="{{url('learn')}}">التعلم</a></li>
                        <li><a href="{{url('games1')}}">الألعاب</a></li>
                        <li><a href="{{url('Tasks')}}">المهام</a></li>
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
    <script src="{{asset('../style pages/boot/bootstrap.bundle.min.js')}}"></script>
    <!-- js file -->
    <script src="{{asset('../style pages/js/main-3.js')}}" defer ></script>
</body>
</html>
