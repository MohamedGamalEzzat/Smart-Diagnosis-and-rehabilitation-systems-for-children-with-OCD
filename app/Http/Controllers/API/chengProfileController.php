<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ControlImageUserpro;
use App\Models\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class chengProfileController extends Controller
{
    public function updateProfileemaill(Request $request)
{
    try {
        // قم بتحديث البريد الإلكتروني إذا تم تقديمه
        if ($request->filled('email')) {
            DB::table('users')->where('id', Auth::id())->update(['email' => $request->email]);
            return response()->json(['success' => 'تم تغير البريد الالكتروني بنجاح.'], 200);
        } else {
            return response()->json(['message' => 'يرجى إدخال عنوان بريد إلكتروني.'], 422);
        }
    } catch (\Exception $e) {
        return response()->json(['error' => $e->getMessage()], 400);
    }
}




public function updateprofeilPasswordlll(Request $request)
{
 // التحقق من صحة البيانات المدخلة
 $request->validate([
    'password' => 'required|string|min:8',
]);

try {
    // استخراج كلمة المرور الجديدة من طلب الاستدعاء
    $newPassword = $request->password;

    // التحقق من وجود قيمة لكلمة المرور الجديدة
    if ($request->filled('password')) {
        // تحديث كلمة المرور
        DB::table('users')->where('id', Auth::id())->update(['password' => bcrypt($newPassword)]);
        return response()->json(['success' => 'تم تحديث كلمة المرور بنجاح.'], 200);
    } else {
        return response()->json(['error' => 'يرجى إدخال كلمة مرور جديدة.'], 422);
    }
} catch (\Exception $e) {
    return response()->json(['error' => $e->getMessage()], 400);
}

}



public function ImageUserproooopppuu()
{
    // استرجاع كل الصور من جدول control_image_userpro
    $images = ControlImageUserpro::all();

    // إرجاع الصور كاستجابة JSON
    return response()->json(['images' => $images], 200);
}




public function addddImages(Request $request)
{
        // التحقق من وجود المسارات الصحيحة في الطلب
        if ($request->has('image_path')) {
            $selectedImages = $request->input('image_path');

            // التحقق من نوع القيمة ومعالجتها
            if (is_string($selectedImages)) {
                $selectedImages = [$selectedImages];
            }

            // حفظ المسارات في جدول الصور
            foreach ($selectedImages as $imagePath) {
                // إنشاء سجل لكل صورة في جدول الصور مع معرّف المستخدم
                Image::create([
                    'image_path' => $imagePath,
                    'user_id' => auth()->id(), // تخزين معرّف المستخدم الحالي
                ]);
            }

            // إرسال رسالة نجاح بعد إضافة الصور
            return response()->json(['success' => 'تمت إضافة الصور بنجاح!'], 200);
        }

        // في حالة عدم تحديد أي مسار
        return response()->json(['error' => 'يرجى تحديد صور للإضافة.'], 400);

}



public function getUserprofhImages(Request $request)
{
    // الحصول على معرف المستخدم المتوسط
    $userId = Auth::id();

    // الحصول على آخر صورة مرتبطة بكل مستخدم
    $latestImages = Image::selectRaw('MAX(id) as id')
        ->whereNotNull('image_path')
        ->groupBy('user_id')
        ->get();

    // الحصول على التحديثات الكاملة لآخر الصور
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

    // إرجاع الصور كاستجابة JSON
    return response()->json(['images' => $userImages], 200);
}



}
