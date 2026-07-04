@extends('layouts.public')

@section('title', 'Tambah Project')

@push('styles')
    <style>
        .container-box {
            max-width: 720px;
            margin: 40px auto;
            padding: 0 15px;
        }

        .glass-card {
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.15);
            backdrop-filter: blur(18px);
            border-radius: 30px;
            padding: 40px;
            box-shadow: 0 14px 40px rgba(0,0,0,.22);
        }

        .glass-card h2 {
            text-align: center;
            font-weight: 700;
            margin-bottom: 30px;
            color: white;
        }

        .form-label {
            color: #cbd5e1;
            font-weight: 500;
        }

        .form-control {
            background: rgba(255,255,255,.08);
            border: 1px solid rgba(255,255,255,.15);
            color: white;
            border-radius: 15px;
            padding: 14px;
        }

        .form-control:focus {
            background: rgba(255,255,255,.12);
            color: white;
            border-color: #8b5cf6;
            box-shadow: none;
        }

        .form-control::placeholder {
            color: rgba(255,255,255,.65);
        }

        .btn-glass {
            background: linear-gradient(135deg,#6366f1,#8b5cf6);
            border: none;
            color: white;
            border-radius: 15px;
            padding: 12px 30px;
            transition: transform .3s ease, box-shadow .3s ease;
        }

        .btn-glass:hover,
        .btn-outline-light:hover {
            transform: translateY(-3px);
            box-shadow: 0 14px 30px rgba(99,102,241,.24);
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .form-actions a,
        .form-actions button {
            flex: 1 1 210px;
        }

        @media (max-width: 576px) {
            .glass-card {
                padding: 30px 20px;
            }

            .container-box {
                margin: 24px auto;
            }

            .form-actions {
                flex-direction: column;
            }
        }
    </style>
@endpush

@section('content')
<div class="container container-box">
    <div class="glass-card">
        <h2>Tambah Project</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ url('/project') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label class="form-label text-white">Nama Project</label>
                <input type="text" name="nama_project" class="form-control" value="{{ old('nama_project') }}">
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Deskripsi</label>
                <textarea name="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label text-white">Teknologi</label>
                <input type="text" name="teknologi" class="form-control" value="{{ old('teknologi') }}">
            </div>

            <div class="mb-4">
                <label class="form-label text-white">Thumbnail</label>
                <input type="file" name="thumbnail" class="form-control" accept="image/*">
            </div>

            <div class="form-actions">
                <a href="{{ url('/project') }}" class="btn btn-outline-light">Kembali</a>
                <button type="submit" class="btn btn-glass">Simpan Project</button>
            </div>
        </form>
    </div>
</div>
@endsection
