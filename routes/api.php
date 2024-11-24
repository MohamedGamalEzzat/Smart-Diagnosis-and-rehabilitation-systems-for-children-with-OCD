<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\GametwooController;
use App\Http\Controllers\API\MoodCardController;
use App\Http\Controllers\API\DoctorpiiiController;
use App\Http\Controllers\API\chengProfileController;
use App\Http\Controllers\API\ControlVideoController;
use App\Http\Controllers\API\ForgotPasswordemaillllController;
use App\Http\Controllers\API\ChattttyyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

Route::middleware('auth:api')->post('/tasks', [TaskController::class, 'createTask']);
Route::post('/checkpassworddd', [TaskController::class, 'checkpasswordddderrrrr']);
Route::get('/taskssweoouu', [TaskController::class, 'indexsweooooo']);


Route::get('/videoshweoo', [ControlVideoController::class, 'videoshweoo']);
Route::post('/ceretwatchvideo', [ControlVideoController::class, 'watchVideoppiit']);
Route::middleware('auth:api')->get('/user/latestvideoupdatesfffff', [ControlVideoController::class, 'getUserWithLatestVideoUpdates']);
Route::get('/octtyydvideostebel', [ControlVideoController::class, 'toouussqqzz']);


Route::middleware('auth:api')->post('/updateprofileemailpi', [chengProfileController::class, 'updateProfileemaill']);
Route::middleware('auth:api')->post('/updateprofilepasswordddddd', [chengProfileController::class, 'updateprofeilPasswordlll']);
Route::get('/controimageustttttro', [chengProfileController::class, 'ImageUserproooopppuu']);
Route::middleware('auth:api')->post('/addprofimages', [chengProfileController::class, 'addddImages']);
Route::middleware('auth:api')->get('/userprofhhhimages', [chengProfileController::class, 'getUserprofhImages']);



Route::get('/imeggggggoomoods', [MoodCardController::class, 'getAllimmmMoods']);
Route::middleware('auth:api')->post('/storeppppchildmcard', [MoodCardController::class, 'steroodddmmodp']);



Route::get('/doctorsallname', [DoctorpiiiController::class, 'getalllDoctors']);

Route::middleware('auth:api')->post('/adddddoozzAppointment', [DoctorpiiiController::class, 'makeAppointment']);


Route::middleware('auth:api')->post('/gamestwoos', [GametwooController::class, 'storerrrreewf']);

Route::middleware('auth:api')->post('/gamestwlavels', [GametwooController::class, 'rrregghhffddcclavel']);


Route::get('/AdminGameppall', [GametwooController::class, 'AdminGamepp']);

Route::middleware('auth')->get('/latesttwoogameupdates', [GametwooController::class, 'getUserWithLatestGamewwwddduumUpdates']);

Route::middleware('auth')->get('/gemalavelstwooggup', [GametwooController::class, 'lavelstwoogghhnnnnmkk']);





Route::middleware('auth:api')->group(function () {
    Route::get('/users', [ChattttyyController::class, 'showUsers']);
    Route::get('/messages/{userId}', [ChattttyyController::class, 'getMessages']);
    Route::post('/messages/send', [ChattttyyController::class, 'sendMessage']);
});

