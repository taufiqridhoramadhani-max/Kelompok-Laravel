<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4 py-10">
        <div class="auth-page auth-card space-y-6">
            <div>
                <h1 class="text-3xl font-semibold text-white">Konfirmasi Password</h1>
                <p class="mt-3 text-sm text-slate-300">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </p>
            </div>

            <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
                @csrf

                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-white" />
                    <x-text-input id="password" class="mt-2" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div>
                    <x-primary-button class="w-full">
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
