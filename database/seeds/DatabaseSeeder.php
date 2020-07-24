<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UserSeeder::class,
             RoleSeeder::class,
             CategorySeeder::class,
             SupplierSeeder::class,
             ProductSeeder::class,
             ImageSeeder::class,
             SizeSeeder::class,
             ]);
        //UserSeeder::class;
    }
}