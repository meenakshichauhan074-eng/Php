<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Demo Product 1',
                'description' => 'Sample description 1',
                'price' => 199.99,
                'category' => 'Electronics',
                'image' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Demo Product 2',
                'description' => 'Sample description 2',
                'price' => 189.99,
                'category' => 'Electronics',
                'image' => null,
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
            ]);
    }
}
