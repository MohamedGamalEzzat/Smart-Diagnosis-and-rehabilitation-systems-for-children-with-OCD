<?php
use App\Models\User;
use App\Http\Controllers\sinuplogcontoller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


// //
// Route::post('/SignUp',
// });

Route::get('/SignUp' ,[ sinuplogcontoller::class,'index']);
Route::post('/store' ,[ sinuplogcontoller::class,'store'])->name('signup.store');

Route::get('login' ,[ sinuplogcontoller::class,'lo']);

Route::post('ogd' ,[ sinuplogcontoller::class,'ogd']) ->name('ogd');

