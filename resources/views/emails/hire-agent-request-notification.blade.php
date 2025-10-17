<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Hire Agent Request</title>
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
        .request-details {
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
            width: 140px;
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
        .category-badge {
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            background: #e3f2fd;
            color: #1976d2;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🤝 New Hire Agent Request</h1>
        <p>Indian International Economic Service (IIES)</p>
    </div>
    
    <div class="content">
        <h2>Hello Admin,</h2>
        <p>A new request to hire a support agent has been submitted on the IIES website. Please review the details below and assign an appropriate agent.</p>
        
        <div class="request-details">
            <h3>📋 Request Information</h3>
            
            <div class="field">
                <span class="field-label">Reference ID:</span>
                <span class="field-value"><strong>{{ $hireAgentRequest->reference_id }}</strong></span>
            </div>
            
            <div class="field">
                <span class="field-label">Name:</span>
                <span class="field-value">{{ $hireAgentRequest->full_name }}</span>
            </div>
            
            <div class="field">
                <span class="field-label">Email:</span>
                <span class="field-value">{{ $hireAgentRequest->email }}</span>
            </div>
            
            <div class="field">
                <span class="field-label">Phone:</span>
                <span class="field-value">{{ $hireAgentRequest->phone }}</span>
            </div>
            
            @if($hireAgentRequest->organization)
            <div class="field">
                <span class="field-label">Organization:</span>
                <span class="field-value">{{ $hireAgentRequest->organization }}</span>
            </div>
            @endif
            
            <div class="field">
                <span class="field-label">Agent Category:</span>
                <span class="field-value">
                    <span class="category-badge">{{ $hireAgentRequest->agent_category_display }}</span>
                </span>
            </div>
            
            @if($hireAgentRequest->preferred_agent)
            <div class="field">
                <span class="field-label">Preferred Agent:</span>
                <span class="field-value">{{ $hireAgentRequest->preferred_agent }}</span>
            </div>
            @endif
            
            <div class="field">
                <span class="field-label">Service Description:</span>
            </div>
            <div class="description-content">{{ $hireAgentRequest->service_description }}</div>
            
            @if($hireAgentRequest->budget)
            <div class="field">
                <span class="field-label">Budget:</span>
                <span class="field-value">₹{{ number_format($hireAgentRequest->budget, 2) }}</span>
            </div>
            @endif
            
            @if($hireAgentRequest->timeline)
            <div class="field">
                <span class="field-label">Timeline:</span>
                <span class="field-value">{{ $hireAgentRequest->timeline_display }}</span>
            </div>
            @endif
            
            <div class="timestamp">
                <strong>Submitted:</strong> {{ $hireAgentRequest->created_at ? $hireAgentRequest->created_at->format('F d, Y \a\t H:i') : now()->format('F d, Y \a\t H:i') }}
            </div>
        </div>
        
        <div style="text-align: center;">
            @if($hireAgentRequest->id)
                <a href="{{ url('/admin/hire-agent-requests/' . $hireAgentRequest->id) }}" class="action-button">
                    📝 View in Admin Panel
                </a>
            @else
                <a href="{{ url('/admin/hire-agent-requests') }}" class="action-button">
                    📝 View Admin Panel
                </a>
            @endif
        </div>
        
        <p><strong>Next Steps:</strong></p>
        <ul>
            <li>Review the request details above</li>
            <li>Click the button to access the admin panel</li>
            <li>Assign an appropriate agent based on the category</li>
            <li>Update the request status as you process it</li>
            <li>Contact the client to confirm agent assignment</li>
        </ul>
    </div>
    
    <div class="footer">
        <p><strong>IIES System Notification</strong></p>
        <p>This is an automated notification. Please do not reply to this email.</p>
        <p>© {{ date('Y') }} Indian International Economic Service. All rights reserved.</p>
    </div>
</body>
</html>
