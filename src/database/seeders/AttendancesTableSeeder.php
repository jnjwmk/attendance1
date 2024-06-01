<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = DB::table('employees')->get();
        $specificDate = Carbon::create(2021,11,01);

        foreach ($employees as $employee) {
            $workStart = Carbon::createFromTime(10,0,0);
            $workEnd = Carbon::createFromTime(20,0,0);

            DB::table('attendances')->insert([
                'employee_id' => $employee->id,
                'date' => $specificDate->toDateString(),
                'work_start_time' => $workStart->toTimeString(),
                'work_end_time' => $workEnd->toTimeString(),

            ]);
        }

        // $attendances = [
        //     'employee_id' => $employee->id,
        //     'date' => $specificDate->toDateString(),
        //     'work_start_time' => '10:00:00',
        //     'work_end_time' => '20:00:00'
        // ];
        // DB::table('attendances')->insert($attendances);


    }
}
