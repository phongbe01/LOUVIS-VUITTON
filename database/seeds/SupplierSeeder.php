<?php

use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = new \App\Supplier();
        $supplier->name = 'Owen';
        $supplier->save();

        $supplier = new \App\Supplier();
        $supplier->name = 'Lovis Votton';
        $supplier->save();
    }
}
