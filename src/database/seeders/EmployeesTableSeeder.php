<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            'name' => 'テスト太郎',
            'email' => 'test1@example.com',
            'password' => Hash::make('taro1')
        ];
        DB::table('employees')->insert($employees);

        $employees = [
            'name' => 'テスト次郎',
            'email' => 'test2@example.com',
            'password' => Hash::make ('jiro2')
        ];
        DB::table('employees')->insert($employees);

        $employees = [
            'name' => 'テスト三郎',
            'email' => 'test3@example.com',
            'password' => Hash::make ('saburo3')
        ];
        DB::table('employees')->insert($employees);

        $employees = [
            'name' => 'テスト四郎',
            'email' => 'test4@example.com',
            'password' => Hash::make ('shiro4')
        ];
        DB::table('employees')->insert($employees);

        $employees = [
            'name' => 'テスト五郎',
            'email' => 'test5@example.com',
            'password' => Hash::make ('goro5')
        ];
        DB::table('employees')->insert($employees);
    }
}
