<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        OCD
    </title>
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
    <div class="ResetPass mainBg">
        <div class="content d-flex mainHeight">
            <div class="form">
                <div class="container mainPadding containerPage">
                    <div class="title">
                        <h3 class="mainH3"> تأكيد كلمة المرور</h3>
                        <span>من فضلك أدخل كلمة المرور لإضافة المهمة</span>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                    <form method="POST" action="{{ route('checkpassword') }}">
                        @csrf
                        <label for="password">كلمة المرور:</label>
                        <div class="firstpass d-flex">
                            <input type="password" placeholder="كلمة المرور " class="d-block inputNewPass " id="PassTasks"  name="password">
                            <i class="fa-regular fa-eye-slash password " id="passwordHidden"></i>
                            <i class="fa-regular fa-eye showPassword" ></i>
                        </div>
                        <div class="loginSubmit">
                            <input type="submit" name='sigup' value=" تأكيد " class="d-block sendBtn text-center w-75">
                        </div>

                        {{-- <label for="user_number">الرقم المدخل:</label>
                        <input type="text" id="user_number" name="user_number" required>
                        <input type="hidden" name="random_number" value="{{ $randomString }}">
                        <button type="submit">تأكيد الرقم</button> --}}
                    </form>
                </div>
            </div>
            <div class="leftSide">
                <div class="">
                    <div class="image">
                        <img src="../style pages/image/Graduation logo 3.png" alt="logo OCD">
                    </div>
                    <div class="image">
                        <img src="../style pages/image/rafiki.png" alt="Parent &child">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../style pages/boot/bootstrap.bundle.min.js"></script>
        <!-- js file -->
        <script src="../style pages/js/Newpass.js"></script>
</body>
