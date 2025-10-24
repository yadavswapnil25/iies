<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternationalTaxation extends Model
{
    protected $fillable = [
        'title',
        'url',
        'description',
        'category',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope to get only active international taxations
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope to order by sort_order
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }
}
