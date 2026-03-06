@extends('layouts.app')

@section('title', 'Reports')

@section('content')

<h2 class="fw-bold mb-4">Monthly Report</h2>

<div class="card card-premium p-4">
    <h4>This Month's Bookings</h4>
    <h2 class="text-primary mt-3">
        {{ $monthly->total ?? 0 }}
    </h2>
</div>

@endsection