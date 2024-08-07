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

    public function employee ()
    {
        return $this->belongsTo(Employee::class);
    }

    public function breaks ()
    {
        return $this->hasMany(Breaks::class);
    }

    public function totalWorkMinutes()
    {

        $workStart = Carbon::parse($this->work_start_time);
        $workEnd = Carbon::parse($this->work_end_time);

        $totalWorkMinutes = $workStart->diffInMinutes($workEnd);

        return $totalWorkMinutes;

    }
    public function totalBreakMinutes()
    {
        $totalBreakMinutes = $this->breaks->sum(function ($break) {
            $breakStart = Carbon::parse($break->break_start_time);
            $breakEnd = Carbon::parse($break->break_end_time);
            return $breakStart->diffInMinutes($breakEnd);
        });

        return $totalBreakMinutes;
    }
}