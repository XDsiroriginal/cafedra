<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'телефон 1 ',
                'description' => 'описание 1',
                'price' => 79999
            ],
            [
                'name' => 'телефон 2',
                'description' => 'описание 2',
                'price' => 129999
            ],
            [
                'name' => 'телефон 3',
                'description' => 'описание 3',
                'price' => 29999
            ],
            [
                'name' => 'телефон 4',
                'description' => 'описание 4',
                'price' => 189999,
            ],
            [
                'name' => 'телефон 5',
                'description' => 'описание 5',
                'price' => 45999,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
