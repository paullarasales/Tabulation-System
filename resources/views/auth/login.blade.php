<x-guest-layout>
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    
    <div class="h-3/6 flex flex-col items-center justify-center "> <!-- Add a custom class for styling if needed -->
        <img src="{{ asset('images/psu_logo.png') }}" class="h-20 mb-4">
        <h2 class="text-2xl font-bold mb-4">Login to Your Account</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="font-poppins text-gray-900 antialiased text-lg">
                <x-input-label for="input_type" :value="__('Email or Username')" />
                <x-text-input id="input_type" class="block mt-1 w-96" type="text" name="input_type" :value="old('input_type')" autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-96"
                                  type="password"
                                  name="password"
                                  autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" /> 
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-between mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                    
                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>

            <!-- Registration Link -->
            <div class="text-sm mt-4">
                Don't have an account? <a href="{{ route('register') }}" class="text-blue-500">Register here</a>
            </div>
        </div>
    </div>
</x-guest-layout>
