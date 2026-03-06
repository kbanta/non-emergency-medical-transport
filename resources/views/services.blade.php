@extends('layouts.frontendv2')

@section('content')

<section class="section bg-light py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5" style="color:#0d3b66;">Our Transportation Services</h2>

        <div class="row g-4">

            <!-- Gurney Transport -->
            <div class="col-md-4">
                <div class="card card-premium p-4 h-100 shadow-sm rounded-4">
                    <img src="https://www.horizoncenters.org/wp-content/uploads/2021/03/medical-transportation-recuperative-care.jpg"
                        class="img-fluid mb-3 rounded" alt="Gurney Transport">
                    <h5 class="mb-2"><i class="fas fa-procedures me-2"></i>Gurney Transport</h5>
                    <p>Safe stretcher transportation for hospital discharges, facility transfers, and medical appointments.</p>
                    <ul class="list-unstyled mt-3 text-start">
                        <li><strong>Price:</strong> $120 one-way</li>
                        <li><strong>Additional miles:</strong> $4 per mile after 5 miles</li>
                        <li><strong>Insurance:</strong> Fully insured</li>
                        <li><strong>Driver:</strong> Background-checked, retired assistants</li>
                        <li><strong>Payment:</strong> Online accepted</li>
                        <li><strong>Serves:</strong> Nursing homes and hospitals</li>
                    </ul>
                    <button class="btn btn-book-service mt-3" data-service="Gurney">
                        Book This Service
                    </button>
                </div>
            </div>

            <!-- Wheelchair Transport -->
            <div class="col-md-4">
                <div class="card card-premium p-4 h-100 shadow-sm rounded-4">
                    <img src="https://www.horizoncenters.org/wp-content/uploads/2021/03/medical-transportation-recuperative-care.jpg"
                        class="img-fluid mb-3 rounded" alt="Wheelchair Transport">
                    <h5 class="mb-2"><i class="fas fa-wheelchair me-2"></i>Wheelchair Transport</h5>
                    <p>Accessible vehicles with trained staff to ensure safe and comfortable wheelchair transportation.</p>
                    <ul class="list-unstyled mt-3 text-start">
                        <li><strong>Price:</strong> $60 one-way</li>
                        <li><strong>Additional miles:</strong> $4 per mile after 5 miles</li>
                        <li><strong>Insurance:</strong> Fully insured</li>
                        <li><strong>Driver:</strong> Background-checked, retired assistants</li>
                        <li><strong>Payment:</strong> Online accepted</li>
                        <li><strong>Serves:</strong> Nursing homes and hospitals</li>
                    </ul>
                    <button class="btn btn-book-service mt-3" data-service="Wheelchair">
                        Book This Service
                    </button>
                </div>
            </div>

            <!-- Ambulatory Transport -->
            <div class="col-md-4">
                <div class="card card-premium p-4 h-100 shadow-sm rounded-4">
                    <img src="https://www.horizoncenters.org/wp-content/uploads/2021/03/medical-transportation-recuperative-care.jpg"
                        class="img-fluid mb-3 rounded" alt="Ambulatory Transport">
                    <h5 class="mb-2"><i class="fas fa-walking me-2"></i>Ambulatory Transport</h5>
                    <p>Comfortable, assisted transport for clients who can walk but require supervision or support.</p>
                    <ul class="list-unstyled mt-3 text-start">
                        <li><strong>Price:</strong> $120 one-way</li>
                        <li><strong>Additional miles:</strong> $4 per mile after 5 miles</li>
                        <li><strong>Insurance:</strong> Fully insured</li>
                        <li><strong>Driver:</strong> Background-checked, retired assistants</li>
                        <li><strong>Payment:</strong> Online accepted</li>
                        <li><strong>Serves:</strong> Nursing homes and hospitals</li>
                    </ul>
                    <button class="btn btn-book-service mt-3" data-service="Ambulatory">
                        Book This Service
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

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

    // Show form and pre-select service when clicking button
    document.querySelectorAll('.btn-book-service').forEach(btn => {
        btn.addEventListener('click', function() {
            const service = this.dataset.service;
            bookingSection.style.display = 'block';
            window.scrollTo({
                top: bookingSection.offsetTop - 100,
                behavior: 'smooth'
            });
            serviceSelect.value = service;
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
        e.preventDefault(); // prevent default form submission

        const service = serviceSelect.value;
        const total = summaryTotal.textContent;

        if (!service) {
            Swal.fire({
                icon: 'warning',
                title: 'Please select a service',
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
        }).then((result) => {
            if (result.isConfirmed) {
                this.submit(); // submit the form after confirmation
            }
        });
    });

    // Optional: Show success message after redirect (if session('success') exists)
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

<style>
    .card-premium {
        background-color: #ffffff;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card-premium:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .card-premium h5 {
        color: #0d3b66;
        font-weight: 700;
    }

    .btn-book-service {
        background-color: #0d3b66;
        color: #fff;
        border-radius: 50px;
        padding: 10px 25px;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .btn-book-service:hover {
        background-color: #e63946;
        transform: translateY(-2px);
    }

    .btn-book-submit {
        background-color: #0d3b66;
        color: #fff;
        border-radius: 50px;
        font-weight: 600;
        padding: 12px;
        transition: all 0.3s ease;
    }

    .btn-book-submit:hover {
        background-color: #e63946;
        transform: translateY(-2px);
    }

    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
</style>

@endsection