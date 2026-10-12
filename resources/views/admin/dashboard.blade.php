
@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="mb-4">
        <h2 class="fw-bold">Dashboard Admin</h2>
        <p class="text-secondary">Selamat datang di panel pengelolaan TokoKita.</p>
    </div>

    <div class="row g-3">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Data Kategori</p>
                    <h3 class="fw-bold">Master Kategori</h3>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-primary btn-sm">Kelola Kategori</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Data Produk</p>
                    <h3 class="fw-bold">Master Produk</h3>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-primary btn-sm">Kelola Produk</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-secondary mb-2">Data Pelanggan</p>
                    <h3 class="fw-bold">Master Pelanggan</h3>
                    <a href="{{ route('admin.customers.index') }}" class="btn btn-primary btn-sm">Kelola Pelanggan</a>
                </div>
            </div>
        </div>
    </div>
<!-- 
    <div class="alert alert-info mt-4">
        Dashboard siap digunakan. Data akan ditampilkan setelah halaman CRUD selesai dibuat.
    </div> -->
@endsection
