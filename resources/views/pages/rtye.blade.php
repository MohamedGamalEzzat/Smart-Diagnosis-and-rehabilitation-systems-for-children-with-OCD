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
    <div class="forget mainBg">
        <div class="content d-flex mainHeight">
            <div class="form">
                <div class="container mainPadding containerPage">
                    <div>
                        <h3 class="mainH3">نسيت كلمه السر ؟</h3>
                        <span>من فضلك أدخل رقم الهاتف المرتبط بالموقع</span>
                    </div>




                    <h1>حجز موعد</h1>
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
            <form method="POST" action="{{ route('appointmentsst') }}">
                @csrf
                <select name="dddr_id" id="doctor-select">
                    @foreach ($doctors as $doctor)
                        <option value="{{ $doctor->d_id }}">{{ $doctor->d_name }}</option>
                    @endforeach
                </select>
                  <!-- حقل لتحديد التاريخ -->
               <label for="date">تاريخ الموعد:</label>
               <input type="date" name="date" id="date" value="2024-04-30"> <!-- تعيين قيمة افتراضية -->

              <!-- حقل لتحديد الوقت -->
                    <label for="time">وقت الموعد:</label>
                    <input type="time" name="time" id="time" value="12:00"> <!-- تعيين قيمة افتراضية -->
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <button type="submit">حجز موعد</button>
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
    <script src="{{asset('../style pages/js/main.js')}}"></script>
</body>
</html>
