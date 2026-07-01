<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    @push('styles')
        <style>
            .profile-section {
                max-width: 7xl;
                margin: auto;
                padding: 0 1rem;
            }

            .profile-panel {
                background: rgba(255,255,255,.08);
                border: 1px solid rgba(255,255,255,.14);
                backdrop-filter: blur(18px);
                border-radius: 30px;
                box-shadow: 0 18px 40px rgba(0,0,0,.22);
            }

            .profile-panel h2 {
                color: #ffffff;
            }

            .profile-panel p,
            .profile-panel .text-sm,
            .profile-panel .text-gray-600,
            .profile-panel .dark\:text-gray-400 {
                color: rgba(226,232,240,.8) !important;
            }

            .profile-panel label {
                color: #cbd5e1 !important;
            }

            .profile-panel .form-input,
            .profile-panel .form-input:focus {
                background: rgba(255,255,255,.08) !important;
                border-color: rgba(255,255,255,.15) !important;
                color: white !important;
            }
        </style>
    @endpush

    <div class="py-12 profile-section">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 profile-panel shadow-sm sm:rounded-3xl">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 profile-panel shadow-sm sm:rounded-3xl">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 profile-panel shadow-sm sm:rounded-3xl">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
