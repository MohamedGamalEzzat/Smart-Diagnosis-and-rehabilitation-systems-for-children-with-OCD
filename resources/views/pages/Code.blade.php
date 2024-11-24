<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCD</title>
    <link rel="shortcut icon" type="image/x-icon" href="../style pages/image/Graduation logo 3.png">
    <!-- Bootstrap file -->
    <link rel="stylesheet" href="{{asset('/style pages/boot/bootstrap.min.css')}}">
    <!-- css file -->
    <!-- <link rel="stylesheet" href="../Addition/code.css"> -->
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
    <div class="code mainBg">
        <div class="content d-flex mainHeight">
            <div class="form">
                <div class=" container  mainPadding containerPage">
                    <div class="title">
                        <h3 class="mainH3">إدخال الرمز</h3>
                        <span>الرجاء إدخال الرقم المكون من <span> ٤ </span> أرقام</span>
                    </div>
                    <form action="#" class=" d-flex ">
                        <div class="sectionCode d-flex justify-content-between">
                            <div class="d-flex  sectionOne">
                                <div><input type="text" name="code1" ></div>
                                <div><input type="text" name="code2"></div>
                            </div>
                            <div class="d-flex sectionOne">
                                <div><input type="text" name="code3"></div>
                                <div><input type="text" name="code4"></div>
                            </div>
                        </div>
                    </form>
                    <div class="switch">
                        <div class="loginSubmit text-center">
                            <a href="{{asset('../pages/NewPass.html')}}" class="text-center">التحقق من الرمز</a>
                        </div>
                    </div>
                    <div class=" timer">
                        <a href="#" class="resentMess d-inline">إعادة إرسال</a>
                        <span> الكود فى غضون</span>
                        <span id="timeSend"></span>
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
    <script src="{{asset('../style pages/js/code.js')}}"></script>
</body>
</html>
