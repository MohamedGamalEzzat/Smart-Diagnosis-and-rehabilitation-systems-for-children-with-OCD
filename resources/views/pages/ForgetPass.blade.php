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
    <div class="forget mainBg">
        <div class="content d-flex mainHeight">
            <div class="form">
                <div class="container mainPadding containerPage">
                    <div>
                        <h3 class="mainH3">نسيت كلمه السر ؟</h3>
                        <span>من فضلك أدخل البريد الإلكتروني أو الهاتف المرتبط بالموقع</span>
                    </div>
                    <form action="#">
                        <input type="text" placeholder="رقم الهاتف أو الإيميل" class="d-block w-75">
                    </form>
                    <div class="switch">
                        <div class="loginSubmit">
                            <a href="{{url('Code')}}" class="text-center">إرسال الرمز</a>
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
    <script src="{{asset('../style pages/js/main.js')}}"></script>
</body>
</html>