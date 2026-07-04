<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen px-4 py-10">
        <div class="auth-page auth-card">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-semibold text-white">Login</h1>
                <p class="mt-3 text-sm text-slate-300">Masuk ke akun portfolio kelompok dan lanjutkan ke dashboard.</p>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-white" />
                        <x-text-input
                            id="email"
                            class="mt-2 bg-white/95 text-slate-900"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
                            autofocus
                            placeholder="Masukkan email"
                        />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-white" />
                        <x-text-input
                            id="password"
                            class="mt-2 bg-white/95 text-slate-900"
                            type="password"
                            name="password"
                            required
                            placeholder="Masukkan password"
                        />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between gap-4 text-sm text-gray-300">
                        <label class="flex items-center gap-2">
                            <input
                                id="remember"
                                name="remember"
                                type="checkbox"
                                class="h-4 w-4 rounded border-white/20 bg-slate-900 text-indigo-500 focus:ring-indigo-500"
                            />
                            <span>Remember me</span>
                        </label>

                        <a href="{{ route('password.request') }}" class="text-indigo-200 hover:text-white">
                            Lupa password?
                        </a>
                    </div>

                    <div class="space-y-3">
                        <x-primary-button class="w-full">Login</x-primary-button>
                        <x-secondary-button class="w-full" type="button" onclick="location.href='{{ route('register') }}'">
                            Buat Akun Baru
                        </x-secondary-button>
                        <a href="{{ url('/') }}" class="inline-flex justify-center items-center w-full px-4 py-3 rounded-2xl border border-slate-500/20 text-white bg-slate-900/60 hover:bg-slate-900/80 transition">
                            Kembali ke Beranda
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
