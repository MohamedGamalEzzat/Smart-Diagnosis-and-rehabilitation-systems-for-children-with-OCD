<?php

use App\Models\User;
use App\Models\MoodCard;
use App\Models\AdminVideo;
use App\Models\ControlVideo;
use Illuminate\Http\Request;
use App\Http\Controllers\sinup;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sinuplogcontoller;
use App\Http\Controllers\admanusercontroller;
use App\Http\Controllers\ImageuserproController;
use App\Http\Controllers\PersonalPageController;
use App\Http\Controllers\AdminmoodimageController;
use App\Http\Controllers\AdminvideobetoController;




Route::get('home admen' ,[ admanusercontroller::class,'hoa']);

Route::get('user' ,[ admanusercontroller::class,'usa']);

Route::get('user/delete/{id}',[ admanusercontroller::class,'delete']) ->name('user.delete');

Route::get('register' ,[ admanusercontroller::class,'rge']);

Route::post('rgesa' ,[ admanusercontroller::class,'rgesa'])->name('rgesa');

Route::get('login A' ,[ admanusercontroller::class,'ty']);

Route::post('aor' ,[ admanusercontroller::class,'aor'])->name('aor');

Route::post('modstore', [AdminmoodimageController::class, 'modstore'])->name('modstore');

Route::get('admen/mood/{id}', [AdminmoodimageController::class, 'admenmooddelete'])->name('admenmooddelete');



Route::post('/uploadvideo', [AdminvideobetoController::class, 'uploadvideo'])->name('uploadvideo');

Route::get('videos/{id}/Delete', [AdminvideobetoController::class, 'deletevideo'])->name('deletevideo');

Route::get('videos/{id}/edit', [AdminvideobetoController::class, 'edit'])->name('video.edit');

Route::put('videos/{id}/update', [AdminvideobetoController::class, 'videoupdate'])->name('videoupdate');

Route::post('/contrimgupr', [ImageuserproController::class, 'contrimgupr'])->name('contrimgupr');


Route::get('forgot-password', function () {
    return view('pege admen/forgot-password');
});

Route::get('tables', function () {
    return view('pege admen/tables');
});


Route::get('moodimage', function () {
    return view('pege admen/moodimage');
});


Route::get('video', function () {
    return view('pege admen/video');
});

Route::get('videoidet', function () {
    $videos = ControlVideo::all();
    return view('pege admen/videoidet',compact('videos'));
});

Route::get('moodcontrol', function () {
    $moods = MoodCard::all();
    return view('pege admen/moodcontrol',['moods' => $moods]);
});

Route::get('controlimegupr', function () {

    return view('pege admen/controlimegupr');
});
