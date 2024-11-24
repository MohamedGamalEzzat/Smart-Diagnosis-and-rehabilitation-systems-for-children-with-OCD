<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Auth; // استيراد الواجهة الخاصة بالمصادقة
use App\Models\ControlVideo;
use Illuminate\Http\Request;
use App\Models\octtyydvideos;
use App\Models\User; // استيراد النموذج المستخدم
use App\Http\Controllers\Controller;

class ControlVideoController extends Controller
{
    public function videoshweoo()
    {
        // استرجاع جميع البيانات من جدول ControlVideo
        $videos = ControlVideo::all();

        // إرجاع البيانات كاستجابة JSON
        return response()->json(['videos' => $videos], 200);
    }



    public function watchVideoppiit(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $validatedData = $request->validate([
            // استبدال 'user_id' بالمفتاح 'user_id' المحدد في الجلسة
            'control_video_id' => 'required|integer',
            'oovideo_time' => 'required|string', // يجب أن يكون نصياً
        ]);

        try {
            // الحصول على معرف المستخدم المدخل في الجلسة (المستخدم الذي قام بتسجيل الدخول)
            $userId = Auth::id();

            // استخراج البيانات المدخلة الأخرى
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

            // إرجاع استجابة JSON برسالة نجاح
            return response()->json(['message' => 'تمت العملية بنجاح'], 200);
        } catch (\Exception $e) {
            // إرجاع استجابة JSON برسالة خطأ
            return response()->json(['error' => ' يرجى تسجيل الوقت قبل المتابعة: ' . $e->getMessage()], 400);
        }
    }





    public function getUserWithLatestVideoUpdates()
    {
        try {
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

            // إعادة البيانات كاستجابة JSON
            return response()->json([
                // 'user' => $userWithVideoInfo,
                'latest_video_updates' => $latestVideoUpdates
            ], 200);
        } catch (\Exception $e) {
            // في حالة حدوث خطأ، إعادة استجابة JSON برسالة الخطأ
            return response()->json(['error' => 'حدث خطأ: ' . $e->getMessage()], 400);
        }
    }





    public function toouussqqzz()
    {
        $videos = Octtyydvideos::all();
        return response()->json($videos, 200);
    }




}
