<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new \App\Category();
        $category->name = 'Shirt';
        $category->save();

        $category = new \App\Category();
        $category->name = 'Pants';
        $category->save();
    }
}
