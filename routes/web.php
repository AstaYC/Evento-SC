<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\eventDetailController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/' , [eventController::class , 'displayEvent']);
Route::get('/eventDetail' , [eventDetailController::class , 'displayEventDetail']);

Route::get('/login' , [AuthController::class , 'displayLogin']);
Route::get('/register' , [AuthController::class , 'displayRegister']);
