@extends('layouts.public')

@section('title', 'Edit Anggota')

@section('content')
<div class="container py-5" style="max-width: 760px;">
    <div class="card border-0 shadow-lg" style="background: rgba(255,255,255,0.08); backdrop-filter: blur(18px); border-radius: 30px;">
        <div class="card-body p-4 p-md-5">
            <h2 class="text-white mb-4">Edit Anggota</h2>
            <form action="{{ url('/members/'.$member->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label text-white">Nama</label>
                    <input type="text" name="nama" class="form-control" value="{{ old('nama', $member->nama) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">NIM</label>
                    <input type="text" name="nim" class="form-control" value="{{ old('nim', $member->nim) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $member->jurusan) }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label text-white">Skill</label>
                    <textarea name="skills" class="form-control" rows="3">{{ old('skills', $member->skills) }}</textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label text-white">Foto</label>
                    <input type="file" name="photo" class="form-control" accept="image/*">
                    @if($member->photo_path)
                        <img src="{{ asset('storage/'.$member->photo_path) }}" alt="Foto anggota" class="img-fluid rounded mt-3" style="max-height: 180px;">
                    @endif
                </div>
                <div class="d-flex gap-2">
                    <a href="{{ url('/isi') }}" class="btn btn-outline-light">Kembali</a>
                    <button type="submit" class="btn btn-glass">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
