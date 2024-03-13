<?php

use App\Http\Controllers\Admin\CategorieController;
use App\Http\Controllers\Admin\EventValidationController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Organizer\EventController;
use App\Http\Controllers\User\EventDetailController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\User\ReservationController;
use App\Http\Controllers\User\HomeController;
use App\Http\Middleware\HasPermission;
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

Route::get('/login' , [AuthController::class , 'displayLogin']);
Route::get('/register' , [AuthController::class , 'displayRegister']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout']);



// Reset Password //
Route::get('/forgotPassword', [ForgotPasswordController::class, 'forgotPasswordForm']);
Route::post('/forgotPassword', [ForgotPasswordController::class, 'sendEmail']);

Route::get('resetPassword/{token}', [ForgotPasswordController::class, 'resetPasswordForm']);
Route::post('resetPassword/{token}', [ForgotPasswordController::class, 'changePassword']);

//  Home //
Route::get('/home' , [HomeController::class , 'home']);
Route::get('/home/eventDetail/{id}' , [EventDetailController::class , 'displayEventDetail']);

// Search //
Route::get('/search/{keyword?}' , [HomeController::class , 'search']);

//Filter
Route::get('/filtre/{filtre?}' , [HomeController::class , 'filtre']);


Route::middleware(HasPermission::class)->group(function () {

       // Event Crud //
       Route::get('/event' , [EventController::class , 'displayEvent']);
       Route::post('/event/add' , [EventController::class , 'addEvent']);
       Route::post('/event/update' , [EventController::class , 'updateEvent']);
       Route::post('/event/delete' , [EventController::class , 'deleteEvent']);
       Route::post('/event/typeValidation' , [EventController::class , 'typeValidation']);
       
       //  Categorie Crud  //
       Route::get('/categorie' , [CategorieController::class , 'displayCategorie']);
       Route::post('/categorie/add' , [CategorieController::class , 'addCategorie']);
       Route::post('/categorie/update' , [CategorieController::class , 'updateCategorie']);
       Route::post('/categorie/delete' , [CategorieController::class , 'deleteCategorie']);
       
       
       //  Users Crud //
       Route::get('/user' , [UserController::class , 'displayUser']);
       Route::post('/user/update' , [UserController::class , 'updateUser']);
       Route::post('/user/delete' , [UserController::class , 'deleteUser']);
       
       
       //  Permission Crud//
       Route::get('/role' , [RoleController::class , 'displayRole']);
       Route::post('/role/add' , [RoleController::class , 'addRole']);
       Route::post('/role/update' , [RoleController::class , 'updateRole']);
       Route::post('/role/delete' , [RoleController::class , 'deleteRole']);
       
       
       //  Event Validation //
       Route::get('/eventValidation' , [EventValidationController::class , 'displayEventValidation']);
       Route::post('/eventValidation/valider' , [EventValidationController::class , 'validerEvent']);
       
       // Reservation //
       Route::get('/reservation' , [ReservationController::class , 'DisplayReservation']);
       Route::post('/reservation/validation' , [ReservationController::class , 'acceptReservation']);
       Route::post('/reservationTicket' , [ReservationController::class , 'addRereservation']);
       
    });




