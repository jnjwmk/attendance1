<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            'password' => 'taro1'
        ];
        DB::table('employees')->insert($employees);

        $employees = [
            'name' => 'テスト次郎',
            'email' => 'test2@example.com',
            'password' => 'jiro2'
        ];
        DB::table('employees')->insert($employees);

        $employees = [
            'name' => 'テスト三郎',
            'email' => 'test3@example.com',
            'password' => 'saburo3'
        ];
        DB::table('employees')->insert($employees);

        $employees = [
            'name' => 'テスト四郎',
            'email' => 'test4@example.com',
            'password' => 'shiro4'
        ];
        DB::table('employees')->insert($employees);

        $employees = [
            'name' => 'テスト五郎',
            'email' => 'test5@example.com',
            'password' => 'goro5'
        ];
        DB::table('employees')->insert($employees);
    }
}
