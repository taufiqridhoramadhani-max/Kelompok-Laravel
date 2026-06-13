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

        .hero p{
            color:#cbd5e1;
        }

        .line{
            width:120px;
            height:5px;
            margin:20px auto;
            border-radius:20px;
            background:linear-gradient(to right,#6366f1,#8b5cf6);
        }

        .glass-card{
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.15);
            backdrop-filter:blur(18px);
            border-radius:30px;
            transition:.4s;
            height:100%;
        }

        .glass-card:hover{
            transform:translateY(-10px);
            box-shadow:0 20px 50px rgba(99,102,241,.35);
        }

        .card-body{
            padding:30px;
            color:white;
        }

        .tech-badge{
            background:linear-gradient(135deg,#6366f1,#8b5cf6);
            padding:10px 18px;
            border-radius:30px;
            display:inline-block;
            margin-top:10px;
        }

        .btn-glass{
            background:linear-gradient(135deg,#6366f1,#8b5cf6);
            border:none;
            color:white;
            border-radius:15px;
            padding:12px 25px;
            transition:.3s;
        }

        .btn{
            border-radius:12px !important;
            transition:.3s;
        }

        .btn:hover{
            transform:translateY(-3px);
        }

        .footer{
            margin-top:60px;
            text-align:center;
            color:#94a3b8;
            padding-bottom:30px;
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

    @auth
    <div class="text-center mb-5">
        <a href="/project/create" class="btn btn-glass">
            + Tambah Project
        </a>
    </div>
    @endauth

    <div class="row g-4">

        @forelse($projects as $project)

        <div class="col-md-4">
            <div class="glass-card">

                <div class="card-body">

                    <h4>{{ $project->nama_project }}</h4>

                    <p>
                        {{ $project->deskripsi }}
                    </p>

                    <span class="tech-badge">
                        {{ $project->teknologi }}
                    </span>

                    @auth
                    <div class="mt-3">

                        <a href="/project/{{ $project->id }}/edit"
                        class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <form
                            action="/project/{{ $project->id }}"
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

        <div style="margin-top:15px;">
        <p style="margin:0;">📧 kelompok@gmail.com</p>
        <p style="margin:0;">📷 Instagram: @kelompok</p>
    </div>
    </div>

</div>

</body>
</html>
