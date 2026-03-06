<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') | Advocate Transport Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: #f8fafc;
        }

        .navbar {
            background: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }

        .navbar-brand {
            font-weight: 700;
            color: #0d3b66;
        }

        .btn-primary {
            background: #0d3b66;
            border: none;
            border-radius: 12px;
            padding: 10px 22px;
        }

        .btn-accent {
            background: #dc3545;
            color: white;
            border-radius: 12px;
            padding: 10px 22px;
        }

        .section {
            padding: 80px 0;
        }

        .card-premium {
            border: none;
            border-radius: 18px;
            box-shadow: 0 12px 35px rgba(0,0,0,0.06);
        }

        footer {
            background: #0d3b66;
            color: white;
            padding: 40px 0;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">Advocate Transport Service</a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                <li class="nav-item ms-2">
                    <a href="{{ route('booking.create') }}" class="btn btn-accent">Book Now</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="text-center">
    <div class="container">
        <p class="mb-1">© {{ date('Y') }} Advocate Transport Service</p>
        <small>Non-Emergency Medical Transportation · San Diego</small>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>