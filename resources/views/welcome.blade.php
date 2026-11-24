@extends('layouts.app')

@section('content')
<section class="hero-section">
    <div class="container">
        <h1 class="display-4 fw-bold text-dark">Temukan Kegiatan Volunteer yang Kalian Cari</h1>
        <p class="lead text-muted mb-4">Voluna adalah website berbasis informasi yang menyediakan berbagai informasi mengenai kegiatan volunteer dari beragam penyelenggara dalam satu platform.</p>
        <a href="#kegiatan" class="btn btn-primary btn-lg px-4 gap-3">Jelajahi</a>
    </div>
</section>

<section class="container my-5" id="kegiatan">
    <div class="txt-cebter mb-5">
        <h2 class="text-center mb-5">Kegiatan Volunteer Terbaru</h2>
        <p class="text-muted">Pilih kegiatan yang sesuai dengan minat dan lokasimu</p>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?w=500" class="card-img-top" alt="Poster">
            <div class="card-body">
                <span class="badge bg-success mb-2">Lingkungan</span>
                <h5 class="card-title fw-bold">Aksi Bersih Pantai & Tanam Mangrove</h5>
                <p class="text-muted small mb-2"><i class="bi bi-geo-alt"></i>Pantai Indah Kapuk, Jakarta</p>
                <p class="text-muted small mb-22"><i class="bi bi-calendar-event"></i>15 Desember 2026</p>
                <p class="card-text text-secondary">Ayo berkontribusi melestarikan ekosistem pesisir bersama relawan lainnya...</p>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
                <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=500" class="card-img-top" alt="Poster">
            <div class="card-body">
                <span class="badge bg-primary mb-2">Pendidikan</span>
                <h5 class="card-title fw-bold">Relawan Mengajar Anak Pesisir</h5>
                <p class="text-muted small mb-2"><i class="bi bi-geo-alt"></i>Yogyakarta (Hybrid)</p>
                <p class="text-muted small mb-22"><i class="bi bi-calendar-event"></i>20 Desember 2026</p>
                <p class="card-text text-secondary">Membantu memberikan edukasi dasar membaca dan berhitung untuk anak-anak sekolah dasar...</p>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
                <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 shadow-sm border-0">
            <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=500" class="card-img-top" alt="Poster">
            <div class="card-body">
                <span class="badge bg-warning mb-2">Sosial</span>
                <h5 class="card-title fw-bold">Distribusi Makanan & Sembako</h5>
                <p class="text-muted small mb-2"><i class="bi bi-geo-alt"></i>Bandung Kota</p>
                <p class="text-muted small mb-22"><i class="bi bi-calendar-event"></i>25 Desember 2026</p>
                <p class="card-text text-secondary">Membagikan makanan siap saji dan sembako kepada lansia dan kaum dhuafa yang membutuhkan...</p>
            </div>
            <div class="card-footer bg-white border-0 pb-3">
                <a href="#" class="btn btn-outline-primary w-100">Lihat Detail</a>
            </div>
        </div>
    </div>
</section>
@endsection