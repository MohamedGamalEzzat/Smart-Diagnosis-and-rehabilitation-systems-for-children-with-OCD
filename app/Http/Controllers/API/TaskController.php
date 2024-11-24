<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TaskController extends Controller
{
    public function createTask(Request $request)
    {
        // التحقق مما إذا كانت البيانات المرسلة صحيحة
        $validator = Validator::make($request->all(), [
            't_insert_text' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        // التحقق مما إذا كان المستخدم مسجل الدخول
        if(auth()->check()) {
            // الحصول على معرف المستخدم المعرف في الجلسة
            $userId = auth()->id();

            // إنشاء مهمة جديدة مرتبطة بمعرف المستخدم
            $task = Task::create([
                'user_id' => $userId,
                't_insert_text' => $request->t_insert_text,
                // يمكنك إضافة المزيد من الحقول هنا وفقًا لاحتياجاتك
            ]);

            // إرسال استجابة بنجاح مع البيانات الجديدة للمهمة
            return response()->json(['message' => 'تم إنشاء المهمة بنجاح', 'task' => $task], 201);
        } else {
            // إرسال استجابة خطأ إذا لم يكن المستخدم مسجل الدخول
            return response()->json(['error' => 'يرجى تسجيل الدخول للمتابعة'], 401);
        }
    }





    public function checkpasswordddderrrrr(Request $request)
    {
        // التحقق من صحة كلمة المرور
        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->password])) {
            // كلمة المرور صحيحة
            return response()->json(['message' => ' تم التححق من كلمه المرور بي نجاح '], 200);
        } else {
            // كلمة المرور غير صحيحة
            return response()->json(['error' => 'كلمة المرور غير صحيحة.'], 401);
        }
    }



    public function indexsweooooo()
    {
        // استرجاع جميع البيانات من جدول المهام
        $tasks = Task::all();

        // إرجاع البيانات كاستجابة JSON
        return response()->json(['tasks' => $tasks], 200);
    }

}
