@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="header-actions">
        <a href="{{ route('admin.hire-agent-requests.index') }}" class="btn-back">← Back to Requests</a>
    </div>
    <h1>Hire Agent Request Details</h1>
    <p>Reference ID: <strong>{{ $hireAgentRequest->reference_id }}</strong></p>
</div>

<div class="content-body">
    <!-- Request Information -->
    <div class="info-section">
        <h2>Request Information</h2>
        <div class="info-grid">
            <div class="info-item">
                <strong>Name:</strong> {{ $hireAgentRequest->full_name }}
            </div>
            <div class="info-item">
                <strong>Email:</strong> {{ $hireAgentRequest->email }}
            </div>
            <div class="info-item">
                <strong>Phone:</strong> {{ $hireAgentRequest->phone }}
            </div>
            @if($hireAgentRequest->organization)
            <div class="info-item">
                <strong>Organization:</strong> {{ $hireAgentRequest->organization }}
            </div>
            @endif
            <div class="info-item">
                <strong>Agent Category:</strong> 
                <span class="category-badge category-{{ $hireAgentRequest->agent_category }}">
                    {{ $hireAgentRequest->agent_category_display }}
                </span>
            </div>
            @if($hireAgentRequest->preferred_agent)
            <div class="info-item">
                <strong>Preferred Agent:</strong> {{ $hireAgentRequest->preferred_agent }}
            </div>
            @endif
            <div class="info-item">
                <strong>Status:</strong> 
                <span class="status-badge status-{{ $hireAgentRequest->status }}">
                    {{ ucfirst(str_replace('_', ' ', $hireAgentRequest->status)) }}
                </span>
            </div>
            @if($hireAgentRequest->assigned_agent)
            <div class="info-item">
                <strong>Assigned Agent:</strong> {{ $hireAgentRequest->assigned_agent }}
            </div>
            @endif
            <div class="info-item">
                <strong>Submitted:</strong> {{ $hireAgentRequest->created_at->format('F d, Y \a\t H:i') }}
            </div>
            @if($hireAgentRequest->assigned_at)
            <div class="info-item">
                <strong>Assigned:</strong> {{ $hireAgentRequest->assigned_at->format('F d, Y \a\t H:i') }}
            </div>
            @endif
            @if($hireAgentRequest->completed_at)
            <div class="info-item">
                <strong>Completed:</strong> {{ $hireAgentRequest->completed_at->format('F d, Y \a\t H:i') }}
            </div>
            @endif
        </div>
    </div>

    <!-- Service Details -->
    <div class="details-section">
        <h2>Service Details</h2>
        <div class="detail-item">
            <strong>Service Description:</strong>
            <div class="description-content">
                {{ $hireAgentRequest->service_description }}
            </div>
        </div>
        @if($hireAgentRequest->budget)
        <div class="detail-item">
            <strong>Budget:</strong>
            <p>₹{{ number_format($hireAgentRequest->budget, 2) }}</p>
        </div>
        @endif
        @if($hireAgentRequest->timeline)
        <div class="detail-item">
            <strong>Timeline:</strong>
            <p>{{ $hireAgentRequest->timeline_display }}</p>
        </div>
        @endif
    </div>

    <!-- Admin Actions -->
    <div class="admin-actions">
        <h2>Admin Actions</h2>
        <form method="POST" action="{{ route('admin.hire-agent-requests.update', $hireAgentRequest) }}" class="admin-form">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-select">
                        <option value="new" {{ $hireAgentRequest->status == 'new' ? 'selected' : '' }}>New</option>
                        <option value="in_progress" {{ $hireAgentRequest->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="assigned" {{ $hireAgentRequest->status == 'assigned' ? 'selected' : '' }}>Assigned</option>
                        <option value="completed" {{ $hireAgentRequest->status == 'completed' ? 'selected' : '' }}>Completed</option>
                        <option value="cancelled" {{ $hireAgentRequest->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="assigned_agent">Assigned Agent:</label>
                    <input 
                        type="text" 
                        name="assigned_agent" 
                        id="assigned_agent" 
                        class="form-input"
                        value="{{ old('assigned_agent', $hireAgentRequest->assigned_agent) }}"
                        placeholder="Enter agent name or code"
                    />
                </div>
            </div>

            <div class="form-group">
                <label for="admin_notes">Admin Notes:</label>
                <textarea 
                    name="admin_notes" 
                    id="admin_notes" 
                    rows="4" 
                    class="form-textarea"
                    placeholder="Add internal notes about this request..."
                >{{ old('admin_notes', $hireAgentRequest->admin_notes) }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-update">Update Request</button>
            </div>
        </form>
    </div>

    <!-- Admin Notes Display -->
    @if($hireAgentRequest->admin_notes)
    <div class="admin-notes-section">
        <h2>Admin Notes</h2>
        <div class="admin-notes-content">
            {{ $hireAgentRequest->admin_notes }}
        </div>
    </div>
    @endif
</div>

<style>
.content-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 30px;
}

.header-actions {
    display: flex;
    gap: 10px;
}

.btn-back {
    padding: 8px 16px;
    background: #6c757d;
    color: white;
    text-decoration: none;
    border-radius: 4px;
}

.info-section, .details-section, .admin-actions, .admin-notes-section {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 15px;
}

.info-item {
    padding: 10px 0;
    border-bottom: 1px solid #f0f0f0;
}

.detail-item {
    margin-bottom: 20px;
}

.description-content {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 4px;
    border-left: 4px solid #1a365d;
    white-space: pre-wrap;
}

.admin-form {
    margin-top: 20px;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: 600;
}

.form-select, .form-input, .form-textarea {
    width: 100%;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.form-textarea {
    resize: vertical;
    min-height: 100px;
}

.form-actions {
    margin-top: 20px;
}

.btn-update {
    padding: 10px 20px;
    background: #1a365d;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn-update:hover {
    background: #2c5282;
}

.admin-notes-content {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 4px;
    border-left: 4px solid #1a365d;
    white-space: pre-wrap;
}

.category-badge, .status-badge {
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
}

.category-badge {
    background: #e3f2fd;
    color: #1976d2;
}

.status-badge {
    background: #e8f5e8;
    color: #2e7d32;
}

.status-badge.status-new {
    background: #ffebee;
    color: #d32f2f;
}

.status-badge.status-in_progress {
    background: #e3f2fd;
    color: #1976d2;
}

.status-badge.status-assigned {
    background: #e8f5e8;
    color: #2e7d32;
}

.status-badge.status-completed {
    background: #e8f5e8;
    color: #2e7d32;
}

.status-badge.status-cancelled {
    background: #f5f5f5;
    color: #616161;
}
</style>
@endsection
