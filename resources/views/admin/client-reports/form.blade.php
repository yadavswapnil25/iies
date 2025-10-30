<div class="card">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px;">
        <h2 class="card-title" style="margin: 0;">NOC Progress Report</h2>
        <img src="/data_entry.pdf" alt="IIES Logo" style="height: 60px;" onerror="this.style.display='none'">
    </div>
    <div class="brand" aria-label="Ministry of Finance" style="display: flex; flex-direction: column; align-items: center; justify-content: center;">
    <img src="/uploads/main-logo.jpg" alt="Emblem / Logo" onerror="this.style.background='#eee'" width="150px" height="150px" style="margin-top: 20px;">
      
    <div class="titles">
            <h1>
              भारतीय अंतर्राष्ट्रीय आर्थिक सेवा<br><span>Indian International Economic Service
              </span>
            </h1>
            <p class="hindi-text">वित्त मंत्रालय, भारत सरकार</p>
            <p class="english-text">Ministry of Finance, Government of India</p>
          </div>
        </div>
        <br>
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
                    placeholder="Auto-generated or enter manually">
                @error('unique_id')<span class="error-message">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="file_no" class="form-label">File No.</label>
                <input
                    type="text"
                    id="file_no"
                    name="file_no"
                    class="form-input"
                    value="{{ old('file_no', isset($clientReport) ? $clientReport->file_no : '') }}">
            </div>

            <div class="form-group">
                <label for="acknowledgement_no" class="form-label">Acknowledgement No.</label>
                <input
                    type="text"
                    id="acknowledgement_no"
                    name="acknowledgement_no"
                    class="form-input"
                    value="{{ old('acknowledgement_no', isset($clientReport) ? $clientReport->acknowledgement_no : '') }}">
            </div>

            <div class="form-group">
                <label for="prepared_by" class="form-label">Prepared By (Officer / Department)</label>
                <input
                    type="text"
                    id="prepared_by"
                    name="prepared_by"
                    class="form-input"
                    value="{{ old('prepared_by', isset($clientReport) ? $clientReport->prepared_by : auth()->user()->name) }}">
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
                    required>
                @error('full_name')<span class="error-message">{{ $message }}</span>@enderror
            </div>

            <div class="form-group">
                <label for="father_husband_name" class="form-label">Father / Husband Name</label>
                <input
                    type="text"
                    id="father_husband_name"
                    name="father_husband_name"
                    class="form-input"
                    value="{{ old('father_husband_name', isset($clientReport) ? $clientReport->father_husband_name : '') }}">
            </div>

            <div class="form-group">
                <label for="date_of_birth" class="form-label">Date of Birth</label>
                <input
                    type="date"
                    id="date_of_birth"
                    name="date_of_birth"
                    class="form-input"
                    value="{{ old('date_of_birth', isset($clientReport) && $clientReport->date_of_birth ? $clientReport->date_of_birth->format('Y-m-d') : '') }}">
            </div>

            <div class="form-group">
                <label for="contact_number" class="form-label">Contact Number</label>
                <input
                    type="tel"
                    id="contact_number"
                    name="contact_number"
                    class="form-input"
                    value="{{ old('contact_number', isset($clientReport) ? $clientReport->contact_number : '') }}">
            </div>

            <div class="form-group">
                <label for="email_id" class="form-label">Email Id</label>
                <input
                    type="email"
                    id="email_id"
                    name="email_id"
                    class="form-input"
                    value="{{ old('email_id', isset($clientReport) ? $clientReport->email_id : '') }}">
            </div>

            <div class="form-group full-width">
                <label for="permanent_address" class="form-label">Permanent Address</label>
                <textarea
                    id="permanent_address"
                    name="permanent_address"
                    class="form-input"
                    rows="3">{{ old('permanent_address', isset($clientReport) ? $clientReport->permanent_address : '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="pan_number" class="form-label">PAN Number</label>
                <input
                    type="text"
                    id="pan_number"
                    name="pan_number"
                    class="form-input"
                    value="{{ old('pan_number', isset($clientReport) ? $clientReport->pan_number : '') }}"
                    placeholder="ABCDE1234F">
            </div>

            <div class="form-group">
                <label for="aadhar_number" class="form-label">Aadhar Number</label>
                <input
                    type="text"
                    id="aadhar_number"
                    name="aadhar_number"
                    class="form-input"
                    value="{{ old('aadhar_number', isset($clientReport) ? $clientReport->aadhar_number : '') }}"
                    placeholder="1234 5678 9012">
            </div>

            <div class="form-group">
                <label for="passport_number" class="form-label">Passport Number</label>
                <input
                    type="text"
                    id="passport_number"
                    name="passport_number"
                    class="form-input"
                    value="{{ old('passport_number', isset($clientReport) ? $clientReport->passport_number : '') }}">
            </div>
        </div>
    </div>

    <!-- Section 3: Application & Work Details -->
    <div class="form-section">
        <h3 class="section-title">3) Application & Work Details</h3>
        <div class="form-grid">
            <div class="form-group">
                <label for="application_type" class="form-label">Application Type / Service</label>
                <select id="application_type" name="application_type" class="form-input">
                    <option value="">Select Application Type</option>
                    <option value="noc_application" {{ old('application_type', isset($clientReport) ? $clientReport->application_type : '') == 'noc_application' ? 'selected' : '' }}>NOC Application</option>
                    <option value="fund_verification" {{ old('application_type', isset($clientReport) ? $clientReport->application_type : '') == 'fund_verification' ? 'selected' : '' }}>Fund Verification</option>
                    <option value="compliance_check" {{ old('application_type', isset($clientReport) ? $clientReport->application_type : '') == 'compliance_check' ? 'selected' : '' }}>Compliance Check</option>
                    <option value="document_verification" {{ old('application_type', isset($clientReport) ? $clientReport->application_type : '') == 'document_verification' ? 'selected' : '' }}>Document Verification</option>
                    <option value="other" {{ old('application_type', isset($clientReport) ? $clientReport->application_type : '') == 'other' ? 'selected' : '' }}>Other</option>
                </select>
            </div>

            <div class="form-group">
                <label for="submission_date" class="form-label">Submission Date</label>
                <input
                    type="date"
                    id="submission_date"
                    name="submission_date"
                    class="form-input"
                    value="{{ old('submission_date', isset($clientReport) && $clientReport->submission_date ? $clientReport->submission_date->format('Y-m-d') : '') }}">
            </div>

            <div class="form-group">
                <label for="reference_application_no" class="form-label">Reference / Application No.</label>
                <input
                    type="text"
                    id="reference_application_no"
                    name="reference_application_no"
                    class="form-input"
                    value="{{ old('reference_application_no', isset($clientReport) ? $clientReport->reference_application_no : '') }}">
            </div>

            <div class="form-group full-width">
                <label for="nature_of_work" class="form-label">Nature of Work (Description)</label>
                <textarea
                    id="nature_of_work"
                    name="nature_of_work"
                    class="form-input"
                    rows="3"
                    placeholder="Describe the nature of work or service being provided...">{{ old('nature_of_work', isset($clientReport) ? $clientReport->nature_of_work : '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="verification_level" class="form-label">Verification Level</label>
                <select id="verification_level" name="verification_level" class="form-input">
                    <option value="">Select Verification Level</option>
                    <option value="basic" {{ old('verification_level', isset($clientReport) ? $clientReport->verification_level : '') == 'basic' ? 'selected' : '' }}>Basic</option>
                    <option value="standard" {{ old('verification_level', isset($clientReport) ? $clientReport->verification_level : '') == 'standard' ? 'selected' : '' }}>Standard</option>
                    <option value="comprehensive" {{ old('verification_level', isset($clientReport) ? $clientReport->verification_level : '') == 'comprehensive' ? 'selected' : '' }}>Comprehensive</option>
                    <option value="detailed" {{ old('verification_level', isset($clientReport) ? $clientReport->verification_level : '') == 'detailed' ? 'selected' : '' }}>Detailed</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Section 4: Fund & NOC Details -->
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
                    value="{{ old('fund_type', $clientReport->fund_type ?? '') }}">
            </div>

            <div class="form-group">
                <label for="amount" class="form-label">Amount</label>
                <input
                    type="number"
                    step="0.01"
                    id="amount"
                    name="amount"
                    class="form-input"
                    value="{{ old('amount', $clientReport->amount ?? '') }}">
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
                    rows="2">{{ old('purpose_of_funds', $clientReport->purpose_of_funds ?? '') }}</textarea>
            </div>

            <div class="form-group">
                <label for="noc_type" class="form-label">NOC Type</label>
                <input
                    type="text"
                    id="noc_type"
                    name="noc_type"
                    class="form-input"
                    value="{{ old('noc_type', $clientReport->noc_type ?? '') }}">
            </div>

            <div class="form-group">
                <label for="noc_reference_no" class="form-label">NOC Reference No.</label>
                <input
                    type="text"
                    id="noc_reference_no"
                    name="noc_reference_no"
                    class="form-input"
                    value="{{ old('noc_reference_no', $clientReport->noc_reference_no ?? '') }}">
            </div>

            <div class="form-group">
                <label for="noc_deed_no" class="form-label">NOC Deed No.</label>
                <input
                    type="text"
                    id="noc_deed_no"
                    name="noc_deed_no"
                    class="form-input"
                    value="{{ old('noc_deed_no', $clientReport->noc_deed_no ?? '') }}">
            </div>

            <div class="form-group full-width">
                <label for="conditions_on_noc" class="form-label">Conditions on NOC</label>
                <textarea
                    id="conditions_on_noc"
                    name="conditions_on_noc"
                    class="form-input"
                    rows="2">{{ old('conditions_on_noc', $clientReport->conditions_on_noc ?? '') }}</textarea>
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
                    value="{{ old('beneficiary_bank_name', $clientReport->beneficiary_bank_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="ifsc_code" class="form-label">IFSC Code</label>
                <input
                    type="text"
                    id="ifsc_code"
                    name="ifsc_code"
                    class="form-input"
                    value="{{ old('ifsc_code', $clientReport->ifsc_code ?? '') }}">
            </div>

            <div class="form-group">
                <label for="swift_code" class="form-label">SWIFT Code</label>
                <input
                    type="text"
                    id="swift_code"
                    name="swift_code"
                    class="form-input"
                    value="{{ old('swift_code', $clientReport->swift_code ?? '') }}">
            </div>

            <div class="form-group">
                <label for="bank_account_number" class="form-label">Bank Account Number</label>
                <input
                    type="text"
                    id="bank_account_number"
                    name="bank_account_number"
                    class="form-input"
                    value="{{ old('bank_account_number', $clientReport->bank_account_number ?? '') }}">
            </div>

            <div class="form-group">
                <label for="bank_email" class="form-label">Bank Email ID</label>
                <input
                    type="email"
                    id="bank_email"
                    name="bank_email"
                    class="form-input"
                    value="{{ old('bank_email', $clientReport->bank_email ?? '') }}">
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
                    value="{{ old('origin_country', $clientReport->origin_country ?? '') }}">
            </div>

            <div class="form-group">
                <label for="sender_name" class="form-label">Sender Name / Institution</label>
                <input
                    type="text"
                    id="sender_name"
                    name="sender_name"
                    class="form-input"
                    value="{{ old('sender_name', $clientReport->sender_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="sender_swift_code" class="form-label">SWIFT Code / BIC</label>
                <input
                    type="text"
                    id="sender_swift_code"
                    name="sender_swift_code"
                    class="form-input"
                    value="{{ old('sender_swift_code', $clientReport->sender_swift_code ?? '') }}">
            </div>

            <div class="form-group">
                <label for="transaction_reference" class="form-label">Transaction Reference / Transfer Trace</label>
                <input
                    type="text"
                    id="transaction_reference"
                    name="transaction_reference"
                    class="form-input"
                    value="{{ old('transaction_reference', $clientReport->transaction_reference ?? '') }}">
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
                    value="{{ old('type_of_work', $clientReport->type_of_work ?? '') }}">
            </div>

            <div class="form-group">
                <label for="hsn_code" class="form-label">HSN Code</label>
                <input
                    type="text"
                    id="hsn_code"
                    name="hsn_code"
                    class="form-input"
                    value="{{ old('hsn_code', $clientReport->hsn_code ?? '') }}">
            </div>

            <div class="form-group">
                <label for="broker_agent_name" class="form-label">Broker/Agent's Name</label>
                <input
                    type="text"
                    id="broker_agent_name"
                    name="broker_agent_name"
                    class="form-input"
                    value="{{ old('broker_agent_name', $clientReport->broker_agent_name ?? '') }}">
            </div>

            <div class="form-group">
                <label for="banking_partner" class="form-label">Banking Partner</label>
                <input
                    type="text"
                    id="banking_partner"
                    name="banking_partner"
                    class="form-input"
                    value="{{ old('banking_partner', $clientReport->banking_partner ?? '') }}">
            </div>

            <div class="form-group">
                <label for="total_amount" class="form-label">Total Amount</label>
                <input
                    type="number"
                    step="0.01"
                    id="total_amount"
                    name="total_amount"
                    class="form-input"
                    value="{{ old('total_amount', $clientReport->total_amount ?? '') }}">
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
                     <option value="applied" {{ old('payment_book_status', $clientReport->payment_book_status ?? 'applied') == 'applied' ? 'selected' : '' }}>Applied</option>
                     <option value="not_applied" {{ old('payment_book_status', $clientReport->payment_book_status ?? '') == 'not_applied' ? 'selected' : '' }}>Not Applied</option>
                 </select>
                 <input type="text" name="payment_book_notes" class="form-input" style="margin-top: 8px;"
                     value="{{ old('payment_book_notes', $clientReport->payment_book_notes ?? '') }}"
                     placeholder="Notes or reason">
             </div>
             <div class="form-group">
                 <label for="payment_book_status_approval" class="form-label">02 - Payment Book Approval</label>
                 <select id="payment_book_status_approval" name="payment_book_status_approval" class="form-input">
                     <option value="approved" {{ old('payment_book_status_approval', $clientReport->payment_book_status_approval ?? 'approved') == 'approved' ? 'selected' : '' }}>Approved</option>
                     <option value="rejected" {{ old('payment_book_status_approval', $clientReport->payment_book_status_approval ?? 'rejected') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                 </select>
                 <input type="text" name="payment_book_status_approval_notes" class="form-input" style="margin-top: 8px;"
                     value="{{ old('payment_book_status_approval_notes', $clientReport->payment_book_status_approval_notes ?? '') }}"
                     placeholder="Notes or reason">
             </div>

            <div class="form-group">
                <label for="nfra_application_status" class="form-label">03 - NFRA Application Processing</label>
                <select id="nfra_application_status" name="nfra_application_status" class="form-input">
                    <option value="applied" {{ old('nfra_application_status', $clientReport->nfra_application_status ?? 'applied') == 'applied' ? 'selected' : '' }}>Applied</option>
                    <option value="not_applied" {{ old('nfra_application_status', $clientReport->nfra_application_status ?? '') == 'not_applied' ? 'selected' : '' }}>Not Applied</option>
                </select>
                <input type="text" name="nfra_application_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('nfra_application_notes', $clientReport->nfra_application_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>

            <div class="form-group">
                <label for="nfra_approval_status" class="form-label">04 - NFRA Approval</label>
                <select id="nfra_approval_status" name="nfra_approval_status" class="form-input">
                    <option value="approved" {{ old('nfra_approval_status', $clientReport->nfra_approval_status ?? '') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ old('nfra_approval_status', $clientReport->nfra_approval_status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
                <input type="text" name="nfra_approval_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('nfra_approval_notes', $clientReport->nfra_approval_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>

            <div class="form-group">
                <label for="form_28_application_processing" class="form-label">05 -Form 28 Application Processing </label>
                <select id="form_28_application_processing" name="form_28_application_processing" class="form-input">
                    <option value="applied" {{ old('form_28_application_processing', $clientReport->form_28_application_processing ?? 'applied') == 'applied' ? 'selected' : '' }}>Applied</option>
                    <option value="not_applied" {{ old('form_28_application_processing', $clientReport->form_28_application_processing ?? '') == 'not_applied' ? 'selected' : '' }}>Not Applied</option>
                </select>
                <input type="text" name="form_28_application_processing_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('form_28_application_processing_notes', $clientReport->form_28_application_processing_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>

            <div class="form-group">
                <label for="cbdt_approval_status" class="form-label">05A - CBDT Approval</label>
                <select id="cbdt_approval_status" name="cbdt_approval_status" class="form-input">
                    <option value="pending" {{ old('cbdt_approval_status', $clientReport->cbdt_approval_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ old('cbdt_approval_status', $clientReport->cbdt_approval_status ?? '') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ old('cbdt_approval_status', $clientReport->cbdt_approval_status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
                <input type="text" name="cbdt_approval_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('cbdt_approval_notes', $clientReport->cbdt_approval_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>

            <div class="form-group">
                <label for="pfms_approval_status" class="form-label">05B - PFMS Approval</label>
                <select id="pfms_approval_status" name="pfms_approval_status" class="form-input">
                    <option value="approved" {{ old('pfms_approval_status', $clientReport->pfms_approval_status ?? 'approved') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ old('pfms_approval_status', $clientReport->pfms_approval_status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    <option value="pending" {{ old('pfms_approval_status', $clientReport->pfms_approval_status ?? '') == 'pending' ? 'selected' : '' }}>Pending</option>
                </select>
                <input type="text" name="pfms_approval_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('pfms_approval_notes', $clientReport->pfms_approval_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>

            <div class="form-group">
                <label for="security_fee_deposit" class="form-label">05C - Security Fee Deposit</label>
                <select id="security_fee_deposit" name="security_fee_deposit" class="form-input">
                    <option value="paid" {{ old('security_fee_deposit', $clientReport->security_fee_deposit ?? 'paid') == 'paid' ? 'selected' : '' }}>Paid</option>
                    <option value="not_paid" {{ old('security_fee_deposit', $clientReport->security_fee_deposit ?? '') == 'not_paid' ? 'selected' : '' }}>Not Paid</option>
                    <option value="payment_not_received" {{ old('security_fee_deposit', $clientReport->security_fee_deposit ?? '') == 'payment_not_received' ? 'selected' : '' }}>Payment not received</option>
                </select>
                <input type="text" name="security_fee_deposit_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('security_fee_deposit_notes', $clientReport->security_fee_deposit_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>

            <div class="form-group">
                <label for="form_28_approval" class="form-label">06 - FORM 28 Approval </label>
                <select id="form_28_approval" name="form_28_approval" class="form-input">
                    <option value="approved" {{ old('form_28_approval', $clientReport->form_28_approval ?? 'approved') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ old('form_28_approval', $clientReport->form_28_approval ?? 'rejected') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
                <input type="text" name="form_28_approval_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('form_28_approval_notes', $clientReport->form_28_approval_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>

            <div class="form-group">
                <label for="noc_fee" class="form-label">07 - NOC Fee</label>
                <select id="noc_fee" name="noc_fee" class="form-input">
                    <option value="paid" {{ old('noc_fee', $clientReport->noc_fee ?? 'paid') == 'paid' ? 'selected' : '' }}>Paid</option>
                    <option value="not_paid" {{ old('noc_fee', $clientReport->noc_fee ?? '') == 'not_paid' ? 'selected' : '' }}>Not Paid</option>
                    <option value="payment_not_received" {{ old('noc_fee', $clientReport->noc_fee ?? '') == 'payment_not_received' ? 'selected' : '' }}>Payment not received</option>
                </select>
                <input type="text" name="noc_fee_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('noc_fee_notes', $clientReport->noc_fee_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>

            <div class="form-group">
                <label for="form_28b_application_processing" class="form-label">08 - Form 28B Application Processing</label>
                <select id="form_28b_application_processing" name="form_28b_application_processing" class="form-input">
                    <option value="applied" {{ old('form_28b_application_processing', $clientReport->form_28b_application_processing ?? 'applied') == 'applied' ? 'selected' : '' }}>Applied</option>
                    <option value="not_applied" {{ old('form_28b_application_processing', $clientReport->form_28b_application_processing ?? '') == 'not_applied' ? 'selected' : '' }}>Not Applied</option>
                </select>
                <input type="text" name="form_28b_application_processing_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('form_28b_application_processing_notes', $clientReport->form_28b_application_processing_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>

            <div class="form-group">
                <label for="form_28b_approval" class="form-label">09 - Form 28 B Approval </label>
                <select id="form_28b_approval" name="form_28b_approval" class="form-input">
                    <option value="approved " {{ old('form_28b_approval', $clientReport->form_28b_approval ?? 'approved') == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="rejected" {{ old('form_28b_approval', $clientReport->form_28b_approval ?? 'rejected') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
                <input type="text" name="form_28b_approval_notes" class="form-input" style="margin-top: 8px;"
                    value="{{ old('form_28b_approval_notes', $clientReport->form_28b_approval_notes ?? '') }}"
                    placeholder="Notes or reason">
            </div>
        </div>
    </div>

    <!-- Section 8: Progress Tracker -->
    <div class="form-section">
        <h3 class="section-title">9) Progress Tracker</h3>
        <div class="progress-tracker-table">
            <!-- <div class="progress-header">
                <div class="progress-col-no">No.</div>
                <div class="progress-col-stage">Stage</div>
                <div class="progress-col-status">Status</div>
                <div class="progress-col-notes">Notes / Reason</div>
            </div> -->

            <!-- Stage 01: KYC / Compliance Review -->
            <div class="progress-row">
                <div class="progress-col-no">01</div>
                <div class="progress-col-stage">FEMA Application</div>
                <div class="progress-col-status">
                    <select name="fema_application_status" class="form-input">
                    <option value="received" {{ old('fema_application_status', $clientReport->fema_application_status ?? 'received') == 'received' ? 'selected' : '' }}>Received</option>
                    <option value="pending" {{ old('fema_application_status', $clientReport->fema_application_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                    </select>
                </div>
                <div class="progress-col-notes">
                    <input type="text" name="kyc_compliance_notes" class="form-input"
                        value="{{ old('kyc_compliance_notes', $clientReport->kyc_compliance_notes ?? '') }}"
                        placeholder="Notes or reason">
                </div>
            </div>
            <div class="progress-row">
                <div class="progress-col-no">02</div>
                <div class="progress-col-stage">Preliminary Check</div>
                <div class="progress-col-status">
                    <select name="preliminary_check_status" class="form-input">
                    <option value="completed" {{ old('preliminary_check_status', $clientReport->preliminary_check_status ?? 'completed') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="in_progress" {{ old('preliminary_check_status', $clientReport->preliminary_check_status ?? 'in_progress') == 'in_progress' ? 'selected' : '' }}> In Progress</option>
                    <option value="pending_documents" {{ old('preliminary_check_status', $clientReport->preliminary_check_status ?? 'pending_documents') == 'pending_documents' ? 'selected' : '' }}> Pending Documents</option>

                    </select>
                </div>
                <div class="progress-col-notes">
                    <input type="text" name="preliminary_check_status_notes" class="form-input"
                        value="{{ old('preliminary_check_status_notes', $clientReport->preliminary_check_status_notes ?? '') }}"
                        placeholder="Notes or reason">
                </div>
            </div>
            <div class="progress-row">
                <div class="progress-col-no">03</div>
                <div class="progress-col-stage">KYC / Compliance Review</div>
                <div class="progress-col-status">
                    <select name="kyc_compliance_status" class="form-input">
                        <option value="pending" {{ old('kyc_compliance_status', $clientReport->kyc_compliance_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="completed" {{ old('kyc_compliance_status', $clientReport->kyc_compliance_status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="in_progress" {{ old('kyc_compliance_status', $clientReport->kyc_compliance_status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="hold" {{ old('kyc_compliance_status', $clientReport->kyc_compliance_status ?? '') == 'hold' ? 'selected' : '' }}>Hold</option>
                    </select>
                </div>
                <div class="progress-col-notes">
                    <input type="text" name="kyc_compliance_notes" class="form-input"
                        value="{{ old('kyc_compliance_notes', $clientReport->kyc_compliance_notes ?? '') }}"
                        placeholder="Notes or reason">
                </div>
            </div>

            <!-- Stage 02: Bank Verification -->
            <div class="progress-row">
                <div class="progress-col-no">04</div>
                <div class="progress-col-stage">Bank Verification</div>
                <div class="progress-col-status">
                    <select name="bank_verification_status" class="form-input">
                        <option value="pending" {{ old('bank_verification_status', $clientReport->bank_verification_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="completed" {{ old('bank_verification_status', $clientReport->bank_verification_status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="in_progress" {{ old('bank_verification_status', $clientReport->bank_verification_status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="hold" {{ old('bank_verification_status', $clientReport->bank_verification_status ?? '') == 'hold' ? 'selected' : '' }}>Hold</option>
                    </select>
                </div>
                <div class="progress-col-notes">
                    <input type="text" name="bank_verification_notes" class="form-input"
                        value="{{ old('bank_verification_notes', $clientReport->bank_verification_notes ?? '') }}"
                        placeholder="Notes or reason">
                </div>
            </div>

            <!-- Stage 03: Departmental Approval -->
            <div class="progress-row">
                <div class="progress-col-no">05</div>
                <div class="progress-col-stage">Departmental Approval</div>
                <div class="progress-col-status">
                    <select name="departmental_approval_status" class="form-input">
                        <option value="pending" {{ old('departmental_approval_status', $clientReport->departmental_approval_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="approved" {{ old('departmental_approval_status', $clientReport->departmental_approval_status ?? '') == 'approved' ? 'selected' : '' }}>Approved</option>
                        <option value="rejected" {{ old('departmental_approval_status', $clientReport->departmental_approval_status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                    </select>
                </div>
                <div class="progress-col-notes">
                    <input type="text" name="departmental_approval_notes" class="form-input"
                        value="{{ old('departmental_approval_notes', $clientReport->departmental_approval_notes ?? '') }}"
                        placeholder="Notes or reason">
                </div>
            </div>

            <!-- Stage 04: NOC Draft & Conditions -->
            <div class="progress-row">
                <div class="progress-col-no">06</div>
                <div class="progress-col-stage">NOC Draft & Conditions</div>
                <div class="progress-col-status">
                    <select name="noc_draft_status" class="form-input">
                        <option value="pending" {{ old('noc_draft_status', $clientReport->noc_draft_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="drafted" {{ old('noc_draft_status', $clientReport->noc_draft_status ?? '') == 'drafted' ? 'selected' : '' }}>Drafted</option>
                        <option value="revised" {{ old('noc_draft_status', $clientReport->noc_draft_status ?? '') == 'revised' ? 'selected' : '' }}>Revised</option>
                    </select>
                </div>
                <div class="progress-col-notes">
                    <input type="text" name="noc_draft_notes" class="form-input"
                        value="{{ old('noc_draft_notes', $clientReport->noc_draft_notes ?? '') }}"
                        placeholder="Notes or reason">
                </div>
            </div>

            <!-- Stage 05: NOC Issuance -->
            <div class="progress-row">
                <div class="progress-col-no">07</div>
                <div class="progress-col-stage">NOC Issuance</div>
                <div class="progress-col-status">
                    <select name="noc_issuance_status" class="form-input">
                        <option value="pending" {{ old('noc_issuance_status', $clientReport->noc_issuance_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="issued" {{ old('noc_issuance_status', $clientReport->noc_issuance_status ?? '') == 'issued' ? 'selected' : '' }}>Issued</option>
                        <option value="conditional" {{ old('noc_issuance_status', $clientReport->noc_issuance_status ?? '') == 'conditional' ? 'selected' : '' }}>Conditional</option>
                        <option value="not_issued" {{ old('noc_issuance_status', $clientReport->noc_issuance_status ?? '') == 'not_issued' ? 'selected' : '' }}>Not Issued</option>
                    </select>
                </div>
                <div class="progress-col-notes">
                    <input type="text" name="noc_issuance_notes" class="form-input"
                        value="{{ old('noc_issuance_notes', $clientReport->noc_issuance_notes ?? '') }}"
                        placeholder="Notes or reason">
                </div>
            </div>

            <!-- Stage 06: Information Grant -->
            <div class="progress-row">
                <div class="progress-col-no">08</div>
                <div class="progress-col-stage">Information Grant</div>
                <div class="progress-col-status">
                    <select name="information_grant_status" class="form-input">
                        <option value="pending" {{ old('information_grant_status', $clientReport->information_grant_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="granted" {{ old('information_grant_status', $clientReport->information_grant_status ?? '') == 'granted' ? 'selected' : '' }}>Granted</option>
                    </select>
                </div>
                <div class="progress-col-notes">
                    <input type="text" name="information_grant_notes" class="form-input"
                        value="{{ old('information_grant_notes', $clientReport->information_grant_notes ?? '') }}"
                        placeholder="Notes or reason">
                </div>
            </div>

            <!-- Stage 07: Follow-up / Closure -->
            <div class="progress-row">
                <div class="progress-col-no">09</div>
                <div class="progress-col-stage">Follow-up / Closure</div>
                <div class="progress-col-status">
                    <select name="followup_closure_status" class="form-input">
                        <option value="pending" {{ old('followup_closure_status', $clientReport->followup_closure_status ?? 'pending') == 'pending' ? 'selected' : '' }}>Pending</option>
                        <option value="closed" {{ old('followup_closure_status', $clientReport->followup_closure_status ?? '') == 'closed' ? 'selected' : '' }}>Closed</option>
                        <option value="followup_required" {{ old('followup_closure_status', $clientReport->followup_closure_status ?? '') == 'followup_required' ? 'selected' : '' }}>Follow-up Required</option>
                    </select>
                </div>
                <div class="progress-col-notes">
                    <input type="text" name="followup_closure_notes" class="form-input"
                        value="{{ old('followup_closure_notes', $clientReport->followup_closure_notes ?? '') }}"
                        placeholder="Notes or reason">
                </div>
            </div>
        </div>
    </div>

  

    <!-- Section 9: General Notes & Remarks -->
   
    
   

     <!-- Section 10: Status Codes & Definitions -->
     <div class="form-section">
         <h3 class="section-title">10) Status Codes & Definitions</h3>
         <div class="status-codes">
             <ul>
                 <li><strong>Received:</strong> Application has been received and registered.</li>
                 <li><strong>Pending Documents:</strong> Required documents are missing from the applicant.</li>
                 <li><strong>In Progress / Under Review:</strong> Processing is ongoing.</li>
                 <li><strong>Hold:</strong> Process is paused due to policy/technical reasons.</li>
                 <li><strong>Approved:</strong> Necessary approvals obtained (before NOC issuance).</li>
                 <li><strong>NOC Issued:</strong> NOC has been successfully issued.</li>
                 <li><strong>Rejected:</strong> Application invalid or rejected.</li>
                 <li><strong>Closed:</strong> Process completed and closed.</li>
             </ul>
         </div>
     </div>

     <!-- Section 11: Document Checklist -->
     <div class="form-section">
         <h3 class="section-title">11) Document Checklist</h3>
         <div class="document-checklist">
             <ul>
                 <li>Signed Application Form</li>
                 <li>ID Proof (Passport / Aadhaar / PAN)</li>
                 <li>Bank Statement / Transaction Proof</li>
                 <li>Source of Funds Documents</li>
                 <li>Company / Organization Registration (if applicable)</li>
                 <li>KYC / AML Related Documents</li>
                 <li>Any Other Statutory Approvals (if applicable)</li>
             </ul>
         </div>
     </div>

     <!-- Section 12: Risks & Special Conditions -->
     <div class="form-section">
         <h3 class="section-title">12) Risks & Special Conditions</h3>
         <div class="risks-conditions">
             <p>Notes about any regulatory constraints or banking restrictions. If the NOC is conditional upon specific requirements (e.g., escrow arrangement, tax clearance), list those conditions here.</p>
         </div>
     </div>

     <div class="form-section">
         <h3 class="section-title">13)  Officer Remarks</h3>
         <p>(Officer to provide concise remarks about the particular stages, missing documents, or any 
         additional conditions required.)</p>
         <div class="form-section">
        <div class="form-grid">
            <div class="form-group full-width">
                <label for="general_notes" class="form-label">General Notes</label>
                <textarea
                    id="general_notes"
                    name="general_notes"
                    class="form-input"
                    rows="3"
                    placeholder="Group applications may require additional time (1-2 months) for review when applicable. Sensitive information should only be shared with authorised personnel.">{{ old('general_notes', $clientReport->general_notes ?? '') }}</textarea>
            </div>

            <div class="form-group full-width">
                <label for="officer_remarks" class="form-label">Officer Remarks</label>
                <textarea
                    id="officer_remarks"
                    name="officer_remarks"
                    class="form-input"
                    rows="3"
                    placeholder="Officer to provide concise remarks about the particular stages, missing documents, or any additional conditions required.">{{ old('officer_remarks', $clientReport->officer_remarks ?? '') }}</textarea>
            </div>

            <!-- <div class="form-group">
                <label for="status" class="form-label">Overall Status</label>
                <select id="status" name="status" class="form-input">
                    <option value="draft" {{ old('status', $clientReport->status ?? 'draft') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="in_progress" {{ old('status', $clientReport->status ?? '') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="completed" {{ old('status', $clientReport->status ?? '') == 'completed' ? 'selected' : '' }}>Completed</option>
                    <option value="on_hold" {{ old('status', $clientReport->status ?? '') == 'on_hold' ? 'selected' : '' }}>On Hold</option>
                    <option value="rejected" {{ old('status', $clientReport->status ?? '') == 'rejected' ? 'selected' : '' }}>Rejected</option>
                </select>
            </div> -->
        </div>
    </div>
     </div>
       <!-- Section 9: Approval & Signature -->
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
                    placeholder="Approver name or status">
            </div>

            <div class="form-group">
                <label for="legal_compliance_approval" class="form-label">Legal Compliance Team</label>
                <input
                    type="text"
                    id="legal_compliance_approval"
                    name="legal_compliance_approval"
                    class="form-input"
                    value="{{ old('legal_compliance_approval', $clientReport->legal_compliance_approval ?? '') }}"
                    placeholder="Approver name or status">
            </div>

            <div class="form-group">
                <label for="final_authoriser_approval" class="form-label">Final Authoriser</label>
                <input
                    type="text"
                    id="final_authoriser_approval"
                    name="final_authoriser_approval"
                    class="form-input"
                    value="{{ old('final_authoriser_approval', $clientReport->final_authoriser_approval ?? '') }}"
                    placeholder="Approver name or status">
            </div>
        </div>
    </div>
     <div class="form-section">
         <h3 class="section-title">15)   General Notes </h3>
         <p>Group applications may require additional time (1-2 months) for review when applicable. 
         Sensitive information should only be shared with authorised personnel.</p>
     </div>
     <div class="container">
        <p>This progress report has been prepared by the <strong>Indian International Economic Service (IIES)</strong> to reflect
            the current status of a client's application or task. It provides detailed updates from the initial submission
            to the final stage of completion. The purpose of this report is to maintain transparency and ensure that
            every process is completed efficiently within the prescribed timeline.</p>

        <p><strong>Brief Introductory Description:</strong><br>
            This report has been prepared by the <em>Indian International Economic Service (IIES)</em> with the objective
            of presenting the current status of a client's or applicant's work. It includes detailed progress information
            from the receipt of the application to the completion of the process, ensuring transparency and timely
            execution of all tasks.</p>

        <p><strong>Brief Introductory Description:</strong><br>
            This report is prepared by the Indian International Economic Service
            (IIES) to record and present the current status of an applicant/client's work. The report includes the
            client's complete information, the nature of the work, details of the fund for which NOC is sought
            (amount, currency, purpose), the beneficiary bank where funds were received, the origin country of the
            funds, and a step-by-step progress record of the process.</p>
     </div>
     <br>
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

     /* Static Information Sections Styling */
     .status-codes ul,
     .document-checklist ul {
         list-style-type: none;
         padding: 0;
         margin: 0;
     }

     .status-codes li,
     .document-checklist li {
         padding: 8px 0;
         border-bottom: 1px solid #f3f4f6;
         font-size: 14px;
         line-height: 1.5;
     }

     .status-codes li:last-child,
     .document-checklist li:last-child {
         border-bottom: none;
     }

     .status-codes strong {
         color: #374151;
         font-weight: 600;
     }

     .risks-conditions p {
         margin: 0;
         padding: 15px;
         background-color: #f9fafb;
         border: 1px solid #e5e7eb;
         border-radius: 6px;
         font-size: 14px;
         line-height: 1.6;
         color: #374151;
     }
 </style>
 @endpush