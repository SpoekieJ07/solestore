<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Nike',
                'country' => 'United States',
                'description' => 'American athletic footwear and apparel brand.',
            ],
            [
                'name' => 'Adidas',
                'country' => 'Germany',
                'description' => 'German sportswear company known for footwear.',
            ],
            [
                'name' => 'Puma',
                'country' => 'Germany',
                'description' => 'German sports brand focused on footwear and apparel.',
            ],
            [
                'name' => 'New Balance',
                'country' => 'United States',
                'description' => 'American footwear brand known for running shoes.',
            ],
            [
                'name' => 'ASICS',
                'country' => 'Japan',
                'description' => 'Japanese sportswear company best known for running shoes.',
            ],
            [
                'name' => 'Reebok',
                'country' => 'United Kingdom',
                'description' => 'Sportswear and footwear brand founded in the United Kingdom.',
            ],
            [
                'name' => 'Converse',
                'country' => 'United States',
                'description' => 'American footwear brand known for Chuck Taylor sneakers.',
            ],
            [
                'name' => 'Vans',
                'country' => 'United States',
                'description' => 'American footwear brand rooted in skateboarding.',
            ],
            [
                'name' => 'Under Armour',
                'country' => 'United States',
                'description' => 'American sportswear brand with athletic footwear.',
            ],
            [
                'name' => 'Saucony',
                'country' => 'United States',
                'description' => 'American footwear brand specializing in running shoes.',
            ],
        ];

        foreach ($brands as $brandData) {
            Brand::query()->updateOrCreate(
                ['name' => $brandData['name']],
                [
                    'country' => $brandData['country'],
                    'description' => $brandData['description'],
                ],
            );
        }
    }
}
