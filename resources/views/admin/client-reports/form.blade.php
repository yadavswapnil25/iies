<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2 class="card-title" style="margin: 0;">Client Work Progress Report</h2>
        <img src="/data_entry.pdf" alt="IIES Logo" style="height: 60px;" onerror="this.style.display='none'">
    </div>

    <!-- Section 1: File Information -->
    <div class="form-section">
        <h3 class="section-title">1) File Information</h3>
        <div class="form-grid">
            <div class="form-group">
                <label for="unique_id" class="form-label">Unique ID <span class="required">*</span></label>
                <input 
                    type="text" 
                    id="unique_id" 
                    name="unique_id" 
                    class="form-input @error('unique_id') error @enderror" 
                    value="{{ old('unique_id', isset($clientReport) && $clientReport->exists ? $clientReport->unique_id : ($uniqueId ?? '')) }}" 
                    required
                    {{ isset($clientReport) && $clientReport->exists ? 'readonly' : '' }}
                >
                @error('unique_id')<span class="error-message">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="file_no" class="form-label">File No.</label>
                <input 
                    type="text" 
                    id="file_no" 
                    name="file_no" 
                    class="form-input" 
                    value="{{ old('file_no', isset($clientReport) ? $clientReport->file_no : '') }}"
                >
            </div>

            <div class="form-group">
                <label for="acknowledgement_no" class="form-label">Acknowledgement No.</label>
                <input 
                    type="text" 
                    id="acknowledgement_no" 
                    name="acknowledgement_no" 
                    class="form-input" 
                    value="{{ old('acknowledgement_no', isset($clientReport) ? $clientReport->acknowledgement_no : '') }}"
                >
            </div>

            <div class="form-group">
                <label for="prepared_by" class="form-label">Prepared By (Officer / Department)</label>
                <input 
                    type="text" 
                    id="prepared_by" 
                    name="prepared_by" 
                    class="form-input" 
                    value="{{ old('prepared_by', isset($clientReport) ? $clientReport->prepared_by : auth()->user()->name) }}"
                >
            </div>
        </div>
    </div>

    <!-- Section 2: Client Information -->
    <div class="form-section">
        <h3 class="section-title">2) Client Information</h3>
        <div class="form-grid">
            <div class="form-group full-width">
                <label for="full_name" class="form-label">Full Name (First + Last) <span class="required">*</span></label>
                <input 
                    type="text" 
                    id="full_name" 
                    name="full_name" 
                    class="form-input @error('full_name') error @enderror" 
                    value="{{ old('full_name', isset($clientReport) ? $clientReport->full_name : '') }}" 
                    required
                >
                @error('full_name')<span class="error-message">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="father_husband_name" class="form-label">Father / Husband Name</label>
                <input 
                    type="text" 
                    id="father_husband_name" 
                    name="father_husband_name" 
                    class="form-input" 
                    value="{{ old('father_husband_name', isset($clientReport) ? $clientReport->father_husband_name : '') }}"
                >
            </div>

            <div class="form-group">
                <label for="date_of_birth" class="form-label">Date of Birth</label>
                <input 
                    type="date" 
                    id="date_of_birth" 
                    name="date_of_birth" 
                    class="form-input" 
                    value="{{ old('date_of_birth', isset($clientReport) && $clientReport->date_of_birth ? $clientReport->date_of_birth->format('Y-m-d') : '') }}"
                >
            </div>
        </div>
    </div>

    <!-- Section 3: Fund & NOC Details -->
    <div class="form-section">
        <h3 class="section-title">4) Fund & NOC Details</h3>
        <div class="form-grid">
            <div class="form-group">
                <label for="fund_type" class="form-label">Fund Type</label>
                <input 
                    type="text" 
                    id="fund_type" 
                    name="fund_type" 
                    class="form-input" 
                    value="{{ old('fund_type', $clientReport->fund_type ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="amount" class="form-label">Amount</label>
                <input 
                    type="number" 
                    step="0.01" 
                    id="amount" 
                    name="amount" 
                    class="form-input" 
                    value="{{ old('amount', $clientReport->amount ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="currency" class="form-label">Currency</label>
                <select id="currency" name="currency" class="form-input">
                    <option value="">Select Currency</option>
                    <option value="USD" {{ old('currency', $clientReport->currency ?? '') == 'USD' ? 'selected' : '' }}>USD</option>
                    <option value="EUR" {{ old('currency', $clientReport->currency ?? '') == 'EUR' ? 'selected' : '' }}>EUR</option>
                    <option value="GBP" {{ old('currency', $clientReport->currency ?? '') == 'GBP' ? 'selected' : '' }}>GBP</option>
                    <option value="INR" {{ old('currency', $clientReport->currency ?? '') == 'INR' ? 'selected' : '' }}>INR</option>
                    <option value="JPY" {{ old('currency', $clientReport->currency ?? '') == 'JPY' ? 'selected' : '' }}>JPY</option>
                    <option value="AUD" {{ old('currency', $clientReport->currency ?? '') == 'AUD' ? 'selected' : '' }}>AUD</option>
                </select>
            </div>

            <div class="form-group full-width">
                <label for="purpose_of_funds" class="form-label">Purpose of Funds</label>
                <textarea 
                    id="purpose_of_funds" 
                    name="purpose_of_funds" 
                    class="form-input" 
                    rows="2"
                >{{ old('purpose_of_funds', $clientReport->purpose_of_funds ?? '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="noc_type" class="form-label">NOC Type</label>
                <input 
                    type="text" 
                    id="noc_type" 
                    name="noc_type" 
                    class="form-input" 
                    value="{{ old('noc_type', $clientReport->noc_type ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="noc_reference_no" class="form-label">NOC Reference No.</label>
                <input 
                    type="text" 
                    id="noc_reference_no" 
                    name="noc_reference_no" 
                    class="form-input" 
                    value="{{ old('noc_reference_no', $clientReport->noc_reference_no ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="noc_deed_no" class="form-label">NOC Deed No.</label>
                <input 
                    type="text" 
                    id="noc_deed_no" 
                    name="noc_deed_no" 
                    class="form-input" 
                    value="{{ old('noc_deed_no', $clientReport->noc_deed_no ?? '') }}"
                >
            </div>

            <div class="form-group full-width">
                <label for="conditions_on_noc" class="form-label">Conditions on NOC</label>
                <textarea 
                    id="conditions_on_noc" 
                    name="conditions_on_noc" 
                    class="form-input" 
                    rows="2"
                >{{ old('conditions_on_noc', $clientReport->conditions_on_noc ?? '') }}</textarea>
            </div>
        </div>
    </div>

    <!-- Section 4: Beneficiary Bank & Payment Details -->
    <div class="form-section">
        <h3 class="section-title">5) Beneficiary Bank & Payment Details</h3>
        <div class="form-grid">
            <div class="form-group full-width">
                <label for="beneficiary_bank_name" class="form-label">Beneficiary Bank Name</label>
                <input 
                    type="text" 
                    id="beneficiary_bank_name" 
                    name="beneficiary_bank_name" 
                    class="form-input" 
                    value="{{ old('beneficiary_bank_name', $clientReport->beneficiary_bank_name ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="ifsc_code" class="form-label">IFSC Code</label>
                <input 
                    type="text" 
                    id="ifsc_code" 
                    name="ifsc_code" 
                    class="form-input" 
                    value="{{ old('ifsc_code', $clientReport->ifsc_code ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="swift_code" class="form-label">SWIFT Code</label>
                <input 
                    type="text" 
                    id="swift_code" 
                    name="swift_code" 
                    class="form-input" 
                    value="{{ old('swift_code', $clientReport->swift_code ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="bank_account_number" class="form-label">Bank Account Number</label>
                <input 
                    type="text" 
                    id="bank_account_number" 
                    name="bank_account_number" 
                    class="form-input" 
                    value="{{ old('bank_account_number', $clientReport->bank_account_number ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="bank_email" class="form-label">Bank Email ID</label>
                <input 
                    type="email" 
                    id="bank_email" 
                    name="bank_email" 
                    class="form-input" 
                    value="{{ old('bank_email', $clientReport->bank_email ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="account_type" class="form-label">Account Type</label>
                <select id="account_type" name="account_type" class="form-input">
                    <option value="">Select Type</option>
                    <option value="Savings" {{ old('account_type', $clientReport->account_type ?? '') == 'Savings' ? 'selected' : '' }}>Savings</option>
                    <option value="Current" {{ old('account_type', $clientReport->account_type ?? '') == 'Current' ? 'selected' : '' }}>Current</option>
                    <option value="NRE" {{ old('account_type', $clientReport->account_type ?? '') == 'NRE' ? 'selected' : '' }}>NRE</option>
                    <option value="NRO" {{ old('account_type', $clientReport->account_type ?? '') == 'NRO' ? 'selected' : '' }}>NRO</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Section 5: Origin/Sender Details -->
    <div class="form-section">
        <h3 class="section-title">6) Origin/Sender Details</h3>
        <div class="form-grid">
            <div class="form-group">
                <label for="origin_country" class="form-label">Origin Country</label>
                <input 
                    type="text" 
                    id="origin_country" 
                    name="origin_country" 
                    class="form-input" 
                    value="{{ old('origin_country', $clientReport->origin_country ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="sender_name" class="form-label">Sender Name / Institution</label>
                <input 
                    type="text" 
                    id="sender_name" 
                    name="sender_name" 
                    class="form-input" 
                    value="{{ old('sender_name', $clientReport->sender_name ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="sender_swift_code" class="form-label">SWIFT Code / BIC</label>
                <input 
                    type="text" 
                    id="sender_swift_code" 
                    name="sender_swift_code" 
                    class="form-input" 
                    value="{{ old('sender_swift_code', $clientReport->sender_swift_code ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="transaction_reference" class="form-label">Transaction Reference / Transfer Trace</label>
                <input 
                    type="text" 
                    id="transaction_reference" 
                    name="transaction_reference" 
                    class="form-input" 
                    value="{{ old('transaction_reference', $clientReport->transaction_reference ?? '') }}"
                >
            </div>
        </div>
    </div>

    <!-- Section 6: Work Information -->
    <div class="form-section">
        <h3 class="section-title">7) Work Information of Client</h3>
        <div class="form-grid">
            <div class="form-group">
                <label for="type_of_work" class="form-label">Type of Work</label>
                <input 
                    type="text" 
                    id="type_of_work" 
                    name="type_of_work" 
                    class="form-input" 
                    value="{{ old('type_of_work', $clientReport->type_of_work ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="hsn_code" class="form-label">HSN Code</label>
                <input 
                    type="text" 
                    id="hsn_code" 
                    name="hsn_code" 
                    class="form-input" 
                    value="{{ old('hsn_code', $clientReport->hsn_code ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="broker_agent_name" class="form-label">Broker/Agent's Name</label>
                <input 
                    type="text" 
                    id="broker_agent_name" 
                    name="broker_agent_name" 
                    class="form-input" 
                    value="{{ old('broker_agent_name', $clientReport->broker_agent_name ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="banking_partner" class="form-label">Banking Partner</label>
                <input 
                    type="text" 
                    id="banking_partner" 
                    name="banking_partner" 
                    class="form-input" 
                    value="{{ old('banking_partner', $clientReport->banking_partner ?? '') }}"
                >
            </div>

            <div class="form-group">
                <label for="total_amount" class="form-label">Total Amount</label>
                <input 
                    type="number" 
                    step="0.01" 
                    id="total_amount" 
                    name="total_amount" 
                    class="form-input" 
                    value="{{ old('total_amount', $clientReport->total_amount ?? '') }}"
                >
            </div>
        </div>
    </div>

    <!-- Section 7: File Processing Status -->
    <div class="form-section">
        <h3 class="section-title">8) File Processing / File Movement</h3>
        <div class="form-grid">
            <div class="form-group">
                <label for="payment_book_status" class="form-label">01 - Payment Book</label>
                <select id="payment_book_status" name="payment_book_status" class="form-input">
                    <option value="pending" {{ old('payment_book_status', $clientReport->payment_book_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ old('payment_book_status', $clientReport->payment_book_status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nfra_application_status" class="form-label">02 - NFRA Application Processing</label>
                <select id="nfra_application_status" name="nfra_application_status" class="form-input">
                    <option value="pending" {{ old('nfra_application_status', $clientReport->nfra_application_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="in_progress" {{ old('nfra_application_status', $clientReport->nfra_application_status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="completed" {{ old('nfra_application_status', $clientReport->nfra_application_status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                </select>
            </div>

            <div class="form-group">
                <label for="nfra_approval_status" class="form-label">03 - NFRA Approval</label>
                <select id="nfra_approval_status" name="nfra_approval_status" class="form-input">
                    <option value="pending" {{ old('nfra_approval_status', $clientReport->nfra_approval_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ old('nfra_approval_status', $clientReport->nfra_approval_status ?? '') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ old('nfra_approval_status', $clientReport->nfra_approval_status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <div class="form-group">
                <label for="kyc_compliance_status" class="form-label">04 - KYC / Compliance Review</label>
                <select id="kyc_compliance_status" name="kyc_compliance_status" class="form-input">
                    <option value="pending" {{ old('kyc_compliance_status', $clientReport->kyc_compliance_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ old('kyc_compliance_status', $clientReport->kyc_compliance_status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="in_progress" {{ old('kyc_compliance_status', $clientReport->kyc_compliance_status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="hold" {{ old('kyc_compliance_status', $clientReport->kyc_compliance_status ?? '') == 'hold' ? 'selected' : '' }}>Hold</option>
                </select>
            </div>

            <div class="form-group">
                <label for="bank_verification_status" class="form-label">05 - Bank Verification</label>
                <select id="bank_verification_status" name="bank_verification_status" class="form-input">
                    <option value="pending" {{ old('bank_verification_status', $clientReport->bank_verification_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="completed" {{ old('bank_verification_status', $clientReport->bank_verification_status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="in_progress" {{ old('bank_verification_status', $clientReport->bank_verification_status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="hold" {{ old('bank_verification_status', $clientReport->bank_verification_status ?? '') == 'hold' ? 'selected' : '' }}>Hold</option>
                </select>
            </div>

            <div class="form-group">
                <label for="departmental_approval_status" class="form-label">06 - Departmental Approval</label>
                <select id="departmental_approval_status" name="departmental_approval_status" class="form-input">
                    <option value="pending" {{ old('departmental_approval_status', $clientReport->departmental_approval_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ old('departmental_approval_status', $clientReport->departmental_approval_status ?? '') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ old('departmental_approval_status', $clientReport->departmental_approval_status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>

            <div class="form-group">
                <label for="noc_draft_status" class="form-label">07 - NOC Draft & Conditions</label>
                <select id="noc_draft_status" name="noc_draft_status" class="form-input">
                    <option value="pending" {{ old('noc_draft_status', $clientReport->noc_draft_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="drafted" {{ old('noc_draft_status', $clientReport->noc_draft_status ?? '') == 'drafted' ? 'selected' : '' }}>Drafted</option>
                    <option value="revised" {{ old('noc_draft_status', $clientReport->noc_draft_status ?? '') == 'revised' ? 'selected' : '' }}>Revised</option>
                </select>
            </div>

            <div class="form-group">
                <label for="noc_issuance_status" class="form-label">08 - NOC Issuance</label>
                <select id="noc_issuance_status" name="noc_issuance_status" class="form-input">
                    <option value="pending" {{ old('noc_issuance_status', $clientReport->noc_issuance_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="issued" {{ old('noc_issuance_status', $clientReport->noc_issuance_status ?? '') == 'issued' ? 'selected' : '' }}>Issued</option>
                    <option value="conditional" {{ old('noc_issuance_status', $clientReport->noc_issuance_status ?? '') == 'conditional' ? 'selected' : '' }}>Conditional</option>
                    <option value="not_issued" {{ old('noc_issuance_status', $clientReport->noc_issuance_status ?? '') == 'not_issued' ? 'selected' : '' }}>Not Issued</option>
                </select>
            </div>

            <div class="form-group">
                <label for="information_grant_status" class="form-label">09 - Information Grant</label>
                <select id="information_grant_status" name="information_grant_status" class="form-input">
                    <option value="pending" {{ old('information_grant_status', $clientReport->information_grant_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="granted" {{ old('information_grant_status', $clientReport->information_grant_status ?? '') == 'granted' ? 'selected' : '' }}>Granted</option>
                </select>
            </div>

            <div class="form-group">
                <label for="followup_closure_status" class="form-label">10 - Follow-up / Closure</label>
                <select id="followup_closure_status" name="followup_closure_status" class="form-input">
                    <option value="pending" {{ old('followup_closure_status', $clientReport->followup_closure_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="closed" {{ old('followup_closure_status', $clientReport->followup_closure_status ?? '') == 'closed' ? 'selected' : '' }}>Closed</option>
                    <option value="followup_required" {{ old('followup_closure_status', $clientReport->followup_closure_status ?? '') == 'followup_required' ? 'selected' : '' }}>Follow-up Required</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Section 8: Approval & Signature -->
    <div class="form-section">
        <h3 class="section-title">14) Approval & Signature</h3>
        <div class="form-grid">
            <div class="form-group">
                <label for="technical_team_approval" class="form-label">Technical Team</label>
                <input 
                    type="text" 
                    id="technical_team_approval" 
                    name="technical_team_approval" 
                    class="form-input" 
                    value="{{ old('technical_team_approval', $clientReport->technical_team_approval ?? '') }}"
                    placeholder="Approver name or status"
                >
            </div>

            <div class="form-group">
                <label for="legal_compliance_approval" class="form-label">Legal Compliance Team</label>
                <input 
                    type="text" 
                    id="legal_compliance_approval" 
                    name="legal_compliance_approval" 
                    class="form-input" 
                    value="{{ old('legal_compliance_approval', $clientReport->legal_compliance_approval ?? '') }}"
                    placeholder="Approver name or status"
                >
            </div>

            <div class="form-group">
                <label for="final_authoriser_approval" class="form-label">Final Authoriser</label>
                <input 
                    type="text" 
                    id="final_authoriser_approval" 
                    name="final_authoriser_approval" 
                    class="form-input" 
                    value="{{ old('final_authoriser_approval', $clientReport->final_authoriser_approval ?? '') }}"
                    placeholder="Approver name or status"
                >
            </div>
        </div>
    </div>

    <!-- Section 9: General Notes & Remarks -->
    <div class="form-section">
        <h3 class="section-title">15) General Notes & Officer Remarks</h3>
        <div class="form-grid">
            <div class="form-group full-width">
                <label for="general_notes" class="form-label">General Notes</label>
                <textarea 
                    id="general_notes" 
                    name="general_notes" 
                    class="form-input" 
                    rows="3"
                    placeholder="Group applications may require additional time (1-2 months) for review when applicable. Sensitive information should only be shared with authorised personnel."
                >{{ old('general_notes', $clientReport->general_notes ?? '') }}</textarea>
            </div>

            <div class="form-group full-width">
                <label for="officer_remarks" class="form-label">Officer Remarks</label>
                <textarea 
                    id="officer_remarks" 
                    name="officer_remarks" 
                    class="form-input" 
                    rows="3"
                    placeholder="Officer to provide concise remarks about the particular stages, missing documents, or any additional conditions required."
                >{{ old('officer_remarks', $clientReport->officer_remarks ?? '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="status" class="form-label">Overall Status</label>
                <select id="status" name="status" class="form-input">
                    <option value="draft" {{ old('status', $clientReport->status ?? 'draft') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="in_progress" {{ old('status', $clientReport->status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="completed" {{ old('status', $clientReport->status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="on_hold" {{ old('status', $clientReport->status ?? '') == 'on_hold' ? 'selected' : '' }}>On Hold</option>
                    <option value="rejected" {{ old('status', $clientReport->status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Form Actions -->
    <div style="display: flex; gap: 15px; margin-top: 30px; padding-top: 20px; border-top: 2px solid #e5e7eb;">
        <button type="submit" class="btn btn-primary" style="padding: 12px 30px;">
            {{ isset($clientReport) && $clientReport->exists ? 'Update Report' : 'Create Report' }}
        </button>
        <a href="{{ route('admin.client-reports.index') }}" class="btn btn-secondary" style="padding: 12px 30px;">Cancel</a>
    </div>
</div>

@push('styles')
<style>
    .form-section {
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid #e5e7eb;
    }
    .form-section:last-of-type {
        border-bottom: none;
    }
    .section-title {
        font-size: 18px;
        font-weight: 600;
        color: #1f2937;
        margin-bottom: 20px;
        padding-bottom: 10px;
        border-bottom: 2px solid #4f46e5;
    }
    .form-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
    }
    .form-group {
        display: flex;
        flex-direction: column;
    }
    .form-group.full-width {
        grid-column: 1 / -1;
    }
    .form-label {
        display: block;
        margin-bottom: 8px;
        font-weight: 500;
        color: #374151;
        font-size: 14px;
    }
    .form-input {
        width: 100%;
        padding: 10px 12px;
        border: 1px solid #d1d5db;
        border-radius: 6px;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    .form-input:focus {
        outline: none;
        border-color: #4f46e5;
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
    }
    .form-input.error {
        border-color: #ef4444;
    }
    .error-message {
        color: #ef4444;
        font-size: 13px;
        margin-top: 6px;
        display: block;
    }
    .required {
        color: #ef4444;
    }
    select.form-input {
        cursor: pointer;
    }
    textarea.form-input {
        resize: vertical;
        font-family: inherit;
    }
</style>
@endpush

