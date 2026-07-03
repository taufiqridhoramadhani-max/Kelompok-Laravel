@extends('layouts.public')

@section('title', 'Portfolio Kelompok')

@push('styles')
    <style>
        .hero {
            min-height: calc(100vh - 120px);
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 0;
        }

        .hero .hero-inner {
            max-width: 860px;
            width: 100%;
            margin: 0 auto;
        }

        .hero h1 {
            font-size: clamp(3rem, 6vw, 5rem);
            font-weight: 700;
            line-height: 1.05;
            background: linear-gradient(to right, #ffffff, #cbd5e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            color: #cbd5e1;
            font-size: 18px;
        }

        .line {
            width: 120px;
            height: 5px;
            background: linear-gradient(to right,#6366f1,#8b5cf6);
            margin: 25px auto;
            border-radius: 50px;
        }

        .section-text {
            color: #cbd5e1;
            max-width: 850px;
            margin: auto;
        }

        .feature-card {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            backdrop-filter: blur(18px);
            border-radius: 30px;
            color: white;
            transition: 0.5s ease;
            overflow: hidden;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 50px rgba(99,102,241,0.35);
        }

        .feature-card .card-body {
            padding: 35px;
        }

        .feature-icon {
            font-size: 55px;
            margin-bottom: 20px;
        }

        @media (max-width: 768px) {
            .hero {
                min-height: auto;
                padding: 60px 0;
            }

            .hero h1 {
                font-size: 2.8rem;
            }

            .hero p.lead,
            .hero .text-muted {
                font-size: 1rem;
            }

            .line {
                width: 90px;
            }

            .feature-card .card-body {
                padding: 25px;
            }
        }
    </style>
@endpush

@section('content')
<section class="page-section">
    <div class="container">
        <div class="hero">
            <div class="hero-inner">
                <h1>Selamat Datang</h1>
                <div class="line"></div>
                <p class="lead">Website Portfolio Kelompok Berbasis Laravel Framework</p>
                <p class="text-muted">Menampilkan profil anggota, skill, project, serta informasi kontak dan media sosial dengan tampilan modern dan profesional.</p>
                <div class="mt-4 d-flex justify-content-center flex-wrap gap-3">
                    <a href="{{ url('/isi') }}" class="btn btn-glass btn-lg">Profil Anggota</a>
                    <a href="{{ url('/project') }}" class="btn btn-outline-light btn-lg">Project & Contact</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-section">
    <div class="container text-center">
        <h2 class="section-title fw-bold">Tentang Kelompok</h2>
        <p class="section-text">Kami adalah kelompok mahasiswa yang berkolaborasi dalam pengembangan website berbasis Laravel. Website ini dibuat sebagai media untuk menampilkan profil anggota, keahlian, project, serta informasi kontak secara profesional dengan konsep desain Modern Dark Glassmorphism.</p>
    </div>
</section>

<section class="page-section">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Fitur Website</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card feature-card">
                    <div class="card-body text-center">
                        <div class="feature-icon">👤</div>
                        <h5 class="card-title">Profil Anggota</h5>
                        <p class="card-text">Menampilkan biodata dan kompetensi tim.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card">
                    <div class="card-body text-center">
                        <div class="feature-icon">⚙️</div>
                        <h5 class="card-title">Project</h5>
                        <p class="card-text">Daftar project lengkap dengan teknologi.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card feature-card">
                    <div class="card-body text-center">
                        <div class="feature-icon">💬</div>
                        <h5 class="card-title">Kontak</h5>
                        <p class="card-text">Informasi kontak dan media sosial.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection