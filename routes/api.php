<?php

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


Route::group(['middleware' => ['jwt.auth']], function () {
    Route::post('/save-device-token', [AppController::class, 'saveDeviceToken']);


});