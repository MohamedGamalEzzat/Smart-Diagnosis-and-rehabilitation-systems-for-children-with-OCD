<?php

namespace App\Http\Controllers\API;

use App\Models\Game;
use App\Models\AdminGame;
use App\Models\Gametwooo;
use App\Models\User; // استيراد النموذج المستخدم
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GametwooController extends Controller
{
    public function storerrrreewf(Request $request)
    {
        // التحقق مما إذا كان المستخدم قد قام بتسجيل الدخول
        if (Auth::check()) {
            // التحقق من صحة البيانات المُدخلة
            $request->validate([
                'scoree' => 'required|integer',
                'time' => 'required|date_format:H:i:s',
                'admin_game_id' => 'required|exists:admin_games,id',
            ]);

            // إنشاء سجل للعبة
            $game = new Gametwooo([
                'scoree' => $request->scoree,
                'time' => $request->time,
                'user_id' => Auth::id(), // استخدام معرف المستخدم المتصل
                'admin_game_id' => $request->admin_game_id,
            ]);

            // حفظ السجل في قاعدة البيانات
            $game->save();

            // إرجاع رد ناجح
            return response()->json(['message' => 'تم حفظ بيانات اللعبة بنجاح'], 200);
        } else {
            // في حالة عدم تسجيل الدخول، إرجاع رسالة خطأ
            return response()->json(['error' => 'يجب تسجيل الدخول أولاً'], 401);
        }
    }





    public function rrregghhffddcclavel(Request $request)
    {
        //  اضافه lavelsالتحقق مما إذا كان المستخدم قد قام بتسجيل الدخول
        if (Auth::check()) {
            // التحقق من صحة البيانات المُدخلة
            $request->validate([
                'score' => 'required|integer',
                'levels' => 'required|integer',
                'start_time' => 'required|date_format:H:i:s',
                'admin_game_id' => 'required|exists:admin_games,id',
            ]);

            // إنشاء سجل للعبة
            $game = new Game([
                'score' => $request->score,
                'levels' => $request->levels,
                'start_time' => $request->start_time,
                'user_id' => Auth::id(), // استخدام معرف المستخدم المتصل
                'admin_game_id' => $request->admin_game_id,
            ]);

            // حفظ السجل في قاعدة البيانات
            $game->save();

            // إرجاع رد ناجح
            return response()->json(['message' => 'تم حفظ بيانات اللعبة بنجاح'], 200);
        } else {
            // في حالة عدم تسجيل الدخول، إرجاع رسالة خطأ
            return response()->json(['error' => 'يجب تسجيل الدخول أولاً'], 401);
        }
    }




    public function AdminGamepp()
    {
        // استرداد كافة بيانات الألعاب من جدول AdminGame
        $adminGames = AdminGame::all();

        // إرجاع البيانات كاستجابة JSON
        return response()->json($adminGames, 200);
    }








public function getUserWithLatestGamewwwddduumUpdates()
{
    try {
        // استعراض معلومات المستخدم مع آخر تحديث لكل لعبة
        $userWithGameInfo = User::findOrFail(auth()->id());

        // الحصول على آخر تحديث (حسب id) لكل لعبة بالنسبة للمستخدم المسجل
        $latestGameIds = Gametwooo::selectRaw('MAX(id) as id')
            ->where('user_id', auth()->id())
            ->groupBy('admin_game_id')
            ->get();

        // الحصول على التحديثات الكاملة باستخدام الـ id الذي تم الحصول عليه
        $latestGameUpdates = Gametwooo::whereIn('id', $latestGameIds)
            ->get();

        // إعادة البيانات كاستجابة JSON
        return response()->json([
            // 'user' => $userWithGameInfo,
            'latest_game_updates' => $latestGameUpdates
        ], 200);
    } catch (\Exception $e) {
        // في حالة حدوث خطأ، إعادة استجابة JSON برسالة الخطأ
        return response()->json(['error' => 'حدث خطأ: ' . $e->getMessage()], 400);
    }
}





public function lavelstwoogghhnnnnmkk()
{
    try {
        // استعراض معلومات المستخدم مع آخر تحديث لكل لعبة
        $userWithGameInfo = User::findOrFail(auth()->id());

        // الحصول على آخر تحديث (حسب id) لكل لعبة بالنسبة للمستخدم المسجل
        $latestGameIds = Game::selectRaw('MAX(id) as id')
            ->where('user_id', auth()->id())
            ->groupBy('admin_game_id')
            ->get();

        // الحصول على التحديثات الكاملة باستخدام الـ id الذي تم الحصول عليه
        $latestGameUpdates = Game::whereIn('id', $latestGameIds)
            ->get();

        // إعادة البيانات كاستجابة JSON
        return response()->json([
            // 'user' => $userWithGameInfo,
            'latest_game_updateslevels' => $latestGameUpdates
        ], 200);
    } catch (\Exception $e) {
        // في حالة حدوث خطأ، إعادة استجابة JSON برسالة الخطأ
        return response()->json(['error' => 'حدث خطأ: ' . $e->getMessage()], 400);
    }
}

}
