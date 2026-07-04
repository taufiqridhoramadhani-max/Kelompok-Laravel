@extends('layouts.public')

@section('title', 'Project & Contact')

@push('styles')
    <style>
        .hero {
            text-align: center;
            padding: 60px 0 40px;
            margin-bottom: 40px;
        }

        .hero h1 {
            font-size: clamp(2.8rem, 6vw, 4.8rem);
            font-weight: 700;
            background: linear-gradient(to right,#fff,#cbd5e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            color:#cbd5e1;
            max-width: 760px;
            margin: 0 auto;
            font-size: 1rem;
        }

        .line {
            width: 100px;
            height: 5px;
            margin: 20px auto;
            border-radius: 20px;
            background: linear-gradient(to right,#6366f1,#8b5cf6);
        }

        .glass-card {
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.15);
            backdrop-filter: blur(18px);
            border-radius: 30px;
            transition: .4s;
            height: 100%;
        }

        .glass-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(99,102,241,.35);
        }

        .card-body {
            padding: 28px;
            color: white;
        }

        .tech-badge {
            background: linear-gradient(135deg,#6366f1,#8b5cf6);
            padding: 10px 18px;
            border-radius: 30px;
            display: inline-block;
            margin-top: 10px;
        }

        .project-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 0.7rem;
            margin-top: 18px;
        }

        .project-actions .btn {
            flex: 1 1 130px;
            min-width: 120px;
        }

        .btn-glass {
            background: linear-gradient(135deg,#6366f1,#8b5cf6);
            border: none;
            color: white;
            border-radius: 15px;
            padding: 12px 25px;
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .btn-glass:hover,
        .btn-outline-light:hover,
        .btn-danger:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 28px rgba(99,102,241,.2);
        }

        .footer {
            margin-top: 60px;
            text-align: center;
            color: #94a3b8;
            padding-bottom: 30px;
        }

        @media (max-width: 768px) {
            .hero {
                padding-top: 50px;
                margin-bottom: 30px;
            }

            .hero p {
                font-size: 0.98rem;
            }
        }
    </style>
@endpush

@section('content')
<div class="container">
    <div class="hero">
        <h1>Project Kelompok</h1>
        <div class="line"></div>
        <p class="text-muted">Daftar project, teknologi yang digunakan, dan informasi kontak kelompok</p>
    </div>

    @auth
        <div class="text-center mb-5">
            <a href="{{ url('/project/create') }}" class="btn btn-glass">+ Tambah Project</a>
        </div>
    @endauth

    <div class="row g-4">
        @forelse($projects as $project)
            <div class="col-md-4">
                <div class="glass-card">
                    <div class="card-body">
                        <h4>{{ $project->nama_project }}</h4>
                        <p class="text-muted">{{ $project->deskripsi }}</p>
                        <span class="tech-badge">{{ $project->teknologi }}</span>
                        @auth
                        <div class="project-actions">
                            <a href="{{ url('/project/'.$project->id.'/edit') }}" class="btn btn-outline-light btn-sm">Edit</a>
                            <form action="{{ url('/project/'.$project->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus project ini?')">Hapus</button>
                            </form>
                        </div>
                        @endauth
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <h4>Belum ada project</h4>
            </div>
        @endforelse
    </div>

    <div class="footer">
        © 2026 Portfolio Kelompok Laravel • Universitas Al-Ghifari
        <div class="mt-3 text-muted">
            <p class="mb-0">📧 kelompok@gmail.com</p>
            <p class="mb-0">📷 Instagram: @kelompok</p>
        </div>
    </div>
</div>
@endsection
