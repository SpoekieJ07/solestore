<?php

use App\Models\Brand;
use Illuminate\Foundation\Testing\RefreshDatabase;

pest()->use(RefreshDatabase::class);

test('brands index returns all brands', function () {
    Brand::factory()->create(['name' => 'Nike']);

    $this->get('/brands')
        ->assertOk()
        ->assertJsonFragment(['name' => 'Nike']);
});

test('brand show returns the requested brand', function () {
    $brand = Brand::factory()->create(['name' => 'Nike']);

    $this->get("/brands/{$brand->id}")
        ->assertOk()
        ->assertJsonFragment(['id' => $brand->id, 'name' => 'Nike']);
});

test('brand show returns 404 for an unknown id', function () {
    $this->get('/brands/9999')->assertNotFound();
});
