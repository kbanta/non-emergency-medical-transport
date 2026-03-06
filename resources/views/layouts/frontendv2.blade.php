<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advocate Transport Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome for social icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* Navbar Styles */
        .navbar {
            background: linear-gradient(90deg, #0d3b66 0%, #1a5276 100%);
            padding: 1rem 0;
            transition: all 0.3s ease;
            z-index: 999;
        }

        .navbar.sticky-top.scrolled {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #ffffff;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            margin: 0 0.5rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #e63946;
        }

        .btn-book-nav {
            background-color: #ffffff;
            color: #0d3b66;
            border-radius: 50px;
            padding: 0.5rem 1.8rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-book-nav:hover {
            background-color: #e63946;
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }

        /* CTA Section */
        .cta-section {
            position: relative;
            background: linear-gradient(135deg, #0d3b66 0%, #1a5276 100%);
            padding: 100px 20px;
            overflow: hidden;
            text-align: center;
            color: #ffffff;
        }

        .cta-section .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.25);
            z-index: 1;
        }

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
            color: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            background: #0d3b66;
            color: #ffffff;
            padding: 40px 20px;
        }

        footer a {
            color: #ffffff;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #e63946;
            text-decoration: none;
        }

        footer .social-icons a {
            font-size: 1.5rem;
            margin: 0 0.5rem;
        }

        footer small {
            display: block;
            margin-top: 5px;
            color: #cccccc;
        }

        /* Responsive adjustments */
        @media (max-width: 991px) {
            .navbar-nav {
                text-align: center;
                margin-top: 1rem;
            }

            .navbar-nav .nav-item {
                margin-bottom: 0.5rem;
            }
        }

        /* Logo */
        .logo-img {
            max-height: 50px;
            width: auto;
            display: inline-block;
        }

        @media (max-width: 575px) {
            .logo-img {
                max-height: 40px;
            }
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <!-- <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">Advocate Transport Service</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    <li class="nav-item ms-2">
                        <a href="{{ route('booking.create') }}" class="btn btn-book-nav">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <!-- <a class="navbar-brand" href="/">
                <img src="https://via.placeholder.com/180x50?text=Logo" alt="Advocate Transport Service" class="logo-img">
            </a> -->
            <a class="navbar-brand" href="/">Advocate Transport Service</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto align-items-lg-center">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services-basic') }}">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('safety') }}">Safety</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('faq') }}">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                    <li class="nav-item ms-2">
                        <a href="{{ route('booking.create') }}" class="btn btn-book-nav">Book Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p class="mb-2">© {{ date('Y') }} Advocate Transport Service</p>
            <small>Non-Emergency Medical Transportation · San Diego</small>
            <div class="social-icons mt-3">
                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sticky navbar shadow on scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar.sticky-top');
            if (window.scrollY > 10) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>