<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advocate Transport Service | Non-Emergency Medical Transport</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f5f7fa;
        }

        .hero {
            background: linear-gradient(90deg, #0d6efd, #dc3545);
            color: white;
            padding: 100px 0;
        }

        .card-premium {
            border: none;
            border-radius: 18px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        }

        .cta-btn {
            border-radius: 12px;
            padding: 14px 28px;
            font-weight: 600;
        }

        .feature-icon {
            font-size: 32px;
            color: #0d6efd;
        }
    </style>
</head>
<body>

<!-- HERO SECTION -->
<section class="hero text-center">
    <div class="container">
        <h1 class="fw-bold">Safe & Reliable Medical Transportation</h1>
        <p class="lead mt-3">
            Non-emergency transport services in San Diego. Compassionate care, professional drivers, and timely service.
        </p>

        <a href="/booking" class="btn btn-light cta-btn mt-3">
            Book a Transport
        </a>
    </div>
</section>

<!-- SERVICES -->
<section class="container py-5">

    <h2 class="text-center fw-bold mb-5">Our Services</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card card-premium p-4 text-center">
                <div class="feature-icon">🚑</div>
                <h5 class="mt-3">Gurney Transport</h5>
                <p class="text-muted">
                    Safe and comfortable gurney transportation for medical appointments and facility transfers.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-premium p-4 text-center">
                <div class="feature-icon">♿</div>
                <h5 class="mt-3">Wheelchair Transport</h5>
                <p class="text-muted">
                    Accessible transportation for wheelchair users with professional assistance.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-premium p-4 text-center">
                <div class="feature-icon">🚶</div>
                <h5 class="mt-3">Ambulatory Transport</h5>
                <p class="text-muted">
                    Non-medical transport for clients who can walk but need assistance.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="container py-5">

    <h2 class="text-center fw-bold mb-5">Why Choose Us</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card card-premium p-4">
                <h6>✔ Fully Insured</h6>
                <p class="text-muted mb-0">
                    Safe and compliant medical transport services.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-premium p-4">
                <h6>✔ Background Checked Drivers</h6>
                <p class="text-muted mb-0">
                    Professional and trustworthy transportation.
                </p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card card-premium p-4">
                <h6>✔ On-Time Service</h6>
                <p class="text-muted mb-0">
                    We value your schedule and appointments.
                </p>
            </div>
        </div>

    </div>
</section>

<!-- CALL TO ACTION -->
<section class="text-center py-5 bg-white">

    <h3 class="fw-bold">Need Medical Transportation?</h3>
    <p class="text-muted">
        Book your transport today and experience reliable service.
    </p>

    <a href="/booking" class="btn btn-primary cta-btn">
        Book Now
    </a>

</section>

<!-- FOOTER -->
<footer class="text-center py-4">
    <p class="mb-0">
        © {{ date('Y') }} Advocate Transport Service · San Diego
    </p>
</footer>

</body>
</html>