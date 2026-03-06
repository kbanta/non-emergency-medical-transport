@extends('layouts.frontendv2')

@section('content')

    <style>

/* HERO */
.contact-hero {

        background: linear-gradient(rgba(13, 59, 102, 0.85), rgba(13, 59, 102, 0.85)),
            url("https://images.unsplash.com/photo-1584515933487-779824d29309");

        background-size: cover;
        background-position: center;

        color: white;
        text-align: center;

        padding: 120px 20px;

    }

    .contact-hero h1 {

        font-size: 42px;
        font-weight: 700;

    }

    .contact-hero p {

        font-size: 18px;
        margin-top: 15px;

    }

/* CARD STYLE */
.contact-card{
    border:none;
    border-radius:12px;
    transition:.3s;
}

.contact-card:hover{
    transform:translateY(-6px);
    box-shadow:0 10px 25px rgba(0,0,0,.15);
}

/* BUTTON STYLE */
.contact-btn{
    background:#0d3b66;
    border:none;
    padding:12px;
    font-weight:600;
}

.contact-btn:hover{
    background:#e63946;
}

/* MOBILE */
@media(max-width:768px){

.contact-hero{
    min-height:340px;
}

.contact-hero h1{
    font-size:36px;
}

.contact-hero p{
    font-size:16px;
}

}

</style>


<!-- HERO -->
<section class="contact-hero">

    <div class="content">

        <h1>Contact Us</h1>

        <p class="lead">
            We are here to assist you with safe and reliable transportation
        </p>

    </div>

</section>


<!-- CONTACT INFO -->
<section class="py-5">

    <div class="container">

        <div class="row text-center mb-5">

            <div class="col-md-4">

                <div class="card contact-card shadow p-4">

                    <i class="fas fa-phone fa-2x text-primary mb-3"></i>

                    <h5>Call Us</h5>

                    <p>(619) 555-2030</p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card contact-card shadow p-4">

                    <i class="fas fa-envelope fa-2x text-danger mb-3"></i>

                    <h5>Email</h5>

                    <p>info@advocatetransport.com</p>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card contact-card shadow p-4">

                    <i class="fas fa-map-marker-alt fa-2x text-primary mb-3"></i>

                    <h5>Service Area</h5>

                    <p>San Diego, California</p>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- CONTACT FORM + MAP -->
<section class="pb-5">

    <div class="container">

        <div class="row g-4">

            <!-- FORM -->
            <div class="col-md-6">

                <div class="card shadow border-0">

                    <div class="card-body p-4">

                        <h4 class="mb-4">Send an Inquiry</h4>

                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf

                            <div class="row">

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Phone</label>
                                    <input type="text" name="phone" class="form-control">
                                </div>

                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Subject</label>
                                <input type="text" name="subject" class="form-control">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">Message</label>
                                <textarea name="message" rows="5" class="form-control" required></textarea>
                            </div>

                            <button class="btn btn-primary w-100 contact-btn">
                                Send Inquiry
                            </button>

                        </form>

                    </div>

                </div>

            </div>


            <!-- MAP -->
            <div class="col-md-6">

                <div class="card shadow border-0">

                    <div class="card-body p-0">

                        <iframe
                            width="100%"
                            height="450"
                            style="border:0"
                            loading="lazy"
                            allowfullscreen
                            src="https://www.google.com/maps?q=San+Diego+California&output=embed">
                        </iframe>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


@if(session('success'))

<script>
    Swal.fire({
        icon: 'success',
        title: 'Inquiry Sent',
        text: 'Thank you! We will contact you shortly.',
        confirmButtonColor: '#0d3b66'
    })
</script>

@endif


@endsection