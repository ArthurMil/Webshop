<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://placeholdit.imgix.net/~text?txtsize=14&txt=150%C3%97150&w=150&h=150',
            'title' => 'Harry Flopper',
            'description' => 'Super cool - at least as a child',
            'price' => 10
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://placeholdit.imgix.net/~text?txtsize=14&txt=150%C3%97150&w=150&h=150',
            'title' => 'Car',
            'description' => 'Super cool - at least as a child',
            'price' => 25.99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.mommypr.com/wp-content/uploads/2012/12/AL-Shampoo.png',
            'title' => 'Shampoo',
            'description' => 'Super cool - at least as a child',
            'price' => 18.99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://placeholdit.imgix.net/~text?txtsize=14&txt=150%C3%97150&w=150&h=150',
            'title' => 'Toy Ship',
            'description' => 'Super cool - at least as a child',
            'price' => 9.99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://placeholdit.imgix.net/~text?txtsize=14&txt=150%C3%97150&w=150&h=150',
            'title' => 'Toy House',
            'description' => 'Super cool - at least as a child',
            'price' => 99.99
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://placeholdit.imgix.net/~text?txtsize=14&txt=150%C3%97150&w=150&h=150',
            'title' => 'SomethingCool',
            'description' => 'Super cool - at least as a child',
            'price' => 49.99
        ]);
        $product->save();
    }
}
