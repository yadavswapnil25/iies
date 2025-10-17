<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Enquiry Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: #1a365d;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #f8f9fa;
            padding: 30px;
            border: 1px solid #e9ecef;
            border-top: none;
        }
        .enquiry-details {
            background: white;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #1a365d;
        }
        .field {
            margin-bottom: 15px;
        }
        .field-label {
            font-weight: bold;
            color: #1a365d;
            display: inline-block;
            width: 120px;
        }
        .field-value {
            color: #333;
        }
        .description-content {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            border: 1px solid #e9ecef;
            margin: 10px 0;
            white-space: pre-wrap;
        }
        .action-button {
            display: inline-block;
            background: #1a365d;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
        }
        .footer {
            background: #6c757d;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 0 0 8px 8px;
            font-size: 14px;
        }
        .timestamp {
            color: #6c757d;
            font-size: 14px;
            margin-top: 10px;
        }
        .priority-badge, .status-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
        }
        .priority-badge {
            background: #fff3e0;
            color: #f57c00;
        }
        .priority-badge.priority-high {
            background: #ffecb3;
            color: #ff8f00;
        }
        .priority-badge.priority-urgent {
            background: #ffebee;
            color: #d32f2f;
        }
        .status-badge {
            background: #e8f5e8;
            color: #2e7d32;
        }
        .status-badge.status-new {
            background: #ffebee;
            color: #d32f2f;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>📋 New Enquiry Form Submission</h1>
        <p>Indian International Economic Service (IIES)</p>
    </div>
    
    <div class="content">
        <h2>Hello Admin,</h2>
        <p>A new enquiry form has been submitted on the IIES website. Please review the details below and respond to the inquiry as soon as possible.</p>
        
        <div class="enquiry-details">
            <h3>📋 Enquiry Information</h3>
            
            <div class="field">
                <span class="field-label">Reference ID:</span>
                <span class="field-value"><strong>{{ $enquiryForm->reference_id }}</strong></span>
            </div>
            
            <div class="field">
                <span class="field-label">Name:</span>
                <span class="field-value">{{ $enquiryForm->full_name }}</span>
            </div>
            
            <div class="field">
                <span class="field-label">Email:</span>
                <span class="field-value">{{ $enquiryForm->email }}</span>
            </div>
            
            <div class="field">
                <span class="field-label">Phone:</span>
                <span class="field-value">{{ $enquiryForm->phone }}</span>
            </div>
            
            @if($enquiryForm->organization)
            <div class="field">
                <span class="field-label">Organization:</span>
                <span class="field-value">{{ $enquiryForm->organization }}</span>
            </div>
            @endif
            
            <div class="field">
                <span class="field-label">Enquiry Type:</span>
                <span class="field-value">{{ $enquiryForm->enquiry_type_display }}</span>
            </div>
            
            <div class="field">
                <span class="field-label">Priority:</span>
                <span class="field-value">
                    <span class="priority-badge priority-{{ $enquiryForm->priority }}">
                        {{ ucfirst($enquiryForm->priority) }}
                    </span>
                </span>
            </div>
            
            <div class="field">
                <span class="field-label">Status:</span>
                <span class="field-value">
                    <span class="status-badge status-{{ $enquiryForm->status }}">
                        {{ ucfirst(str_replace('_', ' ', $enquiryForm->status)) }}
                    </span>
                </span>
            </div>
            
            <div class="field">
                <span class="field-label">Subject:</span>
                <span class="field-value">{{ $enquiryForm->enquiry_subject }}</span>
            </div>
            
            <div class="field">
                <span class="field-label">Description:</span>
            </div>
            <div class="description-content">{{ $enquiryForm->enquiry_description }}</div>
            
            <div class="timestamp">
                <strong>Submitted:</strong> {{ $enquiryForm->created_at ? $enquiryForm->created_at->format('F d, Y \a\t H:i') : now()->format('F d, Y \a\t H:i') }}
            </div>
        </div>
        
        <div style="text-align: center;">
            @if($enquiryForm->id)
                <a href="{{ url('/admin/enquiry-forms/' . $enquiryForm->id) }}" class="action-button">
                    📝 View in Admin Panel
                </a>
            @else
                <a href="{{ url('/admin/enquiry-forms') }}" class="action-button">
                    📝 View Admin Panel
                </a>
            @endif
        </div>
        
        <p><strong>Next Steps:</strong></p>
        <ul>
            <li>Review the enquiry details above</li>
            <li>Click the button to access the admin panel</li>
            <li>Update the enquiry status as you process it</li>
            <li>Add admin notes if needed</li>
            <li>Respond to the customer via their email address</li>
        </ul>
    </div>
    
    <div class="footer">
        <p><strong>IIES System Notification</strong></p>
        <p>This is an automated notification. Please do not reply to this email.</p>
        <p>© {{ date('Y') }} Indian International Economic Service. All rights reserved.</p>
    </div>
</body>
</html>
