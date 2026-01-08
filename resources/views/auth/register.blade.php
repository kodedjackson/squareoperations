<x-guest-layout>

    <div class="w-full md:w-1/2 flex items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">
            <div class="max-w-36 h-24">
                <x-application-logo />
            </div>
            <div class="mb-8">
                <h1 class="text-4xl font-bold text-gray-900 mb-2">Welcome</h1>
                <p class="text-gray-600">Register to get started in to your account to continue</p>
            </div>

            <x-validation-errors class="mb-4" />
            @session('status')
            <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                {{ $value }}
            </div>
            @endsession

            <form class="space-y-6" action="{{ route('register') }}" method="POST">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                    <input type="text" name="name" :value="old('name')"  placeholder="First and Last Name" class="w-full px-4 py-2 border border-gray-300 rounded-lg input-focus" required>
                </div>

                <!-- Company NAme -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Company Name</label>
                    <input type="text" name="company_name" placeholder="Company Name" class="w-full px-4 py-2 border border-gray-300 rounded-lg input-focus" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                    <input type="tel" name="phone_number" placeholder="Phone Number" class="w-full px-4 py-2 border border-gray-300 rounded-lg input-focus" required>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Company Size</label>
                    <select name="company_size" class="w-full px-4 py-2 border border-gray-300 rounded-lg input-focus" required>
                        <option value="1-5">1 - 5 employees</option>
                        <option value="6-20">6 - 20 employees</option>
                        <option value="21-50">21 - 50 employees</option>
                        <option value="51-250">51 - 250 employees</option>
                        <option value="250+">250 > employees</option>
                    </select>
                </div>


                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                    <input name="email" type="email" placeholder="you@company.com" class="w-full px-4 py-2 border border-gray-300 rounded-lg input-focus" required>
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                    <input name="password" type="password" placeholder="••••••••" class="w-full px-4 py-2 border border-gray-300 rounded-lg input-focus" required>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full btn-primary text-white font-medium py-2 rounded-lg">Sign Up</button>
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
               Have an account? <a href="/login" class="font-medium text-orange-600 hover:text-orange-700">Sign In</a>
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
   {{-- <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>--}}
</x-guest-layout>
