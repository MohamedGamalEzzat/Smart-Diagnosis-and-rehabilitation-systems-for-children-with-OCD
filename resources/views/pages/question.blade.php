
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
    <!-- Start question -->
    <div class="question mainBg position-relative">
        <div class="content mainHeight QuestionP1">
            <div class="contentQuestion">
                <div class="containerPage">
                    <h3>الأسئله</h3>
                    <p>يرجى اختيار إجابة واحدة فقط</p>
                    <div class="mainQuestion">
                        <h5>مقدار الوقت الذي تستغرقه الأفكار الوسواسية ؟</h5>
                    </div>
                    <div class="choose">
                        <div class="box">
                            <input type="radio" value="لا شيء" name="rateOCD"  id="FirstChoose">
                            <label for="FirstChoose">لا شيء</label>
                        </div>
                        <div class="box">
                            <input type="radio" value="أقل من ساعة في اليوم (بمعدل 8 مرات فأقل)" name="rateOCD" id="SecondChoose">
                            <label for="SecondChoose">أقل من ساعة في اليوم (بمعدل 8 مرات فأقل)</label>
                        </div>
                        <div class="box">
                            <input type="radio" value="من ساعة إلى 3 ساعات في اليوم (أكثر من 8 مرات في اليوم)" name="rateOCD" id="thirdChoose">
                            <label for="thirdChoose">من ساعة إلى 3 ساعات في اليوم (أكثر من 8 مرات في اليوم)</label>
                        </div>
                        <div class="box">
                            <input type="radio" value="من 3 إلى 8 ساعات في اليوم (في معظم ساعات اليوم)" name="rateOCD" id="fourthChoose">
                            <label for="fourthChoose">من 3 إلى 8 ساعات في اليوم (في معظم ساعات اليوم)</label>
                        </div>
                        <div class="box">
                            <input type="radio" value="أكثر من 8 ساعات في اليوم (أكثر من تحملها ونادرا ما ماتمر ساعة بدون وساوس كثيرة)" name="rateOCD" id="fifthChoose">
                            <label for="fifthChoose">أكثر من 8 ساعات في اليوم (أكثر من تحملها ونادرا ما ماتمر ساعة بدون وساوس كثيرة)</label>
                        </div>

                    </div>
                    <div class="links">
                        <a href="#" class="sure1 ">تأكيد</a>
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
        <!-- Start part2 from Question -->
        <div class="QuestionP2">
            <div class="content d-flex mainHeight ">
                <div class="contentQuestion">
                    <div class="containerPage">
                        <h3>الأسئله</h3>
                        <p>يرجى اختيار إجابة واحدة فقط</p>
                        <div class="mainQuestion">
                            <h5> مقدار التعارض الذي تحدثه الافكار الوسواسية مع نشاطاتك الاجتماعية والعملية؟</h5>
                        </div>
                        <div class="choose">
                            <div class="box">
                                <input type="radio" value="لا يوجد" name="rateOCD"  id="FirstChooseP2">
                                <label for="FirstChooseP2">لا يوجد</label>
                            </div>
                            <div class="box">
                                <input type="radio" value=" تعارض خفيف مع النشاطات االجتماعية أو العملية ولكن النشاط العام ال يتأثر." name="rateOCD" id="SecondChooseP2">
                                <label for="SecondChooseP2">تعارض خفيف مع النشاطات الإجتماعية أو العملية ولكن النشاط العام ال يتأثر.</label>
                            </div>
                            <div class="box">
                                <input type="radio" value=" تعارض واضح في النشاطات االجتماعية أو العملية ولكن يمكن السيطرة عليه." name="rateOCD" id="thirdChooseP2">
                                <label for="thirdChooseP2">  تعارض واضح في النشاطات الإجتماعية أو العملية ولكن يمكن السيطرة عليه.</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="تسبب خلال كبيرا في أداء النشاطات االجتماعية أو العملية. " name="rateOCD" id="fourthChooseP2">
                                <label for="fourthChooseP2">تسبب خلال كبيرا في أداء النشاطات الإجتماعية أو العملية.</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="تسبب خلال بليغا." name="rateOCD" id="fifthChooseP2">
                                <label for="fifthChooseP2">تسبب خلال بليغا.</label>
                            </div>

                        </div>
                        <div class="links">
                            <a href="#" class="sure2">تأكيد</a>
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
        <!-- End part2 from Question -->

        <!-- Start part3 from Question -->
        <div class="QuestionP3">
            <div class="content d-flex mainHeight ">
                <div class="contentQuestion">
                    <div class="containerPage">
                        <h3>الأسئله</h3>
                        <p>يرجى اختيار إجابة واحدة فقط</p>
                        <div class="mainQuestion">
                            <h5>  مقدار التوتر والقلق المصاحب الافكار الوسواسية؟</h5>
                        </div>
                        <div class="choose">
                            <div class="box">
                                <input type="radio" value="لا يوجد" name="rateOCD"  id="FirstChooseP3">
                                <label for="FirstChooseP3">لا يوجد</label>
                            </div>
                            <div class="box">
                                <input type="radio" value=" خفيف(أحيانا) ، ليس مزعجا  " name="rateOCD" id="SecondChooseP3">
                                <label for="SecondChooseP3">خفيف(أحيانا) ، ليس مزعجا  </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="متوسط (غالبا) ومزعجا ولكن يمكن السيطرة عليه" name="rateOCD" id="thirdChooseP3">
                                <label for="thirdChooseP3"> متوسط (غالبا) ومزعجا ولكن يمكن السيطرة عليه </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="شديد(اغلب الوقت)ومزعج جدا " name="rateOCD" id="fourthChooseP3">
                                <label for="fourthChooseP3">شديد(اغلب الوقت)ومزعج جدا</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="توتر بليغ(دائم)لحد اإلعاقة تقريبا" name="rateOCD" id="fifthChooseP3">
                                <label for="fifthChooseP3">توتر بليغ(دائم)لحد الإعاقة تقريبا</label>
                            </div>

                        </div>
                        <div class="links">
                            <a href="#" class="sure3">تأكيد</a>
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
        <!-- End part3 from Question -->
        <!-- Start part4 from Question -->
        <div class="QuestionP4">
            <div class="content d-flex mainHeight ">
                <div class="contentQuestion">
                    <div class="containerPage">
                        <h3>الأسئله</h3>
                        <p>يرجى اختيار إجابة واحدة فقط</p>
                        <div class="mainQuestion">
                            <h5>  مقدار الجهد الذي المبذول في مقاومة الأفكار الوسواسية(بغض النظر عن نجاحك في المقاومة)؟</h5>
                        </div>
                        <div class="choose">
                            <div class="box">
                                <input type="radio" value="ال أبذل جهدا حتى أقاوم دائما(أو أن األفكار قليلة جدا بحيث ال حاجة للمقاومة)" name="rateOCD"  id="FirstChooseP4">
                                <label for="FirstChooseP4">لا أبذل جهدا حتى أقاوم دائما(أو أن الأفكار قليلة جدا بحيث الحاجة للمقاومة)</label>
                            </div>
                            <div class="box">
                                <input type="radio" value=" أحاول أن أقاوم معظم الوقت. " name="rateOCD" id="SecondChooseP4">
                                <label for="SecondChooseP4">أحاول أن أقاوم معظم الوقت. </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="أبذل بعض الجهد حتى أقاوم." name="rateOCD" id="thirdChooseP4">
                                <label for="thirdChooseP4"> أبذل بعض الجهد حتى أقاوم. </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="أستسلم لكل األفكار الوسواسية بدون محاولة للسيطرة عليها، وإن حاولت السيطرة فيكون بعد تردد" name="rateOCD" id="fourthChooseP4">
                                <label for="fourthChooseP4">أستسلم لكل الأفكار الوسواسية بدون محاولة للسيطرة عليها، وإن حاولت السيطرة فيكون بعد تردد</label>
                            </div>
                            <div class="box">
                                <input type="radio" value=" أستسلم كلية وبإرادتي لألفكار الوسواسية كلها" name="rateOCD" id="fifthChooseP4">
                                <label for="fifthChooseP4"> أستسلم كلية وبإرادتي للأفكار الوسواسية كلها.</label>
                            </div>

                        </div>
                        <div class="links">
                            <a href="#" class="sure4">تأكيد</a>
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
        <!-- End part4 from Question -->
        <!-- Start part5 from Question -->
        <div class="QuestionP5">
            <div class="content d-flex mainHeight ">
                <div class="contentQuestion">
                    <div class="containerPage">
                        <h3>الأسئله</h3>
                        <p>يرجى اختيار إجابة واحدة فقط</p>
                        <div class="mainQuestion">
                            <h5>  مقدار سيطرتك على الأفكار الوسواسية ؟</h5>
                        </div>
                        <div class="choose">
                            <div class="box">
                                <input type="radio" value="سيطرة تامة." name="rateOCD"  id="FirstChooseP5">
                                <label for="FirstChooseP5">سيطرة تامة.</label>
                            </div>
                            <div class="box">
                                <input type="radio" value=" سيطرة كبيرة، عادة يمكنني أن أوقف أو أصرف انتباهي عن الوسواس عند بذل بعض الجهد والتركيز. " name="rateOCD" id="SecondChooseP5">
                                <label for="SecondChooseP5">سيطرة كبيرة، عادة يمكنني أن أوقف أو أصرف انتباهي عن الوسواس عند بذل بعض الجهد والتركيز. </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="سيطرة متوسطة، بعض األحيان استطيع إيقاف أو صرف انتباهي عن الوسواس" name="rateOCD" id="thirdChooseP5">
                                <label for="thirdChooseP5"> سيطرة متوسطة، بعض الأحيان استطيع إيقاف أو صرف انتباهي عن الوسواس </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="أكثر من ثالث ساعات في اليوم ، أو تقوم باألفعال كثيرا جدا( أكثر من 8 مرات في اليوم وخالل معظم ساعات )" name="rateOCD" id="fourthChooseP5">
                                <label for="fourthChooseP5">أكثر من ثالث ساعات في اليوم ، أو تقوم بالأفعال كثيرا جدا( أكثر من 8 مرات في اليوم وخلال معظم ساعات )</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="لا سيطرة ، نادرا ما أستطيع صرف االنتباه عن الوساوس ولو للحظات قليلة." name="rateOCD" id="fifthChooseP5">
                                <label for="fifthChooseP5">لا سيطرة ، نادرا ما أستطيع صرف الأنتباه عن الوساوس ولو للحظات قليلة.</label>
                            </div>

                        </div>
                        <div class="links">
                            <a href="#" class="sure5">تأكيد</a>
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
        <!-- End part5 from Question -->
        <!-- Start part6 from Question -->
        <div class="QuestionP6">
            <div class="content d-flex mainHeight ">
                <div class="contentQuestion">
                    <div class="containerPage">
                        <h3>الأسئله</h3>
                        <p>يرجى اختيار إجابة واحدة فقط</p>
                        <div class="mainQuestion">
                            <h5>  مقدار الوقت الذي تمضيه في القيام بالافعال القهرية ؟</h5>
                        </div>
                        <div class="choose">
                            <div class="box">
                                <input type="radio" value=" لا شيء" name="rateOCD"  id="FirstChooseP6">
                                <label for="FirstChooseP6">لا شئ</label>
                            </div>
                            <div class="box ">
                                <input type="radio" value=" أقل من ساعة في اليوم ، أو تقوم باألفعال أحيانا( ال تزيد عن 8 مرات في اليوم)" name="rateOCD" id="SecondChooseP6">
                                <label for="SecondChooseP6">أقل من ساعة في اليوم ، أو تقوم بالأفعال أحيانا( ال تزيد عن 8 مرات في اليوم)</label>
                            </div>
                            <div class="box d-inline-flex align-items-center justify-content-center">
                                <input type="radio" value="من ساعة إلى ثالث ساعات في اليوم، أو تقوم باألفعال كثيرا(أكثر من 8 مرات في اليوم ولكن معظم الساعات تخلو من األفعال القهرية)" name="rateOCD" id="thirdChooseP6">
                                <label for="thirdChooseP6"> من ساعة إلى ثالث ساعات في اليوم، أو تقوم بالأفعال كثيرا(أكثر من 8 مرات في اليوم ولكن معظم الساعات تخلو من الأفعال القهرية) </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="سيطرة قليلة، نادرا ما أنجح في إيقاف الوساوس، أستطيع فقط صرف االنتباه وبصعوبة." name="rateOCD" id="fourthChooseP6">
                                <label for="fourthChooseP6">سيطرة قليلة، نادرا ما أنجح في إيقاف الوساوس، أستطيع فقط صرف الانتباه وبصعوبة.</label>
                            </div>
                            <div class="box d-inline-flex align-items-center justify-content-center">
                                <input type="radio" value="كثر من 8 ساعات في اليوم أو تقوم باألفعال بشكل دائم(كثر من أن تحصيها ونادرا ماتمر ساعة ال تقوم فيها باألفعال)." name="rateOCD" id="fifthChooseP6">
                                <label for="fifthChooseP6">كثر من 8 ساعات في اليوم أو تقوم بالافعال بشكل دائم(كثر من أن تحصيها ونادرا ماتمر ساعة ال تقوم فيها
                                    بالأفعال)</label>
                            </div>

                        </div>
                        <div class="links">
                            <a href="#" class="sure6">تأكيد</a>
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
        <!-- End part6 from Question -->

        <!-- Start part7 from Question -->
        <div class="QuestionP7">
            <div class="content d-flex mainHeight ">
                <div class="contentQuestion">
                    <div class="containerPage">
                        <h3>الأسئله</h3>
                        <p>يرجى اختيار إجابة واحدة فقط</p>
                        <div class="mainQuestion">
                            <h5>  مقدار التعارض الذي تحدثه الأفعال القهرية في نشاطاتك الإجتماعية والعملية ؟</h5>
                        </div>
                        <div class="choose">
                            <div class="box">
                                <input type="radio" value=" لا يوجد" name="rateOCD"  id="FirstChooseP7">
                                <label for="FirstChooseP7">لا يوجد</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="تعارض خفيف مع النشاطات االجتماعية أو العملية ، ولكن النشاط العام ال يتأثر" name="rateOCD" id="SecondChooseP7">
                                <label for="SecondChooseP7">تعارض خفيف مع النشاطات الإجتماعية أو العملية ، ولكن النشاط العام ال يتأثر</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="تعارض واضح مع النشاطات االجتماعية أو العملية ولكن يمكن السيطرة عليه" name="rateOCD" id="thirdChooseP7">
                                <label for="thirdChooseP7">تعارض واضح مع النشاطات الإجتماعية أو العملية ولكن يمكن السيطرة عليه </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="سبب خلال كبيرا في أداء النشاطات االجتماعية أو العملية" name="rateOCD" id="fourthChooseP7">
                                <label for="fourthChooseP7">سبب خلال كبيرا في أداء النشاطات الإجتماعية أو العملية.</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="تسبب عجزا كبيرا" name="rateOCD" id="fifthChooseP7">
                                <label for="fifthChooseP7"> تسبب عجزا كبيرا</label>
                            </div>

                        </div>
                        <div class="links">
                            <a href="#" class="sure7">تأكيد</a>
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
        <!-- End part7 from Question -->


        <!-- Start part8 from Question -->
        <div class="QuestionP8">
            <div class="content d-flex mainHeight ">
                <div class="contentQuestion">
                    <div class="containerPage">
                        <h3>الأسئله</h3>
                        <p>يرجى اختيار إجابة واحدة فقط</p>
                        <div class="mainQuestion">
                            <h5>  مقدار التوتر والقلق الناتج في حال الإمتناع عن القيام بالأفعال القهرية ؟</h5>
                        </div>
                        <div class="choose">
                            <div class="box">
                                <input type="radio" value=" لا يوجد" name="rateOCD"  id="FirstChooseP8">
                                <label for="FirstChooseP8">لا يوجد</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="" name="rateOCD" id="SecondChooseP8">
                                <label for="SecondChooseP8">قلق بسيط عند الإمتناع عن القيام بالأفعال .</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="يظهر القلق لكن يمكن تحمله." name="rateOCD" id="thirdChooseP8">
                                <label for="thirdChooseP8"> يظهر القلق لكن يمكن تحمله. </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="قلق واضح ومزعج للغاية." name="rateOCD" id="fourthChooseP8">
                                <label for="fourthChooseP8">قلق واضح ومزعج للغاية.</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="قلق شديد يسبب عجزا بليغا." name="rateOCD" id="fifthChooseP8">
                                <label for="fifthChooseP8">قلق شديد يسبب عجزا بليغا.</label>
                            </div>

                        </div>
                        <div class="links">
                            <a href="#" class="sure8">تأكيد</a>
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
        <!-- End part8 from Question -->


        <!-- Start part9 from Question -->
        <div class="QuestionP9">
            <div class="content d-flex mainHeight ">
                <div class="contentQuestion">
                    <div class="containerPage">
                        <h3>الأسئله</h3>
                        <p>يرجى اختيار إجابة واحدة فقط</p>
                        <div class="mainQuestion">
                            <h5>  مقدار الوقت الذي تمضيه في القيام بالافعال القهرية ؟</h5>
                        </div>
                        <div class="choose">
                            <div class="box">
                                <input type="radio" value=" أبذل جهدا حتى أقاوم دائما(أو أن األفعال القهرية قليلة بحيث ال حاجة للمقاومه)" name="rateOCD"  id="FirstChooseP9">
                                <label for="FirstChooseP9">أبذل جهدا حتى أقاوم دائما(أو أن الأفعال القهرية قليلة بحيث ال حاجة للمقاومه)</label>
                            </div>
                            <div class="box">
                                <input type="radio" value=" أحاول أن أقاوم معظم الوقت " name="rateOCD" id="SecondChooseP9">
                                <label for="SecondChooseP9"> أحاول أن أقاوم معظم الوقت</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="عمل بعض المحاوالت للمقاومة." name="rateOCD" id="thirdChooseP9">
                                <label for="thirdChooseP9"> عمل بعض المحاولات للمقاومة. </label>
                            </div>
                            <div class="box">
                                <input type="radio" value=" استسلم لكل األفعال القهرية بدون محاولة للسيطرة عليها ، وإن حاولت السيطرة فيكون بعد تردد." name="rateOCD" id="fourthChooseP9">
                                <label for="fourthChooseP9"> استسلم لكل الأفعال القهرية بدون محاولة للسيطرة عليها ، وإن حاولت السيطرة فيكون بعد تردد.</label>
                            </div>
                            <div class="box">
                                <input type="radio" value=".أستسلم كلية وبإرادتي لكل األفعال القهرية." name="rateOCD" id="fifthChooseP9">
                                <label for="fifthChooseP9">أستسلم كلية وبإرادتي لكل الأفعال القهرية.</label>
                            </div>

                        </div>
                        <div class="links">
                            <a href="#" class="sure9">تأكيد</a>
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
        <!-- End part9 from Question -->


        <!-- Start part10 from Question -->
        <div class="QuestionP10">
            <div class="content d-flex mainHeight ">
                <div class="contentQuestion">
                    <div class="containerPage">
                        <h3>الأسئله</h3>
                        <p>يرجى اختيار إجابة واحدة فقط</p>
                        <div class="mainQuestion">
                            <h5>  مقدار سيطرتك على الأفعال القهرية ؟</h5>
                        </div>
                        <div class="choose">
                            <div class="box">
                                <input type="radio" value="سيطرة تامة." name="rateOCD"  id="FirstChooseP10">
                                <label for="FirstChooseP10">سيطرة تامة.</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="عادة ما أوقف األفعال القهرية بصعوبة" name="rateOCD" id="SecondChooseP10">
                                <label for="SecondChooseP10">عادة ما أوقف الأفعال القهرية بصعوبة</label>
                            </div>
                            <div class="box">
                                <input type="radio" value=" أحيانا أستطيع إيقاف األفعال القهرية بصعوبة." name="rateOCD" id="thirdChooseP10">
                                <label for="thirdChooseP10">  أحيانا أستطيع إيقاف الأفعال القهرية بصعوبة. </label>
                            </div>
                            <div class="box">
                                <input type="radio" value="ستطيع بصعوبة أن أؤخر - فقط - األفعال القهرية لكن يجب على القيام بها حتى النهاية" name="rateOCD" id="fourthChooseP10">
                                <label for="fourthChooseP10">ستطيع بصعوبة أن أؤخر - فقط - الأفعال القهرية لكن يجب على القيام بها حتى النهاية</label>
                            </div>
                            <div class="box">
                                <input type="radio" value="كثر  نادرا ما أستطيع أن أؤخر القيام باألفعال القهرية ولو للحظات." name="rateOCD" id="fifthChooseP10">
                                <label for="fifthChooseP10"> نادرا ما أستطيع أن أؤخر القيام بالأفعال القهرية ولو للحظات.</label>
                            </div>

                        </div>
                        <div class="links">
                            <a href="#" class="sure10">تأكيد</a>
                            <a href="#" id="back10">رجوع</a>
                        </div>
                        <div class="insert">
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
        <!-- End part10 from Question -->
    </div>
    <div class="position-absolute" id="layer">

    </div>
    <!-- End question -->
    <!-- js file -->
    <script src="{{asset('../style pages/boot/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('../style pages/js/Question.js')}}"></script>
</body>
</html>
