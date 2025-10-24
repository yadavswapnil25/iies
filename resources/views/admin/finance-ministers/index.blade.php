@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <h1>Finance Ministers Management</h1>
    <p>Manage Finance Minister and Minister of State information</p>
</div>

<div class="content-body">
    <!-- Search and Filter Section -->
    <div class="search-filters">
        <form method="GET" class="search-form">
            <div class="search-row">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search ministers..." 
                    value="{{ request('search') }}"
                    class="search-input"
                >
                
                <select name="designation" class="filter-select">
                    <option value="">All Designations</option>
                    <option value="Finance Minister" {{ request('designation') == 'Finance Minister' ? 'selected' : '' }}>Finance Minister</option>
                    <option value="Minister of State" {{ request('designation') == 'Minister of State' ? 'selected' : '' }}>Minister of State</option>
                </select>

                <select name="status" class="filter-select">
                    <option value="">All Status</option>
                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>

                <button type="submit" class="btn-search">Search</button>
                <a href="{{ route('admin.finance-ministers.index') }}" class="btn-clear">Clear</a>
                <a href="{{ route('admin.finance-ministers.create') }}" class="btn-create">Add Minister</a>
            </div>
        </form>
    </div>

    <!-- Ministers Table -->
    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Bio</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ministers as $minister)
                <tr>
                    <td>
                        @if($minister->image_path)
                            <img src="{{ $minister->image_url }}" alt="{{ $minister->name }}" class="minister-thumb">
                        @else
                            <div class="no-image">No Image</div>
                        @endif
                    </td>
                    <td>
                        <strong>{{ $minister->name }}</strong>
                        @if($minister->hindi_name)
                            <br><small class="text-muted">{{ $minister->hindi_name }}</small>
                        @endif
                    </td>
                    <td>
                        <span class="designation-badge designation-{{ strtolower(str_replace(' ', '-', $minister->designation)) }}">
                            {{ $minister->designation }}
                        </span>
                        @if($minister->hindi_designation)
                            <br><small class="text-muted">{{ $minister->hindi_designation }}</small>
                        @endif
                    </td>
                    <td>
                        @if($minister->bio)
                            <div class="bio-preview">{{ Str::limit($minister->bio, 100) }}</div>
                        @else
                            <span class="text-muted">No bio available</span>
                        @endif
                    </td>
                    <td>
                        <span class="status-badge status-{{ $minister->is_active ? 'active' : 'inactive' }}">
                            {{ $minister->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.finance-ministers.show', $minister) }}" class="btn-view">View</a>
                        <a href="{{ route('admin.finance-ministers.edit', $minister) }}" class="btn-edit">Edit</a>
                        <form method="POST" action="{{ route('admin.finance-ministers.destroy', $minister) }}" 
                              style="display: inline;" onsubmit="return confirm('Are you sure you want to delete this minister?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="no-data">
                        <div class="no-data-content">
                            <div class="no-data-icon">👤</div>
                            <h3>No Ministers Found</h3>
                            <p>No ministers match your current search criteria.</p>
                            <a href="{{ route('admin.finance-ministers.create') }}" class="btn-create">Add First Minister</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if($ministers->hasPages())
    <div class="pagination-container">
        {{ $ministers->links() }}
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

.btn-search, .btn-clear, .btn-create {
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

.btn-create {
    background: #28a745;
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

.minister-thumb {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #ddd;
}

.no-image {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 12px;
    color: #6c757d;
    border: 2px solid #ddd;
}

.designation-badge, .status-badge {
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 12px;
    font-weight: 500;
    text-transform: uppercase;
}

.designation-badge {
    background: #e3f2fd;
    color: #1976d2;
}

.status-badge.status-active {
    background: #d1fae5;
    color: #065f46;
}

.status-badge.status-inactive {
    background: #fef2f2;
    color: #dc2626;
}

.btn-view, .btn-edit, .btn-delete {
    padding: 6px 12px;
    margin: 2px;
    border-radius: 4px;
    font-size: 12px;
    text-decoration: none;
    display: inline-block;
    border: none;
    cursor: pointer;
}

.btn-view {
    background: #1a365d;
    color: white;
}

.btn-edit {
    background: #6c757d;
    color: white;
}

.btn-delete {
    background: #dc3545;
    color: white;
}

.bio-preview {
    font-size: 14px;
    color: #555;
    line-height: 1.4;
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

.text-muted {
    color: #6c757d;
    font-style: italic;
}
</style>
@endsection
