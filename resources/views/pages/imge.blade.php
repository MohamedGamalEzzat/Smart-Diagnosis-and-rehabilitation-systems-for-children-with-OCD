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
                        <h3 class="mainH3">   ضيف صوره شخصيه</h3>
                        {{-- <span>من فضلك أدخل رقم الهاتف المرتبط بالموقع</span> --}}
                    </div>

                            <!-- resources/views/profile/upload-image.blade.php -->

                          {{-- <form action="{{ route('uuuuopppimage') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <label>اختر الصور التي ترغب في استخدامها:</label>
                             @foreach ($images as $image)
                             <div>
                                <input type="checkbox" id="image_{{ $image->id }}" name="image_path" value="{{ asset($image->image_userpro) }}">
                                <label for="image_{{ $image->id }}"><img src="{{ asset($image->image_userpro) }}" alt=""></label>

                             </div>
                             @endforeach
                                 <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                <div class="switch">
                                <div class="loginSubmit">
                                <input type="submit" name='sigup' value="ارسال" class="d-block sendBtn text-center w-75">
                                    </div>

                                    <div class="text-center">

                                    </div>
                                </div>
                                 </form> --}}

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
