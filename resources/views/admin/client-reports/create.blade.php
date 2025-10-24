@extends('admin.layouts.app')

@section('title', 'Create NOC Report - Admin Panel')

@section('content')
<div class="page-header">
    <h1 class="page-title">Create New NOC Report</h1>
</div>
<br>

<form method="POST" action="{{ route('admin.client-reports.store') }}">
    @csrf
    @include('admin.client-reports.form', ['uniqueId' => $uniqueId])
</form>
@endsection

