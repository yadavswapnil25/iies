@extends('admin.layouts.app')

@section('title', 'View Client Report - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">Client Report: {{ $clientReport->unique_id }}</h1>
    <div style="display: flex; gap: 10px;">
        <a href="{{ route('admin.client-reports.edit', $clientReport) }}" class="btn btn-primary">Edit Report</a>
        <a href="{{ route('admin.client-reports.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>

<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: start; margin-bottom: 30px;">
        <div>
            <h2 style="font-size: 24px; font-weight: 700; color: #111827; margin-bottom: 10px;">
                {{ $clientReport->full_name }}
            </h2>
            <div style="display: flex; gap: 15px; align-items: center;">
                <span class="badge badge-{{ $clientReport->status_color }}" style="font-size: 14px; padding: 6px 14px;">
                    {{ ucfirst(str_replace('_', ' ', $clientReport->status)) }}
                </span>
                <span style="color: #6b7280; font-size: 14px;">
                    Created: {{ $clientReport->created_at->format('M d, Y') }}
                </span>
                <span style="color: #6b7280; font-size: 14px;">
                    Updated: {{ $clientReport->updated_at->format('M d, Y') }}
                </span>
            </div>
        </div>
        <div style="text-align: right;">
            <div style="font-size: 12px; color: #6b7280; margin-bottom: 4px;">INDIAN INTERNATIONAL ECONOMIC SERVICE</div>
            <div style="font-size: 14px; font-weight: 600; color: #4f46e5;">IIES, Government of India</div>
        </div>
    </div>

 

 

    <!-- File Details -->
    <div class="detail-section">
        <h3 class="detail-section-title">1) File Details</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">Unique ID</span>
                <span class="detail-value">{{ $clientReport->unique_id }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">File No.</span>
                <span class="detail-value">{{ $clientReport->file_no ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Acknowledgement No.</span>
                <span class="detail-value">{{ $clientReport->acknowledgement_no ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Prepared By</span>
                <span class="detail-value">{{ $clientReport->prepared_by ?: 'N/A' }}</span>
            </div>
        </div>
    </div>

    <!-- Personal Details of Applicant -->
    <div class="detail-section">
        <h3 class="detail-section-title">2) Personal Details of Applicant</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">Full Name</span>
                <span class="detail-value">{{ $clientReport->full_name }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Father / Husband Name</span>
                <span class="detail-value">{{ $clientReport->father_husband_name ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Date of Birth</span>
                <span class="detail-value">{{ $clientReport->date_of_birth ? $clientReport->date_of_birth->format('d M, Y') : 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Contact Number</span>
                <span class="detail-value">{{ $clientReport->contact_number ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Email Id</span>
                <span class="detail-value">{{ $clientReport->email_id ?: 'N/A' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">Permanent Address</span>
                <span class="detail-value">{{ $clientReport->permanent_address ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">PAN Number</span>
                <span class="detail-value">{{ $clientReport->pan_number ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Aadhar Number</span>
                <span class="detail-value">{{ $clientReport->aadhar_number ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Passport Number</span>
                <span class="detail-value">{{ $clientReport->passport_number ?: 'N/A' }}</span>
            </div>
        </div>
    </div>
   <!-- Application Type and Work Details -->
   <div class="detail-section">
        <h3 class="detail-section-title">3) Application Type and Work Details</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">Application Type / Service</span>
                <span class="detail-value">{{ $clientReport->application_type ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Submission Date</span>
                <span class="detail-value">{{ $clientReport->submission_date ? $clientReport->submission_date->format('d M, Y') : 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Reference / Application No.</span>
                <span class="detail-value">{{ $clientReport->reference_application_no ?: 'N/A' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">Nature of Work (Description)</span>
                <span class="detail-value">{{ $clientReport->nature_of_work ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Verification Level</span>
                <span class="detail-value">{{ $clientReport->verification_level ?: 'N/A' }}</span>
            </div>
        </div>
    </div>
    <!-- Details of Fund and NOC -->
    <div class="detail-section">
        <h3 class="detail-section-title">4) Details of Fund and NOC</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">Fund Type</span>
                <span class="detail-value">{{ $clientReport->fund_type ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Amount</span>
                <span class="detail-value">{{ $clientReport->currency }} {{ number_format($clientReport->amount ?? 0, 2) }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Currency</span>
                <span class="detail-value">{{ $clientReport->currency ?: 'N/A' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">Purpose of Funds</span>
                <span class="detail-value">{{ $clientReport->purpose_of_funds ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">NOC Type</span>
                <span class="detail-value">{{ $clientReport->noc_type ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">NOC Reference No.</span>
                <span class="detail-value">{{ $clientReport->noc_reference_no ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">NOC Deed No.</span>
                <span class="detail-value">{{ $clientReport->noc_deed_no ?: 'N/A' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">Conditions on NOC</span>
                <span class="detail-value">{{ $clientReport->conditions_on_noc ?: 'N/A' }}</span>
            </div>
        </div>
    </div>

    <!-- Beneficiary Bank Details -->
    <div class="detail-section">
        <h3 class="detail-section-title">5) Details of Beneficiary Bank</h3>
        <div class="detail-grid">
            <div class="detail-item full-width">
                <span class="detail-label">Beneficiary Bank Name</span>
                <span class="detail-value">{{ $clientReport->beneficiary_bank_name ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">IFSC Code</span>
                <span class="detail-value">{{ $clientReport->ifsc_code ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">SWIFT Code</span>
                <span class="detail-value">{{ $clientReport->swift_code ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Bank Account Number</span>
                <span class="detail-value">{{ $clientReport->bank_account_number ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Bank Email</span>
                <span class="detail-value">{{ $clientReport->bank_email ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Account Type</span>
                <span class="detail-value">{{ $clientReport->account_type ?: 'N/A' }}</span>
            </div>
        </div>
    </div>
  <!-- Remitting Bank & Sender Details -->
  <div class="detail-section">
        <h3 class="detail-section-title">6) Remitting Bank & Sender Details</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">Origin Country</span>
                <span class="detail-value">{{ $clientReport->origin_country ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Sender Individual / Institution Name</span>
                <span class="detail-value">{{ $clientReport->sender_name ?: 'N/A' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">Sender Individual / Institution Address</span>
                <span class="detail-value">{{ $clientReport->sender_address ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Remitting Bank Name</span>
                <span class="detail-value">{{ $clientReport->remitting_bank_name ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">SWIFT Code / BIC</span>
                <span class="detail-value">{{ $clientReport->sender_swift_code ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Transaction Reference</span>
                <span class="detail-value">{{ $clientReport->transaction_reference ?: 'N/A' }}</span>
            </div>
        </div>
    </div>
    <!-- 05A - CBDT / 05B - PFMS / 05C - Security Fee Deposit -->
    <!-- <div class="detail-section">
        <h3 class="detail-section-title">5A - CBDT Approval / 5B - PFMS Approval / 5C - Security Fee Deposit</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">CBDT Approval</span>
                <span class="detail-value">{{ $clientReport->cbdt_approval_status ?: 'N/A' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">CBDT Notes</span>
                <span class="detail-value">{{ $clientReport->cbdt_approval_notes ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">PFMS Approval</span>
                <span class="detail-value">{{ $clientReport->pfms_approval_status ?: 'N/A' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">PFMS Notes</span>
                <span class="detail-value">{{ $clientReport->pfms_approval_notes ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Security Fee Deposit</span>
                <span class="detail-value">{{ $clientReport->security_fee_deposit ?: 'N/A' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">Security Fee Notes</span>
                <span class="detail-value">{{ $clientReport->security_fee_deposit_notes ?: 'N/A' }}</span>
            </div>
        </div>
    </div> -->

  

    <!-- Work Information -->
    <div class="detail-section">
        <h3 class="detail-section-title">7) Work Details of Applicant</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">Type of Work</span>
                <span class="detail-value">{{ $clientReport->type_of_work ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">HSN Code</span>
                <span class="detail-value">{{ $clientReport->hsn_code ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Broker/Agent's Name</span>
                <span class="detail-value">{{ $clientReport->broker_agent_name ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Banking Partner</span>
                <span class="detail-value">{{ $clientReport->banking_partner ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Total Amount</span>
                <span class="detail-value">{{ number_format($clientReport->total_amount ?? 0, 2) }}</span>
            </div>
        </div>
    </div>

    <!-- 07A - NOC Fee -->
    <!-- <div class="detail-section">
        <h3 class="detail-section-title">7A) NOC Fee</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">NOC Fee Status</span>
                <span class="detail-value">{{ $clientReport->noc_fee ?: 'N/A' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">NOC Fee Notes</span>
                <span class="detail-value">{{ $clientReport->noc_fee_notes ?: 'N/A' }}</span>
            </div>
        </div>
    </div> -->

    <!-- File Processing Status -->
    <div class="detail-section">
        <h3 class="detail-section-title">8) File Processing / File Movement</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Stage</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>Payment Book</td>
                    <td><span class="status-badge status-{{ $clientReport->payment_book_status }}">{{ ucfirst($clientReport->payment_book_status) }}</span></td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>NFRA Application Processing</td>
                    <td><span class="status-badge status-{{ $clientReport->nfra_application_status }}">{{ ucfirst(str_replace('_', ' ', $clientReport->nfra_application_status)) }}</span></td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>NFRA Approval</td>
                    <td><span class="status-badge status-{{ $clientReport->nfra_approval_status }}">{{ ucfirst($clientReport->nfra_approval_status) }}</span></td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>KYC / Compliance Review</td>
                    <td><span class="status-badge status-{{ $clientReport->kyc_compliance_status }}">{{ ucfirst(str_replace('_', ' ', $clientReport->kyc_compliance_status)) }}</span></td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>Bank Verification</td>
                    <td><span class="status-badge status-{{ $clientReport->bank_verification_status }}">{{ ucfirst(str_replace('_', ' ', $clientReport->bank_verification_status)) }}</span></td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>Departmental Approval</td>
                    <td><span class="status-badge status-{{ $clientReport->departmental_approval_status }}">{{ ucfirst($clientReport->departmental_approval_status) }}</span></td>
                </tr>
                <tr>
                    <td>07</td>
                    <td>NOC Draft & Conditions</td>
                    <td><span class="status-badge status-{{ $clientReport->noc_draft_status }}">{{ ucfirst($clientReport->noc_draft_status) }}</span></td>
                </tr>
                <tr>
                    <td>08</td>
                    <td>NOC Issuance</td>
                    <td><span class="status-badge status-{{ $clientReport->noc_issuance_status }}">{{ ucfirst(str_replace('_', ' ', $clientReport->noc_issuance_status)) }}</span></td>
                </tr>
                <tr>
                    <td>09</td>
                    <td>Information Grant</td>
                    <td><span class="status-badge status-{{ $clientReport->information_grant_status }}">{{ ucfirst($clientReport->information_grant_status) }}</span></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Follow-up / Closure</td>
                    <td><span class="status-badge status-{{ $clientReport->followup_closure_status }}">{{ ucfirst(str_replace('_', ' ', $clientReport->followup_closure_status)) }}</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- Progress Tracker -->
    <div class="detail-section">
         <h3 class="detail-section-title">9) Progress Tracker</h3>
         <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Stage</th>
                    <th>Status</th>
                    <th>Notes</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>01</td>
                    <td>FEMA Application</td>
                    <td>{{ $clientReport->fema_application_status ?: 'N/A' }}</td>
                    <td>{{ $clientReport->fema_application_notes ?: 'N/A' }}</td>
                </tr>
                <tr>
                    <td>02</td>
                    <td>Preliminary Check</td>
                    <td>{{ $clientReport->preliminary_check_status ?: 'N/A' }}</td>
                    <td>{{ $clientReport->preliminary_check_status_notes ?: 'N/A' }}</td>
                </tr>
                <tr>
                    <td>03</td>
                    <td>KYC / Compliance Review</td>
                    <td>{{ $clientReport->kyc_compliance_status ?: 'N/A' }}</td>
                    <td>{{ $clientReport->kyc_compliance_notes ?: 'N/A' }}</td>
                </tr>
                <tr>
                    <td>04</td>
                    <td>Bank Verification</td>
                    <td>{{ $clientReport->bank_verification_status ?: 'N/A' }}</td>
                    <td>{{ $clientReport->bank_verification_notes ?: 'N/A' }}</td>
                </tr>
                <tr>
                    <td>05</td>
                    <td>Departmental Approval</td>
                    <td>{{ $clientReport->departmental_approval_status ?: 'N/A' }}</td>
                    <td>{{ $clientReport->departmental_approval_notes ?: 'N/A' }}</td>
                </tr>
                <tr>
                    <td>06</td>
                    <td>NOC Draft & Conditions</td>
                    <td>{{ $clientReport->noc_draft_status ?: 'N/A' }}</td>
                    <td>{{ $clientReport->noc_draft_notes ?: 'N/A' }}</td>
                </tr>
                <tr>
                    <td>07</td>
                    <td>NOC Issuance</td>
                    <td>{{ $clientReport->noc_issuance_status ?: 'N/A' }}</td>
                    <td>{{ $clientReport->noc_issuance_notes ?: 'N/A' }}</td>
                </tr>
                <tr>
                    <td>08</td>
                    <td>Information Grant</td>
                    <td>{{ $clientReport->information_grant_status ?: 'N/A' }}</td>
                    <td>{{ $clientReport->information_grant_notes ?: 'N/A' }}</td>
                </tr>
                <tr>
                    <td>09</td>
                    <td>Follow-up / Closure</td>
                    <td>{{ $clientReport->followup_closure_status ?: 'N/A' }}</td>
                    <td>{{ $clientReport->followup_closure_notes ?: 'N/A' }}</td>
                </tr>
            </tbody>
         </table>
     </div>
    <!-- Approval & Signature -->
    <div class="detail-section">
        <h3 class="detail-section-title">14) Approval & Signature</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">Technical Team</span>
                <span class="detail-value">{{ $clientReport->technical_team_approval ?: 'Pending' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Legal Compliance Team</span>
                <span class="detail-value">{{ $clientReport->legal_compliance_approval ?: 'Pending' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Final Authoriser</span>
                <span class="detail-value">{{ $clientReport->final_authoriser_approval ?: 'Pending' }}</span>
            </div>
        </div>
    </div>

    <!-- General Notes -->
    <div class="detail-section" style="border-bottom: none;">
        <h3 class="detail-section-title">15) General Notes & Officer Remarks</h3>
        <div class="detail-grid">
            <div class="detail-item full-width">
                <span class="detail-label">General Notes</span>
                <span class="detail-value">{{ $clientReport->general_notes ?: 'No notes available' }}</span>
            </div>
            <div class="detail-item full-width">
                <span class="detail-label">Officer Remarks</span>
                <span class="detail-value">{{ $clientReport->officer_remarks ?: 'No remarks provided' }}</span>
            </div>
        </div>
    </div>

    <!-- Delete Button -->
    <div style="margin-top: 30px; padding-top: 20px; border-top: 2px solid #e5e7eb;">
        <form method="POST" action="{{ route('admin.client-reports.destroy', $clientReport) }}" onsubmit="return confirm('Are you sure you want to delete this report? This action cannot be undone.');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn" style="background: #ef4444; color: white;">Delete Report</button>
        </form>
    </div>
</div>

@push('styles')
<style>
    .detail-section {
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid #e5e7eb;
    }
    .detail-section-title {
        font-size: 18px;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #4f46e5;
    }
    .detail-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }
    .detail-item {
        display: flex;
        flex-direction: column;
        gap: 6px;
    }
    .detail-item.full-width {
        grid-column: 1 / -1;
    }
    .detail-label {
        font-size: 12px;
        font-weight: 600;
        color: #6b7280;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    .detail-value {
        font-size: 15px;
        color: #111827;
        font-weight: 500;
    }
    .status-badge {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
    }
    .status-pending {
        background: #fef3c7;
        color: #92400e;
    }
    .status-completed,
    .status-approved,
    .status-issued,
    .status-granted,
    .status-closed {
        background: #d1fae5;
        color: #065f46;
    }
    .status-in_progress,
    .status-drafted {
        background: #dbeafe;
        color: #1e40af;
    }
    .status-rejected,
    .status-not_issued {
        background: #fee2e2;
        color: #991b1b;
    }
    .status-hold,
    .status-conditional,
    .status-followup_required,
    .status-revised {
        background: #fed7aa;
        color: #9a3412;
    }
    .badge-primary {
        background: #dbeafe;
        color: #1e40af;
    }
    .badge-warning {
        background: #fef3c7;
        color: #92400e;
    }
    .badge-danger {
        background: #fee2e2;
        color: #991b1b;
    }
</style>
@endpush
@endsection

