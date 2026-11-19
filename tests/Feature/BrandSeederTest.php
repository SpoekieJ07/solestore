<?php

use Database\Seeders\BrandSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('database seeder stores complete brand records', function () {
    $this->seed();

    $this->assertDatabaseHas('brands', [
        'name' => 'Nike',
        'country' => 'United States',
        'description' => 'American athletic footwear and apparel brand.',
    ]);

    $this->seed(BrandSeeder::class);

    $this->assertDatabaseCount('brands', 10);
});
