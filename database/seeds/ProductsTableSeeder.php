<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Playstation 4',
            'slug' => 'playstation-4',
            'description' => 'description goes here',
            'price' => 399.99,
            'image' => 'ps4.jpg',
            'product_type' => '2'
        ]);

        DB::table('products')->insert([
            'name' => 'Xbox One',
            'slug' => 'xbox-one',
            'description' => 'description goes here',
            'price' => 449.99,
            'image' => 'xbox-one.jpg',
            'product_type' => '2'
        ]);

        DB::table('products')->insert([
            'name' => 'Apple Macbook Pro',
            'slug' => 'macbook-pro',
            'description' => 'description goes here',
            'price' => 2299.99,
            'image' => 'macbook-pro.jpg',
            'product_type' => '2'
        ]);

        DB::table('products')->insert([
            'name' => 'Apple iPad Retina',
            'slug' => 'ipad-retina',
            'description' => 'description goes here',
            'price' => 799.99,
            'image' => 'ipad-retina.jpg',
            'product_type' => '1'
        ]);

        DB::table('products')->insert([
            'name' => 'Acoustic Guitar',
            'slug' => 'acoustic-guitar',
            'description' => 'description goes here',
            'price' => 699.99,
            'image' => 'acoustic.jpg',
            'product_type' => '2'
        ]);
        DB::table('products')->insert([
            'name' => 'Electric Guitar',
            'slug' => 'electric-guitar',
            'description' => 'description goes here',
            'price' => 899.99,
            'image' => 'electric.jpg',
            'product_type' => '2'
        ]);

        DB::table('products')->insert([
            'name' => 'Headphones',
            'slug' => 'headphones',
            'description' => 'description goes here',
            'price' => 99.99,
            'image' => 'headphones.jpg',
            'product_type' => '1'
        ]);

        DB::table('products')->insert([
            'name' => 'Speakers',
            'slug' => 'speakers',
            'description' => 'description goes here',
            'price' => 499.99,
            'image' => 'speakers.jpg',
            'product_type' => '2'
        ]);
    }
}
