
@extends('../pages/layout pages/layout')

@section('title')

        Home
@endsection


@section('content')

<div class="loading"><div class="loading loadingBg loadingScroll">
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
                    <img src="{{asset('../style pages/image/Arrow 16.png')}}" alt="" class="Arrow">
                    <img src="{{asset('../style pages/image/loading.png')}}" alt="" class="imgLoading">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End loading -->

    {{-- <!-- start about -->
    <div class="about">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="box text-center">
                <div class="image">
                    <div class="img position-relative">
                        <img src="{{asset('../style pages/image/about us photo.png')}}" alt="">
                    </div>
                    </div>
        </div>
            <div class="contant position-relative">
                <img src="{{asset('../style pages/image/Star.png')}}" class="star" alt="">
                <h4>من نحن ؟</h4>
                <h3>مهمتنا هي تمكين وإلهام الأطفال الذين يعانون من الوسواس القهري</h3><br>
                <div class="img"><img src="{{asset('../style pages/image/about us photo (1).png')}}" alt="" class=""></div>
                <p>
                    نحن ملتزمون بتقديم الدعم والتوجيه الرحيم للأطفال الذين يعانون من اضطراب <br>الوسواس القهري  ، وتمكينهم كم التغلب على التحديات والازدهار في حياتهم اليومية
                </p>
            </div>

        </div>
        <img src="{{asset('../style pages/image/Umbrella.png')}}" class=" um position-relative" alt="">
        <div class="view d-flex">
          <div class="v1">
            <h4><i class="fa-solid fa-circle-check " style="color:#00994F;">&nbsp; &nbsp;</i>يوجد تطبيق هاتف  </h4>
            <h4><i class="fa-solid fa-circle-check " style="color:#9440FF;">&nbsp; &nbsp;</i>يوجد تطبيق هاتف </h4>
        </div>
        <div class="v2">
           <h4> <i class="fa-solid fa-circle-check " style="color:#00B2FF;">&nbsp; &nbsp;</i>يوجد تطبيق هاتف </h4>
           <h4> <i class="fa-solid fa-circle-check " style="color:#FE68BF;">&nbsp; &nbsp;</i>يوجد تطبيق هاتف </h4>
        </div>
        </div>
        </div> --}}
    <!-- End about -->
    {{-- <!-- Start videos -->
    <div class="videos ">
        <p class="p1">فيديوهات عن الوسواس القهري</p>
        <p class="p2">مقاطع فيديو جذابة وغنية بالمعلومات <br>للأطفال الذين يعانون من الوسواس القهري</p>
        <div class="container2">
        <div class="row row-cols-1 row-cols-md-4 g-4 d-flex justify-content-around">
            <div class="col">
                <div class="card h-100">
                    <img src="{{asset('../style pages/image/3.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">إدارة الوسواس القهري</h5>
                      <p class="card-text">اضطراب الوسواس القهري هو حالة صحية عقلية تتميز بتكرار الأفكار غير المرغوب فيها، والمعروفة باسم الهواجس، والسلوكيات المتكررة أو الطقوس العقلية، والمعروفة باسم القهر.</p>
                    </div>
                  </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('../style pages/image/3.png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">إدارة الوسواس القهري</h5>
                  <p class="card-text">اضطراب الوسواس القهري هو حالة صحية عقلية تتميز بتكرار الأفكار غير المرغوب فيها، والمعروفة باسم الهواجس، والسلوكيات المتكررة أو الطقوس العقلية، والمعروفة باسم القهر.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="{{asset('../style pages/image/ocd 1 (1).png')}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">قصص الوسواس القهري</h5>
                  <p class="card-text">اضطراب الوسواس القهري هو حالة صحية عقلية تتميز بتكرار الأفكار غير المرغوب فيها، والمعروفة باسم الهواجس، والسلوكيات المتكررة أو الطقوس العقلية، والمعروفة باسم القهر.</p>
                </div>
              </div>
            </div>
          </div>
    </div>
       <button class="btn"> المزيد </button>
    </div>
        <!-- End Videos -->
<!-- Start Games -->
    <div class="games">
        <div class="img2"><img src="{{asset('../style pages/image/Trophy.png')}}" alt=""></div>
        <p class="p1">العاب عن الوسواس القهري</p>
        <p class="p2">تمكين الاستراتيجيات المرحة لإدارة الهواجس <br>والأفعال القهرية</p>
        <div class="container2">
        <div class="row row-cols-1 row-cols-md-4 g-4 d-flex justify-content-around ">
            <div class="col">
                <div class="card card1" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('../style pages/image/Rectangle 3 (2).png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">اسم اللعبه</h5>
                      <p class="card-text">لعبة الوسواس القهري هي تجربة تفاعلية وجذابة مصممة لمساعدة الأطفال على فهم وإدارة اضطراب الوسواس القهري بطريقة ممتعة وداعمة.</p>
                      <a href="#" class="btn btn-outline-success">ابدأ اللعب</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card card1" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('../style pages/image/Rectangle 3 (1).png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">اسم اللعبه</h5>
                      <p class="card-text">لعبة الوسواس القهري هي تجربة تفاعلية وجذابة مصممة لمساعدة الأطفال على فهم وإدارة اضطراب الوسواس القهري بطريقة ممتعة وداعمة.</p>
                      <a href="#" class="btn btn-outline-success">ابدأ اللعب</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card card1" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('../style pages/image/Rectangle 3.png')}}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">اسم اللعبه</h5>
                      <p class="card-text">لعبة الوسواس القهري هي تجربة تفاعلية وجذابة مصممة لمساعدة الأطفال على فهم وإدارة اضطراب الوسواس القهري بطريقة ممتعة وداعمة.</p>
                      <a href="#" class="btn btn-outline-success">ابدأ اللعب</a>
                    </div>
                  </div>
            </div>
          </div>
    </div>
    <button class="btn btn2"> المزيد </button>

    </div>

    <!-- End games --> --}}
       <!-- Start Tasks -->
       <div class="tasks">
        <div class="container">
            <div class="MainTitle text-center">
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
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
@endsection
