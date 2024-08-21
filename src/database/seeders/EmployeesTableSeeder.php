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
        $users = [
            'name' => 'テスト太郎',
            'email' => 'test1@example.com',
            'password' => Hash::make('taro1')
        ];
        DB::table('users')->insert($users);

        $users = [
            'name' => 'テスト次郎',
            'email' => 'test2@example.com',
            'password' => Hash::make ('jiro2')
        ];
        DB::table('users')->insert($users);

        $users = [
            'name' => 'テスト三郎',
            'email' => 'test3@example.com',
            'password' => Hash::make ('saburo3')
        ];
        DB::table('users')->insert($users);

        $users = [
            'name' => 'テスト四郎',
            'email' => 'test4@example.com',
            'password' => Hash::make ('shiro4')
        ];
        DB::table('users')->insert($users);

        $users = [
            'name' => 'テスト五郎',
            'email' => 'test5@example.com',
            'password' => Hash::make ('goro5')
        ];
        DB::table('users')->insert($users);
    }
}