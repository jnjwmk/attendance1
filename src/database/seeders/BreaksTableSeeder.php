<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreaksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attendances = DB::table('attendances')->get();

        foreach ($attendances as $attendance){
            $workStart = Carbon::parse($attendance->work_start_time);
            $workEnd = Carbon::parse($attendance->work_end_time);

            $breakStart = $workStart->copy()->addMinutes();

            $breakEnd = $breakStart->copy()->addMinutes(rand(30,60));

            DB::table('breaks')->insert([
                'attendance_id' => $attendance->id,
                'break_start_time' => $breakStart->toTimeString(),
                'break_end_time' => $breakEnd->toTimeString(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}