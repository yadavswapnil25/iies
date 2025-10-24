@extends('admin.layouts.app')

@section('title', 'Edit NOC Report - Admin Panel')

@section('content')
<div class="page-header">
    <h1 class="page-title">Edit NOC Report: {{ $clientReport->unique_id }}</h1>
</div>

<form method="POST" action="{{ route('admin.client-reports.update', $clientReport) }}">
    @csrf
    @method('PUT')
    @include('admin.client-reports.form', ['clientReport' => $clientReport])
</form>
@endsection

