
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') - TokoKita</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="navbar navbar-expand-lg guest-navbar border-bottom">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center gap-2 fw-bold">
                <img src="{{ asset('images/logo.png') }}" alt="Logo TokoKita" class="brand-logo">
                TokoKita
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#guestNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="guestNavbar">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('home') }}" class="nav-link">Beranda</a>
                    <a href="{{ route('catalog') }}" class="nav-link">Katalog Produk</a>
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="page-content">
        @yield('content')
    </main>

    <footer class="footer text-center">
        <div class="container">
            <p class="mb-1">TokoKita - Belanja Mudah dan Praktis</p>
            <small>&copy; {{ date('Y') }} TokoKita. Semua hak dilindungi.</small>
        </div>
    </footer>
</body>
</html>
