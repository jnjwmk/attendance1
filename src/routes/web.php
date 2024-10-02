<?php

use App\Http\Controllers\AttendanceController;
use App\Models\Attendance;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::middleware('auth')->group(function (){
    Route::get('/', [AttendanceController::class, 'showStamp']);
    Route::post('/checkIn', [AttendanceController::class, 'checkIn']);
    Route::post('/checkOut', [AttendanceController::class, 'checkOut']);
    Route::post('/breakStart', [AttendanceController::class, 'breakStart']);
    Route::post('/breakEnd', [AttendanceController::class, 'breakEnd']);
    Route::get('/attendance', [AttendanceController::class,'datePicker']);
    Route::get('/showAttendance', [AttendanceController::class, 'showAttendance']);

    Route::get('/logout' , function (){
        Auth::logout();
        return redirect('/login');
    });
});