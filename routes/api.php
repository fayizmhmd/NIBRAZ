<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\AppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/send-otp', [AppController::class, 'sendOtp']);
Route::post('/verify-otp', [AppController::class, 'verifyOtp']);
Route::post('/register', [AppController::class, 'register']);


Route::post('/all-testimonials', [ApiController::class, 'allTestimonials']);

Route::post('/all-projects', [ApiController::class, 'allProjects']);



Route::group(['middleware' => ['jwt.auth']], function () {
    Route::post('/save-device-token', [AppController::class, 'saveDeviceToken']);


});


