<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        OCD
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('../style pages/image/Graduation logo 3.png')}}">
    <!-- Bootstrap file -->
    <link rel="stylesheet" href="{{asset('../style pages/boot/bootstrap.min.css')}}">
    <!-- css file -->
    <!-- <link rel="stylesheet" href="../Addition/StyleHome.css"> -->
    <link rel="stylesheet" href="{{asset('../style pages/Css/Style.css')}}">
    <link rel="stylesheet" href="{{asset('../style pages/Css/StyleBack.css')}}">

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

                        </div>
                    </div>
                </div>
            </div>


            <div class="videoTimer">
                <div class="container">
                    <h2>{{ $videos->cvideo_name }}</h2>
                    <p>{{ $videos->cdescription }}</p>
                    <div class="MainVideo">
                        <video controls>
                            <source src="{{ asset($videos->cvideo_file) }}" type="video/mp4">
                            متصفحك الحالي لا يدعم تشغيل الفيديو
                        </video>
                    </div>

                    <form action="/watch-video" method="POST"  id="myForm" onsubmit="formSubmitted()">
                        @csrf
                        <div class="displayTime">
                            <span>أدخل الوقت الذي شاهدت فيه الفيديو</span>
                            <div class="d-inline-block">
                                {{-- <label for="selectedTime" class="form-label">ادخل الوقت الذي شاهدت فيه الفديو :</label> --}}
                                <input type="text" id="selectedTime" name="oovideo_time" readonly class="form-control ml-2"   placeholder="HH:MM:SS" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" >
                            </div>
                        </div>

                        <div class="slideContainer">
                            <input type="range" class="sliderRange" min="1" max="500" step="1" id="customRange3" name="">
                        </div>

                       <br><br>
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="control_video_id" value="{{ $videos->id}}">

                        <div class="BtnSendTime">
                            <button type="submit">إرسال</button>
                        </div>
                    </form>

                </div>
            </div>


            {{-- <form action="/watch-video" method="POST"  id="myForm" onsubmit="formSubmitted()">
                @csrf


                <div class="form-group">
                    <label for="selectedTime" class="form-label">الوقت المحدد (بالساعات:الدقائق:الثواني):</label>
                    <input type="text" id="selectedTime" name="oovideo_time" readonly class="form-control ml-2"   placeholder="HH:MM:SS" pattern="[0-9]{2}:[0-9]{2}:[0-9]{2}" >
                    <div class="d-flex align-items-center">
                        <input type="range" class="form-range custom-range" min="0" max="180" step="1" id="customRange3" name="">
                    </div>
                </div>
               <br><br>
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <input type="hidden" name="control_video_id" value="{{ $videos->id}}">

                <button type="submit">إرسال</button>
            </form> --}}
            {{-- <button type="button" onclick="goBack()">الرجوع</button> --}}

            {{-- <div id="confirmationMessage" class="confirm-message" style="display:none;">
                لم تقم بتعبئة النموذج. هل أنت متأكد من رغبتك في المغادرة؟
            </div> --}}
            <!-- End learnVideo  -->
            </div>
            <!-- Start OtherVideo -->


                    <div class="MainTitle text-center">
                        <p> فيديوهات عن الوسواس القهري</p>
                        <h4>فيديوهات آخري </h4>
                    </div>



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
        const rangeInput = document.getElementById('customRange3');
        const displayInput = document.getElementById('selectedTime');

        // قيمة الوقت المخزنة في داتابيز
        const storedTime = "{{ $videos->cvideo_time }}";

        // تحويل الوقت إلى ثوانٍ
        const storedTimeParts = storedTime.split(':');
        const storedSeconds = parseInt(storedTimeParts[0]) * 3600 + parseInt(storedTimeParts[1]) * 60 + parseInt(storedTimeParts[2]);

        // تحديث قيمة النطاق وعرض الوقت
        rangeInput.value = storedSeconds;
        displayInput.value = storedTime;

        rangeInput.addEventListener('input', function() {
            const maxSeconds = storedSeconds; // القيمة القصوى للثواني

            let seconds = parseInt(this.value);
            if (seconds > maxSeconds) {
                seconds = maxSeconds; // إعادة تعيين القيمة إلى الحد الأقصى
                rangeInput.value = maxSeconds; // تحديث قيمة النطاق
            }

            const hours = Math.floor(seconds / 3600);
            const minutes = Math.floor((seconds % 3600) / 60);
            const remainingSeconds = seconds % 60;

            const formattedTime = `${hours}:${minutes}:${remainingSeconds}`;
            displayInput.value = formattedTime;

            // تغيير لون السلايدر
            if (this.value > 1) {
    const percentage = (this.value / 500) * 100; // حساب النسبة المئوية للقيمة المدخلة
    const reversePercentage = 100 - percentage; // حساب النسبة المئوية المعكوسة
    this.style.background = `linear-gradient(to right, #d3d3d3 ${reversePercentage}%, #00994F ${reversePercentage}%, #00994F 100%)`; // تحديث الخلفية بناءً على النسبة المئوية وترتيب الألوان
} else {
    this.style.background = "#d3d3d3";
}

        });
    </script>



    <script>
        var formSubmitted = false; // متغير لتتبع ما إذا تم تعبئة النموذج أم لا

        function formSubmitted() {
            formSubmitted = true; // قم بتعيين المتغير إلى true عند تقديم النموذج
        }

        function goBack() {
            if (document.getElementById('myForm').checkValidity() || confirm("لم تقم بتعبئة النموذج. هل أنت متأكد من رغبتك في المغادرة؟")) {
                window.history.back(); // قم بالرجوع فقط إذا تم تعبئة النموذج أو تم التأكيد على المغادرة
            } else {
                document.getElementById('confirmationMessage').style.display = 'block'; // إظهار رسالة التأكيد
            }
        }

    </script>
    <script src="{{asset('../style pages/boot/bootstrap.bundle.min.js')}}"></script>
    <!-- js file -->
    <script src="{{asset('../style pages/js/main-4.js')}}" defer></script>
</body>
