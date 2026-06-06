<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Anggota Kelompok</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        *{
            font-family: 'Poppins', sans-serif;
        }

        body{
            background:
            radial-gradient(circle at top left, #667eea 0%, transparent 35%),
            radial-gradient(circle at bottom right, #764ba2 0%, transparent 35%),
            #0f172a;
            min-height: 100vh;
            overflow-x: hidden;
            color: white;
        }

        .hero{
            text-align: center;
            padding-top: 80px;
            margin-bottom: 70px;
        }

        .hero h1{
            font-size: 58px;
            font-weight: 700;
            background: linear-gradient(to right, #ffffff, #cbd5e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p{
            font-size: 18px;
            color: #cbd5e1;
            margin-top: 15px;
        }

        .line{
            width: 120px;
            height: 5px;
            background: linear-gradient(to right, #6366f1, #8b5cf6);
            margin: 25px auto;
            border-radius: 20px;
        }

        .profile-card{
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            backdrop-filter: blur(18px);
            border-radius: 30px;
            overflow: hidden;
            transition: 0.5s ease;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }

        .profile-card:hover{
            transform: translateY(-15px) scale(1.03);
            box-shadow: 0 20px 50px rgba(99,102,241,0.35);
        }

        .top-design{
            height: 120px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
        }

        .profile-img{
            width: 120px;
            height: 120px;
            border-radius: 50%;
            border: 5px solid white;
            margin-top: -60px;
            object-fit: cover;
            background: white;
        }

        .name{
            font-size: 24px;
            font-weight: 600;
            margin-top: 20px;
        }

        .nim{
            color: #cbd5e1;
            font-size: 14px;
        }

        .info-box{
            background: rgba(255,255,255,0.06);
            padding: 14px;
            border-radius: 18px;
            margin-top: 15px;
        }

        .info-title{
            font-size: 14px;
            color: #94a3b8;
        }

        .info-value{
            font-size: 17px;
            font-weight: 500;
        }

        .skill-title{
            margin-top: 25px;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .skill-badge{
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            padding: 10px 18px;
            border-radius: 30px;
            display: inline-block;
            margin: 5px;
            font-size: 14px;
            transition: 0.3s;
        }

        .skill-badge:hover{
            transform: scale(1.08);
        }

        .footer-text{
            margin-top: 70px;
            text-align: center;
            color: #94a3b8;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">

    <!-- HERO -->
    <div class="hero" data-aos="fade-down">

        <h1>Profil Anggota Kelompok</h1>

        <div class="line"></div>

        <p>
            Biodata dan skill anggota kelompok kami
        </p>

    </div>

    <!-- CARD -->
    <div class="row justify-content-center">

        @foreach($anggota as $item)

        <div class="col-lg-4 col-md-6 mb-5"
             data-aos="zoom-in"
             data-aos-duration="1200">

            <div class="profile-card text-center">

                <div class="top-design"></div>

                <img
                src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                class="profile-img">

                <div class="p-4">

                    <div class="name">
                        {{ $item['nama'] }}
                    </div>

                    <div class="nim">
                        NIM : {{ $item['nim'] }}
                    </div>

                    <div class="info-box">

                        <div class="info-title">
                            Jurusan
                        </div>

                        <div class="info-value">
                            {{ $item['jurusan'] }}
                        </div>

                    </div>

                    <div class="skill-title">
                        Skill
                    </div>

                    @foreach($item['skill'] as $skill)

                    <span class="skill-badge">
                        {{ $skill }}
                    </span>

                    @endforeach

                </div>

            </div>

        </div>

        @endforeach

    </div>

    <div class="footer-text">
        © 2026 Kelompok Laravel • Universitas Al-Ghifari
    </div>

</div>

<!-- Animation JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
    AOS.init({
        once: true
    });
</script>

</body>
</html>