<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use PhpParser\Node\Expr\Cast\Double;
use Psy\Util\Str;


$factory->define(\App\Product::class, function (Faker $faker) {
    return [
        'productName' => 'Ao so mi',
        'price' => '250000',
        'quantity' => '100',
        'supplierID' => \App\Supplier::inRandomOrder()->first()->id,
        'categoryID' => \App\Category::inRandomOrder()->first()->id,
        'description' => $faker->text,
        'sex' => 'Male',
    ];
});
