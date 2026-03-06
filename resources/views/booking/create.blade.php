@extends('layouts.frontendv2')

@section('content')

<div class="booking-container py-5" style="background: #f5f7fa; min-height: 80vh;">
    <div class="container">

        <!-- Choice Buttons -->
        <div class="text-center mb-5">
            <h2 style="color:#0d3b66; font-weight:700;">How would you like to schedule your transport?</h2>
        </div>

        <div class="d-flex flex-column flex-md-row justify-content-center gap-4 mb-5">
            <a href="tel:+1234567890" class="btn-choice btn-call d-flex align-items-center justify-content-center">
                <i class="fas fa-phone-alt me-2"></i> Call Now
            </a>
            <button class="btn-choice btn-book-service d-flex align-items-center justify-content-center" data-service="">
                <i class="fas fa-calendar-check me-2"></i> Book Online
            </button>
        </div>

        <!-- Checkout-style Booking Form -->
        <section class="section bg-white py-5" id="bookingFormSection" style="display:none;">
            <div class="container">
                <h2 class="fw-bold text-center mb-5" style="color:#0d3b66;">Book Your Transport</h2>
                <div class="row g-4">

                    <!-- Form -->
                    <div class="col-lg-8">
                        <div class="card p-4 shadow rounded-4">
                            <form id="checkoutBookingForm" action="{{ route('booking.store') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <label class="form-label fw-semibold">Select Service</label>
                                    <select name="service_type" id="service_type" class="form-select" required>
                                        <option value="">Choose Service</option>
                                        <option value="Gurney">Gurney Transport</option>
                                        <option value="Wheelchair">Wheelchair Transport</option>
                                        <option value="Ambulatory">Ambulatory Transport</option>
                                    </select>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" placeholder="(123) 456-7890" required>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Pickup Location</label>
                                        <input type="text" name="pickup_location" class="form-control" placeholder="Enter pickup address" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label fw-semibold">Dropoff Location</label>
                                        <input type="text" name="dropoff_location" class="form-control" placeholder="Enter dropoff address" required>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-book-submit w-100">Confirm Booking</button>
                            </form>
                        </div>
                    </div>

                    <!-- Summary Sidebar -->
                    <div class="col-lg-4">
                        <div class="card p-4 shadow rounded-4">
                            <h5 class="fw-bold mb-3">Booking Summary</h5>
                            <ul class="list-unstyled">
                                <li><strong>Service:</strong> <span id="summaryService">—</span></li>
                                <li><strong>Base Price:</strong> $<span id="summaryPrice">0</span></li>
                                <li><strong>Extra Miles:</strong> $<span id="summaryExtraMiles">0</span></li>
                                <li><strong>Total Estimate:</strong> $<span id="summaryTotal">0</span></li>
                            </ul>
                            <small class="text-muted">Prices may vary based on distance or service type.</small>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </div>
</div>

<style>
    .btn-choice {
        flex: 1;
        padding: 20px;
        font-size: 1.2rem;
        font-weight: 600;
        border-radius: 50px;
        transition: all 0.3s ease;
        min-width: 200px;
    }

    .btn-call {
        background-color: #e63946;
        color: #fff;
    }

    .btn-call:hover {
        background-color: #d32f2f;
    }

    .btn-book-service {
        background-color: #0d3b66;
        color: #fff;
    }

    .btn-book-service:hover {
        background-color: #1a5276;
    }

    .btn-book-submit {
        background-color: #0d3b66;
        color: #fff;
        border-radius: 50px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-book-submit:hover {
        background-color: #e63946;
        color: #ffffff;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #e63946;
        box-shadow: 0 0 5px rgba(230, 57, 70, 0.5);
        outline: none;
    }
</style>

<script>
    const servicePrices = {
        'Gurney': {
            base: 120,
            extra: 4
        },
        'Wheelchair': {
            base: 60,
            extra: 4
        },
        'Ambulatory': {
            base: 120,
            extra: 0
        }
    };

    const bookingSection = document.getElementById('bookingFormSection');
    const serviceSelect = document.getElementById('service_type');
    const summaryService = document.getElementById('summaryService');
    const summaryPrice = document.getElementById('summaryPrice');
    const summaryExtra = document.getElementById('summaryExtraMiles');
    const summaryTotal = document.getElementById('summaryTotal');

    // Show booking form on "Book Online" click
    document.querySelectorAll('.btn-book-service').forEach(btn => {
        btn.addEventListener('click', function() {
            bookingSection.style.display = 'block';
            window.scrollTo({
                top: bookingSection.offsetTop - 100,
                behavior: 'smooth'
            });
            const defaultService = this.dataset.service || '';
            serviceSelect.value = defaultService;
            serviceSelect.dispatchEvent(new Event('change'));
        });
    });

    // Update summary dynamically
    serviceSelect.addEventListener('change', function() {
        const selected = this.value;
        if (servicePrices[selected]) {
            summaryService.textContent = selected;
            summaryPrice.textContent = servicePrices[selected].base;
            summaryExtra.textContent = servicePrices[selected].extra;
            summaryTotal.textContent = servicePrices[selected].base + servicePrices[selected].extra;
        } else {
            summaryService.textContent = '—';
            summaryPrice.textContent = 0;
            summaryExtra.textContent = 0;
            summaryTotal.textContent = 0;
        }
    });

    // Confirmation before submission
    document.getElementById('checkoutBookingForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const service = serviceSelect.value;
        const total = summaryTotal.textContent;
        if (!service) {
            Swal.fire({
                icon: 'warning',
                title: 'Please select a service'
            });
            return;
        }
        Swal.fire({
            title: `Confirm Booking`,
            html: `You are about to book <strong>${service}</strong> service.<br>Total Estimated Price: <strong>$${total}</strong>`,
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: 'Yes, Book Now',
            cancelButtonText: 'Cancel',
            reverseButtons: true,
            focusCancel: true
        }).then(result => {
            if (result.isConfirmed) this.submit();
        });
    });

    @if(session('success'))
    Swal.fire({
        icon: 'success',
        title: 'Booking Confirmed!',
        text: '{{ session("success") }}',
        timer: 3000,
        showConfirmButton: false
    });
    @endif
</script>

@endsection