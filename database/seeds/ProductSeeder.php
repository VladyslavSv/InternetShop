<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'IPhone',
            'description' => 'IPhone 7',
            'img_name' => 'img/Laptop.png',
            'parameters' => 'black',
            'category_id' => 1,
            'price' => 500,
            'views' => 5,
        ]);
        DB::table('products')->insert([
            'name' => 'Samsung',
            'description' => 'Samsung galaxy S10',
            'img_name' => 'img/samsung.jpg',
            'parameters' => 'blue',
            'category_id' => 1,
            'price' => 800,
            'views' => 15,
        ]);
    }
}
