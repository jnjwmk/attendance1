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



}