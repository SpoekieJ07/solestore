<?php

use App\Models\Sneaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('database seeder stores sneakers across different brands', function () {
    $this->seed();

    $this->assertDatabaseCount('sneakers', 10);

    expect(Sneaker::query()->distinct()->count('brand_id'))->toBe(10);
    expect(Sneaker::query()->where('name', 'Air Force 1 Low')->firstOrFail()->brand->name)
        ->toBe('Nike');
});
