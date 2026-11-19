<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;
use 

class BrandController extends Controller
{
    public function index(): Collection
    {
        return Brand::all();
    }

    public function show(string $id): Brand
    {
        return Brand::findOrFail($id);
    }
}
