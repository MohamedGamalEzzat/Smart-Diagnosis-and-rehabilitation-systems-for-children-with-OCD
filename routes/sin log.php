<?php
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\sinup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\sinuplogcontoller;
use App\Http\Controllers\PersonalPageController;
use App\Http\Controllers\AppointmeeeeeeeentController;


// //
// Route::post('/SignUp',
// });

Route::get('/SignUp' ,[ sinuplogcontoller::class,'index']);
Route::post('/store' ,[ sinuplogcontoller::class,'store'])->name('signup.store');

Route::get('loginnn' ,[ sinuplogcontoller::class,'lo']) ->name('ogd');

Route::post('ogd' ,[ sinuplogcontoller::class,'ogd']) ->name('ogd');

Route::get('/Personal' ,[ sinuplogcontoller::class,'pro']);
Route::post('/profile/update', [ sinuplogcontoller::class, 'updateProfile'])->name('update.profile');

Route::post('pass', [ sinuplogcontoller::class, 'pass'])->name('pass');

Route::get('logout' ,[ sinuplogcontoller::class,'logoutt2']);


Route::get('/ForgetPass' ,[ sinuplogcontoller::class,'for']);
Route::post('/forget' ,[ sinuplogcontoller::class,'forget']) ->name('forget');


Route::post('/forgetphpne' ,[ sinuplogcontoller::class,'forgetphpne']) ->name('forgetphpne');


Route::post('/newPassword' ,[ sinuplogcontoller::class,'newPassword']) ->name('newPassword');

Route::post('/taskssto', [sinuplogcontoller::class, 'taskssto'])->name('taskssto');

Route::post('/storchildmcard', [sinuplogcontoller::class, 'storchildmcard'])->name('storchildmcard');

Route::get('/videos/{id}', [sinuplogcontoller::class, 'videoshow2'])->name('videoshow2');

Route::post('/watch-video', [sinuplogcontoller::class, 'watchVideo'])->name('watch-video');

Route::post('registerdoctor', [DoctorController::class, 'registerdoctor'])->name('registerdoctor');

Route::post('doctorlogin', [DoctorController::class, 'doctorlogin'])->name('doctorlogin');

// Route::get('/user/{userId}/video-info', [sinuplogcontoller::class, 'showUserVideoInfo'])->name('user.video_info');
// Route::get('/learn', [sinuplogcontoller::class, 'showUserUpdates'])->name('user.updates');

// Route::get('/video-status', [sinuplogcontoller::class, 'showVideoStatus'])->name('video.status');

// Route::get('/video/status/{videoId}', [sinuplogcontoller::class, 'showLatestVideoStatus'])->name('video.status');


Route::post('appointmentsst', [AppointmeeeeeeeentController::class, 'appointmentsst'])->name('appointmentsst');

Route::post('checkpassword', [AppointmeeeeeeeentController::class, 'checkpassword'])->name('checkpassword');

Route::post('randomString', [AppointmeeeeeeeentController::class, 'randomString'])->name('randomString');

Route::post('uuuuopppimage', [AppointmeeeeeeeentController::class, 'uuuuopppimage'])->name('uuuuopppimage');




Route::get('/chrt', [ChatController::class, 'showcheit'])->name('chrt');

Route::get('/messages/{userId}', [ChatController::class, 'getMessages'])->name('messages.get');
Route::post('/messages/send', [ChatController::class, 'sendMessage'])->name('messages.send');
