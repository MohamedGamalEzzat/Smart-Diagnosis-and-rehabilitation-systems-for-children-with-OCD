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
    <div class="learning ">
        <!-- Start Header  -->
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
                                            <a class="nav-link" href="{{url('game796')}}">الألعاب</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{url('learn')}}">التعلم</a>
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
        </div>
            <!-- End Header  -->
            <!-- Start Loading  -->
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
                            <img src="{{asset('../style pages/image/girl header.png')}}" alt="">
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
            <!--End Loading  -->
            <div class="playVideo">
            <!-- Start Sec3 -->
            <div class="AboutVideos">
                <div class="insert-img">
                    <img src="{{asset('../style pages/image/Vector 10.png')}}" alt="">
                    <img src="{{asset('../style pages/image/Amp_2.png')}}" alt="">
                </div>
                <div class="container d-flex justify-content-evenly ">
                    <div class="image">
                        <img src="{{asset('../style pages/image/Sec3.png')}}" alt="">
                    </div>
                    <div class="content">
                        <p>ما هي فيديوهاتنا ؟</p>
                        <h4>اكتشف عالمًا من العجائب والبهجة من خلال مقاطع الفيديو الجذابة للأطفال</h4>
                        <p>مرحبًا بكم في مجموعة مقاطع الفيديو الخاصة بنا، حيث يلتقي التعلم بالمرح والخيال لا حدود له! تم تصميم مجموعتنا المختارة بعناية من مقاطع الفيديو لإشراك العقول الشابة وتوفير تجربة تفاعلية وتعليمية. بدءًا من رواية القصص المتحركة التي تبعث الحياة في الشخصيات المحبوبة، إلى الصور المرئية النابضة بالحياة والملونة التي تشعل الإبداع، هناك شيء يستمتع به كل طفل.</p>
                    </div>
                </div>
            </div>
            <!-- End Sec3 -->
            <!-- Start learnVideo  -->
            <div class="learnVideo">
                <div class="container">
                    <div class="MainTitle text-center">
                        <p>فيديوهات عن الوسواس القهري</p>
                        <h5>مقاطع فيديو جذابة وغنية بالمعلومات للأطفال الذين يعانون من الوسواس القهري  </h5>
                    </div>
                    <div class="insert-load">
                        <img src="{{asset('../style pages/image/Star.png')}}" alt="">
                        <img src="{{asset('../style pages/image/ice.png')}}" alt="">
                    </div>
                    <div class="content d-grid">




                        @foreach($videos as $video)
                        <div class="box" onclick="window.location.href='{{ route('videoshow2',$video->id) }}'">
                            <div class="image">
                                <video controls width="100" height="100">
                                    <source src="{{ $video->cvideo_file }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="text">
                                <h4>{{ $video->cvideo_name }}</h4>
                                <p></p>

                                <ul>
                                    @foreach($latestVideoUpdates as $update)
                                        @if($update->control_video_id == $video->id)
                                            <li>
                                                {{-- <p>وقت آخر مشاهدة: {{ $update->oovideo_time }}</p> --}}

                                                @if($update->oovideo_time && $video->cvideo_time)
                                                {{-- تحويل الأوقات إلى الصيغة المناسبة --}}
                                                @php
                                                    $lastWatchedTime = strtotime($update->oovideo_time); // الوقت المحدد في قاعدة البيانات
                                                    $originalVideoTime = strtotime($video->cvideo_time); // الوقت الأصلي من جدول ControlVideo

                                                    // التحقق من صحة الأوقات قبل القيام بعمليات الحساب
                                                    if ($lastWatchedTime !== false && $originalVideoTime !== false) {
                                                        // حساب الفرق بين الأوقات بالثواني
                                                        $timeDifference = abs($lastWatchedTime - $originalVideoTime); // قيمة مطلقة لضمان الحصول على القيمة الموجبة

                                                        // تحديد اللون بناءً على وجود فارق زمني
                                                        if ($timeDifference == 0) {
                                                            // لو كان الفرق بين الوقت المحدد والوقت الأصلي صفر، يعني أن الفيديو مشاهد بالكامل
                                                            $status = gmdate("H:i:s", $timeDifference); // استخدام الوقت المتبقي كنص بدلاً من "غير مكتمل"
                                                            $color = "#00FF00"; // أخضر للنسبة المئوية 100%
                                                        } else {
                                                            $status = gmdate("H:i:s", $timeDifference); // استخدام الوقت المتبقي كنص بدلاً من "غير مكتمل"
                                                            $color = "#FF0000"; // أحمر لأن الفيديو غير مشاهد بالكامل
                                                        }

                                                        // تحديد العرض بناءً على الوجود أو عدم الوجود لفارق زمني
                                                        $width = ($timeDifference > 0) ? '50%' : '100%';
                                                    } else {
                                                        // في حالة عدم وجود فارق زمني، يعرض الشريط باللون الأخضر كاملًا
                                                        $status = "مدة الفيديو غير صالحة"; // عرض رسالة للإشعار بعدم صلاحية مدة الفيديو
                                                        $color = "#CCCCCC"; // أخضر للنسبة المئوية 100%
                                                        $width = '100%';
                                                    }

                                                @endphp


                                                {{-- عرض الفرق بين الوقت الأصلي والوقت المحدد --}}
                                                <p>الوقت اللي  باقي من فديو</p>

                                                {{-- عرض حالة الفيديو --}}
                                                <div style="width: 100%; background-color: #f2f2f2;">
                                                    <div style="width: {{ $width }}; background-color: {{ $color }}; text-align: center;">{{ $status }}</div>
                                                </div>
                                            @else

                                                <p>مدة الفيديو غير صالحة</p>
                                            @endif
                                                {{-- <p>حالة الفيديو: {{ $update->vvvideo_completed }}</p> --}}
                                                <p>حالة الفيديو:
                                                    @if($update->vvvideo_completed == 'مكتمل')
                                                        <span style="color: green;">{{ $update->vvvideo_completed }} <i class="fas fa-check-circle" style="font-size: 20px; color: inherit;"></i></span>
                                                    @else
                                                        <span style="color: red;">{{ $update->vvvideo_completed }} <i class="fas fa-times-circle" style="font-size: 20px; color: inherit;"></i></span>

                                                    @endif
                                                </p>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                                @if($latestVideoUpdates->isEmpty())
                                <p>ابدأ </p>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            {{-- <!-- Start OtherVideo -->
            <div class="OthersVideo">
                <div class="container">
                    <div class="MainTitle text-center">
                        <p> فيديوهات عن الوسواس القهري</p>
                        <h4>فيديوهات آخري </h4>
                    </div>
                    <div class="content d-grid">
                        <div class="box">
                            <div class="video">
                                <video src="../style pages/image/mov_bbb.mp4" ></video>
                            </div>
                            <div class="text">
                                <h4>قصص الوسواس القهري</h4>
                                <p>اضطراب الوسواس القهري هو حالة صحية عقلية تتميز بتكرار الأفكار غير المرغوب فيها، والمعروفة باسم الهواجس، والسلوكيات المتكررة أو الطقوس العقلية، والمعروفة باسم القهر.</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="video">
                                <video src="../style pages/image/mov_bbb.mp4" ></video>
                            </div>
                            <div class="text">
                                <h4>قصص الوسواس القهري</h4>
                                <p>اضطراب الوسواس القهري هو حالة صحية عقلية تتميز بتكرار الأفكار غير المرغوب فيها، والمعروفة باسم الهواجس، والسلوكيات المتكررة أو الطقوس العقلية، والمعروفة باسم القهر.</p>
                            </div>
                        </div>
                        <div class="box">
                            <div class="video">
                                <video src="../style pages/image/mov_bbb.mp4" ></video>
                            </div>
                            <div class="text">
                                <h4>قصص الوسواس القهري</h4>
                                <p>اضطراب الوسواس القهري هو حالة صحية عقلية تتميز بتكرار الأفكار غير المرغوب فيها، والمعروفة باسم الهواجس، والسلوكيات المتكررة أو الطقوس العقلية، والمعروفة باسم القهر.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- End OtherVideo -->


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

    <script>
        // التقاط قيمة الـ ID عند تغيير الخيار في القائمة المنسدلة
        document.getElementById('doctor-select').addEventListener('change', function() {
            var doctorId = this.value; // القيمة المحددة للدكتور (ID)
            console.log('Selected Doctor ID:', doctorId); // يمكنك استخدامها لإرسالها إلى الكونترولر
        });
    </script>
    <script src="{{asset('../style pages/boot/bootstrap.bundle.min.js')}}"></script>
    <!-- js file -->
    <script src="{{asset('../style pages/js/main-4.js')}}" defer></script>
</body>
