<?php

namespace App\Models;

use Database\Factories\SneakerFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sneaker extends Model
{
    /** @use HasFactory<SneakerFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'colorway',
        'release_year',
        'description',
        'brand_id',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
