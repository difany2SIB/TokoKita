
@extends('layouts.guest')

@section('title', 'Beranda')

@section('content')
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <span class="badge text-bg-primary mb-3">Selamat Datang</span>
                    <h1 class="display-5 fw-bold mb-3">Selamat Datang di TokoKita</h1>
                    <p class="lead text-secondary mb-4">
                        Temukan berbagai produk pilihan dengan pengalaman belanja yang mudah dan nyaman.
                    </p>
                    <a href="{{ route('catalog') }}" class="btn btn-primary btn-lg">Lihat Katalog Produk</a>
                </div>
                <div class="col-lg-4 text-center mt-4 mt-lg-0">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo TokoKita" class="img-fluid" style="max-width: 180px;">
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="text-center mb-4">
            <h2 class="fw-bold">Mengapa Memilih TokoKita?</h2>
            <p class="text-secondary">Toko sederhana untuk kebutuhan belanja kamu.</p>
        </div>

        <div class="row g-3">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <h5 class="fw-bold">Produk Pilihan</h5>
                        <p class="text-secondary mb-0">Informasi produk tersusun dengan rapi.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <h5 class="fw-bold">Mudah Digunakan</h5>
                        <p class="text-secondary mb-0">Navigasi sederhana dan mudah dipahami.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <h5 class="fw-bold">Data Terorganisasi</h5>
                        <p class="text-secondary mb-0">Pengelolaan data disiapkan melalui panel Admin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
