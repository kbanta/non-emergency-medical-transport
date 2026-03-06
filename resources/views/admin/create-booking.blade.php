@extends('layouts.app')

@section('title', 'Create Booking')

@section('content')

<h2 class="fw-bold mb-4">Create Booking</h2>

<div class="card card-premium p-4">

<form method="POST" action="{{ route('admin.bookings.store') }}">
    @csrf

    <div class="mb-3">
        <label>Service Type</label>
        <select name="service_type" class="form-control" required>
            <option value="gurney">Gurney</option>
            <option value="wheelchair">Wheelchair</option>
            <option value="ambulatory">Ambulatory</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Client Name</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Pickup Location</label>
        <input type="text" name="pickup_location" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Dropoff Location</label>
        <input type="text" name="dropoff_location" class="form-control" required>
    </div>

    <button class="btn btn-primary btn-premium">
        Create Booking
    </button>

</form>

</div>

@endsection