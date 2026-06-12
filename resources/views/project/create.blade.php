<!DOCTYPE html>
<html>
<head>
    <title>Tambah Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

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

    <form action="/project" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama Project</label>
            <input type="text" name="nama_project" class="form-control">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Teknologi</label>
            <input type="text" name="teknologi" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

    </form>

</body>
</html>