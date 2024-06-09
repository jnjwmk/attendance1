<?php

use App\Http\Controllers\AttendanceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[AttendanceController::class,'showStamp']);
Route::get('/login',[AttendanceController::class, 'showLoginForm']);
Route::get('/register',[AttendanceController::class,'showRegisterForm']);
Route::get('/attendance',[AttendanceController::class,'showAttendance']);