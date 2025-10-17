<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HireAgentRequest extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'organization',
        'agent_category',
        'preferred_agent',
        'service_description',
        'budget',
        'timeline',
        'status',
        'admin_notes',
        'assigned_agent',
        'assigned_at',
        'completed_at',
        'reference_id',
    ];

    protected $casts = [
        'budget' => 'decimal:2',
        'assigned_at' => 'datetime',
        'completed_at' => 'datetime',
    ];

    /**
     * Generate a unique reference ID
     */
    public static function generateReferenceId()
    {
        do {
            $referenceId = 'HAR-' . date('Y') . '-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
        } while (self::where('reference_id', $referenceId)->exists());

        return $referenceId;
    }

    /**
     * Get the status color for display
     */
    public function getStatusColorAttribute()
    {
        return match($this->status) {
            'new' => 'red',
            'in_progress' => 'blue',
            'assigned' => 'green',
            'completed' => 'green',
            'cancelled' => 'gray',
            default => 'gray'
        };
    }

    /**
     * Get the agent category display name
     */
    public function getAgentCategoryDisplayAttribute()
    {
        return match($this->agent_category) {
            'category-a' => 'Category A - Individual & Small Business NOC',
            'category-b' => 'Category B - Corporate & Large Business NOC',
            'category-c' => 'Category C - International Trade NOC',
            'category-d' => 'Category D - Investment & Financial NOC',
            'category-e' => 'Category E - Special Projects NOC',
            default => $this->agent_category
        };
    }

    /**
     * Get the timeline display name
     */
    public function getTimelineDisplayAttribute()
    {
        return match($this->timeline) {
            'urgent' => 'Urgent (Within 1 week)',
            'standard' => 'Standard (2-4 weeks)',
            'flexible' => 'Flexible (1-2 months)',
            default => $this->timeline
        };
    }

    /**
     * Mark request as assigned
     */
    public function markAsAssigned($agentName)
    {
        $this->update([
            'status' => 'assigned',
            'assigned_agent' => $agentName,
            'assigned_at' => now(),
        ]);
    }

    /**
     * Mark request as completed
     */
    public function markAsCompleted()
    {
        $this->update([
            'status' => 'completed',
            'completed_at' => now(),
        ]);
    }
}
