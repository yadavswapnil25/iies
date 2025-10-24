@extends('admin.layouts.app')

@section('content')
<div class="content-header">
    <div class="header-actions">
        <a href="{{ route('admin.finance-ministers.index') }}" class="btn-back">← Back to Finance Ministers</a>
        <a href="{{ route('admin.finance-ministers.edit', $financeMinister) }}" class="btn-edit">Edit Minister</a>
    </div>
    <h1>Finance Minister Details</h1>
    <p>View minister information</p>
</div>

<div class="content-body">
    <div class="minister-details">
        <div class="minister-header">
            <div class="minister-image">
                @if($financeMinister->image_path)
                    <img src="{{ $financeMinister->image_url }}" alt="{{ $financeMinister->name }}" class="minister-photo">
                @else
                    <div class="no-image">No Image</div>
                @endif
            </div>
            <div class="minister-info">
                <h2>{{ $financeMinister->name }}</h2>
                @if($financeMinister->hindi_name)
                    <h3 class="hindi-name">{{ $financeMinister->hindi_name }}</h3>
                @endif
                <div class="designation-badge designation-{{ strtolower(str_replace(' ', '-', $financeMinister->designation)) }}">
                    {{ $financeMinister->designation }}
                </div>
                @if($financeMinister->hindi_designation)
                    <div class="hindi-designation">{{ $financeMinister->hindi_designation }}</div>
                @endif
                <div class="status-badge status-{{ $financeMinister->is_active ? 'active' : 'inactive' }}">
                    {{ $financeMinister->is_active ? 'Active' : 'Inactive' }}
                </div>
            </div>
        </div>

        <div class="minister-content">
            @if($financeMinister->bio)
            <div class="bio-section">
                <h3>Biography (English)</h3>
                <p>{{ $financeMinister->bio }}</p>
            </div>
            @endif

            @if($financeMinister->hindi_bio)
            <div class="bio-section">
                <h3>Biography (Hindi)</h3>
                <p>{{ $financeMinister->hindi_bio }}</p>
            </div>
            @endif

            <div class="minister-meta">
                <div class="meta-item">
                    <strong>Sort Order:</strong> {{ $financeMinister->sort_order }}
                </div>
                <div class="meta-item">
                    <strong>Created:</strong> {{ $financeMinister->created_at->format('M d, Y H:i') }}
                </div>
                <div class="meta-item">
                    <strong>Last Updated:</strong> {{ $financeMinister->updated_at->format('M d, Y H:i') }}
                </div>
            </div>
        </div>
    </div>
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

.btn-back, .btn-edit {
    padding: 8px 16px;
    background: #6c757d;
    color: white;
    text-decoration: none;
    border-radius: 4px;
}

.btn-edit {
    background: #1a365d;
}

.minister-details {
    background: white;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.minister-header {
    display: flex;
    gap: 30px;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e9ecef;
}

.minister-image {
    flex-shrink: 0;
}

.minister-photo {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #ddd;
}

.no-image {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    background: #f8f9fa;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 16px;
    color: #6c757d;
    border: 4px solid #ddd;
}

.minister-info {
    flex: 1;
}

.minister-info h2 {
    color: #1a365d;
    font-size: 2rem;
    margin-bottom: 10px;
}

.hindi-name {
    color: #6c757d;
    font-size: 1.5rem;
    margin-bottom: 15px;
    font-weight: normal;
}

.designation-badge {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: 10px;
    background: #e3f2fd;
    color: #1976d2;
}

.hindi-designation {
    color: #6c757d;
    font-size: 1.1rem;
    margin-bottom: 15px;
}

.status-badge {
    display: inline-block;
    padding: 6px 12px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 600;
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

.minister-content {
    margin-top: 20px;
}

.bio-section {
    margin-bottom: 25px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
}

.bio-section h3 {
    color: #1a365d;
    margin-bottom: 15px;
    font-size: 1.2rem;
}

.bio-section p {
    line-height: 1.6;
    color: #555;
    margin: 0;
}

.minister-meta {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
    margin-top: 30px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
}

.meta-item {
    font-size: 14px;
}

.meta-item strong {
    color: #1a365d;
    display: block;
    margin-bottom: 5px;
}

@media (max-width: 768px) {
    .minister-header {
        flex-direction: column;
        text-align: center;
    }
    
    .minister-photo, .no-image {
        width: 150px;
        height: 150px;
        margin: 0 auto;
    }
    
    .minister-meta {
        grid-template-columns: 1fr;
    }
}
</style>
@endsection
