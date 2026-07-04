<x-guest-layout>
    <div class="flex items-center justify-center min-h-screen px-4 py-10">
        <div class="auth-page auth-card">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-semibold text-white">Register</h1>
                <p class="mt-3 text-sm text-slate-300">Daftar akun baru untuk mengelola project dan profil tim.</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf

                    <div>
                        <x-input-label for="name" :value="__('Nama')" class="text-white" />
                        <x-text-input
                            id="name"
                            class="mt-2 bg-white/95 text-slate-900"
                            type="text"
                            name="name"
                            :value="old('name')"
                            required
                            autofocus
                            placeholder="Masukkan nama"
                        />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-white" />
                        <x-text-input
                            id="email"
                            class="mt-2 bg-white/95 text-slate-900"
                            type="email"
                            name="email"
                            :value="old('email')"
                            required
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

                    <div>
                        <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" class="text-white" />
                        <x-text-input
                            id="password_confirmation"
                            class="mt-2 bg-white/95 text-slate-900"
                            type="password"
                            name="password_confirmation"
                            required
                            placeholder="Konfirmasi password"
                        />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="space-y-3">
                        <x-primary-button class="w-full">Register</x-primary-button>
                        <x-secondary-button class="w-full" type="button" onclick="location.href='{{ route('login') }}'">
                            Sudah punya akun? Login
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
