@extends('layout.master')

@section('content')
<!-- Hero Section -->
<div class="row align-items-center py-4 mb-4">
    <div class="col-lg-7 mb-3 mb-lg-0">
        <span class="badge bg-primary-subtle text-primary fw-bold px-3 py-2 rounded-pill mb-3">
            Halo, Anak Baik! 👋
        </span>
        <h1 class="fw-bold display-5 mb-3 text-dark">
            Ruang Belajar & Eksplorasi Coding
        </h1>
        <p class="text-muted fs-5 mb-4">
            Tempat nyimpen project latihan, materi kuliah, dan eksperimen web development.
        </p>
        <div class="d-flex gap-2">
            <a href="/latihan" class="btn btn-primary btn-lg px-4 fs-6">Cek Latihan</a>
            <a href="/about" class="btn btn-outline-secondary btn-lg px-4 fs-6">Tentang Saya</a>
        </div>
    </div>
    <div class="col-lg-5 text-center">
        <div class="p-4 bg-light rounded-4 shadow-sm border">
            <div class="display-1 text-primary mb-2">🚀</div>
            <h5 class="fw-bold text-dark">Laravel + Bootstrap 5</h5>
            <p class="text-muted small mb-0">Blade Templating Dashboard</p>
        </div>
    </div>
</div>

<!-- Quick Stats / Menu Singkat -->
<div class="row g-3 mb-4">
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-3 h-100">
            <div class="card-body p-4">
                <div class="text-primary mb-2 fs-3">📚</div>
                <h5 class="fw-bold text-dark">Mata Kuliah</h5>
                <p class="text-muted small mb-3">Data jadwal dan modul perkuliahan semester ini.</p>
                <a href="/latihan" class="text-primary text-decoration-none fw-semibold small">Lihat Data &rarr;</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-3 h-100">
            <div class="card-body p-4">
                <div class="text-success mb-2 fs-3">🛒</div>
                <h5 class="fw-bold text-dark">Katalog Produk</h5>
                <p class="text-muted small mb-3">Daftar item dan merchandise yang tersedia.</p>
                <a href="/product" class="text-success text-decoration-none fw-semibold small">Buka Katalog &rarr;</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card border-0 shadow-sm rounded-3 h-100">
            <div class="card-body p-4">
                <div class="text-warning mb-2 fs-3">💬</div>
                <h5 class="fw-bold text-dark">Kontak & Info</h5>
                <p class="text-muted small mb-3">Informasi pembuat web dan saluran komunikasi.</p>
                <a href="/contact" class="text-warning text-decoration-none fw-semibold small">Hubungi &rarr;</a>
            </div>
        </div>
    </div>
</div>
@endsection