@extends('layouts.frontendv2')

@section('content')

<!-- HERO -->
<section class="py-5 text-white safety-hero">
    <div class="container py-5 text-center">

        <h1 class="fw-bold display-5">Safety & Compliance</h1>

        <p class="lead mt-3">
            At Advocate Transport Service, patient safety and regulatory compliance
            are at the core of our operations. We follow strict transportation
            standards to ensure every ride is safe, reliable, and professional.
        </p>

    </div>
</section>


<!-- SAFETY COMMITMENT -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Safety Commitment</h2>
            <p class="text-muted">
                We maintain high standards for medical transportation to ensure
                patients are transported securely and comfortably.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow h-100 p-4 text-center">

                    <i class="fas fa-shield-heart fa-3x text-primary mb-3"></i>

                    <h5 class="fw-bold">Patient Safety First</h5>

                    <p class="text-muted">
                        Every trip is handled with care, ensuring safe boarding,
                        secure positioning, and professional assistance.
                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow h-100 p-4 text-center">

                    <i class="fas fa-user-check fa-3x text-primary mb-3"></i>

                    <h5 class="fw-bold">Background Checked Drivers</h5>

                    <p class="text-muted">
                        All drivers undergo screening, training, and verification
                        to maintain professionalism and reliability.
                    </p>

                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow h-100 p-4 text-center">

                    <i class="fas fa-ambulance fa-3x text-primary mb-3"></i>

                    <h5 class="fw-bold">Medical Transport Vehicles</h5>

                    <p class="text-muted">
                        Our fleet is equipped with specialized medical transport
                        features designed for patient comfort and safety.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>


<!-- COMPLIANCE SECTION -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Licensing & Compliance</h2>
            <p class="text-muted">
                Advocate Transport Service operates according to
                state and transportation regulations.
            </p>
        </div>

        <div class="row g-4">

            <div class="col-md-6">
                <div class="d-flex">

                    <i class="fas fa-certificate fa-2x text-danger me-3"></i>

                    <div>
                        <h5 class="fw-bold">Licensed Transportation Provider</h5>
                        <p class="text-muted">
                            We comply with non-emergency medical transportation
                            requirements in the San Diego service area.
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex">

                    <i class="fas fa-file-shield fa-2x text-danger me-3"></i>

                    <div>
                        <h5 class="fw-bold">Fully Insured</h5>
                        <p class="text-muted">
                            Comprehensive insurance coverage protects both
                            patients and transportation operations.
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex">

                    <i class="fas fa-wheelchair fa-2x text-danger me-3"></i>

                    <div>
                        <h5 class="fw-bold">ADA Accessible Vehicles</h5>
                        <p class="text-muted">
                            Our vehicles support wheelchair and mobility
                            assistance compliant with ADA accessibility.
                        </p>
                    </div>

                </div>
            </div>

            <div class="col-md-6">
                <div class="d-flex">

                    <i class="fas fa-tools fa-2x text-danger me-3"></i>

                    <div>
                        <h5 class="fw-bold">Routine Safety Inspections</h5>
                        <p class="text-muted">
                            All vehicles undergo regular maintenance and
                            inspection to maintain reliability and safety.
                        </p>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>


<!-- VEHICLE SAFETY FEATURES -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Transport Safety Features</h2>
        </div>

        <div class="row text-center g-4">

            <div class="col-md-3">
                <i class="fas fa-lock fa-2x text-primary mb-3"></i>
                <h6 class="fw-bold">Wheelchair Locking System</h6>
            </div>

            <div class="col-md-3">
                <i class="fas fa-first-aid fa-2x text-primary mb-3"></i>
                <h6 class="fw-bold">Emergency Equipment</h6>
            </div>

            <div class="col-md-3">
                <i class="fas fa-hand-holding-medical fa-2x text-primary mb-3"></i>
                <h6 class="fw-bold">Assisted Patient Boarding</h6>
            </div>

            <div class="col-md-3">
                <i class="fas fa-route fa-2x text-primary mb-3"></i>
                <h6 class="fw-bold">Safe Route Planning</h6>
            </div>

        </div>

    </div>
</section>


<!-- CTA SECTION -->
<section class="cta-section text-center text-white">

    <div class="container">

        <h2 class="fw-bold mb-3">
            Safe and Reliable Medical Transportation
        </h2>

        <p class="mb-4">
            Book your non-emergency medical transport today with a trusted
            team committed to patient safety and professional service.
        </p>

        <a href="{{ route('booking.create') }}" class="btn-book">
            Book Transportation
        </a>

    </div>

</section>
<style>
    .safety-hero {

        background: linear-gradient(rgba(13, 59, 102, 0.85), rgba(13, 59, 102, 0.85)),
            url("https://images.unsplash.com/photo-1584515933487-779824d29309");

        background-size: cover;
        background-position: center;

        color: white;
        text-align: center;

        padding: 120px 20px;

    }
    .safety-hero h1 {

        font-size: 42px;
        font-weight: 700;

    }

    .safety-hero p {

        font-size: 18px;
        margin-top: 15px;

    }
</style>
@endsection