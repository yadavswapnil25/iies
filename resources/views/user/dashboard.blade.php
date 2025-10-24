<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>NOC Progress Report - {{ $clientReport->full_name }}</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        main#maincontent {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            padding: 20px;
        }
        
        .dashboard-container {
            max-width: 1200px;
            width: 100%;
            margin: 0;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
        }
        .dashboard-title h1 {
            color: #1a365d;
            margin: 0;
        }
        .dashboard-title p {
            color: #666;
            margin: 5px 0 0 0;
        }
        .dashboard-actions {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .print-btn {
            background: #1a365d;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            font-size: 14px;
            font-weight: 500;
        }
        .print-btn:hover {
            background: #2c5282;
        }
        
        .logout-btn {
            background: #e53e3e;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background 0.3s;
        }
        .logout-btn:hover {
            background: #c53030;
        }
        .report-section {
            margin-bottom: 30px;
        }
        .section-title {
            background: #1a365d;
            color: white;
            padding: 15px;
            margin: 0 0 20px 0;
            border-radius: 5px;
            font-size: 18px;
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }
        .info-item {
            background: #f7fafc;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #1a365d;
        }
        .info-label {
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 5px;
        }
        .info-value {
            color: #4a5568;
        }
        .status-badge {
            display: inline-block;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
        }
        .status-draft { background: #fed7d7; color: #c53030; }
        .status-in-progress { background: #bee3f8; color: #2b6cb0; }
        .status-completed { background: #c6f6d5; color: #22543d; }
        .status-on-hold { background: #faf089; color: #744210; }
        .status-rejected { background: #fed7d7; color: #c53030; }
        .progress-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .progress-table th,
        .progress-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        .progress-table th {
            background: #f7fafc;
            font-weight: 600;
            color: #2d3748;
        }
        .progress-table tr:hover {
            background: #f7fafc;
        }
        .no-data {
            text-align: center;
            color: #666;
            padding: 40px;
            background: #f7fafc;
            border-radius: 5px;
        }
        
        /* Print-specific styles */
        @media print {
            body {
                background: white !important;
                font-size: 12px;
            }
            
            main#maincontent {
                display: block !important;
                padding: 0 !important;
            }
            
            .dashboard-container {
                max-width: none !important;
                width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
                box-shadow: none !important;
                border-radius: 0 !important;
            }
            
            .dashboard-actions {
                display: none !important;
            }
            
            .section-title {
                background: #1a365d !important;
                color: white !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            
            .status-badge {
                border: 1px solid #333 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            
            .progress-table {
                border-collapse: collapse !important;
                width: 100% !important;
            }
            
            .progress-table th,
            .progress-table td {
                border: 1px solid #333 !important;
                padding: 8px !important;
            }
            
            .progress-table th {
                background: #f0f0f0 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            
            .info-grid {
                display: block !important;
            }
            
            .info-item {
                margin-bottom: 10px !important;
                page-break-inside: avoid;
            }
            
            .report-section {
                page-break-inside: avoid;
                margin-bottom: 20px !important;
            }
            
            @page {
                margin: 1cm;
                size: A4;
            }
        }
        
        /* Responsive design */
        @media (max-width: 768px) {
            main#maincontent {
                padding: 10px;
            }
            
            .dashboard-container {
                padding: 15px;
            }
            
            .dashboard-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .dashboard-actions {
                width: 100%;
                justify-content: space-between;
            }
            
            .progress-table {
                font-size: 14px;
            }
            
            .progress-table th,
            .progress-table td {
                padding: 8px 4px;
            }
        }
        
        @media (max-width: 480px) {
            .dashboard-container {
                padding: 10px;
            }
            
            .dashboard-title h1 {
                font-size: 24px;
            }
            
            .section-title {
                font-size: 16px;
                padding: 10px;
            }
            
            .progress-table {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    @include('partials.header')

    <main id="maincontent" class="page-main" role="main">
        <div class="dashboard-container">
            <div class="dashboard-header">
                <div class="dashboard-title">
                    <h1>NOC Progress Report</h1>
                    <p>Application ID: {{ $clientReport->unique_id }}</p>
                </div>
                <div class="dashboard-actions">
                    <button onclick="window.print()" class="print-btn">
                        <i class="fas fa-print"></i> Print Report
                    </button>
                    <a href="{{ route('user.logout') }}" class="logout-btn">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </div>
            </div>

            <!-- Client Information -->
            <div class="report-section">
                <h2 class="section-title">Client Information</h2>
                <div class="info-grid">
                    <div class="info-item">
                        <div class="info-label">Full Name</div>
                        <div class="info-value">{{ $clientReport->full_name }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Email</div>
                        <div class="info-value">{{ $clientReport->email_id ?: 'Not provided' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Contact Number</div>
                        <div class="info-value">{{ $clientReport->contact_number ?: 'Not provided' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Application Type</div>
                        <div class="info-value">{{ $clientReport->application_type ?: 'Not specified' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Submission Date</div>
                        <div class="info-value">{{ $clientReport->submission_date ? $clientReport->submission_date->format('d/m/Y') : 'Not specified' }}</div>
                    </div>
                    <div class="info-item">
                        <div class="info-label">Current Status</div>
                        <div class="info-value">
                            <span class="status-badge status-{{ str_replace('_', '-', $clientReport->status ?: 'draft') }}">
                                {{ ucfirst(str_replace('_', ' ', $clientReport->status ?: 'draft')) }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- File Processing Status -->
            <div class="report-section">
                <h2 class="section-title">File Processing / File Movement Status</h2>
                <table class="progress-table">
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
                            <td>Payment Book</td>
                            <td>
                                @if($clientReport->payment_book_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->payment_book_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->payment_book_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->payment_book_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>NFRA Application Processing</td>
                            <td>
                                @if($clientReport->nfra_application_processing_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->nfra_application_processing_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->nfra_application_processing_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->nfra_application_processing_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>NFRA Approval</td>
                            <td>
                                @if($clientReport->nfra_approval_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->nfra_approval_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->nfra_approval_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->nfra_approval_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Form 28 Application Processing</td>
                            <td>
                                @if($clientReport->form_28_application_processing_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->form_28_application_processing_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->form_28_application_processing_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->form_28_application_processing_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Form 28 Approval</td>
                            <td>
                                @if($clientReport->form_28_approval_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->form_28_approval_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->form_28_approval_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->form_28_approval_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>NOC Fee</td>
                            <td>
                                @if($clientReport->noc_fee_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->noc_fee_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->noc_fee_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->noc_fee_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>Form 28B Application Processing</td>
                            <td>
                                @if($clientReport->form_28b_application_processing_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->form_28b_application_processing_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->form_28b_application_processing_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->form_28b_application_processing_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>Form 28B Approval</td>
                            <td>
                                @if($clientReport->form_28b_approval_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->form_28b_approval_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->form_28b_approval_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->form_28b_approval_notes ?: '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Progress Tracker -->
            <div class="report-section">
                <h2 class="section-title">Progress Tracker</h2>
                <table class="progress-table">
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
                            <td>
                                @if($clientReport->fema_application_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->fema_application_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->fema_application_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->fema_application_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>02</td>
                            <td>Preliminary Check</td>
                            <td>
                                @if($clientReport->preliminary_check_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->preliminary_check_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->preliminary_check_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->preliminary_check_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>03</td>
                            <td>KYC / Compliance Review</td>
                            <td>
                                @if($clientReport->kyc_compliance_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->kyc_compliance_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->kyc_compliance_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->kyc_compliance_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>04</td>
                            <td>Bank Verification</td>
                            <td>
                                @if($clientReport->bank_verification_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->bank_verification_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->bank_verification_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->bank_verification_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>05</td>
                            <td>Departmental Approval</td>
                            <td>
                                @if($clientReport->departmental_approval_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->departmental_approval_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->departmental_approval_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->departmental_approval_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>06</td>
                            <td>NOC Draft & Conditions</td>
                            <td>
                                @if($clientReport->noc_draft_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->noc_draft_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->noc_draft_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->noc_draft_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>07</td>
                            <td>NOC Issuance</td>
                            <td>
                                @if($clientReport->noc_issuance_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->noc_issuance_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->noc_issuance_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->noc_issuance_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>08</td>
                            <td>Information Grant</td>
                            <td>
                                @if($clientReport->information_grant_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->information_grant_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->information_grant_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->information_grant_notes ?: '-' }}</td>
                        </tr>
                        <tr>
                            <td>09</td>
                            <td>Follow-up / Closure</td>
                            <td>
                                @if($clientReport->followup_closure_status)
                                    <span class="status-badge status-{{ str_replace('_', '-', $clientReport->followup_closure_status) }}">
                                        {{ ucfirst(str_replace('_', ' ', $clientReport->followup_closure_status)) }}
                                    </span>
                                @else
                                    <span class="status-badge status-pending">Pending</span>
                                @endif
                            </td>
                            <td>{{ $clientReport->followup_closure_notes ?: '-' }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- General Notes -->
            @if($clientReport->general_notes || $clientReport->officer_remarks)
            <div class="report-section">
                <h2 class="section-title">Additional Information</h2>
                <div class="info-grid">
                    @if($clientReport->general_notes)
                    <div class="info-item">
                        <div class="info-label">General Notes</div>
                        <div class="info-value">{{ $clientReport->general_notes }}</div>
                    </div>
                    @endif
                    @if($clientReport->officer_remarks)
                    <div class="info-item">
                        <div class="info-label">Officer Remarks</div>
                        <div class="info-value">{{ $clientReport->officer_remarks }}</div>
                    </div>
                    @endif
                </div>
            </div>
            @endif

            <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #e2e8f0;">
                <p style="color: #666; margin: 0;">
                    Last updated: {{ $clientReport->updated_at->format('d/m/Y H:i') }}
                </p>
            </div>
        </div>
    </main>

    @include('partials.footer')

    <script src="/js/language-switcher.js"></script>
</body>
</html>
