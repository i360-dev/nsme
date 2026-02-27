<x-guest-layout>
    <x-slot name="title">Sign In</x-slot>

    {{-- ================================================================
         SESSION STATUS (e.g. "You've been logged out")
         ================================================================ --}}
    <x-auth-session-status class="mb-4" :status="session('status')" />

    {{-- ================================================================
         HEADING
         ================================================================ --}}
    <div class="mb-8">
        <h2 class="font-display text-3xl font-bold" style="color: var(--nsme-navy);">
            Welcome back.
        </h2>
        <p class="mt-2 text-sm" style="color: #6b7280;">
            Sign in to access the NSME member portal.
        </p>
    </div>

    {{-- ================================================================
         LOGIN FORM
         ================================================================ --}}
    <form method="POST" action="{{ route('login') }}">
        @csrf

        {{-- Email --}}
        <div class="mb-5">
            <label for="email"
                   class="block text-sm font-medium mb-1.5"
                   style="color: var(--nsme-navy);">
                Email Address
            </label>
            <input id="email"
                   type="email"
                   name="email"
                   value="{{ old('email') }}"
                   required
                   autofocus
                   autocomplete="username"
                   class="w-full px-4 py-3 rounded-lg border text-sm transition-shadow
                          focus:outline-none focus:ring-2"
                   style="border-color: #d1d5db;
                          background: #fff;
                          color: var(--nsme-navy);
                          --tw-ring-color: var(--nsme-gold);"
                   placeholder="you@company.com">
            <x-input-error for="email" class="mt-1.5" />
        </div>

        {{-- Password --}}
        <div class="mb-5">
            <div class="flex items-center justify-between mb-1.5">
                <label for="password"
                       class="block text-sm font-medium"
                       style="color: var(--nsme-navy);">
                    Password
                </label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                       class="text-xs font-medium transition-colors"
                       style="color: var(--nsme-gold);">
                        Forgot password?
                    </a>
                @endif
            </div>
            <input id="password"
                   type="password"
                   name="password"
                   required
                   autocomplete="current-password"
                   class="w-full px-4 py-3 rounded-lg border text-sm transition-shadow
                          focus:outline-none focus:ring-2"
                   style="border-color: #d1d5db;
                          background: #fff;
                          color: var(--nsme-navy);
                          --tw-ring-color: var(--nsme-gold);"
                   placeholder="••••••••">
            <x-input-error for="password" class="mt-1.5" />
        </div>

        {{-- Remember me --}}
        <div class="flex items-center gap-2 mb-6">
            <input id="remember_me"
                   type="checkbox"
                   name="remember"
                   class="rounded border-gray-300 text-amber-600 focus:ring-amber-500">
            <label for="remember_me" class="text-sm" style="color: #6b7280;">
                Keep me signed in
            </label>
        </div>

        {{-- Submit --}}
        <button type="submit"
                class="w-full py-3 px-6 rounded-lg font-semibold text-sm tracking-wide
                       transition-all duration-200 hover:opacity-90 active:scale-[0.99]"
                style="background: var(--nsme-navy); color: #fff;">
            Sign In
        </button>
    </form>

    {{-- ================================================================
         REGISTER LINK
         ================================================================ --}}
    @if (Route::has('register'))
        <div class="mt-6 text-center">
            <p class="text-sm" style="color: #6b7280;">
                Not a member yet?
                <a href="{{ route('register') }}"
                   class="font-semibold transition-colors"
                   style="color: var(--nsme-gold);">
                    Apply for membership
                </a>
            </p>
        </div>
    @endif

    {{-- Divider --}}
    <div class="mt-8 pt-6 border-t border-gray-100">
        <p class="text-xs text-center" style="color: #9ca3af;">
            Having trouble signing in?
            <a href="mailto:info@nsmeakroncanton.org"
               class="underline hover:text-gray-500">
                Contact us
            </a>
        </p>
    </div>

</x-guest-layout>
