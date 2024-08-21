<?php

use App\Http\Controllers\AttendanceController;
use App\Models\Attendance;
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

Route::get('/', [AttendanceController::class, 'showStamp']);
Route::get('/attendance', [AttendanceController::class, 'showAttendance']);
Route::post('/', [AttendanceController::class, 'checkIn']);
Route::post('/',[AttendanceController::class,'checkOut']);
Route::post('/',[AttendanceController::class,'breakStart']);
Route::post('/',[AttendanceController::class,'breakEnd']);