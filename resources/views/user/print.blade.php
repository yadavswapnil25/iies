<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IIES Client Work Progress Report</title>
    <meta name="description" content="Indian International Economic Service - Client Work Progress Report and Document Management System">
    <meta name="author" content="Lovable">
    <link rel="stylesheet" href="/css/print.css">
</head>
<body>
   
  


    <div class="document-container print-container">
    
        <header class="document-header">
            <img src="/uploads/main-logo.jpg" alt="IIES Logo" class="logo">
            <h1>Indian International Economic Service</h1>
            <h2>भारतीय अंतरााष्ट्रीय आर्थिक सेवा</h2>
            <p class="ministry">Ministry of Finance, Government of India</p>
        </header>

        
        <section class="intro-section">
            <p>
                This progress report has been prepared by the Indian International Economic Service (IIES) 
                to reflect the current status of a client's application or task. It provides detailed updates 
                from the initial submission to the final stage of completion. The purpose of this report is 
                to maintain transparency and ensure that every process is completed efficiently within the 
                prescribed timeline.
            </p>
            
            <div class="intro-box">
                <h3>Brief Introductory Description:</h3>
                <p>
                    This report has been prepared by the <em>Indian International Economic Service (IIES)</em> with the objective of presenting the current status of a client's or applicant's work. It includes detailed progress information from the receipt of the application to the completion of the process, ensuring transparency and timely execution of all tasks.
                </p>
                <h3>Brief Introductory Description:</h3>
                <p>
                    This report is prepared by the Indian International Economic Service (IIES) to record and 
                    present the current status of an applicant/client's work. The report includes the client's 
                    complete information, the nature of the work, details of the fund for which NOC is sought 
                    (amount, currency, purpose), the beneficiary bank where funds were received, the origin 
                    country of the funds, and a step-by-step progress record of the process.
                </p>
            </div>
        </section>

        <!-- Main Title -->
        <h2 class="main-title">Client Work Progress Report</h2>
        <p style="text-align:center; margin: 0 0 10px 0; font-size: 12px;">Application ID: {{ $clientReport->unique_id }}</p>

        <!-- Section 1: File Information -->
        <section class="section">
            <h3 class="section-title">1) File Details</h3>
            <table class="data-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Unique Id</td>
                        <td class="value-cell">{{ $clientReport->unique_id ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">File No.</td>
                        <td class="value-cell">{{ $clientReport->file_no ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Acknowledgement No.</td>
                        <td class="value-cell">{{ $clientReport->acknowledgement_no ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Prepared By (Officer / Department)</td>
                        <td class="value-cell">{{ $clientReport->prepared_by ?: '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <div class="page-break"></div>

        <!-- Section 2: Client Information -->
        <section class="section">
            <h3 class="section-title">2) Personal Details of Applicant</h3>
            <table class="data-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Full Name (First + Last)</td>
                        <td class="value-cell">{{ $clientReport->full_name ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Father / Husband Name</td>
                        <td class="value-cell">{{ $clientReport->father_husband_name ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Date of Birth</td>
                        <td class="value-cell">{{ $clientReport->date_of_birth ? $clientReport->date_of_birth->format('d/m/Y') : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Contact Number</td>
                        <td class="value-cell">{{ $clientReport->contact_number ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Email Id</td>
                        <td class="value-cell">{{ $clientReport->email_id ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Permanent Address</td>
                        <td class="value-cell">{{ $clientReport->permanent_address ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">PAN Number</td>
                        <td class="value-cell">{{ $clientReport->pan_number ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Aadhar Number</td>
                        <td class="value-cell">{{ $clientReport->aadhar_number ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Passport Number</td>
                        <td class="value-cell">{{ $clientReport->passport_number ?: '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Section 3: Application & Work Details -->
        <section class="section">
            <h3 class="section-title">3) Application Type and Work Details</h3>
            <table class="data-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Application Type / Service</td>
                        <td class="value-cell">{{ $clientReport->application_type ? ucfirst(str_replace('_',' ', $clientReport->application_type)) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Submission Date</td>
                        <td class="value-cell">{{ $clientReport->submission_date ? $clientReport->submission_date->format('d/m/Y') : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Reference / Application No.</td>
                        <td class="value-cell">{{ $clientReport->reference_application_no ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Nature of Work (Description)</td>
                        <td class="value-cell">{{ $clientReport->nature_of_work ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Verification Level</td>
                        <td class="value-cell">{{ $clientReport->verification_level ? ucfirst($clientReport->verification_level) : '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <div class="page-break"></div>

        <!-- Section 4: Fund & NOC Details -->
        <section class="section">
            <h3 class="section-title">4) Details of Fund and NOC</h3>
            <table class="data-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Fund Type</td>
                        <td class="value-cell">{{ $clientReport->fund_type ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Amount</td>
                        <td class="value-cell">{{ $clientReport->amount ? number_format($clientReport->amount, 2) : '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Currency</td>
                        <td class="value-cell">{{ $clientReport->currency ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Purpose of Funds</td>
                        <td class="value-cell">{{ $clientReport->purpose_of_funds ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">NOC Type</td>
                        <td class="value-cell">{{ $clientReport->noc_type ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">NOC Reference No.</td>
                        <td class="value-cell">{{ $clientReport->noc_reference_no ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">NOC Deed No.</td>
                        <td class="value-cell">{{ $clientReport->noc_deed_no ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Conditions on NOC</td>
                        <td class="value-cell">{{ $clientReport->conditions_on_noc ?: '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Section 5: Beneficiary Bank & Payment Details -->
        <section class="section">
            <h3 class="section-title">5) Details of Beneficiary Bank</h3>
            <table class="data-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Beneficiary Bank Name</td>
                        <td class="value-cell">{{ $clientReport->beneficiary_bank_name ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">IFSC Code</td>
                        <td class="value-cell">{{ $clientReport->ifsc_code ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">SWIFT Code</td>
                        <td class="value-cell">{{ $clientReport->swift_code ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Bank Account Number</td>
                        <td class="value-cell">{{ $clientReport->bank_account_number ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Bank Email Id</td>
                        <td class="value-cell">{{ $clientReport->bank_email ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Account Type</td>
                        <td class="value-cell">{{ $clientReport->account_type ?: '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Section 6: Sender Details -->
        <section class="section">
            <h3 class="section-title">6) Remitting Bank & Sender Details</h3>
            <table class="data-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Origin Country</td>
                        <td class="value-cell">{{ $clientReport->origin_country ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Sender Name / Institution</td>
                        <td class="value-cell">{{ $clientReport->sender_name ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Sender Address</td>
                        <td class="value-cell">{{ $clientReport->sender_address ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Remitting Bank Name</td>
                        <td class="value-cell">{{ $clientReport->remitting_bank_name ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">SWIFT Code / BIC</td>
                        <td class="value-cell">{{ $clientReport->sender_swift_code ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Transaction Reference / Transfer Trace</td>
                        <td class="value-cell">{{ $clientReport->transaction_reference ?: '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Section 7: Work Information -->
        <section class="section">
            <h3 class="section-title">7) Work Details of Applicant</h3>
            <table class="data-table">
                <tbody>
                    <tr>
                        <td class="label-cell">Type of Work</td>
                        <td class="value-cell">{{ $clientReport->type_of_work ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">HSN Code</td>
                        <td class="value-cell">{{ $clientReport->hsn_code ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Broker/Agent's Name</td>
                        <td class="value-cell">{{ $clientReport->broker_agent_name ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Banking Partner</td>
                        <td class="value-cell">{{ $clientReport->banking_partner ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="label-cell">Total Amount</td>
                        <td class="value-cell">{{ $clientReport->total_amount ? number_format($clientReport->total_amount, 2) : '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Section 8: File Processing -->
        <section class="section">
            <h3 class="section-title">8) File Processing / File Movement</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th class="header-cell">No.</th>
                        <th class="header-cell">Stage</th>
                        <th class="header-cell">Status</th>
                        <th class="header-cell">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="data-cell">01</td>
                        <td class="data-cell">Payment Book</td>
                        <td class="data-cell">{{ $clientReport->payment_book_status ? ucfirst(str_replace('_',' ', $clientReport->payment_book_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->payment_book_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">02</td>
                        <td class="data-cell">Payment Book Approval</td>
                        <td class="data-cell">{{ $clientReport->payment_book_status_approval ? ucfirst(str_replace('_',' ', $clientReport->payment_book_status_approval)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->payment_book_status_approval_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">03</td>
                        <td class="data-cell">NFRA Application Processing</td>
                        <td class="data-cell">{{ $clientReport->nfra_application_status ? ucfirst(str_replace('_',' ', $clientReport->nfra_application_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->nfra_application_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">04</td>
                        <td class="data-cell">NFRA Approval</td>
                        <td class="data-cell">{{ $clientReport->nfra_approval_status ? ucfirst(str_replace('_',' ', $clientReport->nfra_approval_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->nfra_approval_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">05</td>
                        <td class="data-cell">Form 28 Application Processing</td>
                        <td class="data-cell">{{ $clientReport->form_28_application_processing ? ucfirst(str_replace('_',' ', $clientReport->form_28_application_processing)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->form_28_application_processing_notes ?: '-' }}</td>
                    </tr>
               
                    <tr>
                        <td class="data-cell">06</td>
                        <td class="data-cell">FORM 28 Approval</td>
                        <td class="data-cell">{{ $clientReport->form_28_approval ? ucfirst(str_replace('_',' ', $clientReport->form_28_approval)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->form_28_approval_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">07</td>
                        <td class="data-cell">NOC Fee</td>
                        <td class="data-cell">{{ $clientReport->noc_fee ? ucfirst(str_replace('_',' ', $clientReport->noc_fee)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->noc_fee_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">08</td>
                        <td class="data-cell">Form 28B Application Processing</td>
                        <td class="data-cell">{{ $clientReport->form_28b_application_processing ? ucfirst(str_replace('_',' ', $clientReport->form_28b_application_processing)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->form_28b_application_processing_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">09</td>
                        <td class="data-cell">Form 28 B Approval</td>
                        <td class="data-cell">{{ $clientReport->form_28b_approval ? ucfirst(str_replace('_',' ', $clientReport->form_28b_approval)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->form_28b_approval_notes ?: '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Section 9: Progress Tracker -->
        <section class="section">
            <h3 class="section-title">9) Progress Tracker</h3>
            <table class="data-table">
                <thead>
                    <tr>
                        <th class="header-cell">No.</th>
                        <th class="header-cell">Stage</th>
                        <th class="header-cell">Status</th>
                        <th class="header-cell">Notes / Reason</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="data-cell">01</td>
                        <td class="data-cell">FEMA Application</td>
                        <td class="data-cell">{{ $clientReport->fema_application_status ? ucfirst(str_replace('_',' ', $clientReport->fema_application_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->fema_application_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">02</td>
                        <td class="data-cell">Preliminary Check</td>
                        <td class="data-cell">{{ $clientReport->preliminary_check_status ? ucfirst(str_replace('_',' ', $clientReport->preliminary_check_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->preliminary_check_status_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">03</td>
                        <td class="data-cell">KYC / Compliance Review</td>
                        <td class="data-cell">{{ $clientReport->kyc_compliance_status ? ucfirst(str_replace('_',' ', $clientReport->kyc_compliance_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->kyc_compliance_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">04</td>
                        <td class="data-cell">Bank Verification</td>
                        <td class="data-cell">{{ $clientReport->bank_verification_status ? ucfirst(str_replace('_',' ', $clientReport->bank_verification_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->bank_verification_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">05</td>
                        <td class="data-cell">Departmental Approval</td>
                        <td class="data-cell">{{ $clientReport->departmental_approval_status ? ucfirst(str_replace('_',' ', $clientReport->departmental_approval_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->departmental_approval_notes ?: '-' }}</td>
                    </tr>
                         <tr>
                        <td class="data-cell">06</td>
                        <td class="data-cell">CBDT Approval</td>
                        <td class="data-cell">{{ $clientReport->cbdt_approval_status ? ucfirst(str_replace('_',' ', $clientReport->cbdt_approval_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->cbdt_approval_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">07</td>
                        <td class="data-cell">PFMS Approval</td>
                        <td class="data-cell">{{ $clientReport->pfms_approval_status ? ucfirst(str_replace('_',' ', $clientReport->pfms_approval_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->pfms_approval_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">08</td>
                        <td class="data-cell">Security Fee Deposit</td>
                        <td class="data-cell">{{ $clientReport->security_fee_deposit ? ucfirst(str_replace('_',' ', $clientReport->security_fee_deposit)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->security_fee_deposit_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">09</td>
                        <td class="data-cell">NOC Draft & Conditions</td>
                        <td class="data-cell">{{ $clientReport->noc_draft_status ? ucfirst(str_replace('_',' ', $clientReport->noc_draft_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->noc_draft_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">10</td>
                        <td class="data-cell">NOC Issuance</td>
                        <td class="data-cell">{{ $clientReport->noc_issuance_status ? ucfirst(str_replace('_',' ', $clientReport->noc_issuance_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->noc_issuance_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">11</td>
                        <td class="data-cell">Information Grant</td>
                        <td class="data-cell">{{ $clientReport->information_grant_status ? ucfirst(str_replace('_',' ', $clientReport->information_grant_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->information_grant_notes ?: '-' }}</td>
                    </tr>
                    <tr>
                        <td class="data-cell">12</td>
                        <td class="data-cell">Follow-up / Closure</td>
                        <td class="data-cell">{{ $clientReport->followup_closure_status ? ucfirst(str_replace('_',' ', $clientReport->followup_closure_status)) : '-' }}</td>
                        <td class="data-cell">{{ $clientReport->followup_closure_notes ?: '-' }}</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Section 10: Status Codes -->
        <section class="section">
            <h3 class="section-title">10) Status Codes & Definitions</h3>
            <ul class="status-list">
                <li>
                    <span class="status-label">Received:</span>
                    <span>Application has been received and registered.</span>
                </li>
                <li>
                    <span class="status-label">Pending Documents:</span>
                    <span>Required documents are missing from the applicant.</span>
                </li>
                <li>
                    <span class="status-label">In Progress / Under Review:</span>
                    <span>Processing is ongoing.</span>
                </li>
                <li>
                    <span class="status-label">Hold:</span>
                    <span>Process is paused due to policy/technical reasons.</span>
                </li>
                <li>
                    <span class="status-label">Approved:</span>
                    <span>Necessary approvals obtained (before NOC issuance).</span>
                </li>
                <li>
                    <span class="status-label">NOC Issued:</span>
                    <span>NOC has been successfully issued.</span>
                </li>
                <li>
                    <span class="status-label">Rejected:</span>
                    <span>Application invalid or rejected.</span>
                </li>
                <li>
                    <span class="status-label">Closed:</span>
                    <span>Process completed and closed.</span>
                </li>
            </ul>
        </section>

        <!-- Section 11: Document Checklist -->
        <section class="section">
            <h3 class="section-title">11) Document Checklist</h3>
            <ul class="checklist">
                <li>Signed Application Form</li>
                <li>ID Proof (Passport / Aadhaar / PAN)</li>
                <li>Bank Statement / Transaction Proof</li>
                <li>Source of Funds Documents</li>
                <li>Company / Organization Registration (if applicable)</li>
                <li>KYC / AML Related Documents</li>
                <li>Any Other Statutory Approvals (if applicable)</li>
            </ul>
        </section>

        <!-- Section 12: Risks & Special Conditions -->
        <section class="section">
            <h3 class="section-title">12) Risks & Special Conditions</h3>
            <div class="notes-box">
                <p>
                    Notes about any regulatory constraints or banking restrictions. If the NOC is conditional 
                    upon specific requirements (e.g., escrow arrangement, tax clearance), list those conditions here.
                </p>
            </div>
        </section>

        <!-- Section 13: Officer Remarks -->
        <section class="section keep-together">
            <h3 class="section-title">13) Officer Remarks</h3>
            <p class="officer-note">(Officer to provide concise remarks about the particular stages, missing documents, or any additional conditions required.)</p>
            @if($clientReport->general_notes)
            <div class="remarks-box">{{ $clientReport->general_notes }}</div>
            @endif
            @if($clientReport->officer_remarks)
            <div class="remarks-box">{{ $clientReport->officer_remarks }}</div>
            @endif
        </section>

        <!-- Section 14: Approval & Signature -->
        <section class="section keep-together">
            <h3 class="section-title">14) Approval & Signature</h3>
            <table class="signature-table">
                <tr>
                    <td>Technical Team</td>
                    <td>{{ $clientReport->technical_team_approval ?: '' }}</td>
                </tr>
                <tr>
                    <td>Legal Compliance Team</td>
                    <td>{{ $clientReport->legal_compliance_approval ?: '' }}</td>
                </tr>
                <tr>
                    <td>Final Authoriser</td>
                    <td>{{ $clientReport->final_authoriser_approval ?: '' }}</td>
                </tr>
            </table>
        </section>

        <!-- Section 15: General Notes -->
        <section class="section">
            <h3 class="section-title">15) General Notes</h3>
            <div class="general-notes">
                <p>
                    <span>•</span>
                    <span>{{ $clientReport->general_notes ?: 'Group applications may require additional time (1-2 months) for review when applicable.' }}</span>
                </p>
                <p>
                    <span>•</span>
                    <span>Sensitive information should only be shared with authorised personnel.</span>
                </p>
            </div>
        </section>

        <!-- Footer -->
        <footer class="document-footer">
            <p>This is an official document of Indian International Economic Service (IIES)</p>
            <p>Ministry of Finance, Government of India</p>
        </footer>
    </div>
    <script>
        window.addEventListener('load', function () {
            setTimeout(function () {
                try { window.print(); } catch (e) {}
            }, 300);
        });
    </script>
</body>
</html>