@extends('admin.layouts.app')

@section('title', 'Client Reports - Admin Panel')

@section('content')
<div class="page-header" style="display: flex; justify-content: space-between; align-items: center;">
    <h1 class="page-title">NOC Progress Reports</h1>
    <a href="{{ route('admin.client-reports.create') }}" class="btn btn-primary">+ Create New Report</a>
</div>

<!-- Search and Filter -->
<div class="card" style="margin-bottom: 20px;">
    <form method="GET" action="{{ route('admin.client-reports.index') }}" style="display: flex; gap: 15px; align-items: end;">
        <div style="flex: 1;">
            <label class="form-label">Search</label>
            <input 
                type="text" 
                name="search" 
                class="form-input" 
                placeholder="Search by Unique ID, Name, or File No..." 
                value="{{ request('search') }}"
                style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px;"
            >
        </div>
        <!-- <div style="min-width: 200px;">
            <label class="form-label">Status</label>
            <select 
                name="status" 
                class="form-input"
                style="width: 100%; padding: 10px; border: 1px solid #e5e7eb; border-radius: 6px;"
            >
                <option value="">All Statuses</option>
                <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>In Progress</option>
                <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Completed</option>
                <option value="on_hold" {{ request('status') == 'on_hold' ? 'selected' : '' }}>On Hold</option>
                <option value="rejected" {{ request('status') == 'rejected' ? 'selected' : '' }}>Rejected</option>
            </select>
        </div> -->
        <button type="submit" class="btn btn-primary" style="padding: 10px 20px;">Search</button>
        <a href="{{ route('admin.client-reports.index') }}" class="btn btn-secondary" style="padding: 10px 20px;">Clear</a>
    </form>
</div>

<!-- Reports Table -->
<div class="card">
    @if($reports->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>Unique ID</th>
                    <th>Full Name</th>
                    <th>File No.</th>
                    <th>Amount</th>
                    <!-- <th>Status</th> -->
                    <th>Created</th>
                    <th style="text-align: center;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reports as $report)
                <tr>
                    <td><strong>{{ $report->unique_id }}</strong></td>
                    <td>{{ $report->full_name }}</td>
                    <td>{{ $report->file_no ?? 'N/A' }}</td>
                    <td>{{ $report->currency ?? '' }} {{ number_format($report->amount ?? 0, 2) }}</td>
                    <!-- <td>
                        <span class="badge badge-{{ $report->status_color }}">
                            {{ ucfirst(str_replace('_', ' ', $report->status)) }}
                        </span>
                    </td> -->
                    <td>{{ $report->created_at->format('M d, Y') }}</td>
                    <td style="text-align: center;">
                        <div style="display: flex; gap: 10px; justify-content: center;">
                            <a href="{{ route('admin.client-reports.show', $report) }}" class="btn-link" title="View">👁️</a>
                            <a href="{{ route('admin.client-reports.edit', $report) }}" class="btn-link" title="Edit">✏️</a>
                            <form method="POST" action="{{ route('admin.client-reports.destroy', $report) }}" style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this report?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-link" style="background: none; border: none; cursor: pointer; font-size: 16px;" title="Delete">🗑️</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination -->
        @if($reports->hasPages())
            <div style="margin-top: 20px; display: flex; justify-content: center; gap: 10px; align-items: center;">
                @if($reports->onFirstPage())
                    <span style="padding: 8px 12px; background: #e5e7eb; border-radius: 6px; color: #9ca3af;">Previous</span>
                @else
                    <a href="{{ $reports->previousPageUrl() }}" class="btn btn-secondary">Previous</a>
                @endif

                <span style="padding: 8px 12px;">Page {{ $reports->currentPage() }} of {{ $reports->lastPage() }}</span>

                @if($reports->hasMorePages())
                    <a href="{{ $reports->nextPageUrl() }}" class="btn btn-secondary">Next</a>
                @else
                    <span style="padding: 8px 12px; background: #e5e7eb; border-radius: 6px; color: #9ca3af;">Next</span>
                @endif
            </div>
        @endif
    @else
        <div style="text-align: center; padding: 60px 20px;">
            <div style="font-size: 48px; margin-bottom: 20px;">📄</div>
            <h3 style="color: #6b7280; margin-bottom: 10px;">No Reports Found</h3>
            <p style="color: #9ca3af; margin-bottom: 20px;">Get started by creating your first client report.</p>
            <a href="{{ route('admin.client-reports.create') }}" class="btn btn-primary">Create New Report</a>
        </div>
    @endif
</div>

@push('styles')
<style>
    .btn-link {
        text-decoration: none;
        font-size: 18px;
        transition: transform 0.2s;
        display: inline-block;
    }
    .btn-link:hover {
        transform: scale(1.2);
    }
    .form-label {
        display: block;
        margin-bottom: 5px;
        font-weight: 500;
        color: #374151;
        font-size: 14px;
    }
    .form-input {
        font-size: 14px;
    }
    .badge-primary {
        background: #dbeafe;
        color: #1e40af;
    }
    .badge-warning {
        background: #fef3c7;
        color: #92400e;
    }
    .badge-danger {
        background: #fee2e2;
        color: #991b1b;
    }
</style>
@endpush
@endsection

