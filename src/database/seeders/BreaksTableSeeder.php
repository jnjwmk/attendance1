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
            $breakStart = Carbon::createFromTime(0,30,0);
            
        }
    }
}
