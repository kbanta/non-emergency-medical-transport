@extends('layouts.frontendv2')

@section('title', 'Safe & Reliable Medical Transportation')

@section('content')

<section class="hero-v2 d-flex align-items-center text-white">
    <div class="overlay"></div>

    <div class="container position-relative z-2">
        <div class="row">
            <div class="col-lg-7 pe-lg-5 hero-content">

                <span class="hero-badge mb-3 d-inline-block animate-fade delay-1">
                    Non-Emergency Medical Transport
                </span>

                <h1 class="display-4 fw-bold mb-4 animate-fade delay-2">
                    Love & Care for Every Patient
                    <span class="text-highlight">Safety is Our Top Priority</span>
                </h1>

                <p class="lead mb-4 animate-fade delay-3">
                    Reliable, compassionate, and low-cost non-emergency medical
                    transportation across San Diego. We make patient safety
                    and comfort our mission.
                </p>

                <div class="hero-points mb-5 animate-fade delay-4">
                    <div>✓ Licensed & Insured</div>
                    <div>✓ Hospital & Facility Transfers</div>
                    <div>✓ Affordable Rates & Same-Day Scheduling</div>
                </div>

                <div class="d-flex flex-wrap gap-3 animate-fade delay-5">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg px-4">
                        Schedule Transport
                    </a>
                    <a href="/contact" class="btn btn-outline-light btn-lg px-4">
                        Contact Us
                    </a>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .hero-v2 {
        min-height: 95vh;
        background: url('https://www.horizoncenters.org/wp-content/uploads/2021/03/medical-transportation-recuperative-care.jpg') center/cover no-repeat;
        position: relative;
        padding-top: 80px;
        /* Increased top padding */
        padding-bottom: 120px;
    }

    .hero-v2 .overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(110deg,
                rgba(7, 34, 64, 0.95) 40%,
                rgba(0, 91, 150, 0.75) 100%);
    }

    .hero-badge {
        background: rgba(255, 255, 255, 0.15);
        padding: 6px 14px;
        border-radius: 50px;
        font-size: 0.85rem;
        backdrop-filter: blur(6px);
    }

    .text-highlight {
        color: #66d9ff;
    }

    .hero-points div {
        margin-bottom: 8px;
        opacity: 0.95;
    }

    /* ------------------- Animation ------------------- */
    .animate-fade {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s forwards;
    }

    .delay-1 {
        animation-delay: 0.2s;
    }

    .delay-2 {
        animation-delay: 0.4s;
    }

    .delay-3 {
        animation-delay: 0.6s;
    }

    .delay-4 {
        animation-delay: 0.8s;
    }

    .delay-5 {
        animation-delay: 1s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- ABOUT PREVIEW – PREMIUM REDESIGN -->
<section class="about-preview-redesign py-5 position-relative">
    <div class="container">
        <div class="row align-items-center g-5">

            <!-- IMAGE LEFT -->
            <div class="col-md-6 position-relative">
                <img src="https://images.squarespace-cdn.com/content/v1/5eb0828c5ab0a73ac072de78/c214346b-9ece-4491-815e-958472e276f3/P4+DOWNPAGE.+Leanne+Wilson%2C+portering+supervisor+and+porter+Tony+Downs+loading+a+stretcher+into+the+new+ambulance.jpg"
                    class="img-fluid rounded-4 shadow about-img animate-fade delay-1">
                <div class="image-overlay"></div>
            </div>

            <!-- TEXT RIGHT -->
            <div class="col-md-6">
                <div class="text-panel p-4 rounded-4 animate-fade delay-2">

                    <h2 class="fw-bold mb-3">Trusted Medical Transportation in San Diego</h2>

                    <p class="text-muted mb-3">
                        We specialize in safe, non-emergency transportation for hospitals,
                        dialysis centers, skilled nursing facilities, and private clients.
                        Patient comfort and safety are our highest priorities.
                    </p>

                    <ul class="text-muted mb-3">
                        <div>✔ Fully Licensed & Insured</div>
                        <div>✔ Background-Checked Drivers</div>
                        <div>✔ ADA-Compliant Vehicles</div>
                        <div>✔ On-Time, Reliable Service</div>
                    </ul>

                    <a href="/about" class="btn btn-primary mt-3">
                        Learn More About Us
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .about-preview-redesign {
        padding-top: 100px;
        padding-bottom: 100px;
        background: linear-gradient(135deg, #f8fbff 0%, #eaf4ff 100%);
    }

    .about-img {
        width: 100%;
        border-radius: 1rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .about-img:hover {
        transform: scale(1.03);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }

    .text-panel {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(8px);
        padding: 40px;
        border-radius: 1rem;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
    }

    /* ------------------- Animation ------------------- */
    .animate-fade {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 1s forwards;
    }

    .delay-1 {
        animation-delay: 0.2s;
    }

    .delay-2 {
        animation-delay: 0.5s;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- PREMIUM SERVICES SECTION -->
<section class="section bg-light">
    <div class="container text-center">
        <h2 class="fw-bold mb-5">Our Transportation Services</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card card-premium p-4 h-100">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhm3cMRYE_UJ7INYLRw6APxtGdKnGlMU_1CoXjabua5xj1Xcq6O2rrfhykNUteQt82ECMwvqc6TKUkKh_wiMyW1apVvyjbYOTTgLkkojlMtEnTjMemQ6qiPTF02Os-S6qxGEKmTjocfdn3dF05-FPN6x0lS2H_X-15i2npwkyMXUUDfQfFoDujt1NbRD6QR/s1200/non-emergency-medical-transportation-company-1.jpg"
                        class="img-fluid mb-3">
                    <h5><i class="fas fa-procedures me-2"></i>Gurney Transport</h5>
                    <p>
                        Safe stretcher transportation for hospital discharges,
                        facility transfers, and medical appointments.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-premium p-4 h-100">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhm3cMRYE_UJ7INYLRw6APxtGdKnGlMU_1CoXjabua5xj1Xcq6O2rrfhykNUteQt82ECMwvqc6TKUkKh_wiMyW1apVvyjbYOTTgLkkojlMtEnTjMemQ6qiPTF02Os-S6qxGEKmTjocfdn3dF05-FPN6x0lS2H_X-15i2npwkyMXUUDfQfFoDujt1NbRD6QR/s1200/non-emergency-medical-transportation-company-1.jpg"
                        class="img-fluid mb-3">
                    <h5><i class="fas fa-wheelchair me-2"></i>Wheelchair Transport</h5>
                    <p>
                        Accessible vehicles with trained staff to ensure safe
                        and comfortable wheelchair transportation.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card card-premium p-4 h-100">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhm3cMRYE_UJ7INYLRw6APxtGdKnGlMU_1CoXjabua5xj1Xcq6O2rrfhykNUteQt82ECMwvqc6TKUkKh_wiMyW1apVvyjbYOTTgLkkojlMtEnTjMemQ6qiPTF02Os-S6qxGEKmTjocfdn3dF05-FPN6x0lS2H_X-15i2npwkyMXUUDfQfFoDujt1NbRD6QR/s1200/non-emergency-medical-transportation-company-1.jpg"
                        class="img-fluid mb-3">
                    <h5><i class="fas fa-walking me-2"></i>Ambulatory Transport</h5>
                    <p>
                        Comfortable, assisted transport for clients who can
                        walk but require supervision or support.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PREMIUM DESIGN CSS -->
<style>
    .section.bg-light {
        background: linear-gradient(to right, #eef2f7, #ffffff);
        padding: 80px 0;
    }

    h2.fw-bold {
        font-size: 2.5rem;
        color: #111827;
    }

    .row.g-4 {
        margin-top: 40px;
    }

    .card-premium {
        background: linear-gradient(145deg, #ffffff, #f0f4f8);
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 30px;
    }

    .card-premium:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .card-premium img {
        border-radius: 15px;
        object-fit: cover;
        height: 200px;
        width: 100%;
    }

    .card-premium h5 {
        font-weight: 700;
        margin-top: 15px;
        color: #1f2937;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-premium h5 i {
        color: #3b82f6;
        /* icon color for accent */
    }

    .card-premium p {
        color: #6b7280;
        font-size: 0.95rem;
        margin-top: 10px;
    }
</style>

<!-- WHY CHOOSE US - PREMIUM DESIGN -->
<section class="section bg-white">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Why Choose Advocate Transport Service?</h2>

        <div class="row g-4 mt-3">

            <div class="col-md-3">
                <div class="card card-premium p-4 text-center">
                    <i class="fas fa-shield-alt fa-2x mb-3" style="color:#3b82f6;"></i>
                    <h6 class="fw-bold">Safety First</h6>
                    <p class="text-muted small">
                        Patient safety is our top priority in every transport.
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-premium p-4 text-center">
                    <i class="fas fa-user-tie fa-2x mb-3" style="color:#3b82f6;"></i>
                    <h6 class="fw-bold">Professional Staff</h6>
                    <p class="text-muted small">
                        Trained and compassionate medical transport drivers.
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-premium p-4 text-center">
                    <i class="fas fa-clock fa-2x mb-3" style="color:#3b82f6;"></i>
                    <h6 class="fw-bold">Reliable Scheduling</h6>
                    <p class="text-muted small">
                        We arrive on time and keep your appointments on track.
                    </p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card card-premium p-4 text-center">
                    <i class="fas fa-map-marker-alt fa-2x mb-3" style="color:#3b82f6;"></i>
                    <h6 class="fw-bold">Local Expertise</h6>
                    <p class="text-muted small">
                        Serving the entire San Diego area efficiently.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PREMIUM DESIGN CSS (shared with Services Section) -->
<style>
    .section.bg-white {
        background: #ffffff;
        padding: 80px 0;
    }

    h2.fw-bold {
        font-size: 2.5rem;
        color: #111827;
    }

    .card-premium {
        background: linear-gradient(145deg, #ffffff, #f0f4f8);
        border-radius: 20px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 30px;
    }

    .card-premium:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .card-premium h6 {
        font-weight: 700;
        margin-top: 10px;
        color: #1f2937;
    }

    .card-premium p {
        color: #6b7280;
        font-size: 0.9rem;
        margin-top: 8px;
    }

    .card-premium i {
        margin-bottom: 15px;
    }
</style>

<!-- PREMIUM CTA -->
<section class="cta-section text-center text-white">
    <div class="overlay"></div>
    <div class="container">
        <h3>Need Reliable Medical Transportation?</h3>
        <p>Book your transport today and experience safe, professional, and luxurious service.</p>
        <a href="{{ route('booking.create') }}" class="btn-book">Book Now</a>
    </div>
</section>

<style>
    /* Section Styles */
    .cta-section {
        position: relative;
        background: linear-gradient(135deg, #0d3b66 0%, #1a5276 100%);
        padding: 100px 20px;
        overflow: hidden;
    }

    /* Overlay for depth */
    .cta-section .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.25);
        z-index: 1;
    }

    /* Container content */
    .cta-section .container {
        position: relative;
        z-index: 2;
    }

    .cta-section h3 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        text-shadow: 1px 1px 8px rgba(0, 0, 0, 0.4);
    }

    .cta-section p {
        font-size: 1.2rem;
        line-height: 1.6;
        margin-bottom: 2rem;
    }

    /* Button Styles */
    .btn-book {
        display: inline-block;
        padding: 15px 60px;
        font-size: 1.1rem;
        font-weight: 600;
        color: #0d3b66;
        background-color: #ffffff;
        border-radius: 50px;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-book:hover {
        background-color: #e63946;
        /* premium red */
        color: #ffffff;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
    }
</style>

@endsection