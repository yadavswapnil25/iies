<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceMinister extends Model
{
    protected $fillable = [
        'name',
        'hindi_name',
        'designation',
        'hindi_designation',
        'image_path',
        'bio',
        'hindi_bio',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Scope to get only active ministers
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

    /**
     * Get the image URL
     */
    public function getImageUrlAttribute()
    {
        if ($this->image_path) {
            return asset('storage/' . $this->image_path);
        }
        return asset('images/default-minister.jpg');
    }
}
