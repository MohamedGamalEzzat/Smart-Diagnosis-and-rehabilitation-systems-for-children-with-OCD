<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Auth;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\appoiiiiiiiiiintments;
use Illuminate\Support\Facades\Response;


class DoctorpiiiController extends Controller
{
    public function getalllDoctors()
    {
        // جلب بيانات الأطباء من جدول Doctor
        $doctors = Doctor::all();

        // إعادة البيانات كاستجابة JSON مع كود الاستجابة 200
        return Response::json(['doctors' => $doctors], 200);
    }





    public function makeAppointment(Request $request)
{

        if (!Auth::check()) {
            return response()->json(['error' => 'يجب تسجيل الدخول لحجز الموعد'], 401);
        }

        // إنشاء الموعد
        $appointment = appoiiiiiiiiiintments::create([
            'user_id' => auth()->id(),
            'dddr_id' => $request->dddr_id,
            'date' => $request->date,
            'time' => $request->time,
        ]);

        if ($appointment) {
            return response()->json(['success' => 'تم حجز الموعد بنجاح!'], 200);
        } else {
            return response()->json(['error' => 'حدث خطأ أثناء إنشاء الموعد'], 500);
        }
}




}
