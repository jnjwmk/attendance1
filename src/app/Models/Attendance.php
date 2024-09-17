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

    public function totalWorkMinutes()
    {

        $workStart = Carbon::parse($this->work_start_time);
        $workEnd = Carbon::parse($this->work_end_time);

        $totalWork = $workStart->diff($workEnd);

        $totalWorkMinutes = sprintf('%02d:%02d:%02d', $totalWork->h, $totalWork->i, $totalWork->s);

        return $totalWorkMinutes;

    }
    public function totalBreakSeconds()
    {
        $totalBreakSeconds = $this->breaks->sum(function ($break) {
            $breakStart = Carbon::parse($break->break_start_time);
            $breakEnd = Carbon::parse($break->break_end_time);

            return $breakStart->diffInSeconds($breakEnd);
        });

        $totalBreakTime = Carbon::createFromTime(0,0,0)->addSeconds($totalBreakSeconds);

        return $totalBreakTime->format('H:i:s');
    }
}