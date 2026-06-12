<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project & Contact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            font-family:'Poppins',sans-serif;
        }

        body{
            background:
            radial-gradient(circle at top left,#667eea 0%,transparent 35%),
            radial-gradient(circle at bottom right,#764ba2 0%,transparent 35%),
            #0f172a;

            color:white;
            min-height:100vh;
        }

        .navbar{
           background: rgba(255,255,255,0.08) !important;
            backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .navbar-brand{
            font-weight:700;
            font-size:22px;
        }

        .hero{
            text-align:center;
            padding-top:80px;
            margin-bottom:60px;
        }

        .hero h1{
            font-size:58px;
            font-weight:700;
            background:linear-gradient(to right,#fff,#cbd5e1);
            -webkit-background-clip:text;
            -webkit-text-fill-color:transparent;
        }

        .line{
            width:120px;
            height:5px;
            margin:20px auto;
            border-radius:20px;
            background:linear-gradient(to right,#6366f1,#8b5cf6);
        }

        .glass-card{
            background:rgba(255,255,255,.08) !important;
            border:1px solid rgba(255,255,255,.15);
            backdrop-filter:blur(18px);
            border-radius:30px;
            height:100%;
            transition:.4s;
            color:white !important;
        }

        .card{
            background: transparent !important;
        }

        .card-body{
            color:white !important;
        }

        .glass-card:hover{
            transform:translateY(-10px);
            box-shadow:0 20px 50px rgba(99,102,241,.35);
        }

        .glass-card .card-body{
            padding:30px;
            color:white;
        }

        .glass-card h4{
            color:white;
        }

        .glass-card p{
            color:#cbd5e1;
        }

        .tech-badge{
            background:linear-gradient(135deg,#6366f1,#8b5cf6);
            padding:10px 18px;
            border-radius:30px;
            display:inline-block;
            margin:5px;
        }

        .contact-box{
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.15);
            backdrop-filter:blur(18px);
            border-radius:30px;
            padding:40px;
        }

        .btn-glass{
            background:linear-gradient(135deg,#6366f1,#8b5cf6);
            border:none;
            color:white;
            border-radius:50px;
            padding:12px 30px;
        }

        .btn-glass:hover{
            color:white;
        }

        .footer{
            margin-top:60px;
            text-align:center;
            color:#94a3b8;
            padding-bottom:30px;
        }

        .glass-card{
            color: white !important;
        }

        .glass-card .card-body{
            color: white !important;
        }

        .glass-card h4{
            color: white !important;
        }

        .glass-card p{
            color: #cbd5e1 !important;
        }

        .btn{
            border-radius: 12px !important;
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="/">
            Portfolio Kelompok
        </a>

        <div>
            <a href="/isi" class="btn btn-sm btn-outline-light me-2">
                Profil
            </a>

            <a href="/project" class="btn btn-sm btn-light">
                Project
            </a>
        </div>

    </div>
</nav>

<div class="container">

    <div class="hero">

        <h1>Project Kelompok</h1>

        <div class="line"></div>

        <p>
            Daftar project, teknologi yang digunakan,
            dan informasi kontak kelompok
        </p>

    </div>

    <div class="text-center mb-5">
        <a href="/project/create" class="btn btn-glass">
            + Tambah Project
        </a>
    </div>

    <div class="row g-4">

        @forelse($projects as $project)

        <div class="col-md-4">
            <div class="card glass-card">
                <div class="card-body">

                    <h4>{{ $project->nama_project }}</h4>

                    <p>
                        {{ $project->deskripsi }}
                    </p>

                    <span class="tech-badge">
                        {{ $project->teknologi }}
                    </span>

                    <div class="mt-3">

                        <a href="/project/{{ $project->id }}/edit"
                        class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form action="/project/{{ $project->id }}"
                            method="POST"
                            class="d-inline">

                            @csrf
                            @method('DELETE')

                            <button
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus project ini?')">

                                Hapus

                            </button>

                        </form>

                    </div>

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
    </div>

</div>

</body>
</html>