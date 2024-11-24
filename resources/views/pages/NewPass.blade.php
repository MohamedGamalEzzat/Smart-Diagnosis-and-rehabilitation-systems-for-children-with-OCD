<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCD</title>
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
    <div class="ResetPass mainBg">
        <div class="content d-flex mainHeight">
            <div class="form">
                <div class="container mainPadding containerPage">
                    <div class="title">
                        <h3 class="mainH3">اكتب كلمة المرور الجديدة</h3>
                        <span>يجب أن تكون كلمة المرور الجديدة مختلفة</span>
                    </div>



                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                    <form  method="POST" action="{{ route('newPassword') }}">
                        @csrf
                        <div class="firstpass d-flex">
                            <input type="text" placeholder="كلمة المرور الجديدة" class="d-block inputNewPass " name="password">
                            <i class="fa-regular fa-eye-slash password " id="passwordHidden"></i>
                            <i class="fa-regular fa-eye showPassword" ></i>
                        </div>


                        <div class="switch">
                            <div class="loginSubmit">
                                <input type="submit" name='sigup' value="تسجيل الدخول" class="d-block sendBtn text-center w-75">
                            </div>
                        </div>
                    </form>

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
    <script src="{{asset('../style pages/js/Newpass.js')}}"></script>
</body>
</html>
