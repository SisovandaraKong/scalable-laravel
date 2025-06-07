<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CacheEntry extends Model
{
    protected $table = 'cache';
    protected $primaryKey = 'key';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'key',
        'value',
        'expiration',
    ];
}
