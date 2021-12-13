<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // return Hash::make("123456");
    return view('welcome');
});
Route::post('change-password', [LoginController::class, "saveChangePassword"]);

Route::post('login', [LoginController::class, "login"]);
Route::prefix('staff')->group(function () {
    Route::get('dashboard', [LoginController::class, "dashboard"]);
    Route::get('bar-kitchen-docket', [LoginController::class, "dashboard"]);
    Route::post('bar-kitchen-docket', [StaffController::class, "saveBarKitchenDocket"]);
    Route::get('captin-order', [StaffController::class, "captinOrder"]);
    Route::post('captin-order', [StaffController::class, "saveCaptinOrder"]);
    Route::get('reservation-billing', [StaffController::class, "reservationBilling"]);
    Route::post('reservation-billing', [StaffController::class, "saveReservationBilling"]);
    Route::get('logout', [LoginController::class, "logout"]);
    Route::get('change-password', [LoginController::class, "changeStaffPassword"]);

});

Route::prefix('admin')->group(function () {
    Route::get('/', function(){
        return view("admin.login");
    });
    
    Route::get('staff/create', [AdminController::class, "createStaff"]);
    Route::get('edit/bar-kitchen-docket/{i}', [AdminController::class, "editBarKitchenDocket"]);
    Route::put('edit/bar-kitchen-docket/{i}', [AdminController::class, "updateBarKitchenDocket"]);    
    Route::get('delete-bar-kitchen-docket/{i}', [AdminController::class, "deleteBarKitchenDocket"]);
    Route::get('edit/reservation-billing/{i}', [AdminController::class, "editReservationBilling"]);
    Route::get('delete-reservation-billing/{i}', [AdminController::class, "deleteReservationBilling"]);
    Route::put('edit/captin-order/{i}', [AdminController::class, "updateCaptinOrder"]);
    Route::get('edit/captin-order/{i}', [AdminController::class, "editCaptinOrder"]);
    Route::get('delete/captin-order/{i}', [AdminController::class, "deleteCaptinOrder"]);

    Route::get('staffs', [AdminController::class, "staffs"]);
    Route::get('change-password', [LoginController::class, "changePassword"]);
    Route::post('login', [LoginController::class, "login"]);
    Route::get('dashboard', [AdminController::class, "dashboard"]);
    Route::get('bar-kitchen-docket', [AdminController::class, "barKitchenDocket"]);
    Route::get('bar-kitchen-docket/{id}', [AdminController::class, "viewBarKitchenDocket"]);
    Route::get('captin-order', [AdminController::class, "captinOrder"]);
    Route::get('captin-order/{id}', [AdminController::class, "viewCaptinOrder"]);
    Route::get('reservation-billing/{id}', [AdminController::class, "viewReservationBilling"]);
    Route::get('reservation-billing', [AdminController::class, "reservationBilling"]);
    Route::get('staff/activate/{id}', [AdminController::class, "activateStaff"]);
    Route::get('logout', [LoginController::class, "adminLogout"]);
});
