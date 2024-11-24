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

    <link rel="stylesheet" href="../style pages/boot/bootstrap.min.css">
    <!-- css file -->
    <!-- <link rel="stylesheet" href="../Addition/StyleHome.css"> -->
    <link rel="stylesheet" href="../style pages/Css/Style.css">
    <!-- font AWesome -->
    <link rel="stylesheet" href="../style pages/Css/all.min.css">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="Game">
        <!-- Start Header -->
        <div class="header">
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
                                        <a class="nav-link active" href="{{url('game')}}">الألعاب</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{url('learn')}}">التعلم</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page"   href="{{url('home78')}}">الرئيسية</a>
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
        </div>
        <!-- End Header -->
        <!-- Start Loading -->
        <div class="loadingVideo loadingBg position-relative loadingScroll">
            <div class="container d-flex">
                <div class="image">
                    <img src="../style pages/image/girl header.png" alt="" class="dis-none">
                </div>
                <div class="content">
                    <div class="text">
                        <p>أهلا بك فى موقعنا</p>
                        <h4>استعد للمرح والتشويق مع عالم مليء بالألوان والمغامرات في فيديوهاتنا الممتعة !</h4>
                    </div>
                    <div class="imgQuery">
                        <img src="../style pages/image/girl header.png" alt="">
                    </div>
                    <div class="links d-flex justify-content-between">
                        <a href="#"> تصفح الآن</a>
                        <a href="#">مشاهدة الفيديو</a>
                    </div>
                </div>
                <div class="insert">
                    <img src="../style pages/image/HeartLoad.png" alt="" class="position-absolute dis-none HeartLoad">
                </div>
            </div>
        </div>
        <!-- End Loading -->
        <!-- Start About -->
        <div class="AboutGame position-relative">
            <div class="container d-flex align-items-center">
                <div class="content">
                    <div class="text">
                        <p>ما هي ألعابنا ؟</p>
                        <h3>تم تصميم مجموعتنا من الألعاب المخصصة للأطفال لإثارة خيالهم وتعزيز الإبداع وتوفير ساعات لا نهاية لها من الترفيه.</h3>
                    </div>
                    <p>بدءًا من المغامرات المثيرة في عوالم ملونة وحتى الألغاز المثيرة للعقل والتحديات التعليمية، تقدم ألعابنا مجموعة متنوعة من التجارب التي تلبي الاهتمامات وأساليب التعلم المختلفة. يمكن للأطفال الشروع في مهام مثيرة، وحل الألغاز، وإطلاق العنان لمواهبهم الفنية، وحتى تعلم مهارات جديدة على طول الطريق.</p>
                </div>
                <div class="image">
                    <img src="../style pages/image/game photo.png" alt="">
                </div>
            </div>
            <div class="insertImages">
                <img src="../style pages/image/Star.png" alt="" class="position-absolute">
                <img src="../style pages/image/HeartLoad.png" alt="" class="position-absolute dis-none">
                <img src="../style pages/image/ice.png" alt="" class="position-absolute dis-none">
            </div>
        </div>
        <!-- End About -->
        <!-- Start PlayGame -->
        <div class="playGame position-relative">
            <div class="container">
                <div class="MainTitle text-center">
                    <p>العاب عن الوسواس القهري</p>
                    <h4>تمكين الاستراتيجيات المرحة لإدارة الهواجس والأفعال القهرية</h4>
                </div>
                <div class="content d-grid">
                    <div class="box">
                        <div class="image">
                            <img src="../style pages/image/Rectangle 3 (1).png" alt="">
                        </div>
                        <h4>اسم اللعبه</h4>
                        <p>لعبة الوسواس القهري هي تجربة تفاعلية وجذابة مصممة لمساعدة الأطفال على فهم وإدارة اضطراب الوسواس القهري بطريقة ممتعة وداعمة.</p>
                        <div class="links">
                            <a href="#">ابدأ اللعب</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="../style pages/image/Rectangle 3 (2).png" alt="">
                        </div>
                        <h4>اسم اللعبه</h4>
                        <p>لعبة الوسواس القهري هي تجربة تفاعلية وجذابة مصممة لمساعدة الأطفال على فهم وإدارة اضطراب الوسواس القهري بطريقة ممتعة وداعمة.</p>
                        <div class="links">
                            <a href="#">ابدأ اللعب</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="../style pages/image/Rectangle 3.png" alt="">
                        </div>
                        <h4>اسم اللعبه</h4>
                        <p>لعبة الوسواس القهري هي تجربة تفاعلية وجذابة مصممة لمساعدة الأطفال على فهم وإدارة اضطراب الوسواس القهري بطريقة ممتعة وداعمة.</p>
                        <div class="links">
                            <a href="#">ابدأ اللعب</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="../style pages/image/Rectangle 3 (1).png" alt="">
                        </div>
                        <h4>اسم اللعبه</h4>
                        <p>لعبة الوسواس القهري هي تجربة تفاعلية وجذابة مصممة لمساعدة الأطفال على فهم وإدارة اضطراب الوسواس القهري بطريقة ممتعة وداعمة.</p>
                        <div class="links">
                            <a href="#">ابدأ اللعب</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="../style pages/image/Rectangle 3 (2).png" alt="">
                        </div>
                        <h4>اسم اللعبه</h4>
                        <p>لعبة الوسواس القهري هي تجربة تفاعلية وجذابة مصممة لمساعدة الأطفال على فهم وإدارة اضطراب الوسواس القهري بطريقة ممتعة وداعمة.</p>
                        <div class="links">
                            <a href="#">ابدأ اللعب</a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="../style pages/image/Rectangle 3.png" alt="">
                        </div>
                        <h4>اسم اللعبه</h4>
                        <p>لعبة الوسواس القهري هي تجربة تفاعلية وجذابة مصممة لمساعدة الأطفال على فهم وإدارة اضطراب الوسواس القهري بطريقة ممتعة وداعمة.</p>
                        <div class="links">
                            <a href="#">ابدأ اللعب</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="insertImage position-absolute">
                <img src="../style pages/image/lightmode.png" alt="">
            </div>
        </div>
        <!-- End PlayGame -->

            <!-- Start Footer -->
            <div class="footer">
                <div class="container d-flex content">
                    <div class="box">
                        <img src="../style pages/image/Graduation logo 3.png" alt="">
                        <h6>تمكين الأطفال الذين يعانون من الوسواس القهري: التحرر من الهواجس والأفعال القهرية</h6>
                        <div class="icons d-flex">
                            <img src="../style pages/image/youtube.png" alt="">
                            <img src="../style pages/image/facebook.png" alt="">
                            <img src="../style pages/image/whatsapp.png" alt="">
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
    <!-- <embed src="/Quiz Game/Quiz Game" width="640" height="480"> -->
    <script src="../style pages/boot/bootstrap.bundle.min.js"></script>
    <!-- js file -->
    <script src="../style pages/js/main-4.js" defer ></script>
</body>
