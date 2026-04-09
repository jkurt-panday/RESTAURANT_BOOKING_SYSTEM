<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RestaurantTables extends Model
{
    protected $fillable = [
        'table_number',
        'capacity',
        'location',
        'status'
    ];
}
