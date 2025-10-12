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
            <div style="font-size: 14px; font-weight: 600; color: #4f46e5;">Ministry of Finance, Government of India</div>
        </div>
    </div>

    <!-- File Information -->
    <div class="detail-section">
        <h3 class="detail-section-title">1) File Information</h3>
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

    <!-- Client Information -->
    <div class="detail-section">
        <h3 class="detail-section-title">2) Client Information</h3>
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
        </div>
    </div>

    <!-- Fund & NOC Details -->
    <div class="detail-section">
        <h3 class="detail-section-title">4) Fund & NOC Details</h3>
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
        <h3 class="detail-section-title">5) Beneficiary Bank & Payment Details</h3>
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

    <!-- Origin/Sender Details -->
    <div class="detail-section">
        <h3 class="detail-section-title">6) Origin/Sender Details</h3>
        <div class="detail-grid">
            <div class="detail-item">
                <span class="detail-label">Origin Country</span>
                <span class="detail-value">{{ $clientReport->origin_country ?: 'N/A' }}</span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Sender Name / Institution</span>
                <span class="detail-value">{{ $clientReport->sender_name ?: 'N/A' }}</span>
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

    <!-- Work Information -->
    <div class="detail-section">
        <h3 class="detail-section-title">7) Work Information of Client</h3>
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

