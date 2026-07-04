@extends('layouts.public')

@section('title', 'Tambah Anggota')

@section('content')
<div class="container py-5" style="max-width: 760px;">
    <div class="card border-0 shadow-lg" style="background: rgba(255,255,255,0.08); backdrop-filter: blur(18px); border-radius: 30px;">
        <div class="card-body p-4 p-md-5">
            <h2 class="text-white mb-4">Tambah Anggota</h2>
            <form action="{{ url('/members') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label text-white">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">NIM</label>
                    <input type="text" name="nim" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Skill</label>
                    <textarea name="skills" class="form-control" rows="3" placeholder="Contoh: Laravel, React"></textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label text-white">Foto</label>
                    <input type="file" name="photo" class="form-control" accept="image/*">
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ url('/isi') }}" class="btn btn-outline-light">Kembali</a>
                    <button type="submit" class="btn btn-glass">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
