<?php
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/home', function () {
  return view('pages/home');
});



Route::get('/Code', function () {
  return view('pages/Code');
});

Route::get('/ForgetPass', function () {
  return view('pages/ForgetPass');
});

Route::get('/NewPass', function () {
  return view('pages/NewPass');
});

Route::get('/question', function () {
  return view('pages/question');
});


Route::get('/learn', function () {
  return view('pages/learn');
});


Route::get('/games1', function () {
    return view('pages/games1');
  });


Route::get('/games2', function () {
    return view('pages/games2');
  });


Route::get('/Tasks', function () {
    return view('pages/Tasks');
  });


Route::get('/Personal', function () {
    return view('pages/Personal');
  });



