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

Route::middleware('auth')->group(function (){
    Route::post('/checkIn', [AttendanceController::class, 'checkIn']);
    Route::post('/checkOut', [AttendanceController::class, 'checkOut']);
    Route::post('/breakStart', [AttendanceController::class, 'breakStart']);
    Route::post('/breakEnd', [AttendanceController::class, 'breakEnd']);
    Route::get('/datePicker', [AttendanceController::class,'datePicker']);
});