<?php

use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $season = new \App\Season();
        $season->name = 'Spring';
        $season->save();

        $season = new \App\Season();
        $season->name = 'Summer';
        $season->save();

        $season = new \App\Season();
        $season->name = 'Fall';
        $season->save();

        $season = new \App\Season();
        $season->name = 'Winter';
        $season->save();
    }
}
