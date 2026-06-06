<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Kelompok</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            background:
            radial-gradient(circle at top left, #667eea 0%, transparent 35%),
            radial-gradient(circle at bottom right, #764ba2 0%, transparent 35%),
            #0f172a;
            color: white;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* Navbar */

        .navbar{
            background: rgba(255,255,255,0.08) !important;
            backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .navbar-brand{
            font-weight: 700;
            font-size: 22px;
        }

        /* Hero */

        .hero{
            min-height: 100vh;
            display: flex;
            align-items: center;
            text-align: center;
        }

        .hero h1{
            font-size: 70px;
            font-weight: 700;
            background: linear-gradient(to right,#ffffff,#cbd5e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p{
            color: #cbd5e1;
            font-size: 18px;
        }

        .line{
            width: 120px;
            height: 5px;
            background: linear-gradient(to right,#6366f1,#8b5cf6);
            margin: 25px auto;
            border-radius: 50px;
        }

        /* Button */

        .btn-glass{
            background: linear-gradient(135deg,#6366f1,#8b5cf6);
            border: none;
            color: white;
            padding: 12px 35px;
            border-radius: 50px;
            transition: 0.4s;
            font-weight: 500;
        }

        .btn-glass:hover{
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(99,102,241,.4);
        }

        /* Section */

        .section-title{
            font-weight: 700;
            margin-bottom: 20px;
        }

        .section-text{
            color: #cbd5e1;
            max-width: 850px;
            margin: auto;
        }

        /* Glass Cards */

        .feature-card{
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            backdrop-filter: blur(18px);
            border-radius: 30px;
            color: white;
            transition: 0.5s ease;
            overflow: hidden;
            height: 100%;
        }

        .feature-card:hover{
            transform: translateY(-12px);
            box-shadow: 0 20px 50px rgba(99,102,241,0.35);
        }

        .feature-card .card-body{
            padding: 35px;
        }

        .feature-icon{
            font-size: 55px;
            margin-bottom: 20px;
        }

        .feature-card p{
            color: #cbd5e1;
        }

        /* CTA */

        .cta-box{
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            backdrop-filter: blur(18px);
            border-radius: 35px;
            padding: 50px;
        }

        .cta-box p{
            color: #cbd5e1;
        }

        /* Footer */

        footer{
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(15px);
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #cbd5e1;
        }

    </style>
</head>
<body>

    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm">
        <div class="container">

            <a class="navbar-brand" href="#">
                Portfolio Kelompok
            </a>

        </div>
    </nav>

    <!-- Hero -->

    <section class="hero">
        <div class="container">

            <h1>
                Selamat Datang
            </h1>

            <div class="line"></div>

            <p class="lead mt-3">
                Website Portfolio Kelompok Berbasis Laravel Framework
            </p>

            <p class="mb-4">
                Menampilkan profil anggota, skill, project,
                serta informasi kontak dan media sosial
                dengan tampilan modern dan profesional.
            </p>

            <a href="/isi" class="btn btn-glass btn-lg">
                Lihat Anggota
            </a>

        </div>
    </section>

    <!-- Tentang -->

    <section class="py-5">
        <div class="container text-center">

            <h2 class="section-title">
                Tentang Kelompok
            </h2>

            <p class="section-text">
                Kami adalah kelompok mahasiswa yang berkolaborasi dalam
                pengembangan website berbasis Laravel. Website ini dibuat
                sebagai media untuk menampilkan profil anggota, keahlian,
                project, serta informasi kontak secara profesional dengan
                konsep desain Modern Dark Glassmorphism.
            </p>

        </div>
    </section>

    <!-- Fitur -->

    <section class="py-5">

        <div class="container">

            <h2 class="text-center fw-bold mb-5">
                Fitur Website
            </h2>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="card feature-card">

                        <div class="card-body text-center">

                            <div class="feature-icon">
                                👤
                            </div>

                            <h4>
                                Profile Anggota
                            </h4>

                            <p>
                                Menampilkan foto anggota, biodata,
                                serta kemampuan dan skill yang dimiliki.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card feature-card">

                        <div class="card-body text-center">

                            <div class="feature-icon">
                                💼
                            </div>

                            <h4>
                                Project
                            </h4>

                            <p>
                                Menampilkan daftar project dan karya
                                yang pernah dibuat anggota kelompok.
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card feature-card">

                        <div class="card-body text-center">

                            <div class="feature-icon">
                                📞
                            </div>

                            <h4>
                                Contact
                            </h4>

                            <p>
                                Menampilkan informasi kontak dan media
                                sosial untuk terhubung dengan anggota.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- CTA -->

    <section class="py-5">

        <div class="container">

            <div class="cta-box text-center">

                <h2 class="fw-bold">
                    Kenali Anggota Kelompok Kami
                </h2>

                <p class="mt-3 mb-4">
                    Klik tombol di bawah untuk melihat profil lengkap
                    anggota kelompok beserta skill dan biodata mereka.
                </p>

                <a href="/profile" class="btn btn-glass btn-lg">
                    Lihat Profile Anggota
                </a>

            </div>

        </div>

    </section>

    <!-- Footer -->

    <footer class="py-4 text-center">

        <div class="container">

            <p class="mb-0">
                © 2026 Portfolio Kelompok Laravel • Universitas Al-Ghifari
            </p>

        </div>

    </footer>

</body>
</html>