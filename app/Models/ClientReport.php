<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientReport extends Model
{
    protected $fillable = [
        'unique_id',
        'file_no',
        'acknowledgement_no',
        'prepared_by',
        'full_name',
        'father_husband_name',
        'date_of_birth',
        'contact_number',
        'email_id',
        'permanent_address',
        'pan_number',
        'aadhar_number',
        'passport_number',
        'application_type',
        'submission_date',
        'reference_application_no',
        'nature_of_work',
        'verification_level',
        'kyc_compliance_notes',
        'bank_verification_notes',
        'departmental_approval_notes',
        'noc_draft_notes',
        'noc_issuance_notes',
        'information_grant_notes',
        'followup_closure_notes',
        'fund_type',
        'amount',
        'currency',
        'purpose_of_funds',
        'noc_type',
        'noc_reference_no',
        'noc_deed_no',
        'conditions_on_noc',
        'beneficiary_bank_name',
        'ifsc_code',
        'swift_code',
        'bank_account_number',
        'bank_email',
        'account_type',
        'origin_country',
        'sender_name',
        'sender_swift_code',
        'transaction_reference',
        'type_of_work',
        'hsn_code',
        'broker_agent_name',
        'banking_partner',
        'total_amount',
        'payment_book_status',
        'nfra_application_status',
        'nfra_approval_status',
        'kyc_compliance_status',
        'bank_verification_status',
        'departmental_approval_status',
        'noc_draft_status',
        'noc_issuance_status',
        'information_grant_status',
        'followup_closure_status',
        'technical_team_approval',
        'legal_compliance_approval',
        'final_authoriser_approval',
        'general_notes',
        'officer_remarks',
        'status',
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'submission_date' => 'date',
        'amount' => 'decimal:2',
        'total_amount' => 'decimal:2',
    ];

    /**
     * Generate unique ID for new reports
     */
    public static function generateUniqueId()
    {
        $prefix = 'IIES-' . date('Y');
        $lastReport = self::where('unique_id', 'like', $prefix . '%')
            ->orderBy('id', 'desc')
            ->first();

        if ($lastReport) {
            $lastNumber = (int) substr($lastReport->unique_id, -4);
            $newNumber = str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        } else {
            $newNumber = '0001';
        }

        return $prefix . '-' . $newNumber;
    }

    /**
     * Get status badge color
     */
    public function getStatusColorAttribute()
    {
        return match ($this->status) {
            'draft' => 'secondary',
            'in_progress' => 'primary',
            'completed' => 'success',
            'on_hold' => 'warning',
            'rejected' => 'danger',
            default => 'secondary',
        };
    }
}
