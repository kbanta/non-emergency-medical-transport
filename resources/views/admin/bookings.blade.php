@extends('layouts.app')

@section('title', 'Manage Bookings')

@section('content')

<h2 class="fw-bold mb-4">Manage Bookings</h2>

<div class="card card-premium p-4">

    <table id="bookingsTable" class="table align-middle table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Service</th>
                <th>Client</th>
                <th>Pickup</th>
                <th>Status</th>
                <th>Date</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @forelse($bookings as $booking)
            <tr>
                <td>{{ $booking->id }}</td>
                <td>{{ ucfirst($booking->service_type) }}</td>
                <td>{{ $booking->name }}</td>
                <td>{{ $booking->pickup_location }}</td>

                <td>
                    @if($booking->status == 'pending')
                    <span class="badge bg-warning">Pending</span>
                    @elseif($booking->status == 'confirmed')
                    <span class="badge bg-success">Confirmed</span>
                    @else
                    <span class="badge bg-secondary">{{ $booking->status }}</span>
                    @endif
                </td>

                <td>{{ $booking->created_at->format('M d, Y') }}</td>

                <td>
                    <a href="#" class="btn btn-sm btn-outline-primary">
                        View
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center text-muted">
                    No bookings found.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>
@push('scripts')
<script>
    $(document).ready(function() {
        $('#bookingsTable').DataTable({
            pageLength: 10,
            order: [
                [0, 'desc']
            ],
            searching: true
        });
    });
</script>
@endpush
@endsection