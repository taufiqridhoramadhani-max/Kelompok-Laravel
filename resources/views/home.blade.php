<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koperasi Baju & Buku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .hero {
            min-height: 90vh;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            display: flex;
            align-items: center;
        }

        .card-hover {
            transition: 0.3s;
        }

        .card-hover:hover {
            transform: translateY(-8px);
        }

        footer {
            background: #212529;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                📚👕 Koperasi Kelompok
            </a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container text-center">

            <h1 class="display-3 fw-bold">
                Selamat Datang
            </h1>

            <p class="lead mt-3">
                Website Koperasi Baju dan Buku berbasis Laravel
                yang dibuat sebagai proyek kelompok.
            </p>

            <a href="/anggota" class="btn btn-light btn-lg mt-3">
                Lihat Anggota Kelompok
            </a>

        </div>
    </section>

    <!-- Tentang -->
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2>Tentang Kelompok</h2>
                <p class="text-muted">
                    Kami membuat website koperasi yang menyediakan
                    informasi produk baju dan buku dengan Laravel Framework.
                </p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card card-hover shadow h-100">
                        <div class="card-body text-center">
                            <h1>👕</h1>
                            <h5>Produk Baju</h5>
                            <p>Menampilkan berbagai produk pakaian.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-hover shadow h-100">
                        <div class="card-body text-center">
                            <h1>📚</h1>
                            <h5>Produk Buku</h5>
                            <p>Menampilkan koleksi buku yang tersedia.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-hover shadow h-100">
                        <div class="card-body text-center">
                            <h1>👨‍💻</h1>
                            <h5>Tim Kelompok</h5>
                            <p>Profil anggota dan pembagian tugas.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Preview Anggota -->
    <section class="bg-light py-5">
        <div class="container">

            <h2 class="text-center mb-4">
                Anggota Kelompok
            </h2>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h5>Anggota 1</h5>
                            <p>Halaman Home</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h5>Anggota 2</h5>
                            <p>Halaman Produk Baju</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow">
                        <div class="card-body text-center">
                            <h5>Anggota 3</h5>
                            <p>Halaman Produk Buku</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-center">
        <p class="mb-0">
            © 2026 Koperasi Baju & Buku | Laravel Project
        </p>
    </footer>

</body>
</html>