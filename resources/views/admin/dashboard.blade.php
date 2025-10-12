@extends('admin.layouts.app')

@section('title', 'Dashboard - Admin Panel')

@section('content')
<div class="page-header">
    <h1 class="page-title">Dashboard</h1>
</div>

<!-- Statistics Cards -->
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-label">Total Users</div>
        <div class="stat-value">{{ $totalUsers }}</div>
    </div>

    <div class="stat-card">
        <div class="stat-label">Admin Users</div>
        <div class="stat-value">{{ $adminUsers }}</div>
    </div>

    <div class="stat-card">
        <div class="stat-label">Regular Users</div>
        <div class="stat-value">{{ $regularUsers }}</div>
    </div>
</div>

<!-- Recent Users -->
<div class="card">
    <h2 class="card-title">Recent Users</h2>
    
    @if($recentUsers->count() > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Joined</th>
                </tr>
            </thead>
            <tbody>
                @foreach($recentUsers as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->is_admin)
                            <span class="badge badge-success">Admin</span>
                        @else
                            <span class="badge badge-secondary">User</span>
                        @endif
                    </td>
                    <td>{{ $user->created_at->format('M d, Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p style="color: #6b7280; text-align: center; padding: 20px;">No users found.</p>
    @endif
</div>
@endsection

