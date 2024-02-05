<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        OCD
    </title>
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
    <div class="Tasks">
        <!-- Start header -->
        <div class="head justify-content-between">
            <div class="container">
                <div class="content d-flex justify-content-between align-items-center">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="container-fluid d-flex justify-content-between">
                            <button class="navbar-toggler" id="headBtn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                                <div class="links img-char justify-content-start">
                                    <img class="char" src="{{asset('../style pages/image/Char.png')}}" alt="character">
                                </div>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex ul-learning">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('Personal')}}">الصفحة الشخصية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active"href="{{url('Tasks')}}">المهام</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link " href="{{url('games1')}}">الألعاب</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('learn')}}">التعلم</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{url('home')}}">الرئيسية</a>
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
        <!-- End header -->
        <!-- Start Loading -->
        <div class="loadingVideo loadingBg position-relative loadingScroll">
            <div class="container d-flex">
                <div class="image">
                    <img src="{{asset('../style pages/image/girl header.png')}}" alt="" class="dis-none">
                </div>
                <div class="content">
                    <div class="text">
                        <p>أهلا بك فى موقعنا</p>
                        <h4>استعد للمرح والتشويق مع عالم مليء بالألوان والمغامرات في فيديوهاتنا الممتعة !</h4>
                    </div>
                    <div class="imgQuery">
                        <img src="{{('../style pages/image/girl header.png')}}" alt="">
                    </div>
                    <div class="links d-flex justify-content-between">
                        <a href="#"> تصفح الآن</a>
                        <a href="#">مشاهدة الفيديو</a>
                    </div>
                </div>
                <div class="insert">
                    <img src="{{asset('../style pages/image/HeartLoad.png')}}" alt="" class="position-absolute dis-none HeartLoad">
                </div>
            </div>
        </div>
        <!-- End Loading -->
        <!-- Start tasksList -->
        <div class="ListTask position-relative">
            <div class="container">
                <div class="MainTitle text-center">
                    <p>قائمة المهام</p>
                    <h4>قوائم مهام ممتعة وجذابة للأطفال للحفاظ على إنتاجيتهم وتحقيق أهدافهم</h4>
                </div>
                <div class="DoTask">
                    <i class="fa-solid fa-plus" id="insertTask"></i>
                    <input type="text" id="WriteTask" placeholder="إضافة مهمة جديدة" value="">
                </div>
                <div class="Image position-absolute">
                    <img src="{{asset('../style pages/image/TrophyTask.png')}}" alt="">
                </div>
            </div>
        </div>
        <!-- start TodayTasks -->
        <div class="TodayTasks">
            <div class="container">
                <div class="MainTitle text-center">
                    <p>قائمة المهام</p>
                    <h4>قائمة مهام اليوم </h4>
                </div>
                <div class="content">
                </div>
            </div>
        </div>
        <!-- End TodayTasks -->
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
                        <li><a href="#">الرئيسية</a></li>
                        <li><a href="#">ماذا عنا </a></li>
                        <li><a href="#">التعلم</a></li>
                        <li><a href="#">الألعاب</a></li>
                        <li><a href="#">المهام</a></li>
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
    <script src="{{asset('../style pages/js/main-4.js')}}" defer></script>
</body>
