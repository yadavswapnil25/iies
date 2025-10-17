@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <h1>Agents Management</h1>
    <p>Manage registered facilitation agents</p>
</div>

<div class="content-body">
    <!-- Search and Filter Section -->
    <div class="search-filters">
        <form method="GET" class="search-form">
            <div class="search-row">
                <input 
                    type="text" 
                    name="search" 
                    placeholder="Search agents..." 
                    value="{{ request('search') }}"
                    class="search-input"
                >
                
                <select name="category" class="filter-select">
                    <option value="">All Categories</option>
                    <option value="category-a" {{ request('category') == 'category-a' ? 'selected' : '' }}>Category A</option>
                    <option value="category-b" {{ request('category') == 'category-b' ? 'selected' : '' }}>Category B</option>
                    <option value="category-c" {{ request('category') == 'category-c' ? 'selected' : '' }}>Category C</option>
                    <option value="category-d" {{ request('category') == 'category-d' ? 'selected' : '' }}>Category D</option>
                    <option value="category-e" {{ request('category') == 'category-e' ? 'selected' : '' }}>Category E</option>
                </select>

                <select name="status" class="filter-select">
                    <option value="">All Status</option>
                    <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>

                <button type="submit" class="btn-search">Search</button>
                <a href="{{ route('admin.agents.index') }}" class="btn-clear">Clear</a>
                <a href="{{ route('admin.agents.create') }}" class="btn-create">Add Agent</a>
            </div>
        </form>
    </div>

    <!-- Agents Table -->
    <div class="table-container">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Agent Code</th>
                    <th>Category</th>
                    <th>Experience</th>
                    <th>Contact</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($agents as $agent)
                <tr>
                    <td>
                        <strong>{{ $agent->name }}</strong>
                        @if($agent->specialization)
                            <br><small class="text-muted">{{ $agent->specialization }}</small>
                        @endif
                    </td>
                    <td>
                        <code>{{ $agent->agent_code }}</code>
                    </td>
                    <td>
                        <span class="category-badge category-{{ $agent->category }}">
                            {{ $agent->category_display }}
                        </span>
                    </td>
                    <td>{{ $agent->experience_years }} years</td>
                    <td>
                        @if($agent->phone)
                            <div>{{ $agent->phone }}</div>
                        @endif
                        @if($agent->email)
                            <div><small>{{ $agent->email }}</small></div>
                        @endif
                    </td>
                    <td>
                        <span class="status-badge status-{{ $agent->is_active ? 'active' : 'inactive' }}">
                            {{ $agent->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.agents.show', $agent) }}" class="btn-view">View</a>
                        <a href="{{ route('admin.agents.edit', $agent) }}" class="btn-edit">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="no-data">
                        <div class="no-data-content">
                            <div class="no-data-icon">👥</div>
                            <h3>No Agents Found</h3>
                            <p>No agents match your current search criteria.</p>
                            <a href="{{ route('admin.agents.create') }}" class="btn-create">Add First Agent</a>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    @if($agents->hasPages())
    <div class="pagination-container">
        {{ $agents->links() }}
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

.status-badge.status-active {
    background: #d1fae5;
    color: #065f46;
}

.status-badge.status-inactive {
    background: #fef2f2;
    color: #dc2626;
}

.btn-view, .btn-edit {
    padding: 6px 12px;
    margin: 2px;
    border-radius: 4px;
    font-size: 12px;
    text-decoration: none;
    display: inline-block;
}

.btn-view {
    background: #1a365d;
    color: white;
}

.btn-edit {
    background: #6c757d;
    color: white;
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

code {
    background: #f8f9fa;
    padding: 2px 6px;
    border-radius: 3px;
    font-family: monospace;
    font-size: 12px;
}
</style>
@endsection
