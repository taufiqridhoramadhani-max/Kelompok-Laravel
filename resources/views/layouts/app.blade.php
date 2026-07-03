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
                font-family: 'Poppins', sans-serif;
                min-height: 100vh;
                background:
                    radial-gradient(circle at top left, rgba(99,102,241,.24), transparent 30%),
                    radial-gradient(circle at bottom right, rgba(168,85,247,.18), transparent 30%),
                    #05070f;
                color: #eef2ff;
            }

            .app-background {
                min-height: 100vh;
                background: transparent;
            }

            .app-panel {
                background: rgba(255,255,255,.08);
                border: 1px solid rgba(255,255,255,.12);
                backdrop-filter: blur(24px);
                box-shadow: 0 24px 60px rgba(0,0,0,.22);
                border-radius: 2rem;
            }

            .page-heading h2,
            .app-heading h2 {
                color: #f8fafc;
            }

            .app-text,
            .page-copy {
                color: rgba(226,232,240,.82);
            }

            .glass-button,
            .glass-button:focus {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 0.95rem 1.5rem;
                border-radius: 1.25rem;
                border: 1px solid rgba(255,255,255,.14);
                background: rgba(255,255,255,.08);
                color: #f8fafc;
                text-decoration: none;
                transition: transform .25s ease, box-shadow .25s ease, background .25s ease;
            }

            .glass-button:hover,
            .glass-button:focus-visible {
                background: rgba(255,255,255,.16);
                transform: translateY(-1px);
                box-shadow: 0 16px 30px rgba(0,0,0,.16);
            }

            .glass-input,
            .glass-input:focus {
                width: 100%;
                padding: 0.85rem 1rem;
                border-radius: 1.25rem;
                border: 1px solid rgba(255,255,255,.12);
                background: rgba(255,255,255,.08);
                color: #f8fafc;
                outline: none;
                box-shadow: inset 0 0 0 1px rgba(255,255,255,.04);
            }

            .glass-input:focus {
                border-color: rgba(99,102,241,.7);
                box-shadow: 0 0 0 4px rgba(99,102,241,.15);
            }
        </style>

        @stack('styles')
    </head>
    <body class="font-sans antialiased">
        <div class="app-background">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="app-panel app-heading mx-4 sm:mx-8 mt-6">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
