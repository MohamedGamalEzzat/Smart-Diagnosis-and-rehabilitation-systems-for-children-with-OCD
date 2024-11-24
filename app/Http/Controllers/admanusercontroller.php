<?php
namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\MoodCard;
use App\Models\admanuser;
use App\Models\VideoView;
use App\Models\AdminVideo;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UsersSinupRequest;
use Illuminate\Contracts\Validation\Validator;


class admanusercontroller extends Controller
{


    function hoa () {
        return view('pege admen/home admen');

}


    function usa () {
        $user = User::all();
        return view('pege admen/user', compact('user'));

}


public function delete($id)
{
    try {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect()->back()->with('success', 'تم حذف المستخدم بنجاح.');
        } else {
            return redirect()->back()->with('error', 'المستخدم غير موجود.');
        }
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'خطأ: ' . $e->getMessage());
    }
}


function rge () {
    return view('pege admen/register');

}





// ...
public function rgesa(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required',
    ]);

    $newadmanuser = new admanuser;
    $newadmanuser->name = $request->name;
    $newadmanuser->email = $request->email;
    $newadmanuser->password = bcrypt($request->password);
    $newadmanuser->save();

    return redirect()->intended('home admen');
}



function ty () {
    return view('pege admen/login A');

}



public function aor( Request $request) {


    $credentials =[
        'email' => $request->email,
        'password' => $request->password,
    ];

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('home admen');
    }

    return back()->with('error',' خطأ في تسجيل كلمه المرور او البريد الاكتروني (الايميل)');

}




// public function modstore(Request $request)
// {
//     $requestData = $request->all();
//     $fileName = time().$request->file('photo')->getClientOriginalName();
//     $path = $request->file('photo')->store('images');
//     $requestData["photo"] = '/storage/'.$path;
//     MoodCard::create($requestData);

//     session()->flash('success', 'تمت إضافة الصورة بنجاح!');
//     return redirect('moodimage');
// }




// public function uploadvideo(Request $request)
// {
//     $requestData = $request->all();
//     $fileName = time().$request->file('video_file')->getClientOriginalName();
//     $path = $request->file('video_file')->store('videos');
//     $requestData["video_file"] = '/storage/'.$path;
//     AdminVideo::create($requestData);

//     session()->flash('success', 'تمت إضافة الفيديو بنجاح!');
//     return redirect('video');
// }

// public function deletevideo($id)
// {
//     try {
//         // حذف السجلات المرتبطة في جدول `video_views`
//         VideoView::where('admin_video_id', $id)->delete();

//         // ثم حذف السجل في جدول `admin_videos`
//         $video = AdminVideo::find($id);
//         if ($video) {
//             $video->delete();
//             return redirect()->back()->with('success', 'تم حذف الفيديو بنجاح.');
//         } else {
//             return redirect()->back()->with('error', 'الفيديو غير موجود.');
//         }
//     } catch (\Exception $e) {
//         return redirect()->back()->with('error', 'حدث خطأ أثناء محاولة حذف الفيديو: ' . $e->getMessage());
//     }
// }



// public function edit($id)
// {
//     $video = AdminVideo::findOrFail($id); // استرجاع الفيديو من قاعدة البيانات

//     return view('pege admen/videosedit', compact('video')); // إعادة عرض صفحة التعديل مع بيانات الفيديو
// }



// public function videoupdate(Request $request, $id)
// {
//     $request->validate([
//         'video_name' => 'required|string|max:255',
//         'video_file' => 'nullable|file|mimes:mp4,mov,avi',
//         'description' => 'required|string',

//     ]);

//     $video = AdminVideo::findOrFail($id);

//     // Check if a new video file is uploaded
//     if ($request->hasFile('video_file')) {
//         $fileName = time() . '_' . $request->file('video_file')->getClientOriginalName();
//         $path = $request->file('video_file')->storeAs('videos', $fileName);
//         $video->video_file = '/storage/' . $path;
//     }

//     $video->video_name = $request->video_name;
//     $video->description = $request->description;
//     $video->save();

//     return redirect()->back()->with('success', 'تم تحديث الفديو ');

// }




// public function videoupdate(Request $request, $id)
// {
//     // تحقق من صحة البيانات المدخلة
//     $request->validate([
//         'video_name' => 'required|string|max:255',
//         'description' => 'required|string',
//         'video_file' => 'nullable|file|mimes:mp4,mov,avi',
//     ]);

//     try {
//         // استرجاع بيانات الفيديو المطلوب تحديثه
//         $video = AdminVideo::findOrFail($id);

//         // تحديث بيانات الفيديو
//         $video->video_name = $request->video_name;
//         $video->description = $request->description;

//         // حفظ التغييرات
//         $video->save();

//         // إعادة التوجيه إلى صفحة عرض الفيديو مع رسالة نجاح
//         return redirect()->back()->with('success', 'تم تحديث الفديو ');

//     } catch (\Exception $e) {
//         // إعادة التوجيه إلى الصفحة السابقة مع رسالة خطأ في حالة حدوث استثناء
//         return redirect()->back()->with('error', 'حدث خطأ أثناء محاولة تحديث الفيديو: ' . $e->getMessage());
//     }
// }

}
