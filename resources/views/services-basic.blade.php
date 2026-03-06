@extends('layouts.frontendv2')

@section('content')

<!-- HERO SECTION -->
<section class="services-hero">

    <div class="container text-center">

        <h1>Medical Transportation Services</h1>

        <p>
            Safe, professional, and reliable non-emergency medical transportation
            for patients, seniors, and individuals with mobility needs.
        </p>

    </div>

</section>

<!-- PRICING POLICY -->
<section class="pricing-section">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Transparent Pricing</h2>
            <p class="text-muted">
                Our pricing structure is designed to be simple, transparent, and fair.
                with a small additional charge
                for every additional 5 miles traveled.
            </p>
        </div>

        <div class="row g-4">

            <!-- GURNEY -->
            <div class="col-lg-4">
                <div class="pricing-card">

                    <div class="price-icon">
                        <i class="fas fa-procedures"></i>
                    </div>

                    <h4>Gurney Transport</h4>
                    <p>
                        Ideal for patients who must remain lying down during transport.
                        Our trained drivers provide safe and professional medical transportation.
                    </p>
                    <h2>$120</h2>

                    <p class="text-muted">Base Rate (Includes first 5 miles)</p>

                    <ul>
                        <li>Medical transport equipment</li>
                        <li>Professional trained driver</li>
                        <li>Secure patient handling</li>
                        <li>Door-to-door assistance</li>
                    </ul>

                    <div class="extra-rule">
                        +$4 every additional 5 miles
                    </div>

                </div>
            </div>

            <!-- WHEELCHAIR -->
            <div class="col-lg-4">
                <div class="pricing-card featured">

                    <div class="price-icon">
                        <i class="fas fa-wheelchair"></i>
                    </div>

                    <h4>Wheelchair Transport</h4>
                    <p>
                        Safe and comfortable transport for wheelchair users with professional
                        assistance and secure wheelchair access vehicles.
                    </p>
                    <h2>$60</h2>

                    <p class="text-muted">Base Rate (Includes first 5 miles)</p>

                    <ul>
                        <li>Wheelchair accessible vehicle</li>
                        <li>Driver assistance</li>
                        <li>Secure wheelchair locking</li>
                        <li>Comfortable ride</li>
                    </ul>

                    <div class="extra-rule">
                        +$4 every additional 5 miles
                    </div>

                </div>
            </div>

            <!-- AMBULATORY -->
            <div class="col-lg-4">
                <div class="pricing-card">

                    <div class="price-icon">
                        <i class="fas fa-walking"></i>
                    </div>

                    <h4>Ambulatory Transport</h4>
                    <p>
                        Transportation for patients who can walk independently but still
                        require safe and reliable travel to medical facilities.
                    </p>
                    <h2>$60</h2>

                    <p class="text-muted">Base Rate (Includes first 5 miles)</p>

                    <ul>
                        <li>Assisted transport service</li>
                        <li>Safe door-to-door pickup</li>
                        <li>Background-checked drivers</li>
                        <li>Professional service</li>
                    </ul>

                    <div class="extra-rule">
                        +$4 every additional 5 miles
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>

<style>
    /* HERO */

    .services-hero {

        background: linear-gradient(rgba(13, 59, 102, 0.85), rgba(13, 59, 102, 0.85)),
            url("https://images.unsplash.com/photo-1584515933487-779824d29309");

        background-size: cover;
        background-position: center;

        color: white;
        text-align: center;

        padding: 120px 20px;

    }

    .services-hero h1 {

        font-size: 42px;
        font-weight: 700;

    }

    .services-hero p {

        font-size: 18px;
        margin-top: 15px;

    }


    /* SERVICE CARD */

    .service-card {

        background: white;

        padding: 35px;

        border-radius: 12px;

        text-align: center;

        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);

        transition: 0.3s;

        height: 100%;

    }

    .service-card:hover {

        transform: translateY(-6px);

        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);

    }


    /* FEATURED */

    .featured {

        border: 2px solid #0d3b66;

    }


    /* ICON */

    .icon {

        font-size: 35px;

        color: white;

        background: #0d3b66;

        width: 70px;
        height: 70px;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: auto;
        margin-bottom: 20px;

        border-radius: 12px;

    }


    /* PRICE */

    .price {

        font-size: 24px;

        font-weight: 700;

        color: #0d3b66;

        margin: 15px 0;

    }


    /* LIST */

    .service-card ul {

        list-style: none;

        padding: 0;

        margin: 20px 0;

    }

    .service-card li {

        padding: 6px 0;

        border-bottom: 1px solid #eee;

    }


    /* PRICING */

    .pricing-section {

        background: #f5f7fb;

        padding: 80px 20px;

    }

    .pricing-box {

        background: white;

        padding: 40px;

        border-radius: 12px;

        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);

    }

    .rule {

        margin-top: 20px;

    }

    .rule ul {

        text-align: left;

        padding-left: 20px;

    }

    /* PRICING SECTION */

    .pricing-section {
        background: #f6f8fb;
        padding: 80px 20px;
    }

    .pricing-card {

        background: white;
        padding: 35px;

        border-radius: 14px;

        text-align: center;

        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);

        transition: 0.3s;

        height: 100%;

    }

    .pricing-card:hover {

        transform: translateY(-6px);

        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);

    }

    .pricing-card h2 {

        font-size: 38px;
        font-weight: 700;

        color: #0d3b66;

        margin-top: 10px;

    }

    .pricing-card ul {

        list-style: none;

        padding: 0;

        margin-top: 20px;

    }

    .pricing-card li {

        padding: 8px 0;

        border-bottom: 1px solid #eee;

        font-size: 15px;

    }

    .extra-rule {

        margin-top: 20px;

        font-weight: 600;

        color: #e63946;

    }


    /* FEATURED SERVICE */

    .featured {

        border: 2px solid #0d3b66;

    }


    /* ICON */

    .price-icon {

        width: 70px;
        height: 70px;

        background: #0d3b66;

        color: white;

        display: flex;
        align-items: center;
        justify-content: center;

        margin: auto;
        margin-bottom: 20px;

        font-size: 30px;

        border-radius: 12px;

    }


    /* EXAMPLE */

    .pricing-example {

        background: white;

        padding: 35px;

        border-radius: 12px;

        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);

    }

    .pricing-example ul {

        text-align: left;

        padding-left: 20px;

    }
</style>

@endsection