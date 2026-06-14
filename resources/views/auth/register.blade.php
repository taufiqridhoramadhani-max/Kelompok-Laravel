```html
<x-guest-layout>

<div class="flex items-center justify-center min-h-screen px-4">

    <div class="w-full max-w-md">

        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl shadow-2xl p-8">

            <div class="text-center mb-6">

                <h1 class="text-4xl font-bold text-white">
                    Register
                </h1>

                <p class="text-gray-300 mt-2">
                    Portfolio Kelompok Laravel
                </p>

                <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto mt-4 rounded-full"></div>

            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-white mb-2">
                        Nama
                    </label>

                    <input
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        required
                        autofocus
                        class="w-full rounded-xl border-0 bg-white/10 text-white placeholder-gray-400 focus:ring-2 focus:ring-indigo-500"
                        placeholder="Masukkan nama">

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <label class="block text-white mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        class="w-full rounded-xl border-0 bg-white/10 text-white placeholder-gray-400 focus:ring-2 focus:ring-indigo-500"
                        placeholder="Masukkan email">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label class="block text-white mb-2">
                        Password
                    </label>

                    <input
                        type="password"
                        name="password"
                        required
                        class="w-full rounded-xl border-0 bg-white/10 text-white placeholder-gray-400 focus:ring-2 focus:ring-indigo-500"
                        placeholder="Masukkan password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label class="block text-white mb-2">
                        Konfirmasi Password
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        required
                        class="w-full rounded-xl border-0 bg-white/10 text-white placeholder-gray-400 focus:ring-2 focus:ring-indigo-500"
                        placeholder="Konfirmasi password">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Register Button -->
                <button
                    type="submit"
                    class="w-full mt-6 bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-3 rounded-xl font-semibold hover:scale-105 transition">

                    Register

                </button>

                <!-- Link Login -->
                <div class="text-center mt-5">

                    <a
                        href="{{ route('login') }}"
                        class="text-indigo-300 hover:text-white">

                        Sudah punya akun? Login

                    </a>

                </div>

                <!-- Link Home -->
                <div class="text-center mt-3">

                    <a
                        href="{{ url('/') }}"
                        class="text-gray-300 hover:text-white">

                        ← Kembali ke Home

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>
```
