@extends('layouts.frontendv2')

@section('content')

<style>
    /* HERO */
    .about-hero {

        background: linear-gradient(rgba(13, 59, 102, 0.85), rgba(13, 59, 102, 0.85)),
            url("https://images.unsplash.com/photo-1584515933487-779824d29309");

        background-size: cover;
        background-position: center;

        color: white;
        text-align: center;

        padding: 120px 20px;

    }

    .about-hero h1 {

        font-size: 42px;
        font-weight: 700;

    }

    .about-hero p {

        font-size: 18px;
        margin-top: 15px;

    }


    /* TEAM CARD */
    .team-card {
        transition: all .3s ease;
        border-radius: 12px;
        overflow: hidden;
    }

    .team-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
    }

    .team-card img {
        height: 260px;
        object-fit: cover;
    }
</style>



<!-- HERO -->
<section class="about-hero">
    <div class="content">

        <h1>About Advocate Transport Service</h1>

        <p class="lead">
            Compassionate Non-Emergency Medical Transportation
            in San Diego
        </p>

    </div>
</section>



<!-- COMPANY HISTORY -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6">

                <img
                    src="https://images.squarespace-cdn.com/content/v1/5eb0828c5ab0a73ac072de78/c214346b-9ece-4491-815e-958472e276f3/P4+DOWNPAGE.+Leanne+Wilson%2C+portering+supervisor+and+porter+Tony+Downs+loading+a+stretcher+into+the+new+ambulance.jpg"
                    class="img-fluid rounded shadow">

            </div>

            <div class="col-md-6">

                <h2 class="fw-bold mb-3">Our Story</h2>

                <p>
                    Advocate Transport Service was founded with a simple mission:
                    to provide safe, compassionate, and reliable transportation
                    for patients who need assistance traveling to medical
                    appointments, hospitals, and care facilities.
                </p>

                <p>
                    We understand that transportation plays an important role
                    in healthcare access. Our goal is to ensure every patient
                    arrives safely and comfortably to their destination.
                </p>

                <p>
                    Serving the San Diego community, we partner with families,
                    nursing homes, rehabilitation centers, and healthcare
                    providers to deliver dependable non-emergency
                    medical transportation services.
                </p>

            </div>

        </div>

    </div>
</section>



<!-- MISSION AND VISION -->
<section class="py-5 bg-light">
    <div class="container">

        <div class="row g-4">

            <div class="col-md-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body p-4">

                        <h3 class="fw-bold text-primary">Our Mission</h3>

                        <p>
                            Our mission is to provide safe, reliable, and compassionate
                            medical transportation for individuals who require assistance
                            traveling to healthcare appointments.
                        </p>

                        <p>
                            We aim to support patients, families, and healthcare
                            providers by delivering professional and dependable
                            transportation services.
                        </p>

                    </div>
                </div>

            </div>



            <div class="col-md-6">

                <div class="card border-0 shadow h-100">

                    <div class="card-body p-4">

                        <h3 class="fw-bold text-danger">Our Vision</h3>

                        <p>
                            Our vision is to become a trusted leader in
                            non-emergency medical transportation within
                            San Diego by delivering exceptional care,
                            safety, and reliability.
                        </p>

                        <p>
                            We strive to make transportation accessible
                            and stress-free for patients and healthcare
                            partners.
                        </p>

                    </div>
                </div>

            </div>

        </div>

    </div>
</section>



<!-- TEAM STRUCTURE -->
<section class="py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Meet Our Team</h2>
            <p class="text-muted">
                Dedicated professionals committed to patient safety and care
            </p>
        </div>



        <!-- OWNER -->
        <div class="row justify-content-center mb-5">

            <div class="col-md-4">

                <div class="card border-0 shadow-lg text-center team-card">

                    <img
                        src="https://images.unsplash.com/photo-1560250097-0b93528c311a"
                        class="card-img-top">

                    <div class="card-body">

                        <h4 class="fw-bold">Semion Samson</h4>
                        <p class="text-primary fw-semibold">Founder / Owner</p>

                        <p>
                            Founder of Advocate Transport Service dedicated to
                            providing compassionate and reliable transportation
                            services for patients and healthcare partners.
                        </p>

                    </div>

                </div>

            </div>

        </div>



        <!-- ADMIN -->
        <div class="row justify-content-center mb-5">

            <div class="col-md-4">

                <div class="card border-0 shadow text-center team-card">

                    <img
                        src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2"
                        class="card-img-top">

                    <div class="card-body">

                        <h5 class="fw-bold">Operations Coordinator</h5>
                        <p class="text-danger fw-semibold">Admin / Dispatcher</p>

                        <p>
                            Responsible for scheduling transportation,
                            coordinating bookings, and communicating
                            with healthcare facilities and families.
                        </p>

                    </div>

                </div>

            </div>

        </div>



        <!-- DRIVERS -->
        <div class="text-center mb-4">

            <h3 class="fw-bold">Certified Medical Drivers</h3>

            <p class="text-muted">
                Background checked and trained for patient safety
            </p>

        </div>



        <div class="row g-4">

            @for($i=1;$i<=4;$i++)

                <div class="col-md-3">

                <div class="card border-0 shadow text-center team-card">

                    <img
                        src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e"
                        class="card-img-top">

                    <div class="card-body">

                        <h6 class="fw-bold">Medical Transport Driver</h6>

                        <p class="text-muted">Certified Driver</p>

                        <p class="small">
                            Trained to assist patients safely during
                            transport to hospitals, clinics,
                            and medical facilities.
                        </p>

                    </div>

                </div>

        </div>

        @endfor

    </div>

    </div>
</section>

@endsection