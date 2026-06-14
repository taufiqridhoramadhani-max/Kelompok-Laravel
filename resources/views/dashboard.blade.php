<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard Portfolio Kelompok
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-xl">
                <div class="p-8 text-gray-900 dark:text-gray-100">

                    <h1 class="text-3xl font-bold mb-2">
                        Selamat Datang, {{ Auth::user()->name }} 👋
                    </h1>

                    <p class="text-gray-600 dark:text-gray-300 mb-6">
                        Anda berhasil login ke sistem Portfolio Kelompok Laravel.
                    </p>

                    <div class="grid md:grid-cols-2 gap-4">

                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <h3 class="font-semibold mb-2">
                                Informasi Akun
                            </h3>

                            <p>
                                <strong>Nama:</strong>
                                {{ Auth::user()->name }}
                            </p>

                            <p>
                                <strong>Email:</strong>
                                {{ Auth::user()->email }}
                            </p>
                        </div>

                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg">
                            <h3 class="font-semibold mb-2">
                                Status Login
                            </h3>

                            <p>
                                Anda sedang login dan dapat mengakses
                                fitur yang tersedia sesuai hak akses.
                            </p>
                        </div>

                    </div>

                    <div class="mt-8">
                        <h3 class="text-xl font-semibold mb-3">
                            Menu Cepat
                        </h3>

                        <div class="flex flex-wrap gap-3">

                            <a href="/"
                               class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                                Home
                            </a>

                            <a href="/isi"
                               class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                                Profil Anggota
                            </a>

                            <a href="/project"
                               class="px-4 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700">
                                Project & Contact
                            </a>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>