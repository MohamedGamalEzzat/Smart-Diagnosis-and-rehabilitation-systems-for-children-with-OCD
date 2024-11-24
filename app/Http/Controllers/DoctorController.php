<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Models\Video;
use App\Models\Doctor;
use App\Models\VideoView;
use App\Models\AdminVideo;
use App\Models\ChildMcard;
use App\Models\ProfileImage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersSinupRequest;
use Illuminate\Contracts\Validation\Validator;

class DoctorController extends Controller
{

    public function registerdoctor(Request $request)
    {
        $request->validate([
            'd_name' => 'required|string|max:255',
            'd_email' => 'required|email|unique:doctors,d_email',
            'd_phone' => 'required|unique:doctors,d_phone',
            'd_password' => 'required|string|min:8',
        ], [
            'd_email.unique' => 'البريد الإلكتروني مستخدم بالفعل. يرجى استخدام بريد إلكتروني آخر.',
            'd_phone.unique' => 'رقم الهاتف مستخدم بالفعل. يرجى استخدام رقم هاتف آخر.'
        ]);

        Doctor::create([
            'd_name' => $request->d_name,
            'd_email' => $request->d_email,
            'd_phone' => $request->d_phone,
            'd_password' => Hash::make($request->d_password),
        ]);

        return redirect()->intended('home78');
    }



    public function doctorlogin(Request $request)
    {

        $credentials =[
            'd_email' => $request->d_email,
            'd_password' => $request->d_password,
        ];

        if (Auth::guard('Doctor')->attempt($credentials)) {

            return redirect()->intended('home78');
        }
        
        return back()->withErrors(['d_email' => 'البريد الإلكتروني أو كلمة المرور غير صحيحة']);
    }



}
