<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\eventDetailController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);


Route::get('/' , [eventController::class , 'displayEvent']);
Route::get('/eventDetail' , [eventDetailController::class , 'displayEventDetail']);

Route::get('/login' , [AuthController::class , 'displayLogin']);
Route::get('/register' , [AuthController::class , 'displayRegister']);



// Reset Password //

Route::get('/forgotPassword', [ForgotPasswordController::class, 'forgotPasswordForm']);
Route::post('/forgotPassword', [ForgotPasswordController::class, 'sendEmail']);

Route::get('resetPassword/{token}', [ForgotPasswordController::class, 'resetPasswordForm']);
Route::post('resetPassword/{token}', [ForgotPasswordController::class, 'changePassword']);
