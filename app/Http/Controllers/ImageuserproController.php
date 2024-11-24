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
use App\Models\ControlImageUserpro;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UsersSinupRequest;
use Illuminate\Contracts\Validation\Validator;

class ImageuserproController extends Controller
{
    public function contrimgupr(Request $request)
    {
        $requestData = $request->all();
        $fileName = time().$request->file('image_userpro')->getClientOriginalName();
        $path = $request->file('image_userpro')->store('imagesuserpro');
        $requestData["image_userpro"] = '/storage/'.$path;
        ControlImageUserpro::create($requestData);

        session()->flash('success', 'تمت إضافة الصورة بنجاح!');
        return redirect('controlimegupr');
    }
}
