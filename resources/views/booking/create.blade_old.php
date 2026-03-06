@extends('layouts.app')

@section('title', 'Book a Transport')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Book a Transport</h4>
    </div>

    <div class="card-body">

        <!-- @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif -->

        <form method="POST" action="/booking">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Service Type <span class="text-danger">*</span></label>
                    <select name="service_type" class="form-select" required>
                        <option value="">Select Service</option>
                        <option value="gurney">Gurney ($120)</option>
                        <option value="wheelchair">Wheelchair ($60)</option>
                        <option value="ambulatory">Ambulatory ($50)</option>
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Full Name <span class="text-danger">*</span></label>
                    <input type="text" name="name" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label class="form-label">Pickup Location <span class="text-danger">*</span></label>
                    <input type="text" name="pickup_location" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Dropoff Location (Optional)</label>
                <input type="text" name="dropoff_location" class="form-control">
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary">
                    Submit Booking
                </button>
            </div>

        </form>
    </div>
</div>

@endsection