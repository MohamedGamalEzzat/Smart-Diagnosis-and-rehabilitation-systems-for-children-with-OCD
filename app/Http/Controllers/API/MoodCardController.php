<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Auth;
use App\Models\MoodCard;
use App\Models\ChildMcard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\appoiiiiiiiiiintments;
use Illuminate\Support\Facades\Validator;

class MoodCardController extends Controller
{
    public function getAllimmmMoods()
    {
        // جلب جميع بيانات MoodCard
        $moods = MoodCard::all();

        // إرجاع بيانات الـ MoodCard كاستجابة JSON
        return response()->json(['moods' => $moods], 200);
    }




    public function steroodddmmodp(Request $request)
    {
        // التحقق من صحة البيانات المدخلة
        $validator = Validator::make($request->all(), [
            'mood_card_id' => 'required|integer',
        ]);

        // إذا فشل التحقق من البيانات
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        // قم بتخزين البيانات المرسلة من النموذج في جدول ChildMcard
        ChildMcard::create([
            'mood_card_id' => $request->mood_card_id,
            'user_id' => auth()->id(),
        ]);

        // إعادة استجابة JSON برسالة نجاح
        return response()->json(['success' => 'تمت إضافة البيانات بنجاح.'], 200);
    }





}
