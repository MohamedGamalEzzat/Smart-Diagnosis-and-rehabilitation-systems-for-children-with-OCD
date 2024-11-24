<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\MoodCard;
use App\Models\admanuser;
use App\Models\VideoView;
use App\Models\AdminVideo;
use App\Models\ControlVideo;
use Illuminate\Http\Request;
use App\Models\octtyydvideos;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UsersSinupRequest;
use Illuminate\Contracts\Validation\Validator;

class AdminvideobetoController extends Controller
{
    public function uploadvideo(Request $request)
{
    $requestData = $request->all();
    $fileName = time().$request->file('cvideo_file')->getClientOriginalName();
    $path = $request->file('cvideo_file')->store('videos');
    $requestData["cvideo_file"] = '/storage/'.$path;
    ControlVideo::create($requestData);

    session()->flash('success', 'تمت إضافة الفيديو بنجاح!');
    return redirect('video');
}

public function deletevideo($id)
{
    try {
        // حذف السجلات المرتبطة في جدول `video_views`
        octtyydvideos::where('control_video_id', $id)->delete();

        // ثم حذف السجل في جدول `admin_videos`
        $video = ControlVideo::find($id);
        if ($video) {
            $video->delete();
            return redirect()->back()->with('success', 'تم حذف الفيديو بنجاح.');
        } else {
            return redirect()->back()->with('error', 'الفيديو غير موجود.');
        }
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'حدث خطأ أثناء محاولة حذف الفيديو: ' . $e->getMessage());
    }
}



public function edit($id)
{
    $video = ControlVideo::findOrFail($id); // استرجاع الفيديو من قاعدة البيانات

    return view('pege admen/videosedit', compact('video')); // إعادة عرض صفحة التعديل مع بيانات الفيديو
}




public function videoupdate(Request $request, $id)
{
    // تحقق من صحة البيانات المدخلة
    $request->validate([
        'cvideo_name' => 'required|string|max:255',
        'cdescription' => 'required|string',
        'cvideo_file' => 'nullable|file|mimes:mp4,mov,avi',
        'cvideo_time' => 'required|date_format:H:i:s',
    ]);

    try {
        // استرجاع بيانات الفيديو المطلوب تحديثه
        $video = ControlVideo::findOrFail($id);

        // تحديث بيانات الفيديو
        $video->cvideo_name = $request->cvideo_name;
        $video->cdescription = $request->cdescription;
        $video->cvideo_time = $request->cvideo_time;

        // حفظ التغييرات
        $video->save();

        // إعادة التوجيه إلى صفحة عرض الفيديو مع رسالة نجاح
        return redirect()->back()->with('success', 'تم تحديث الفديو ');

    } catch (\Exception $e) {
        // إعادة التوجيه إلى الصفحة السابقة مع رسالة خطأ في حالة حدوث استثناء
        return redirect()->back()->with('error', 'حدث خطأ أثناء محاولة تحديث الفيديو: ' . $e->getMessage());
    }
}

}
