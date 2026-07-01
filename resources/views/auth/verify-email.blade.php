<x-guest-layout>
    <div class="min-h-screen flex items-center justify-center px-4 py-10">
        <div class="auth-page auth-card space-y-6">
            <div>
                <h1 class="text-3xl font-semibold text-white">Verifikasi Email</h1>
                <p class="mt-3 text-sm text-slate-300">
                    {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                </p>
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="rounded-2xl border border-green-500/20 bg-green-500/10 p-4 text-sm text-green-100">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="space-y-3">
                <form method="POST" action="{{ route('verification.send') }}" class="space-y-4">
                    @csrf

                    <x-primary-button class="w-full">
                        {{ __('Resend Verification Email') }}
                    </x-primary-button>
                </form>

                <form method="POST" action="{{ route('logout') }}" class="space-y-4">
                    @csrf

                    <x-secondary-button class="w-full" type="submit">
                        {{ __('Log Out') }}
                    </x-secondary-button>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
