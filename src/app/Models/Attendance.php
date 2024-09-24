<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Attendance extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }

    public function breaks ()
    {
        return $this->hasMany(Breaks::class);
    }

    public function totalWorkTimes()
    {

        $workStart = Carbon::parse($this->work_start_time);
        $workEnd = Carbon::parse($this->work_end_time);

        // 勤務時間の合計（秒単位）
        $totalWork = $workStart->diffInSeconds($workEnd);

        // 休憩時間の合計（秒単位）
        $totalBreak = $this->breaks->sum(function ($break) {
            $breakStart = Carbon::parse($break->break_start_time);
            $breakEnd = Carbon::parse($break->break_end_time);

            return $breakStart->diffInSeconds($breakEnd);
        });

        // 実働勤務時間 (勤務時間から休憩時間を引く)
        $actualWorkTime = $totalWork - $totalBreak;

        $totalWorkTime = Carbon::createFromTime(0,0,0)->addSeconds($actualWorkTime);

        return $totalWorkTime->format('H:i:s');

    }
    public function totalBreakTimes()
    {
        $totalBreak = $this->breaks->sum(function ($break) {
            $breakStart = Carbon::parse($break->break_start_time);
            $breakEnd = Carbon::parse($break->break_end_time);

            return $breakStart->diffInSeconds($breakEnd);
        });

        $totalBreakTime = Carbon::createFromTime(0,0,0)->addSeconds($totalBreak);

        return $totalBreakTime->format('H:i:s');
    }
}