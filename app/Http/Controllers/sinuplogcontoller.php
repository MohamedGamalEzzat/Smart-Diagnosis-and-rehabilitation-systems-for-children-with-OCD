<?php



namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Task;
use App\Models\User;
use App\Models\Image;
use App\Models\Video;
use App\Models\VideoView;
use App\Models\AdminVideo;
use App\Models\ChildMcard;
use App\Models\ControlVideo;
use App\Models\ProfileImage;
use Illuminate\Http\Request;
use App\Models\octtyydvideos;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\ControlImageUserpro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersSinupRequest;
use Illuminate\Contracts\Validation\Validator;


class sinuplogcontoller extends Controller
{


function index () {
        return view('pages/SignUp');

}


function store( Request $request) {

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|max:255|unique:users|email:rfc,dns',
        'Age' => 'required|max:3',
        'phone' => 'required|max:11|unique:users|regex:/^([0-9\s\-\+\(\)]*)$/',
        'password' => 'required',
    ], [
        'email.unique' => 'البريد الإلكتروني مستخدم بالفعل. يرجى استخدام بريد إلكتروني آخر.',
        'phone.unique' => 'رقم الهاتف مستخدم بالفعل. يرجى استخدام رقم هاتف آخر.',
    ]);

     $user=new User();
     $user->create( $request->except('sigup')  );
     $this->sendWelcomeMessage($user);
     return redirect()->intended('/question');
}




private function sendWelcomeMessage(User $user)
{

    $message = "تم التسجيل بنجاح {$user->name}";

    session()->flash('welcome_message', $message);
}


function lo () {
    return view('pages/loginnn');
}
public function ogd( Request $request) {


    $credentials =[
        'email' => $request->email,
        'password' => $request->password,
    ];

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('home888');
    }

    return back()->with('error',' خطأ في تسجيل كلمه المرور او البريد الاكتروني (الايميل)');

}



public function logoutt2( Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('openingPage');

}





public function pro()
{

    $userId = auth()->id();

    // جلب آخر صورة مرتبطة بكل مستخدم
    $latestImages = Image::selectRaw('MAX(id) as id')
        ->whereNotNull('image_path')
        ->groupBy('user_id')
        ->get();

    // جلب التحديثات الكاملة لآخر الصور
    $images = Image::whereIn('id', $latestImages->pluck('id'))
        ->with('user') // تحميل المستخدم المرتبط بكل صورة
        ->get();

    // تصفية الصور حسب المستخدم الحالي
    $userImages = collect([]);
    foreach ($images as $image) {
        // تحقق مما إذا كانت الصورة تنتمي إلى المستخدم الحالي
        if ($image->user_id === $userId) {
            $userImages->push($image);
        }
    }

    // إذا لم يكن للمستخدم الحالي أي صورة، قم بتعيين صورة افتراضية
    if ($userImages->isEmpty()) {
        // افتراضياً، نستخدم صورة بروفايل افتراضية
        $defaultImage = new Image();
        $defaultImage->image_path = '../style pages/image/user profile photo.png';
        $userImages->push($defaultImage);
    }

    $images = ControlImageUserpro::all(); // استرجاع كل الصور من جدول control_image_userpro
       $user = User::all();
    return view('pages.Personal', compact('userImages','images'));
}

public function updateProfile(Request $request)
{
    // قم بتحديث البريد الإلكتروني إذا تم تقديمه
    if ($request->has('email')) {
        DB::table('users')->where('id', Auth::id())->update(['email' => $request->email]);
    }



    return redirect('/Personal')->with('success', 'تم تحديث الملف الشخصي بنجاح.');
}

public function pass (Request $request)
{

    // قم بتحديث كلمة المرور إذا تم تقديمها
    if ($request->has('password')) {
        DB::table('users')->where('id', Auth::id())->update(['password' => bcrypt($request->password)]);
    }

    return redirect('Personal')->with('success', 'تم تحديث الملف الشخصي بنجاح.');
}




function for () {
    return view('pages/ForgetPass');
}



public function forget (Request $request)
{


    $email = $request->email;
$phone = $request->phone;

// ابحث عن المستخدم باستخدام البريد الإلكتروني أو رقم الهاتف
$user = User::where('email', $email)->orWhere('phone', $phone)->first();

if ($user) {
    Auth::login($user);
    $request->session()->regenerate();
    return redirect()->intended('/NewPass');
}

return back()->with('error', ' خطأ في تسجيل البريد الإلكتروني .');
}




public function forgetphpne (Request $request)
{


    $email = $request->email;
$phone = $request->phone;

// ابحث عن المستخدم باستخدام البريد الإلكتروني أو رقم الهاتف
$user = User::where('email', $email)->orWhere('phone', $phone)->first();

if ($user) {
    Auth::login($user);
    $request->session()->regenerate();
    return redirect()->intended('/NewPass');
}

return back()->with('error', ' خطأ في تسجيل  رقم الهاتف.');
}



public function newPassword(Request $request)
{

    $request->validate([
            'password' => 'required',
     ]);
        // قم بتحديث كلمة المرور إذا تم تقديمها
        if ($request->has('password')) {
            DB::table('users')->where('id', Auth::id())->update(['password' => bcrypt($request->password)]);
            return redirect('home')->with('success', 'تم تحديث الملف الشخصي بنجاح.');
        }



}


public function taskssto(Request $request)
{

    if(auth()->check()) {
        // الحصول على معرف المستخدم المعرف في الجلسة
        $userId = auth()->id();

        // إنشاء مهمة جديدة مرتبطة بمعرف المستخدم
        $task = Task::create([
            'user_id' => $userId,
            't_insert_text' => $request->t_insert_text,
            // يمكنك إضافة المزيد من الحقول هنا وفقًا لاحتياجاتك
        ]);

        // عرض رسالة نجاح أو إعادة التوجيه
        return redirect()->intended('Tasks');
    } else {
        // إعادة التوجيه في حالة عدم تسجيل الدخول
        return redirect()->route('loginnn')->with('error', 'يرجى تسجيل الدخول للمتابعة');
    }

    // $request->validate([
    //     'title' => 'required|string|max:10000',

    // ]);

    // $task = new Task();
    // $task->title = $request->title;

    // $task->save();
    // return redirect()->route('home78')->with('success', 'تمت إضافة المهمة بنجاح');
}








public function storchildmcard(Request $request)
{
    // التحقق من تسجيل الدخول
    if (auth()->check()) {
        // قم بتخزين البيانات المرسلة من النموذج في جدول ChildMcard
        ChildMcard::create([
            'mood_card_id' => $request->mood_card_id,
            'user_id' => auth()->id(), // أو يمكنك استخدام طريقة أخرى للحصول على معرف المستخدم الحالي
        ]);

        // إعادة التوجيه أو عرض رسالة نجاح
        return redirect()->intended('home888');
    } else {
        // إعادة التوجيه في حالة عدم تسجيل الدخول
        return redirect()->route('loginnn')->with('error', 'يرجى تسجيل الدخول للمتابعة');
    }
}



public function videoshow2($id)
{
    $videos = ControlVideo::findOrFail($id);
    return view('pages/videoshow',compact('videos'));
}





   // استقبال بيانات الفورم وتسجيلها
   public function watchVideo(Request $request)
   {



        // التحقق من صحة البيانات المدخلة
        $validatedData = $request->validate([
            'user_id' => 'required|integer',
            'control_video_id' => 'required|integer',
            'oovideo_time' => 'required|string', // يجب أن يكون نصياً
        ]);

        try {
            // استخراج البيانات المدخلة
            $userId = $validatedData['user_id'];
            $controlVideoId = $validatedData['control_video_id'];
            $oovideoTime = $validatedData['oovideo_time'];

            // تحقق من صحة الوقت
            if (!preg_match('/^([01]?[0-9]|2[0-3]):([0-5]?[0-9]):([0-5]?[0-9])$/', $oovideoTime)) {
                throw new \Exception('Invalid time format.');
            }

            // البحث عن الفيديو المطابق في جدول control_video
            $controlVideo = ControlVideo::findOrFail($controlVideoId);

            // حساب الفارق بين الوقت المدخل والوقت الأصلي
            $timeDifference = strtotime($oovideoTime) - strtotime($controlVideo->cvideo_time);

            // تحديد ما إذا كان الفيديو قد اكتمل أم لا
            $videoCompleted = ($timeDifference >= 0) ? 'مكتمل' : 'غير مكتمل';

            // إنشاء سجل جديد في جدول octtyydvideos
            Octtyydvideos::create([
                'user_id' => $userId,
                'control_video_id' => $controlVideoId,
                'oovideo_time' => $oovideoTime,
                'vvvideo_completed' => $videoCompleted,
            ]);

            // إعادة التوجيه برسالة نجاح
            return redirect()->intended('learn');
        } catch (\Exception $e) {
            // إعادة التوجيه برسالة خطأ
            return redirect()->back()->with('error', 'حدث خطأ: ' . $e->getMessage());
        }


   }




//    public function showUserVideoInfo($userId)
//    {
//        // استعراض معلومات المستخدم مع معلومات الفيديو إذا كانت متاحة
//        $userWithVideoInfo = User::findOrFail($userId);

//        // الحصول على آخر معلومات الفيديو للمستخدم
//        $latestVideoInfo = Octtyydvideos::where('user_id', $userId)
//            ->latest()
//            ->first();

//        // إرسال المتغيرات إلى عرض الصفحة
//        return view('pages.learn', compact('userWithVideoInfo', 'latestVideoInfo'));
//    }




//    public function getVideoCompletionStatus()
//    {
//        // الحصول على قائمة جميع الفيديوهات
//        $videos = ControlVideo::all();

//        // تخزين حالة كل فيديو في هذا المصفوفة
//        $videosStatus = [];

//        // الحصول على حالة كل فيديو
//        foreach ($videos as $video) {
//            // الحصول على آخر حالة تم تسجيلها لهذا الفيديو
//            $latestEntry = Octtyydvideos::where('control_video_id', $video->id)
//                ->latest()
//                ->first();

//            // التحقق مما إذا كان هناك تسجيل متاح لهذا الفيديو
//            if ($latestEntry) {
//                // إضافة حالة الفيديو إلى المصفوفة
//                $videosStatus[$video->id] = $latestEntry->vvvideo_completed;
//            } else {
//                // لم يتم العثور على أي سجل لهذا الفيديو، لذا سيكون الحالة "غير مكتمل"
//                $videosStatus[$video->id] = ' لم يتم التعامل ';
//            }
//        }

//        // يمكنك استخدام $videosStatus الآن لعرض حالة كل فيديو
//        return $videosStatus;
//    }











// public function trackView(Request $request)
// {
//     // التحقق من تسجيل الدخول للمستخدم
//     if (Auth::check()) {
//         // استقبال البيانات المرسلة
//         $entry_time = $request->input('entry_time');
//         $duration_minutes = $request->input('duration_minutes');
//         $user_id = Auth::id(); // الحصول على معرف المستخدم الحالي

//         // تسجيل المشاهدة في جدول تفاصيل الفيديو مع معرف المستخدم
//         Video::create([
//             'entry_time' => $entry_time,
//             'duration_minutes' => $duration_minutes,
//             'user_id' => $user_id,

//         ]);

//         return response()->json(['message' => 'تم تسجيل المشاهدة بنجاح'], 200);
//     } else {
//         // إرسال رسالة خطأ إذا لم يقم المستخدم بتسجيل الدخول
//         return response()->json(['error' => 'يجب تسجيل الدخول لتسجيل المشاهدة'], 401);
//     }
// }


}

