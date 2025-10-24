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

}
