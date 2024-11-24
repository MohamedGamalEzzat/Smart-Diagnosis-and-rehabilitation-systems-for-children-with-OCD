<?php
use App\Models\User;
use App\Models\Doctor;
use App\Models\MoodCard;
use App\Models\AdminVideo;
use Illuminate\Support\Str;
use App\Models\ControlVideo;
use Illuminate\Http\Request;
use App\Models\octtyydvideos;
use Illuminate\Support\Facades\DB;
use App\Models\ControlImageUserpro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sinuplogcontoller;


Route::get('/home', function () {
  return view('pages/home');
});



Route::get('/home2', function () {
    return view('pages/home2');
  });


Route::get('/home78', function () {
    return view('pages/home78');
  });


Route::get('/Code', function () {
  return view('pages/Code');
});



Route::get('/NewPass', function () {
  return view('pages/NewPass');
});

Route::get('/question', function () {
  return view('pages/question');
});


// Route::get('/learn', function () {
//     $videos = ControlVideo::all();
//     return view('pages.learn', compact('videos'));
// });


Route::get('/learn', function () {
    // استعراض معلومات المستخدم مع آخر تحديث لكل فيديو
    $userWithVideoInfo = User::findOrFail(auth()->id());



    // الحصول على آخر تحديث (حسب id) لكل فيديو بالنسبة للمستخدم المسجل
    $latestVideoIds = Octtyydvideos::selectRaw('MAX(id) as id')
        ->where('user_id', auth()->id())
        ->groupBy('control_video_id')
        ->get();

    // الحصول على التحديثات الكاملة باستخدام الـ id الذي تم الحصول عليه
    $latestVideoUpdates = Octtyydvideos::whereIn('id', $latestVideoIds)
        ->get();


    // تصحيح الخطأ: استعراض نتائج الاستعلام للتحقق

    $videos = ControlVideo::all();

    return view('pages.learn', compact('userWithVideoInfo', 'latestVideoUpdates', 'videos',));
});

// Route::get('/learn', function () {
//     // استعراض معلومات المستخدم مع معلومات الفيديو
//     $userWithVideoInfo = User::findOrFail(auth()->id());
//     $latestVideoInfo = Octtyydvideos::where('user_id', auth()->id())
//         ->latest()
//         ->first();
//         dd($latestVideoInfo);
//     // استعراض الفيديوهات
//     // $videos = ControlVideo::all();

//     // return view('pages.learn', compact('userWithVideoInfo', 'latestVideoInfo', 'videos'));
// });



Route::get('/game', function () {
    return view('pages/game');
  });




Route::get('/Tasks', function () {
    $randomString = Str::random(10); // يولد سلسلة عشوائية طولها 8 حروف وأرقام
    return view('pages/Tasks' ,compact('randomString'));
  });


// Route::get('/Personal', function () {

//     $user = Auth::user();

//     return view('pages/Personal', compact('user'));
//   });

Route::get('/forgetpass phone', function () {
    return view('pages/forgetpass phone');
  });

  Route::get('/openingPage', function () {
    return view('pages/openingPage');
  });

  Route::get('/rtye', function () {
    $doctors = Doctor::all();
    return view('pages/rtye',compact('doctors'));
  });



  Route::get('/moodtest', function () {
    $moods = MoodCard::all();
    return view('pages/moodtest',['moods' => $moods]);
  });



  Route::get('/videoshow', function () {


    $videos = ControlVideo::all();
    return view('pages/videoshow',compact('videos'));
  });


  Route::get('/dectorss', function () {
    return view('pages/dectorss');
  });

  Route::get('/dectorlllogin', function () {
    return view('pages/dectorlllogin');
  });


  Route::get('/imge', function () {

    $images = ControlImageUserpro::all(); // استرجاع كل الصور من جدول control_image_userpro
    return view('pages/imge' , compact('images'));
  });

  Route::get('/passtotask', function () {
    return view('pages/passtotask');
  });

  Route::get('/Tasks22', function () {
    return view('pages/Tasks22');
  });

  Route::get('/home888', function () {
    return view('pages/home888');
  });

  Route::get('/game796', function () {
    return view('pages/game796');
  });

