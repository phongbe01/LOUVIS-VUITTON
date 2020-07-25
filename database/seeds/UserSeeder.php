<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'phong';
        $user->email = 'phong01@gmail.com';
        $user->password = Hash::make('123123abc');
        $user->roleID = '1';
        $user->save();

        factory(\App\User::class, 50)->create();
    }
}
