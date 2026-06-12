<!DOCTYPE html>
<html>
<head>
    <title>Edit Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

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
        <label>Nama Project</label>
        <input type="text"
               name="nama_project"
               class="form-control"
               value="{{ $project->nama_project }}">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi"
                  class="form-control">{{ $project->deskripsi }}</textarea>
    </div>

    <div class="mb-3">
        <label>Teknologi</label>
        <input type="text"
               name="teknologi"
               class="form-control"
               value="{{ $project->teknologi }}">
    </div>

    <button class="btn btn-primary">
        Update
    </button>

</form>

</body>
</html>