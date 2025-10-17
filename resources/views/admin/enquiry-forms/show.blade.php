@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="header-actions">
        <a href="{{ route('admin.enquiry-forms.index') }}" class="btn-back">← Back to Enquiries</a>
    </div>
    <h1>Enquiry Form Details</h1>
    <p>Reference ID: <strong>{{ $enquiry->reference_id }}</strong></p>
</div>

<div class="content-body">
    <!-- Enquiry Information -->
    <div class="info-section">
        <h2>Enquiry Information</h2>
        <div class="info-grid">
            <div class="info-item">
                <strong>Name:</strong> {{ $enquiry->full_name }}
            </div>
            <div class="info-item">
                <strong>Email:</strong> {{ $enquiry->email }}
            </div>
            <div class="info-item">
                <strong>Phone:</strong> {{ $enquiry->phone }}
            </div>
            @if($enquiry->organization)
            <div class="info-item">
                <strong>Organization:</strong> {{ $enquiry->organization }}
            </div>
            @endif
            @if($enquiry->designation)
            <div class="info-item">
                <strong>Designation:</strong> {{ $enquiry->designation }}
            </div>
            @endif
            @if($enquiry->address)
            <div class="info-item full-width">
                <strong>Address:</strong> {{ $enquiry->address }}
            </div>
            @endif
            <div class="info-item">
                <strong>Enquiry Type:</strong> {{ $enquiry->enquiry_type_display }}
            </div>
            <div class="info-item">
                <strong>Priority:</strong> 
                <span class="priority-badge priority-{{ $enquiry->priority }}">
                    {{ ucfirst($enquiry->priority) }}
                </span>
            </div>
            <div class="info-item">
                <strong>Status:</strong> 
                <span class="status-badge status-{{ $enquiry->status }}">
                    {{ ucfirst(str_replace('_', ' ', $enquiry->status)) }}
                </span>
            </div>
            <div class="info-item">
                <strong>Submitted:</strong> {{ $enquiry->created_at->format('F d, Y \a\t H:i') }}
            </div>
            @if($enquiry->resolved_at)
            <div class="info-item">
                <strong>Resolved:</strong> {{ $enquiry->resolved_at->format('F d, Y \a\t H:i') }}
            </div>
            @endif
        </div>
    </div>

    <!-- Enquiry Details -->
    <div class="details-section">
        <h2>Enquiry Details</h2>
        <div class="detail-item">
            <strong>Subject:</strong>
            <p>{{ $enquiry->enquiry_subject }}</p>
        </div>
        <div class="detail-item">
            <strong>Description:</strong>
            <div class="description-content">
                {{ $enquiry->enquiry_description }}
            </div>
        </div>
        @if($enquiry->reference_number)
        <div class="detail-item">
            <strong>Reference Number:</strong>
            <p>{{ $enquiry->reference_number }}</p>
        </div>
        @endif
    </div>

    <!-- Supporting Documents -->
    @if($enquiry->documents && count($enquiry->documents) > 0)
    <div class="documents-section">
        <h2>Supporting Documents</h2>
        <div class="documents-list">
            @foreach($enquiry->documents as $document)
            <div class="document-item">
                <span class="document-icon">📎</span>
                <a href="{{ Storage::url($document) }}" target="_blank" class="document-link">
                    {{ basename($document) }}
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- Communication Preferences -->
    <div class="preferences-section">
        <h2>Communication Preferences</h2>
        <div class="preferences-grid">
            <div class="preference-item">
                <strong>Email Updates:</strong> 
                <span class="preference-status {{ $enquiry->email_updates ? 'enabled' : 'disabled' }}">
                    {{ $enquiry->email_updates ? 'Enabled' : 'Disabled' }}
                </span>
            </div>
            <div class="preference-item">
                <strong>SMS Updates:</strong> 
                <span class="preference-status {{ $enquiry->sms_updates ? 'enabled' : 'disabled' }}">
                    {{ $enquiry->sms_updates ? 'Enabled' : 'Disabled' }}
                </span>
            </div>
        </div>
    </div>

    <!-- Admin Actions -->
    <div class="admin-actions">
        <h2>Admin Actions</h2>
        <form method="POST" action="{{ route('admin.enquiry-forms.update', $enquiry) }}" class="admin-form">
            @csrf
            @method('PUT')
            
            <div class="form-row">
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" id="status" class="form-select">
                        <option value="new" {{ $enquiry->status == 'new' ? 'selected' : '' }}>New</option>
                        <option value="in_progress" {{ $enquiry->status == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                        <option value="resolved" {{ $enquiry->status == 'resolved' ? 'selected' : '' }}>Resolved</option>
                        <option value="closed" {{ $enquiry->status == 'closed' ? 'selected' : '' }}>Closed</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="priority">Priority:</label>
                    <select name="priority" id="priority" class="form-select">
                        <option value="normal" {{ $enquiry->priority == 'normal' ? 'selected' : '' }}>Normal</option>
                        <option value="high" {{ $enquiry->priority == 'high' ? 'selected' : '' }}>High</option>
                        <option value="urgent" {{ $enquiry->priority == 'urgent' ? 'selected' : '' }}>Urgent</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="admin_notes">Admin Notes:</label>
                <textarea 
                    name="admin_notes" 
                    id="admin_notes" 
                    rows="4" 
                    class="form-textarea"
                    placeholder="Add internal notes about this enquiry..."
                >{{ old('admin_notes', $enquiry->admin_notes) }}</textarea>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-update">Update Enquiry</button>
            </div>
        </form>
    </div>

    <!-- Admin Notes Display -->
    @if($enquiry->admin_notes)
    <div class="admin-notes-section">
        <h2>Admin Notes</h2>
        <div class="admin-notes-content">
            {{ $enquiry->admin_notes }}
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

.info-section, .details-section, .documents-section, .preferences-section, .admin-actions, .admin-notes-section {
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

.info-item.full-width {
    grid-column: 1 / -1;
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

.documents-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.document-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px;
    background: #f8f9fa;
    border-radius: 4px;
}

.document-link {
    color: #1a365d;
    text-decoration: none;
}

.document-link:hover {
    text-decoration: underline;
}

.preferences-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
}

.preference-status {
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 500;
}

.preference-status.enabled {
    background: #e8f5e8;
    color: #2e7d32;
}

.preference-status.disabled {
    background: #f5f5f5;
    color: #616161;
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

.form-select, .form-textarea {
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

.status-badge.status-in_progress {
    background: #e3f2fd;
    color: #1976d2;
}

.status-badge.status-resolved {
    background: #e8f5e8;
    color: #2e7d32;
}

.status-badge.status-closed {
    background: #f5f5f5;
    color: #616161;
}
</style>
@endsection
