<x-base-layout>
    <x-jet-authentication-card2>
        <x-slot name="logo">
            <x-logos.main class="w-32" />
        </x-slot>

        <x-jet-validation-errors class="mb-4 " />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Nama') }}" />
                <x-jet-input id="name" class="block w-80 mt-1" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="username" value="{{ __('Username') }}" />
                <x-jet-input id="username" class="block w-full mt-1" type="text" name="username" :value="old('username')"
                    required autofocus autocomplete="username" readonly/>
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block w-full mt-1" type="text" name="email" :value="old('email')"
                    required autofocus autocomplete="email" />
            </div>

            <div class="mt-4">
                <x-jet-label for="nim" value="{{ __('Nim') }}" />
                <x-jet-input id="nim" class="block w-full mt-1" type="text" inputmode="numeric" name="nim"
                    :value="old('nim')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Konfirmasi Password') }}" />
                <x-jet-input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms" />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' =>
                                        '<a target="_blank" href="' .
                                        route('terms.show') .
                                        '" class="text-sm text-gray-600 underline hover:text-gray-900">' .
                                        __('Terms of Service') .
                                        '</a>',
                                    'privacy_policy' =>
                                        '<a target="_blank" href="' .
                                        route('policy.show') .
                                        '" class="text-sm text-gray-600 underline hover:text-gray-900">' .
                                        __('Privacy Policy') .
                                        '</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Sudah punya akun?') }}
                </a>

                <x-buttons.primary class="ml-4">
                    {{ __('Daftar') }}
                </x-buttons.primary>
            </div>
        </form>
    </x-jet-authentication-card2>

    <x-logos.register-avt>

        </x-logos.avatar>

        <script>
            document.getElementById('name').addEventListener('input', function() {
                let nameInput = this.value;
                let usernameInput = nameInput.toLowerCase().replace(/\s+/g, '-');
                document.getElementById('username').value = usernameInput;
            });
        </script>
</x-base-layout>
