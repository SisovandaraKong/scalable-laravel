<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
        use HasFactory;

    // Optional: define fillable fields for mass assignment
    protected $fillable = [
        'name',
        'price',
    ];
}
