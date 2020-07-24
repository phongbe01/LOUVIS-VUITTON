<?php

use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image = new \App\Image();
        $image->image = 'image/product/product1a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product2a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product3a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product4a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product5a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product6a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product7a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product8a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product9a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product10a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product11a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product12a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product13.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product14.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product15a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product16a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product17a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product18a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();

        $image = new \App\Image();
        $image->image = 'image/product/product19a.jpg';
        $image->productID = \App\Product::inRandomOrder()->first()->id;
        $image->save();
    }
}
