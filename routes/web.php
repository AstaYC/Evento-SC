<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Organizer\EventController;
use App\Http\Controllers\User\EventDetailController;
use App\Http\Controllers\Auth\ForgotPasswordController;
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


Route::get('/eventDetail' , [EventDetailController::class , 'displayEventDetail']);

Route::get('/login' , [AuthController::class , 'displayLogin']);
Route::get('/register' , [AuthController::class , 'displayRegister']);

// Event Crud //

Route::get('/event' , [EventController::class , 'displayEvent']);
Route::post('/event/add' , [EventController::class , 'addEvent']);
Route::post('/event/update' , [EventController::class , 'updateEvent']);
Route::post('/event/delete' , [EventController::class , 'deleteEvent']);


//  Categorie Crud  //
Route::get('/categorie' , [CategorieController::class , 'displayCategorie']);
Route::post('/categorie/add' , [CategorieController::class , 'addCategorie']);
Route::post('/categorie/update' , [CategorieController::class , 'updateCategorie']);
Route::post('/categorie/delete' , [CategorieController::class , 'deleteCategorie']);


//  Users Crud//

Route::get('/user' , [UserController::class , 'displayUser']);
Route::post('/user/update' , [UserController::class , 'updateUser']);
Route::post('/user/delete' , [UserController::class , 'deleteUser']);



// Reset Password //

Route::get('/forgotPassword', [ForgotPasswordController::class, 'forgotPasswordForm']);
Route::post('/forgotPassword', [ForgotPasswordController::class, 'sendEmail']);

Route::get('resetPassword/{token}', [ForgotPasswordController::class, 'resetPasswordForm']);
Route::post('resetPassword/{token}', [ForgotPasswordController::class, 'changePassword']);
