```html
<x-guest-layout>

<div class="flex items-center justify-center min-h-screen px-4">

    <div class="w-full max-w-md">

        <div class="bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl shadow-2xl p-8">

            <div class="text-center mb-6">

                <h1 class="text-4xl font-bold text-white">
                    Login
                </h1>

                <p class="text-gray-300 mt-2">
                    Portfolio Kelompok Laravel
                </p>

                <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto mt-4 rounded-full"></div>

            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div>
                    <label class="block text-white mb-2">
                        Email
                    </label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autofocus
                        class="w-full rounded-xl border-0 bg-white/10 text-white placeholder-gray-400 focus:ring-2 focus:ring-indigo-500"
                        placeholder="Masukkan email">
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
                </div>

                <!-- Remember -->
                <div class="mt-4 flex items-center">

                    <input
                        type="checkbox"
                        name="remember"
                        id="remember"
                        class="rounded">

                    <label
                        for="remember"
                        class="ml-2 text-gray-300">
                        Remember Me
                    </label>

                </div>

                <!-- Button -->
                <button
                    type="submit"
                    class="w-full mt-6 bg-gradient-to-r from-indigo-500 to-purple-600 text-white py-3 rounded-xl font-semibold hover:scale-105 transition">

                    Login

                </button>

                <!-- Home -->
                <div class="text-center mt-5">

                    <a
                        href="{{ url('/') }}"
                        class="text-indigo-300 hover:text-white">

                        ← Kembali ke Home

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>
```
