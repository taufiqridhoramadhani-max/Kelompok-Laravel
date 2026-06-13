```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>

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

            min-height:100vh;
            color:white;
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

        .container-box{
            max-width:700px;
            margin:auto;
            margin-top:60px;
            margin-bottom:60px;
        }

        .glass-card{
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.15);
            backdrop-filter:blur(18px);
            border-radius:30px;
            padding:40px;
            box-shadow:0 10px 30px rgba(0,0,0,.2);
        }

        h2{
            text-align:center;
            font-weight:700;
            margin-bottom:30px;
        }

        .form-label{
            font-weight:500;
        }

        .form-control{
            background:rgba(255,255,255,.08);
            border:1px solid rgba(255,255,255,.15);
            color:white;
            border-radius:15px;
            padding:14px;
        }

        .form-control:focus{
            background:rgba(255,255,255,.12);
            color:white;
            border-color:#8b5cf6;
            box-shadow:none;
        }

        textarea.form-control{
            min-height:120px;
        }

        .btn-update{
            background:linear-gradient(135deg,#6366f1,#8b5cf6);
            border:none;
            color:white;
            border-radius:15px;
            padding:12px 30px;
            transition:.3s;
        }

        .btn:hover{
            transform:translateY(-3px);
        }

    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="/">
            Portfolio Kelompok
        </a>
    </div>
</nav>

<div class="container container-box">

    <div class="glass-card">

        <h2>Edit Project</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/project/{{ $project->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">
                    Nama Project
                </label>

                <input
                    type="text"
                    name="nama_project"
                    class="form-control"
                    value="{{ $project->nama_project }}">
            </div>

            <div class="mb-3">
                <label class="form-label">
                    Deskripsi
                </label>

                <textarea
                    name="deskripsi"
                    class="form-control">{{ $project->deskripsi }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label">
                    Teknologi
                </label>

                <input
                    type="text"
                    name="teknologi"
                    class="form-control"
                    value="{{ $project->teknologi }}">
            </div>

            <div class="d-flex justify-content-between">

                <a href="/project"
                class="btn btn-outline-light">
                    Kembali
                </a>

                <button
                    class="btn btn-update">

                    Update Project

                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>
```
