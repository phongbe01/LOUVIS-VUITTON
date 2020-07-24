<?php

use Illuminate\Database\Seeder;

class SexesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sex = new \App\Sex();
        $sex->name = 'Male';
        $sex->save();

        $sex = new \App\Sex();
        $sex->name = 'Female';
        $sex->save();
    }
}
