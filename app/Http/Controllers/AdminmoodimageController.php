<?php

namespace App\Http\Controllers;

use id;
use App\Models\User;
use App\Models\MoodCard;
use App\Models\admanuser;
use App\Models\VideoView;
use App\Models\AdminVideo;
use App\Models\ChildMcard;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UsersSinupRequest;
use Illuminate\Contracts\Validation\Validator;

class AdminmoodimageController extends Controller
{
    public function modstore(Request $request)
{
    $requestData = $request->all();
    $fileName = time().$request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->store('images');
    $requestData["photo"] = '/storage/'.$path;
    MoodCard::create($requestData);

    session()->flash('success', 'تمت إضافة الصورة بنجاح!');
    return redirect('moodimage');
}


public function admenmooddelete($id)
{
    try {
        // حذف السجلات المرتبطة في جدول `video_views`
        ChildMcard::where('mood_card_id', $id)->delete();

        // ثم حذف السجل في جدول `mood_cards`
        $moodCard = MoodCard::find($id);
        if ($moodCard) {
            $moodCard->delete();
            return redirect()->back()->with('success', 'تم حذف بطاقة المزاج بنجاح.');
        } else {
            return redirect()->back()->with('error', 'بطاقة المزاج غير موجودة.');
        }
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'حدث خطأ أثناء محاولة حذف بطاقة المزاج: ' . $e->getMessage());
    }
}





}
