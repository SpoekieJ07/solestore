<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedName extends Seeder
{
    public function run(): void
    {
        foreach ([
            'Nike',
            'Adidas',
            'Puma',
            'New Balance',
            'ASICS',
            'Reebok',
            'Converse',
            'Vans',
            'Under Armour',
            'Saucony',
        ] as $brandName) {
            DB::table('brands')->updateOrInsert(
                ['name' => $brandName],
                fn (bool $exists): array => $exists
                    ? ['updated_at' => now()]
                    : ['created_at' => now(), 'updated_at' => now()],
            );
        }
    }
}
