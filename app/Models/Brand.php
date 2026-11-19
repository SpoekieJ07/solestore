<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = '_name';

    protected $fillable = [
        'name',
    ];
}
