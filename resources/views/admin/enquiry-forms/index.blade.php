@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <h1>Enquiry Forms</h1>
    <p>Manage and respond to enquiry form submissions</p>
</div>

<div class="content-body">
    <!-- Search and Filter Section -->
    <div class="search-filters">
        <form method="GET" class="search-form">
            <div class="search-row">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search enquiries..." 
                    value="{{ request('search') }}"
                    class="search-input"
                >
                
                <select name="status" class="filter-select">
                    <option value="">All Status</option>
                    <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                    <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                    <option value="resolved" {{ request('status') == 'resolved' ? 'selected' : '' }}>Resolved</option>
                    <option value="closed" {{ request('status') == 'closed' ? 'selected' : '' }}>Closed</option>
                </select>

                <select name="priority" class="filter-select">
                    <option value="">All Priority</option>
                    <option value="normal" {{ request('priority') == 'normal' ? 'selected' : '' }}>Normal</option>
                    <option value="high" {{ request('priority') == 'high' ? 'selected' : '' }}>High</option>
                    <option value="urgent" {{ request('priority') == 'urgent' ? 'selected' : '' }}>Urgent</option>
                </select>

                <select name="enquiry_type" class="filter-select">
                    <option value="">All Types</option>
                    <option value="noc" {{ request('enquiry_type') == 'noc' ? 'selected' : '' }}>NOC</option>
                    <option value="agent" {{ request('enquiry_type') == 'agent' ? 'selected' : '' }}>Agent Related</option>
                    <option value="procedure" {{ request('enquiry_type') == 'procedure' ? 'selected' : '' }}>Procedure</option>
                    <option value="fee" {{ request('enquiry_type') == 'fee' ? 'selected' : '' }}>Fee Structure</option>
                    <option value="technical" {{ request('enquiry_type') == 'technical' ? 'selected' : '' }}>Technical</option>
                    <option value="general" {{ request('enquiry_type') == 'general' ? 'selected' : '' }}>General</option>
                    <option value="complaint" {{ request('enquiry_type') == 'complaint' ? 'selected' : '' }}>Complaint</option>
                    <option value="other" {{ request('enquiry_type') == 'other' ? 'selected' : '' }}>Other</option>
                </select>

                <button type="submit" class="btn-search">Search</button>
                <a href="{{ route('admin.enquiry-forms.index') }}" class="btn-clear">Clear</a>
            </div>
        </form>
    </div>

    <!-- Enquiry Forms Table -->
    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Reference ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Type</th>
                    <th>Priority</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($enquiryForms as $enquiry)
                <tr>
                    <td>
                        <strong>{{ $enquiry->reference_id }}</strong>
                    </td>
                    <td>
                        <strong>{{ $enquiry->full_name }}</strong>
                        @if($enquiry->organization)
                            <br><small>{{ $enquiry->organization }}</small>
                        @endif
                    </td>
                    <td>{{ $enquiry->email }}</td>
                    <td>
                        <div class="subject-cell">
                            {{ Str::limit($enquiry->enquiry_subject, 50) }}
                        </div>
                    </td>
                    <td>
                        <span class="type-badge type-{{ $enquiry->enquiry_type }}">
                            {{ $enquiry->enquiry_type_display }}
                        </span>
                    </td>
                    <td>
                        <span class="priority-badge priority-{{ $enquiry->priority }}">
                            {{ ucfirst($enquiry->priority) }}
                        </span>
                    </td>
                    <td>
                        <span class="status-badge status-{{ $enquiry->status }}">
                            {{ ucfirst(str_replace('_', ' ', $enquiry->status)) }}
                        </span>
                    </td>
                    <td>{{ $enquiry->created_at->format('M d, Y') }}</td>
                    <td>
                        <a href="{{ route('admin.enquiry-forms.show', $enquiry) }}" class="btn-view">View</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="no-data">
                        <div class="no-data-content">
                            <div class="no-data-icon">📋</div>
                            <h3>No Enquiry Forms Found</h3>
                            <p>No enquiry forms match your current search criteria.</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if($enquiryForms->hasPages())
    <div class="pagination-container">
        {{ $enquiryForms->links() }}
    </div>
    @endif
</div>

<style>
.search-filters {
    background: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.search-row {
    display: flex;
    gap: 10px;
    align-items: center;
    flex-wrap: wrap;
}

.search-input {
    flex: 1;
    min-width: 200px;
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.filter-select {
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    background: white;
}

.btn-search, .btn-clear {
    padding: 8px 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
}

.btn-search {
    background: #1a365d;
    color: white;
}

.btn-clear {
    background: #6c757d;
    color: white;
}

.table-container {
    background: white;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.data-table {
    width: 100%;
    border-collapse: collapse;
}

.data-table th {
    background: #f8f9fa;
    padding: 15px;
    text-align: left;
    font-weight: 600;
    border-bottom: 2px solid #dee2e6;
}

.data-table td {
    padding: 15px;
    border-bottom: 1px solid #dee2e6;
    vertical-align: top;
}

.subject-cell {
    max-width: 200px;
    word-wrap: break-word;
}

.type-badge, .priority-badge, .status-badge {
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
}

.type-badge {
    background: #e3f2fd;
    color: #1976d2;
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

.btn-view {
    padding: 6px 12px;
    background: #1a365d;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    font-size: 12px;
}

.btn-view:hover {
    background: #2c5282;
}

.no-data {
    text-align: center;
    padding: 40px;
}

.no-data-content {
    color: #6c757d;
}

.no-data-icon {
    font-size: 48px;
    margin-bottom: 16px;
}

.pagination-container {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}
</style>
@endsection
