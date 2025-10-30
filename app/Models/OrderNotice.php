<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderNotice extends Model
{
    protected $table = 'orders_notices';

    protected $fillable = [
        'title',
        'content',
        'published_at',
        'is_active',
    ];

    protected $casts = [
        'published_at' => 'datetime',
        'is_active' => 'boolean',
    ];
}


