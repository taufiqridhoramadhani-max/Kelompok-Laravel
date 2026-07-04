@extends('layouts.public')

@section('title', 'Profil Anggota Kelompok')

@push('styles')
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <style>
        .hero {
            text-align: center;
            padding: 60px 0 40px;
            margin-bottom: 60px;
        }

        .hero h1 {
            font-size: clamp(2.8rem, 6vw, 4.8rem);
            font-weight: 700;
            background: linear-gradient(to right, #ffffff, #cbd5e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            font-size: 18px;
            color: #cbd5e1;
            margin-top: 15px;
        }

        .line {
            width: 120px;
            height: 5px;
            background: linear-gradient(to right, #6366f1, #8b5cf6);
            margin: 25px auto;
            border-radius: 20px;
        }

        .profile-card {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            backdrop-filter: blur(18px);
            border-radius: 30px;
            overflow: hidden;
            transition: 0.5s ease;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .profile-card:hover {
            transform: translateY(-15px) scale(1.03);
            box-shadow: 0 20px 50px rgba(99,102,241,0.35);
        }

        .top-design {
            height: 120px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
        }

        .profile-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid white;
            margin-top: -60px;
            object-fit: cover;
            background: white;
        }

        .name {
            font-size: 24px;
            font-weight: 600;
            margin-top: 20px;
        }

        .nim {
            color: #cbd5e1;
            font-size: 14px;
        }

        .info-box {
            background: rgba(255,255,255,0.06);
            padding: 14px;
            border-radius: 18px;
            margin-top: 15px;
        }

        .info-title {
            font-size: 14px;
            color: #94a3b8;
        }

        .info-value {
            font-size: 17px;
            font-weight: 500;
        }

        .skill-title {
            margin-top: 25px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .skill-badge {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            padding: 10px 18px;
            border-radius: 30px;
            display: inline-block;
            margin: 5px;
            font-size: 14px;
            transition: 0.3s;
        }

        .skill-badge:hover {
            transform: scale(1.08);
        }

        .footer-text {
            margin-top: 70px;
            text-align: center;
            color: #94a3b8;
            font-size: 14px;
        }
    </style>
@endpush

@section('content')
<div class="container">

    <div class="hero" data-aos="fade-down">
        <h1>Profil Anggota Kelompok</h1>
        <div class="line"></div>
        <p>Biodata dan skill anggota kelompok kami</p>
    </div>

    @auth
        <div class="text-center mb-4">
            <a href="{{ url('/members/create') }}" class="btn btn-glass">+ Tambah Anggota</a>
        </div>
    @endauth

    <div class="row justify-content-center">
        @forelse($anggota as $item)
            <div class="col-lg-4 col-md-6 mb-5" data-aos="zoom-in" data-aos-duration="1200">
                <div class="profile-card text-center">
                    <div class="top-design"></div>
                    <img src="{{ $item->photo_path ? asset('storage/'.$item->photo_path) : 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png' }}" class="profile-img" alt="Avatar">
                    <div class="p-4">
                        <div class="name">{{ $item->nama }}</div>
                        <div class="nim">NIM : {{ $item->nim }}</div>
                        <div class="info-box">
                            <div class="info-title">Jurusan</div>
                            <div class="info-value">{{ $item->jurusan }}</div>
                        </div>
                        <div class="skill-title">Skill</div>
                        @php $skills = $item->skills ? explode(',', $item->skills) : []; @endphp
                        @foreach($skills as $skill)
                            <span class="skill-badge">{{ trim($skill) }}</span>
                        @endforeach
                        @auth
                            <div class="mt-4 d-flex justify-content-center gap-2">
                                <a href="{{ url('/members/'.$item->id.'/edit') }}" class="btn btn-outline-light btn-sm">Edit</a>
                                <form action="{{ url('/members/'.$item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus anggota ini?')">Hapus</button>
                                </form>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center text-white">
                <h4>Belum ada anggota</h4>
            </div>
        @endforelse
    </div>

    <div class="text-center mb-5">
        <a href="{{ url('/') }}" class="btn btn-outline-light me-2">Home</a>
        <a href="{{ url('/project') }}" class="btn btn-light">Project & Contact</a>
    </div>

    <div class="footer-text">© 2026 Kelompok Laravel • Universitas Al-Ghifari</div>
</div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>AOS.init({ once: true });</script>
@endpush
