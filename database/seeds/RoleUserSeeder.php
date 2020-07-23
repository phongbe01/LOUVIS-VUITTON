<?php

use App\User;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::find(1);
        $user->roles()->attach(1);
        $user->roles()->attach(2);

        $user = User::find(2);
        $user->roles()->attach(2);

    }
}
