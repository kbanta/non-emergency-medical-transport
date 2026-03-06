@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

<h2 class="fw-bold mb-4">Operations Dashboard</h2>

<!-- KPI SECTION -->
<div class="row g-4 mb-4">

    <div class="col-md-3">
        <div class="card card-premium p-4">
            <div class="stat-title">Total Bookings</div>
            <div class="stat-number text-primary">
                {{ $total }}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-premium p-4">
            <div class="stat-title">Pending</div>
            <div class="stat-number text-warning">
                {{ $pending }}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-premium p-4">
            <div class="stat-title">Confirmed</div>
            <div class="stat-number text-success">
                {{ $confirmed }}
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-premium p-4">
            <div class="stat-title">Today’s Bookings</div>
            <div class="stat-number text-danger">
                {{ $today ?? 0 }}
            </div>
        </div>
    </div>

</div>

<!-- SERVICE BREAKDOWN -->
<div class="row g-4 mb-4">

    <div class="col-md-6">
        <div class="card card-premium p-4">
            <h5 class="fw-bold mb-3">Service Distribution</h5>

            <div class="d-flex justify-content-between mb-2">
                <span>Gurney Transport</span>
                <span class="fw-bold text-primary">{{ $gurney ?? 0 }}</span>
            </div>

            <div class="d-flex justify-content-between mb-2">
                <span>Wheelchair Transport</span>
                <span class="fw-bold text-success">{{ $wheelchair ?? 0 }}</span>
            </div>

            <div class="d-flex justify-content-between">
                <span>Ambulatory</span>
                <span class="fw-bold text-danger">{{ $ambulatory ?? 0 }}</span>
            </div>

        </div>
    </div>

    <div class="col-md-6">
        <div class="card card-premium p-4">
            <h5 class="fw-bold mb-3">Compliance & Safety</h5>

            <p class="mb-2">✔ Fully Insured Vehicles</p>
            <p class="mb-2">✔ Background Checked Drivers</p>
            <p class="mb-2">✔ ADA Compliant Transport</p>
            <p class="mb-0">✔ State Licensed Operations</p>

        </div>
    </div>

</div>

<!-- QUICK ACTIONS -->
<div class="card card-premium p-4 mb-4">
    <h5 class="fw-bold mb-3">Quick Actions</h5>

    <div class="row g-3">

        <div class="col-md-3">
            <a href="{{ route('admin.bookings') }}"
                class="btn btn-primary w-100 btn-premium">
                Manage Bookings
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.bookings.create') }}"
                class="btn btn-success w-100 btn-premium">
                Create Booking
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.reports') }}"
                class="btn btn-outline-primary w-100 btn-premium">
                Generate Report
            </a>
        </div>

        <div class="col-md-3">
            <a href="{{ route('admin.dashboard') }}"
                class="btn btn-outline-danger w-100 btn-premium">
                Refresh Dashboard
            </a>
        </div>

    </div>
</div>

@endsection