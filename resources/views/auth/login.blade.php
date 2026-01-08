<x-guest-layout>
    <!-- Left side - Form -->
    <div class="w-full md:w-1/2 flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <div class="max-w-36 h-24">
                <x-application-logo />
            </div>
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 mb-2">Welcome Back</h1>
                <p class="text-gray-600">Sign in to your account to continue</p>
            </div>

            <x-validation-errors class="mb-4" />
            @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
            @endsession

            <form class="space-y-6" action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input type="email" name="email" placeholder="you@company.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg input-focus" required>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input type="password" name="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg input-focus" required>
                </div>

                <!-- Remember & Forgot -->
                <div class="flex items-center justify-between">
                    <label class="flex items-center">
                        <input type="checkbox" class="w-4 h-4 text-orange-500 rounded">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="#" class="text-sm text-orange-600 hover:text-orange-700">Forgot password?</a>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full btn-primary text-white font-medium py-2 rounded-lg">Sign In</button>
            </form>

            <!-- Divider -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-300"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-2 bg-gray-50 text-gray-500">Or</span>
                </div>
            </div>

            <!-- Sign Up -->
            <div class="text-center text-sm text-gray-600">
                Don't have an account? <a href="#" class="font-medium text-orange-600 hover:text-orange-700">Request access</a>
            </div>
        </div>
    </div>

    <!-- Right side - Visual -->
    <div class="hidden md:flex w-1/2 hero-gradient items-center justify-center">
        <div class="text-center text-white px-8">
            <div class="text-6xl mb-6">🔐</div>
            <h2 class="text-4xl font-bold mb-4">Secure Access</h2>
            <p class="text-xl text-orange-100">Enterprise-grade security for your team's data and operations</p>
            <div class="mt-12 space-y-4 text-left max-w-sm">
                <div class="flex gap-3">
                    <span class="text-2xl">✓</span>
                    <div>
                        <h4 class="font-semibold">Two-factor Authentication</h4>
                        <p class="text-orange-100 text-sm">Enhanced security for all accounts</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <span class="text-2xl">✓</span>
                    <div>
                        <h4 class="font-semibold">Role-based Access</h4>
                        <p class="text-orange-100 text-sm">Control who sees what</p>
                    </div>
                </div>
                <div class="flex gap-3">
                    <span class="text-2xl">✓</span>
                    <div>
                        <h4 class="font-semibold">Audit Logs</h4>
                        <p class="text-orange-100 text-sm">Full transparency and compliance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>--}}
</x-guest-layout>
