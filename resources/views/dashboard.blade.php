<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            Dashboard Portfolio Kelompok
        </h2>
    </x-slot>

    @push('styles')
        <style>
            .dashboard-card {
                background: rgba(255,255,255,.08);
                border: 1px solid rgba(255,255,255,.14);
                backdrop-filter: blur(22px);
                border-radius: 2rem;
                box-shadow: 0 24px 60px rgba(0,0,0,.22);
            }

            .dashboard-card h1,
            .dashboard-card h3,
            .dashboard-card strong {
                color: #f8fafc;
            }

            .dashboard-card p,
            .dashboard-card span,
            .dashboard-card .text-gray-600,
            .dashboard-card .text-gray-300 {
                color: rgba(226,232,240,.82);
            }

            .dashboard-feature {
                background: rgba(255,255,255,.06);
                border: 1px solid rgba(255,255,255,.12);
                border-radius: 1.75rem;
                padding: 1.25rem;
            }

            .dashboard-links a {
                min-width: 150px;
            }

            .dashboard-links a.button-link {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                padding: 0.85rem 1.25rem;
                border-radius: 1.25rem;
                border: 1px solid rgba(255,255,255,.14);
                background: rgba(255,255,255,.08);
                color: #f8fafc;
                transition: all .25s ease;
            }

            .dashboard-links a.button-link:hover {
                background: rgba(255,255,255,.16);
            }
        </style>
    @endpush

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="dashboard-card overflow-hidden">
                <div class="p-8">

                    <h1 class="text-3xl font-bold mb-2 text-white">
                        Selamat Datang, {{ Auth::user()->name }} 👋
                    </h1>

                    <p class="mb-6">
                        Anda berhasil login ke sistem Portfolio Kelompok Laravel.
                    </p>

                    <div class="grid md:grid-cols-2 gap-4">

                        <div class="dashboard-feature">
                            <h3 class="font-semibold mb-2">
                                Informasi Akun
                            </h3>

                            <p class="mb-2">
                                <strong>Nama:</strong>
                                {{ Auth::user()->name }}
                            </p>

                            <p class="mb-2">
                                <strong>Email:</strong>
                                {{ Auth::user()->email }}
                            </p>

                            <div class="mt-2">
                                <strong>Status:</strong>

                                <span class="inline-flex px-3 py-1 bg-green-500 text-white rounded-full text-sm">
                                    Login Aktif
                                </span>
                            </div>
                        </div>

                        <div class="dashboard-feature">
                            <h3 class="font-semibold mb-2">
                                Status Login
                            </h3>

                            <p>
                                Anda sedang login dan dapat mengakses fitur yang tersedia sesuai hak akses.
                            </p>
                        </div>

                    </div>

                    <div class="mt-8">
                        <h3 class="text-xl font-semibold mb-3 text-white">
                            Menu Cepat
                        </h3>

                        <div class="flex flex-wrap gap-3 dashboard-links">
                            <a href="/" class="button-link">
                                Home
                            </a>

                            <a href="/isi" class="button-link">
                                Profil Anggota
                            </a>

                            <a href="/project" class="button-link">
                                Project & Contact
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>