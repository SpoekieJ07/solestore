<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedCountry extends Seeder
{
    public function run(): void
    {
        foreach ([
            'United States',
            'Germany',
            'Japan',
            'United Kingdom',
        ] as $country) {
            DB::table('_country')->updateOrInsert(
                ['country' => $country],
                fn (bool $exists): array => $exists
                    ? ['updated_at' => now()]
                    : ['created_at' => now(), 'updated_at' => now()],
            );
        }
    }
}
