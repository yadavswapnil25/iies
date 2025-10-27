@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1>Agent Details</h1>
            <p>View agent information and details</p>
        </div>
        <div>
            <a href="{{ route('admin.agents.edit', $agent) }}" class="btn-edit">Edit Agent</a>
            <a href="{{ route('admin.agents.index') }}" class="btn-back">Back to List</a>
        </div>
    </div>
</div>

<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h2>{{ $agent->name }}</h2>
            <span class="status-badge status-{{ $agent->is_active ? 'active' : 'inactive' }}">
                {{ $agent->is_active ? 'Active' : 'Inactive' }}
            </span>
        </div>
        
        <div class="card-body">
            <div class="info-grid">
                <!-- Basic Information -->
                <div class="info-section">
                    <h3>Basic Information</h3>
                    <div class="info-row">
                        <label>Agent Code:</label>
                        <span><code>{{ $agent->agent_code }}</code></span>
                    </div>
                    <div class="info-row">
                        <label>Experience:</label>
                        <span>{{ $agent->experience_years }} years</span>
                    </div>
                    <div class="info-row">
                        <label>Specialization:</label>
                        <span>{{ $agent->specialization ?: 'Not specified' }}</span>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="info-section">
                    <h3>Contact Information</h3>
                    <div class="info-row">
                        <label>Phone:</label>
                        <span>{{ $agent->phone ?: 'Not provided' }}</span>
                    </div>
                    <div class="info-row">
                        <label>Email:</label>
                        <span>{{ $agent->email ?: 'Not provided' }}</span>
                    </div>
                    <div class="info-row">
                        <label>Address:</label>
                        <span>{{ $agent->address ?: 'Not provided' }}</span>
                    </div>
                </div>

                <!-- Financial Information -->
                <div class="info-section">
                    <h3>Financial Information</h3>
                    <div class="info-row">
                        <label>Service Fee:</label>
                        <span>{{ $agent->service_fee_percentage ? $agent->service_fee_percentage . '%' : 'Not set' }}</span>
                    </div>
                    <div class="info-row">
                        <label>Daily Fee Range:</label>
                        <span>
                            @if($agent->daily_fee_min && $agent->daily_fee_max)
                                ₹{{ $agent->daily_fee_min }} - ₹{{ $agent->daily_fee_max }}
                            @elseif($agent->daily_fee_min)
                                ₹{{ $agent->daily_fee_min }} minimum
                            @elseif($agent->daily_fee_max)
                                Up to ₹{{ $agent->daily_fee_max }}
                            @else
                                Not set
                            @endif
                        </span>
                    </div>
                    <div class="info-row">
                        <label>SBI Account:</label>
                        <span>{{ $agent->sbi_account_number ?: 'Not provided' }}</span>
                    </div>
                </div>

                <!-- Additional Information -->
                @if($agent->notes)
                <div class="info-section">
                    <h3>Notes</h3>
                    <div class="notes-content">
                        {{ $agent->notes }}
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
.content-header {
    margin-bottom: 30px;
}

.content-header h1 {
    margin: 0;
    color: #1a365d;
}

.content-header p {
    margin: 5px 0 0 0;
    color: #6c757d;
}

.btn-edit, .btn-back {
    padding: 8px 16px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: 500;
    margin-left: 10px;
}

.btn-edit {
    background: #6c757d;
    color: white;
}

.btn-back {
    background: #1a365d;
    color: white;
}

.card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    overflow: hidden;
}

.card-header {
    background: #f8f9fa;
    padding: 20px;
    border-bottom: 1px solid #dee2e6;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header h2 {
    margin: 0;
    color: #1a365d;
}

.status-badge {
    padding: 6px 12px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
}

.status-badge.status-active {
    background: #d1fae5;
    color: #065f46;
}

.status-badge.status-inactive {
    background: #fef2f2;
    color: #dc2626;
}

.card-body {
    padding: 30px;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}

.info-section {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 6px;
}

.info-section h3 {
    margin: 0 0 15px 0;
    color: #1a365d;
    font-size: 16px;
    font-weight: 600;
}

.info-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    margin-bottom: 12px;
    padding-bottom: 8px;
    border-bottom: 1px solid #e9ecef;
}

.info-row:last-child {
    border-bottom: none;
    margin-bottom: 0;
}

.info-row label {
    font-weight: 500;
    color: #495057;
    min-width: 120px;
    margin-right: 15px;
}

.info-row span {
    color: #212529;
    text-align: right;
    flex: 1;
}

.notes-content {
    background: white;
    padding: 15px;
    border-radius: 4px;
    border: 1px solid #dee2e6;
    color: #495057;
    line-height: 1.5;
}

code {
    background: #e9ecef;
    padding: 2px 6px;
    border-radius: 3px;
    font-family: monospace;
    font-size: 12px;
    color: #e83e8c;
}

@media (max-width: 768px) {
    .info-grid {
        grid-template-columns: 1fr;
    }
    
    .info-row {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .info-row label {
        margin-bottom: 5px;
        min-width: auto;
    }
    
    .info-row span {
        text-align: left;
    }
}
</style>
@endsection

