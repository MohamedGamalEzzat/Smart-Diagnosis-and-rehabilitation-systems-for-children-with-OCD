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
                                        <h5>
                                            أهلا: {{Auth::user()->name}}
                                        </h5>
                                        <span><i class="fa-solid fa-hand"></i></span>
                                      @endif
                                </div>
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex ul-learning">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('Personal')}}">الصفحة الشخصية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"href="{{url('Tasks22')}}">المهام</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('game796')}}">الألعاب</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('learn')}}">التعلم</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page"   href="{{url('home888')}}">الرئيسية</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="logo ImgLogo">
                        <img src="{{asset('../style pages/image/Graduation logo 3.png')}}" alt="">
                    </div>
                </div>

            </div>
        </div>
        <!-- End header -->
        <!-- Start loading -->
        <div class="loading loadingBg loadingScroll">
            <div class="image">
                <img src="{{asset('../style pages/image/Am.png')}}" alt="" class="dis-none">
                <img src="{{asset('../style pages/image/ice.png')}}" alt="" class="">
                <img src="{{asset('../style pages/image/lightmode.png')}}" alt="">
            </div>
            <div class="container">
                <div class="content d-flex justify-content-center">
                    <div class="text ">
                        <p>أهلا بك فى موقعنا</p>
                        <div class="main">
                            <h3>تمكين الأطفال الذين يعانون من الوسواس القهري: التحرر من الهواجس والأفعال القهرية</h3>
                        </div>
                        <div class="imageQuery">
                            <img src="{{asset('../style pages/image/loading.png')}}" alt="">
                        </div>
                        <div class="links">
                            <a href="">ابقى علي تواصل</a>
                            <a href="">اكتشف الآن</a>
                        </div>
                        <img src="{{asset('../style pages/image/heart.png')}}" alt="" class="dis-none">
                    </div>
                    <div class="box dis-none">
                        <div class="photo">
                            <img src="{{asset('../style pages/image/Vector.png')}}" alt="" class="vector">
                            <img src="{{asset('../style pages/image/arrowload.png')}}" alt="" class="Arrow">
                            <img src="{{asset('../style pages/image/loading.png')}}" alt="" class="imgLoading">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End loading -->
        <!-- Start AboutHome -->

        <!-- start about -->
        <div class="about-home">
            <div class="image">
                <img src="{{asset('../style pages/image/Star.png')}}" alt="" class="">
                <img src="{{asset('../style pages/image/Umbrella.png')}}" alt="" class="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 align-self-center  fadeInLeft">
                        <div class="left-image">
                            <img src="{{asset('../style pages/image/about us photo (1).png')}}" class="h">
                        </div>
                    </div>
                    <div class="col-lg-7 fadeInRight">
                        <div class="about-heading">
                        <p>من نحن ؟</p>
                        <span>مهمتنا هي تمكين وإلهام الأطفال الذين يعانون من الوسواس القهري</span>
                        <img src="{{asset('../style pages/image/about us photo (1).png')}}" class="dis-none" alt="">
                        <h5>نحن ملتزمون بتقديم الدعم والتوجيه الرحيم للأطفال الذين يعانون من اضطراب الوسواس القهري (OCD)، وتمكينهم من التغلب على التحديات والازدهار في حياتهم اليومية.</h5>
                        </div>
                    </div>
                    <div class="view">
                        <div class="container"><h4><i class="fa-solid fa-circle-check " style="color:#00994F;">&nbsp; &nbsp;</i>يوجد تطبيق هاتف </h4></div>
                        <div class="container"><h4><i class="fa-solid fa-circle-check" style="color:#9440FF;">&nbsp;  &nbsp;</i>يوجد تطبيق هاتف </h4></div>
                        <div class="container"><h4><i class="fa-solid fa-circle-check" style="color:#00B2FF;">&nbsp;  &nbsp;</i>يوجد تطبيق هاتف </h4></div>
                        <div class="container"><h4><i class="fa-solid fa-circle-check" style="color:#FE68BF;">&nbsp;  &nbsp;</i>يوجد تطبيق هاتف </h4></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- End about -->
        <!-- End AboutHome -->
        <!-- Start VideoHome -->
        <div class="videos-home">
            <div class="image">
                <img src="{{asset('../style pages/image/Light bulb (1).png')}}" alt="" class="dis-none">
                <img src="{{asset('../style pages/image/Flower (1).png')}}" alt="" class="dis-none">
            </div>
            <div class="video-header">
            <p class="p1">فيديوهات عن الوسواس القهري</p>
            <p class="p2">مقاطع فيديو جذابة وغنية بالمعلومات <br>للأطفال الذين يعانون من الوسواس القهري</p>
        </div>
            <div class="container2">
                <div class="row ">
                <div class="col">
                    <div class="card ">
                        <div class="hue"><i class="fa-regular fa-circle-play fa-fade fa-5x" style="color: #00994f; border-color: white;"></i><img src="../style pages/image/VideoHome.png" class="card-img-top" alt="..."></div>
                        <div class="card-body">
                        <h5 class="card-title">إدارة الوسواس القهري</h5>
                        <p class="card-text">اضطراب الوسواس القهري هو حالة صحية عقلية تتميز بتكرار الأفكار غير المرغوب فيها، والمعروفة باسم الهواجس، والسلوكيات المتكررة أو الطقوس العقلية، والمعروفة باسم القهر.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                <div class="card ">
                    <div class="hue"><i class="fa-regular fa-circle-play fa-fade fa-5x" style="color: #00994f;"></i><img src="../style pages/image/VideoHome2.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                    <h5 class="card-title">إدارة الوسواس القهري</h5>
                    <p class="card-text">اضطراب الوسواس القهري هو حالة صحية عقلية تتميز بتكرار الأفكار غير المرغوب فيها، والمعروفة باسم الهواجس، والسلوكيات المتكررة أو الطقوس العقلية، والمعروفة باسم القهر.</p>
                    </div>
                </div>
                </div>
                <div class="col">
                <div class="card ">
                    <div class="hue"><i class="fa-regular fa-circle-play fa-fade fa-5x" style="color: #00994f;"></i><img src="../style pages/image/VideoHome3.png" class="card-img-top" alt="..."></div>
                    <div class="card-body">
                    <h5 class="card-title">قصص الوسواس القهري</h5>
                    <p class="card-text">اضطراب الوسواس القهري هو حالة صحية عقلية تتميز بتكرار الأفكار غير المرغوب فيها، والمعروفة باسم الهواجس، والسلوكيات المتكررة أو الطقوس العقلية، والمعروفة باسم القهر.</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="press"><button class="btn"> المزيد </button></div>

        </div>
        </div>
        <!-- End VideoHome -->
        <!-- Start PlayGame -->
        <div class="playGame position-relative">
                    <div class="container">
                        <div class="MainTitle text-center">
                            <p>العاب عن الوسواس القهري</p>
                            <h4>تمكين الاستراتيجيات المرحة لإدارة الهواجس والأفعال القهرية</h4>
                        </div>
                        <div class="contentHome">
                            <div class="boxGame">
                                <div class="info">
                                    <img src="{{asset('../style pages/image/pic game.png')}}" alt="">
                                    <h5>اسم اللعبة</h5>
                                    <p>بدءًا من المغامرات المثيرة في عوالم ملونة وحتى الألغاز المثيرة للعقل والتحديات التعليمية، تقدم ألعابنا مجموعة متنوعة من التجارب التي تلبي الاهتمامات وأساليب التعلم المختلفة. يمكن للأطفال الشروع في مهام مثيرة، وحل الألغاز، وإطلاق العنان لمواهبهم الفنية، وحتى تعلم مهارات جديدة على طول الطريق.</p>
                                </div>
                            </div>
                        </div>
                        <div class="MoreBtn">
                            <a href="game.html">اكتشف</a>
                        </div>
                    </div>
                    <div class="insertImage position-absolute">
                        <img src="{{asset('../style pages/image/lightmode.png')}}" alt="">
                    </div>
                    <div class="image position-absolute">
                        <img src="{{asset('../style pages/image/Trophy.png')}}" alt="">
                    </div>
                </div>
        <!-- End PlayGame -->
        <!-- End games -->
        <!-- Start Tasks -->
        <div class="tasks">
            <div class="container">
                <div class="MainTitle text-center">
                    <p>قائمة المهام</p>
                    <h5>قوائم مهام ممتعة وجذابة للأطفال للحفاظ على إنتاجيتهم وتحقيق أهدافهم</h5>
                </div>
                <div class="content">
                    <div class="box box-1">
                        <div class="title d-flex justify-content-between">
                            <h6>مهام اليوم الأول</h6>
                            <img src="{{asset('../style pages/image/Grinning Face.png')}}" alt="">
                        </div>
                        <ul>
                            <li><a href="#">المهمه الاولي</a></li>
                            <li><a href="#"> المهمه الثانيه</a></li>
                            <li><a href="#">المهمه الثالثه</a></li>
                        </ul>
                    </div>
                    <div class="box box-2">
                        <div class="title d-flex justify-content-between">
                            <h6>مهام اليوم الأول</h6>
                            <img src="{{asset('../style pages/image/Grinning Face.png')}}" alt="">
                        </div>
                        <ul>
                            <li><a href="#">المهمه الاولي</a></li>
                            <li><a href="#"> المهمه الثانيه</a></li>
                            <li><a href="#">المهمه الثالثه</a></li>
                        </ul>
                    </div>
                    <div class="box box-3">
                        <div class="title d-flex justify-content-between">
                            <h6>مهام اليوم الأول</h6>
                            <img src="{{asset('../style pages/image/Grinning Face.png')}}" alt="">
                        </div>
                        <ul>
                            <li><a href="#">المهمه الاولي</a></li>
                            <li><a href="#"> المهمه الثانيه</a></li>
                            <li><a href="#">المهمه الثالثه</a></li>
                        </ul>
                    </div>
                    <div class="box box-4">
                        <div class="title d-flex justify-content-between">
                            <h6>مهام اليوم الأول</h6>
                            <img src="{{asset('../style pages/image/Grinning Face.png')}}" alt="">
                        </div>
                        <ul>
                            <li><a href="#">المهمه الاولي</a></li>
                            <li><a href="#"> المهمه الثانيه</a></li>
                            <li><a href="#">المهمه الثالثه</a></li>
                        </ul>
                    </div>
                    <div class="box box-bear">
                        <img src="{{asset('../style pages/image/Bear reading.png')}}" alt="" class="dis-none">
                    </div>
                </div>
                <div class="images">
                    <img src="{{asset('../style pages/image/heart.png')}}" alt="">
                    <img src="{{asset('../style pages/image/Star.png')}}" alt="">
                </div>
            </div>
    </div>
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
    <script src="../style pages/boot/bootstrap.bundle.min.js"></script>
    <!-- js file -->
    <script src="../style pages/js/main-4.js" defer ></script>
</body>
</html>
