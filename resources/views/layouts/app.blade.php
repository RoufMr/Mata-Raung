<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Sistem Saya</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/module-css/auth.css') }}">
    
</head>
<body>
    <div class="auth-container">
        <!-- Background Slider -->
        <div class="background-slider"></div>
        
        <!-- Content Section -->
        <div class="auth-content-wrapper">
            @yield('content')
        </div>
    </div>

    @include('sweetalert::alert')
    <script src="{{ asset('assets/js/auth.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>