<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    // ログイン画面の表示
    public function showLoginForm()
    {
        return view('auth.login');
    }


    // 登録画面表示
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // 勤怠画面表示
    public function showAttendance()
    {
        return view('attendance');
    }

    // 打刻画面表示
    public function showStamp()
    {
        return view('stamp');
    }
}
