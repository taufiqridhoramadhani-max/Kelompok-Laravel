<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'Laravel'))</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            overflow-x: hidden;
            background:
                radial-gradient(circle at top left, #667eea 0%, transparent 35%),
                radial-gradient(circle at bottom right, #764ba2 0%, transparent 35%),
                #0f172a;
            color: white;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.08) !important;
            backdrop-filter: blur(18px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 22px;
        }

        .navbar-nav {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            gap: 0.75rem;
        }

        .navbar-nav .nav-item {
            line-height: 1;
        }

        .navbar-nav .nav-link {
            border: 1px solid rgba(255,255,255,0.18);
            background: rgba(255,255,255,0.08);
            color: #f8fafc;
            transition: background .2s ease, color .2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 40px;
            padding: 0.5rem 1rem;
            text-align: center;
            white-space: nowrap;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link:focus {
            background: rgba(255,255,255,0.16);
            color: #ffffff;
            text-decoration: none;
        }

        .navbar-nav .nav-link.active {
            background: rgba(255,255,255,0.22);
            color: #ffffff;
        }

        .btn-glass {
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border: none;
            color: white;
            border-radius: 15px;
            padding: 12px 25px;
            transition: transform .3s ease;
        }

        .btn-glass:hover {
            transform: translateY(-3px);
        }

        .page-section {
            padding: 60px 0;
        }

        .page-section h1,
        .page-section h2 {
            color: white;
        }

        .text-muted {
            color: rgba(255,255,255,0.72) !important;
        }

        .btn-outline-light {
            color: #eef2ff !important;
            background: rgba(255,255,255,0.08) !important;
            border-color: rgba(255,255,255,0.18) !important;
        }

        .btn-outline-light:hover,
        .btn-outline-light:focus {
            color: #ffffff !important;
            background: rgba(255,255,255,0.16) !important;
            text-decoration: none;
        }

        .btn-light {
            color: #0f172a !important;
            background: #f8fafc !important;
            border-color: rgba(255,255,255,0.18) !important;
        }

        .text-white-70 {
            color: rgba(255,255,255,0.75) !important;
        }
    </style>

    @stack('styles')
</head>
<body class="@yield('body-class')">
    @include('layouts.public-navigation')

    <main class="pb-5">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>
