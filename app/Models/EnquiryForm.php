<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnquiryForm extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'address',
        'organization',
        'designation',
        'enquiry_type',
        'enquiry_subject',
        'enquiry_description',
        'priority',
        'reference_number',
        'documents',
        'email_updates',
        'sms_updates',
        'status',
        'admin_notes',
        'resolved_at',
        'reference_id',
    ];

    protected $casts = [
        'documents' => 'array',
        'email_updates' => 'boolean',
        'sms_updates' => 'boolean',
        'resolved_at' => 'datetime',
    ];

    /**
     * Generate a unique reference ID
     */
    public static function generateReferenceId()
    {
        do {
            $referenceId = 'ENQ-' . date('Y') . '-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
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
            'resolved' => 'green',
            'closed' => 'gray',
            default => 'gray'
        };
    }

    /**
     * Get the priority color for display
     */
    public function getPriorityColorAttribute()
    {
        return match($this->priority) {
            'normal' => 'gray',
            'high' => 'orange',
            'urgent' => 'red',
            default => 'gray'
        };
    }

    /**
     * Get the enquiry type display name
     */
    public function getEnquiryTypeDisplayAttribute()
    {
        return match($this->enquiry_type) {
            'noc' => 'No Objection Certificate (NOC)',
            'agent' => 'Support Agent Related',
            'procedure' => 'Procedure & Guidelines',
            'fee' => 'Fee Structure',
            'technical' => 'Technical Issue',
            'general' => 'General Information',
            'complaint' => 'Complaint',
            'other' => 'Other',
            default => $this->enquiry_type
        };
    }

    /**
     * Mark enquiry as resolved
     */
    public function markAsResolved()
    {
        $this->update([
            'status' => 'resolved',
            'resolved_at' => now(),
        ]);
    }
}
