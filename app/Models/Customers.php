<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // todo one crud
    
}
