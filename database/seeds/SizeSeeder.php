<?php

use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $size = new \App\Size();
        $size->name = 'L';
        $size->save();

        $size = new \App\Size();
        $size->name = 'M';
        $size->save();

        $size = new \App\Size();
        $size->name = 'XL';
        $size->save();

        $size = new \App\Size();
        $size->name = 'XXL';
        $size->save();
    }
}
