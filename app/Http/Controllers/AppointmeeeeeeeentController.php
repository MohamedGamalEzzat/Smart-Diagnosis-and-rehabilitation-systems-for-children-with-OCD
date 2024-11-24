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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\appoiiiiiiiiiintments;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UsersSinupRequest;
use Illuminate\Contracts\Validation\Validator;

class AppointmeeeeeeeentController extends Controller
{
    public function appointmentsst(Request $request)
{




    $userId = auth()->id();

    // التحقق مما إذا كان المستخدم قد سجل خلال الـ 12 ساعة الأخيرة
    $lastRegistration = User::where('id', $userId)->latest()->first();

    if ($lastRegistration) {
        $registrationTime = Carbon::parse($lastRegistration->created_at);
        $currentDateTime = Carbon::now();

        if ($registrationTime->diffInHours($currentDateTime) < 12) {
            return redirect()->back()->with('error', 'يجب أن يمر 12 ساعة بعد التسجيل السابق قبل التسجيل مرة أخرى.');
        }
    }

    // جلب عدد الحجوزات التي أجراها المستخدم خلال الـ 12 ساعة الأخيرة
    $userAppointmentsCount = appoiiiiiiiiiintments::where('user_id', $userId)
        ->where('created_at', '>=', now()->subHours(12))
        ->count();

    $maxDailyAppointments = 7; // الحد الأقصى لعدد الحجوزات التي يمكن للمستخدم حجزها خلال 12 ساعة

    if ($userAppointmentsCount >= $maxDailyAppointments) {
        return redirect()->back()->with('error', 'لقد قمت بحجز الحد الأقصى من المواعيد خلال الـ 12 ساعة الأخيرة.');
    }

    // جلب عدد الحجوزات للطبيب في الـ 12 ساعة الأخيرة
    $doctorAppointmentsCount = appoiiiiiiiiiintments::where('dddr_id', $request->dddr_id)
        ->where('created_at', '>=', now()->subHours(12))
        ->count();

    $maxDailyAppointments = 10; // الحد الأقصى لعدد الحجوزات اليومية للطبيب

    if ($doctorAppointmentsCount >= $maxDailyAppointments) {
        return redirect()->back()->with('error', 'تم اكتمال الحجوزات لهذا الطبيب في الـ 12 ساعة الأخيرة.');
    }

    // تخزين بيانات الموعد في قاعدة البيانات
    appoiiiiiiiiiintments::create([
        'user_id' => auth()->user()->id,
        'dddr_id' => $request->dddr_id,
        'date' => $request->date,
        'time' => $request->time,
    ]);

    // إعادة توجيه المستخدم بعد إتمام الحجز
    return redirect()->back()->with('success', 'تم حجز الموعد بنجاح!');
    // dd($request->all());
// التحقق من عدم وجود حجز للمستخدم في نفس اليوم
// التحقق من عدم وجود حجز للمستخدم في نفس اليوم
// $userAppointments = appoiiiiiiiiiintments::where('user_id', auth()->user()->id)
//     ->whereDate('date', $request->date)
//     ->get();

// if ($userAppointments->count() > 5) {
//     return redirect()->back()->with('error', 'لا يمكنك حجز أكثر من موعد واحد في اليوم.');
// }

// // جلب عدد الحجوزات لليوم الحالي للطبيب
// $doctorAppointmentsCount = appoiiiiiiiiiintments::where('dddr_id', $request->dddr_id)
//     ->whereDate('date', now())
//     ->get() // إضافة الدالة get() هنا
//     ->count();

// $maxDailyAppointments = 10; // الحد الأقصى لعدد الحجوزات اليومية للطبيب

// if ($doctorAppointmentsCount >= $maxDailyAppointments) {
//     return redirect()->back()->with('error', 'تم اكتمال الحجوزات لهذا اليوم. يرجى اختيار يوم آخر.');
// }

// // تخزين بيانات الموعد في قاعدة البيانات
// appoiiiiiiiiiintments::create([
//     'user_id' => auth()->user()->id,
//     'dddr_id' => $request->dddr_id,
//     'date' => $request->date,
//     'time' => $request->time,
// ]);

// // إعادة توجيه المستخدم بعد إتمام الحجز
// return redirect()->back()->with('success', 'تم حجز الموعد بنجاح!');


}


public function checkpassword(Request $request)
{
    // dd($request->all());

    if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->password])) {
        // كلمة المرور صحيحة، يمكن للمستخدم الوصول إلى صفحة المهام
        return redirect()->intended('Tasks');
    } else {
        // كلمة المرور غير صحيحة، قم بإعادة توجيه المستخدم إلى صفحة تأكيد كلمة المرور مع رسالة خطأ
        return redirect()->back()->with('error', 'كلمة المرور غير صحيحة.');
    }

}


public function randomString(Request $request)
{
    // dd($request->all());

    $enteredNumber = $request->input('user_number');
    $randomNumber = $request->input('random_number');

    if ($enteredNumber == $randomNumber) {
        // الرقم صحيح
        return redirect()->back()->with('success', 'تم التحقق بنجاح!');
    } else {
        // الرقم غير صحيح
        return redirect()->back()->with('error', 'الرقم غير صحيح. الرجاء المحاولة مرة أخرى.');
    }
}






public function uuuuopppimage(Request $request)
{
    // dd($request->all());


    if ($request->has('image_path')) {
        $selectedImages = $request->input('image_path');

        // التحقق من نوع القيمة ومعالجتها
        if (is_string($selectedImages)) {
            $selectedImages = [$selectedImages];
        }

        // التحقق من وجود المسارات وحفظها في جدول آخر
        foreach ($selectedImages as $imagePath) {
            // يمكنك هنا إجراء العمليات اللازمة لحفظ المسار في قاعدة البيانات
            Image::create([
                'image_path' => $imagePath,
                'user_id' => auth()->user()->id,
            ]);
        }

        session()->flash('success', 'تمت إضافة الصور بنجاح!');
        return redirect('home78');
    }

    // في حالة عدم تحديد أي مسار
    return back()->with('error', 'يرجى تحديد صور للإضافة.');






    // $requestData = $request->all();
    // $fileName = time().$request->file('image_path')->getClientOriginalName();
    // $path = $request->file('image_path')->store('imagesuuu');
    // $requestData["image_path"] = '/storage/'.$path;
    // Image::create($requestData);

    // session()->flash('success', 'تمت إضافة الصورة بنجاح!');
    // return redirect('home78');
}



}
