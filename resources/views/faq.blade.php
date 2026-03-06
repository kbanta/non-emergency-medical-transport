@extends('layouts.frontendv2')

@section('title', 'FAQ')

@section('content')

<!-- HERO -->
<section style="background:linear-gradient(rgba(13,59,102,0.85),rgba(13,59,102,0.85)),
url('https://images.unsplash.com/photo-1576765607924-3f0a7c6df0db') center/cover no-repeat;
color:white;
text-align:center;
padding:120px 20px;">

    <h1 style="font-size:3rem;margin-bottom:20px;">
        Frequently Asked Questions
    </h1>

    <p style="max-width:700px;margin:auto;font-size:1.2rem;">
        Find answers to the most common questions about our
        medical transportation services, booking process,
        pricing, and safety procedures.
    </p>

</section>


<!-- FAQ -->
<section style="padding:80px 20px;background:#f8f9fa;">

    <div style="max-width:900px;margin:auto;">

        <h2 style="text-align:center;font-size:2.2rem;color:#0d3b66;margin-bottom:50px;">
            Common Questions
        </h2>


        <div class="faq">

            <!-- Q1 -->
            <div class="faq-item">

                <button class="faq-question">
                    🚑 What services do you provide?
                </button>

                <div class="faq-answer">
                    We provide non-emergency medical transportation including
                    <strong>Gurney Transport</strong>, <strong>Wheelchair Transport</strong>,
                    and <strong>Ambulatory Transport</strong> for patients needing assistance
                    to medical appointments.
                </div>

            </div>


            <!-- Q2 -->
            <div class="faq-item">

                <button class="faq-question">
                    💰 How is pricing calculated?
                </button>

                <div class="faq-answer">
                    Ambulatory transport starts at <strong>$60</strong>.
                    An additional <strong>$4 is charged every 5 miles</strong> beyond the base distance.
                    Other transport types depend on service level and distance.
                </div>

            </div>


            <!-- Q3 -->
            <div class="faq-item">

                <button class="faq-question">
                    📅 How do I schedule a booking?
                </button>

                <div class="faq-answer">
                    You can schedule transportation through our online booking
                    system by selecting the service type, pickup location,
                    drop-off location, and preferred time.
                </div>

            </div>


            <!-- Q4 -->
            <div class="faq-item">

                <button class="faq-question">
                    👨‍⚕️ Are your staff trained?
                </button>

                <div class="faq-answer">
                    Yes. Our drivers are trained in patient safety, safe lifting,
                    medical transport procedures, and professional customer service.
                </div>

            </div>


            <!-- Q5 -->
            <div class="faq-item">

                <button class="faq-question">
                    ⏰ How early should I book?
                </button>

                <div class="faq-answer">
                    We recommend booking at least <strong>24 hours in advance</strong>
                    to guarantee availability. Same-day transport may be available
                    depending on schedule.
                </div>

            </div>

        </div>

    </div>
</section>



<!-- CTA -->
<section class="cta-section" style="text-align:center;color:white;">

    <h2 style="font-size:2.5rem;margin-bottom:20px;">
        Need Safe Medical Transportation?
    </h2>

    <p style="max-width:600px;margin:auto;margin-bottom:40px;">
        Our professional team is ready to assist with safe,
        comfortable, and reliable patient transportation.
    </p>

    <a href="#" class="btn-book">Book Transport</a>

</section>



<style>
    .faq-item {
        margin-bottom: 20px;
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    }

    .faq-question {
        width: 100%;
        padding: 20px;
        font-size: 1.1rem;
        text-align: left;
        border: none;
        background: white;
        cursor: pointer;
        font-weight: 600;
        color: #0d3b66;
    }

    .faq-answer {
        display: none;
        padding: 20px;
        color: #555;
        line-height: 1.7;
        border-top: 1px solid #eee;
    }
</style>



<script>
    document.querySelectorAll(".faq-question").forEach(btn => {

        btn.addEventListener("click", function() {

            let answer = this.nextElementSibling;

            answer.style.display =
                answer.style.display === "block" ? "none" : "block";

        });

    });
</script>

@endsection