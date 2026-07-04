<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            :root {
                color-scheme: dark;
                font-family: 'Figtree', ui-sans-serif, system-ui, sans-serif;
            }

            * {
                box-sizing: border-box;
            }

            body {
                margin: 0;
                min-height: 100vh;
                background: radial-gradient(circle at top left, rgba(96,165,250,0.16), transparent 25%),
                            radial-gradient(circle at bottom right, rgba(168,85,247,0.14), transparent 24%),
                            #05070f;
                color: #f8fafc;
            }

            .page-shell {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 2rem 1rem;
            }

            .hero-panel {
                width: min(100%, 1180px);
                display: grid;
                grid-template-columns: 1.2fr 0.85fr;
                gap: 1.5rem;
                background: rgba(255,255,255,0.08);
                border: 1px solid rgba(255,255,255,0.12);
                backdrop-filter: blur(30px);
                box-shadow: 0 30px 80px rgba(0,0,0,0.24);
                border-radius: 2rem;
                overflow: hidden;
            }

            .hero-main {
                padding: 3rem 2.5rem;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .hero-main h1 {
                margin: 0;
                font-size: clamp(2.5rem, 4vw, 4rem);
                line-height: 1.02;
                letter-spacing: -0.05em;
                max-width: 12ch;
                font-weight: 700;
            }

            .hero-main p {
                margin: 1.5rem 0 0;
                color: rgba(248,250,252,0.82);
                line-height: 1.8;
                max-width: 46rem;
            }

            .hero-actions {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                margin-top: 2.5rem;
            }

            .hero-action-link,
            .hero-action-primary {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 999px;
                min-height: 3rem;
                padding: 0.9rem 1.75rem;
                line-height: 1.2;
                font-weight: 600;
                text-decoration: none;
                transition: transform .2s ease, box-shadow .2s ease, background .2s ease;
            }

            .hero-action-primary {
                background: linear-gradient(135deg, rgba(96,165,250,0.95), rgba(168,85,247,0.95));
                color: white;
                box-shadow: 0 18px 30px rgba(96,165,250,0.28);
            }

            .hero-action-link {
                border: 1px solid rgba(255,255,255,0.18);
                background: rgba(255,255,255,0.06);
                color: #f8fafc;
            }

            .hero-action-primary:hover,
            .hero-action-link:hover {
                transform: translateY(-2px);
                box-shadow: 0 20px 40px rgba(0,0,0,0.22);
            }

            .feature-grid {
                display: grid;
                gap: 1rem;
                margin-top: 2.5rem;
            }

            .feature-card {
                border: 1px solid rgba(255,255,255,0.14);
                background: rgba(255,255,255,0.06);
                border-radius: 1.5rem;
                padding: 1.15rem 1.25rem;
                display: grid;
                grid-template-columns: auto 1fr;
                gap: 1rem;
                align-items: center;
            }

            .feature-badge {
                width: 2.6rem;
                height: 2.6rem;
                border-radius: 1rem;
                display: grid;
                place-items: center;
                background: rgba(96,165,250,0.18);
                color: #bfdbfe;
                font-size: 1rem;
            }

            .feature-card h3 {
                margin: 0 0 0.35rem;
                font-size: 1rem;
                font-weight: 700;
            }

            .feature-card p {
                margin: 0;
                color: rgba(248,250,252,0.78);
                line-height: 1.7;
            }

            .hero-panel-aside {
                position: relative;
                min-height: 420px;
                padding: 2rem;
                display: grid;
                place-items: center;
                overflow: hidden;
                background: linear-gradient(180deg, rgba(59,130,246,0.14), rgba(168,85,247,0.12));
            }

            .hero-panel-aside::before {
                content: '';
                position: absolute;
                inset: 0;
                background: radial-gradient(circle at 25% 20%, rgba(255,255,255,0.22), transparent 20%),
                            radial-gradient(circle at 80% 15%, rgba(248,113,113,0.18), transparent 12%),
                            radial-gradient(circle at 50% 80%, rgba(165,180,252,0.16), transparent 18%);
                pointer-events: none;
            }

            .hero-visual {
                position: relative;
                z-index: 1;
                width: min(100%, 420px);
                border-radius: 1.75rem;
                overflow: hidden;
                box-shadow: 0 40px 80px rgba(0,0,0,0.18);
            }

            .hero-visual img {
                width: 100%;
                display: block;
                height: auto;
            }

            .top-nav {
                display: flex;
                justify-content: flex-end;
                gap: 0.75rem;
                padding: 1.5rem 2rem 0;
            }

            .top-nav a {
                font-size: 0.95rem;
                line-height: 1.2;
                color: rgba(248,250,252,0.88);
                text-decoration: none;
                padding: 0.85rem 1.15rem;
                border-radius: 999px;
                border: 1px solid rgba(255,255,255,0.14);
                background: rgba(255,255,255,0.05);
            }

            .top-nav a.primary {
                background: rgba(255,255,255,0.12);
            }

            @media (max-width: 960px) {
                .hero-panel {
                    grid-template-columns: 1fr;
                }

                .hero-panel-aside,
                .hero-main {
                    padding: 2rem;
                }

                .top-nav {
                    justify-content: center;
                }
            }

            @media (max-width: 640px) {
                .hero-main {
                    padding: 1.75rem;
                }

                .hero-action-primary,
                .hero-action-link {
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <div class="page-shell">
            <div class="hero-panel">
                <div class="hero-main">
                    <div class="top-nav">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}" class="primary">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="primary">Register</a>
                                @endif
                            @endauth
                        @endif
                    </div>

                    <h1>Portfolio Laravel Kelompok</h1>
                    <p>Selamat datang di portfolio kelompok. Temukan profil anggota, project unggulan, dan kontak dalam tampilan yang bersih, konsisten, dan modern.</p>

                    <div class="hero-actions">
                        <a href="{{ url('/isi') }}" class="hero-action-primary">Profil Anggota</a>
                        <a href="{{ url('/project') }}" class="hero-action-link">Project & Contact</a>
                    </div>

                    <div class="feature-grid">
                        <div class="feature-card">
                            <span class="feature-badge">✓</span>
                            <div>
                                <h3>UI gelap konsisten</h3>
                                <p>Semua halaman sekarang mengikuti tema gelap modern dengan efek glass dan border halus.</p>
                            </div>
                        </div>
                        <div class="feature-card">
                            <span class="feature-badge">⚡</span>
                            <div>
                                <h3>Tombol & input seragam</h3>
                                <p>Breeze, auth, dan halaman publik menghadirkan kontrol yang rapi dan konsisten.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hero-panel-aside">
                    <div class="hero-visual">
                        <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?auto=format&fit=crop&w=900&q=80" alt="Modern dashboard preview" />
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
