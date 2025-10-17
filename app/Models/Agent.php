<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'name',
        'agent_code',
        'experience_years',
        'phone',
        'email',
        'address',
        'category',
        'specialization',
        'service_fee_percentage',
        'daily_fee_min',
        'daily_fee_max',
        'sbi_account_number',
        'is_active',
        'notes',
    ];

    protected $casts = [
        'experience_years' => 'integer',
        'service_fee_percentage' => 'decimal:2',
        'daily_fee_min' => 'decimal:2',
        'daily_fee_max' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    /**
     * Get the category display name
     */
    public function getCategoryDisplayAttribute()
    {
        return match($this->category) {
            'category-a' => 'Category A - Individual & Small Business NOC',
            'category-b' => 'Category B - Corporate & Large Business NOC',
            'category-c' => 'Category C - International Trade NOC',
            'category-d' => 'Category D - Investment & Financial NOC',
            'category-e' => 'Category E - Special Projects NOC',
            default => $this->category
        };
    }

    /**
     * Get the status color for display
     */
    public function getStatusColorAttribute()
    {
        return $this->is_active ? 'green' : 'red';
    }

    /**
     * Scope for active agents
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for category filtering
     */
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category);
    }
}
