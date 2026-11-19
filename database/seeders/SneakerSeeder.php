<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Sneaker;
use Illuminate\Database\Seeder;

class SneakerSeeder extends Seeder
{
    public function run(): void
    {
        $sneakers = [
            [
                'brand' => 'Nike',
                'name' => 'Air Force 1 Low',
                'colorway' => 'White/White',
                'release_year' => 1982,
                'description' => 'A classic low-top basketball sneaker with a clean white leather finish.',
            ],
            [
                'brand' => 'Adidas',
                'name' => 'Samba OG',
                'colorway' => 'Cloud White/Core Black',
                'release_year' => 1950,
                'description' => 'A low-profile indoor training shoe with a leather upper and gum sole.',
            ],
            [
                'brand' => 'Puma',
                'name' => 'Suede Classic',
                'colorway' => 'Puma Black/Puma White',
                'release_year' => 1968,
                'description' => 'A suede court sneaker with a simple, versatile profile.',
            ],
            [
                'brand' => 'New Balance',
                'name' => '990v6',
                'colorway' => 'Grey',
                'release_year' => 2022,
                'description' => 'A performance running shoe with a neutral grey mesh and suede upper.',
            ],
            [
                'brand' => 'ASICS',
                'name' => 'GEL-KAYANO 14',
                'colorway' => 'White/Pure Silver',
                'release_year' => 2008,
                'description' => 'A stability running shoe featuring GEL cushioning and a layered upper.',
            ],
            [
                'brand' => 'Reebok',
                'name' => 'Classic Leather',
                'colorway' => 'White',
                'release_year' => 1983,
                'description' => 'A lightweight leather running-inspired sneaker with a minimal design.',
            ],
            [
                'brand' => 'Converse',
                'name' => 'Chuck Taylor All Star',
                'colorway' => 'Optical White',
                'release_year' => 1917,
                'description' => 'A canvas high-top sneaker with the familiar rubber toe cap.',
            ],
            [
                'brand' => 'Vans',
                'name' => 'Old Skool',
                'colorway' => 'Black/White',
                'release_year' => 1977,
                'description' => 'A skate-inspired low-top with a canvas and suede upper.',
            ],
            [
                'brand' => 'Under Armour',
                'name' => 'Curry 1',
                'colorway' => 'Home',
                'release_year' => 2015,
                'description' => 'A basketball shoe designed for court traction and responsive support.',
            ],
            [
                'brand' => 'Saucony',
                'name' => 'Jazz Original',
                'colorway' => 'Grey/Blue',
                'release_year' => 1981,
                'description' => 'A retro running silhouette with a mesh and suede upper.',
            ],
        ];

        foreach ($sneakers as $sneakerData) {
            $brand = Brand::query()
                ->where('name', $sneakerData['brand'])
                ->firstOrFail();

            Sneaker::query()->updateOrCreate(
                [
                    'name' => $sneakerData['name'],
                    'brand_id' => $brand->id,
                ],
                [
                    'colorway' => $sneakerData['colorway'],
                    'release_year' => $sneakerData['release_year'],
                    'description' => $sneakerData['description'],
                ],
            );
        }
    }
}
