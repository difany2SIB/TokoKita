
@extends('layouts.guest')

@section('title', 'Katalog Produk')

@section('content')
    <section class="container py-5">
        <div class="mb-4">
            <h1 class="fw-bold">Katalog Produk</h1>
            <p class="text-secondary">Lihat produk yang tersedia di TokoKita.</p>
        </div>
<!-- 
        <div class="alert alert-info">
            Katalog sudah disiapkan. Daftar produk dari database akan ditampilkan setelah fitur CRUD Pertemuan 6 selesai.
        </div> -->

        <a href="{{ route('home') }}" class="btn btn-outline-primary">Kembali ke Beranda</a>
    </section>
@endsection
