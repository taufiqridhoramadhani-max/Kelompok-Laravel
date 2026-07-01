<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body {
                min-height: 100vh;
                font-family: 'Poppins', sans-serif;
                background:
                    radial-gradient(circle at top left, rgba(99,102,241,.18), transparent 28%),
                    radial-gradient(circle at bottom right, rgba(168,85,247,.14), transparent 30%),
                    #111827;
                color: #e5e7eb;
            }

            .auth-shell {
                min-height: 100vh;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 2rem 1rem;
                background: transparent;
            }

            .auth-shell .glass-panel {
                width: 100%;
                max-width: 28rem;
                background: rgba(15,23,42,.94);
                border: 1px solid rgba(148,163,184,.12);
                backdrop-filter: blur(26px);
                box-shadow: 0 28px 70px rgba(15,23,42,.28);
                border-radius: 1.75rem;
                overflow: hidden;
                padding: 1.25rem;
            }

            .auth-shell .auth-page {
                width: 100%;
                max-width: 24rem;
                margin: 0 auto;
            }

            .auth-shell .auth-page h1 {
                color: #f8fafc;
            }

            .auth-shell .auth-page p {
                color: rgba(226,232,240,.75);
            }

            .auth-shell .auth-card {
                background: rgba(30,41,59,.78);
                border: 1px solid rgba(148,163,184,.08);
                border-radius: 1.75rem;
                box-shadow: 0 18px 40px rgba(15,23,42,.18);
                padding: 1.5rem;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <div class="auth-shell">
            <div class="glass-panel">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
