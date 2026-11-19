<?php

use Database\Seeders\SeedCountry;
use Database\Seeders\SeedDiscription;
use Database\Seeders\SeedName;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('database seeder stores sneaker brand names and details', function () {
    $this->seed();

    $this->assertDatabaseHas('brands', ['name' => 'Nike']);
    $this->assertDatabaseHas('_country', ['country' => 'Germany']);
    $this->assertDatabaseHas('_discription', [
        'description' => 'Nike is an American athletic footwear and apparel brand.',
    ]);

    $this->seed([
        SeedName::class,
        SeedCountry::class,
        SeedDiscription::class,
    ]);

    $this->assertDatabaseCount('brands', 10);
    $this->assertDatabaseCount('_country', 4);
    $this->assertDatabaseCount('_discription', 10);
});
