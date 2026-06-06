<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Kelompok</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .hero {
            min-height: 100vh;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: white;
            display: flex;
            align-items: center;
        }

        .feature-card {
            transition: 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        footer {
            background-color: #212529;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                Portfolio Kelompok
            </a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container text-center">

            <h1 class="display-3 fw-bold">
                Selamat Datang
            </h1>

            <p class="lead mt-3">
                Website Portofolio Kelompok yang dibuat menggunakan
                Laravel Framework.
            </p>

            <p class="mb-4">
                Menampilkan profil anggota, skill, project,
                serta informasi kontak dan media sosial.
            </p>

            <a href="/isi" class="btn btn-light btn-lg">
                Lihat Anggota
            </a>

        </div>
    </section>

    <!-- Tentang Kelompok -->
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">Tentang Kelompok</h2>

                <p class="text-muted">
                    Kami adalah kelompok mahasiswa yang berkolaborasi
                    dalam pengembangan website berbasis Laravel.
                    Website ini dibuat sebagai media untuk menampilkan
                    profil anggota, keahlian, project, dan kontak.
                </p>
            </div>

        </div>
    </section>

    <!-- Preview Fitur -->
    <section class="bg-light py-5">
        <div class="container">

            <h2 class="text-center fw-bold mb-5">
                Fitur Website
            </h2>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card feature-card shadow h-100">
                        <div class="card-body text-center">

                            <h1>👤</h1>

                            <h4>Profile Anggota</h4>

                            <p>
                                Menampilkan foto anggota,
                                biodata, dan skill yang dimiliki.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card feature-card shadow h-100">
                        <div class="card-body text-center">

                            <h1>💼</h1>

                            <h4>Project</h4>

                            <p>
                                Menampilkan daftar project yang
                                pernah dikerjakan anggota kelompok.
                            </p>

                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card feature-card shadow h-100">
                        <div class="card-body text-center">

                            <h1>📞</h1>

                            <h4>Contact</h4>

                            <p>
                                Menampilkan kontak dan media sosial
                                untuk terhubung dengan anggota.
                            </p>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-5 text-center">
        <div class="container">

            <h2 class="fw-bold">
                Kenali Anggota Kelompok Kami
            </h2>

            <p class="text-muted">
                Klik tombol di bawah untuk melihat profil lengkap anggota.
            </p>

            <a href="/profile" class="btn btn-primary btn-lg">
                Lihat Profile Anggota
            </a>

        </div>
    </section>

    <!-- Footer -->
    <footer class="py-4 text-center">
        <div class="container">
            <p class="mb-0">
                © 2026 Portfolio Kelompok Laravel
            </p>
        </div>
    </footer>

</body>
</html>