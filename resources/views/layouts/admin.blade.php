
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - TokoKita</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <aside class="col-md-3 col-lg-2 admin-sidebar p-3">
                <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center gap-2 text-white mb-4">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo TokoKita" class="brand-logo">
                    <span class="fs-5 fw-bold">TokoKita</span>
                </a>

                <div class="text-secondary small mb-2">MENU ADMIN</div>
                
                <nav class="nav flex-column gap-1">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        Dashboard
                    </a>
                
                    <a href="{{ route('admin.categories.index') }}" class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">
                        Data Kategori
                    </a>
                
                    <a href="{{ route('admin.products.index') }}" class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}">
                        Data Produk
                    </a>
                
                    <a href="{{ route('admin.customers.index') }}" class="nav-link {{ request()->routeIs('admin.customers.*') ? 'active' : '' }}">
                        Data Pelanggan
                    </a>
                
                    <a href="{{ route('home') }}" class="nav-link mt-3">
                        Lihat Halaman Guest
                    </a>
                </nav>
                
            </aside>

            <div class="col-md-9 col-lg-10 p-0">
                <nav class="navbar bg-white border-bottom px-4 py-3">
                    <span class="navbar-brand mb-0 h1">Panel Admin</span>
                    <span class="text-secondary">Pengelolaan TokoKita</span>
                </nav>

                <main class="p-4 page-content">
                    @yield('content')
                </main>

                <footer class="border-top bg-white text-secondary text-center p-3">
                    &copy; {{ date('Y') }} TokoKita
                </footer>
            </div>
        </div>
    </div>
</body>
</html>
