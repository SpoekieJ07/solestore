<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedDiscription extends Seeder
{
    public function run(): void
    {
        foreach ([
            'Nike is an American athletic footwear and apparel brand.',
            'Adidas is a German sportswear company known for footwear.',
            'Puma is a German sports brand focused on footwear and apparel.',
            'New Balance is an American footwear brand known for running shoes.',
            'ASICS is a Japanese sportswear company best known for running shoes.',
            'Reebok is a British-American sportswear and footwear brand.',
            'Converse is an American footwear brand known for Chuck Taylor sneakers.',
            'Vans is an American footwear brand rooted in skateboarding.',
            'Under Armour is an American sportswear brand with athletic footwear.',
            'Saucony is an American footwear brand specializing in running shoes.',
        ] as $description) {
            DB::table('_discription')->updateOrInsert(
                ['description' => $description],
                fn (bool $exists): array => $exists
                    ? ['updated_at' => now()]
                    : ['created_at' => now(), 'updated_at' => now()],
            );
        }
    }
}
