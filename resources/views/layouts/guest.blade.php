<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NSME Akron/Canton') }} — {{ $title ?? 'Member Portal' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        :root {
            --nsme-navy:    #1a2744;
            --nsme-gold:    #c9a84c;
            --nsme-gold-lt: #e8d5a3;
            --nsme-slate:   #f4f6fa;
        }
        body { font-family: 'DM Sans', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="antialiased min-h-screen" style="background-color: var(--nsme-slate);">

<div class="min-h-screen flex">

    {{-- ============================================================
         LEFT PANEL — Branding / Hero
         ============================================================ --}}
    <div class="hidden lg:flex lg:w-1/2 xl:w-3/5 flex-col justify-between p-12 relative overflow-hidden"
         style="background-color: var(--nsme-navy);">

        {{-- Decorative geometric accent --}}
        <div class="absolute inset-0 pointer-events-none" aria-hidden="true">
            <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full opacity-10"
                 style="background: var(--nsme-gold);"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 rounded-full opacity-5"
                 style="background: var(--nsme-gold);"></div>
            {{-- Thin gold rule --}}
            <div class="absolute top-0 right-0 h-full w-px opacity-20"
                 style="background: linear-gradient(to bottom, transparent, var(--nsme-gold), transparent);"></div>
        </div>

        {{-- Logo / Org name --}}
        <div class="relative z-10">
            <div class="flex items-center gap-3">
                {{-- Replace with actual logo img when available --}}
                <div class="w-10 h-10 rounded flex items-center justify-center font-display font-bold text-sm"
                     style="background: var(--nsme-gold); color: var(--nsme-navy);">
                    N
                </div>
                <div>
                    <p class="text-xs tracking-widest uppercase font-medium opacity-70" style="color: var(--nsme-gold-lt);">
                        National Sales &amp; Marketing Executives
                    </p>
                    <p class="text-white font-semibold leading-tight">Akron / Canton Chapter</p>
                </div>
            </div>
        </div>

        {{-- Hero copy --}}
        <div class="relative z-10">
            <h1 class="font-display text-5xl xl:text-6xl font-bold leading-tight text-white mb-6">
                Elevate Your<br>
                <span style="color: var(--nsme-gold);">Sales &amp; Marketing</span><br>
                Career.
            </h1>
            <p class="text-lg leading-relaxed max-w-md" style="color: var(--nsme-gold-lt); opacity: 0.85;">
                Connect with top sales and marketing professionals across the Akron/Canton region.
                Access exclusive events, resources, and networking opportunities.
            </p>
        </div>

        {{-- Bottom stats / social proof --}}
        <div class="relative z-10">
            <div class="flex gap-8 mb-8">
                <div>
                    <p class="font-display text-3xl font-bold" style="color: var(--nsme-gold);">155+</p>
                    <p class="text-sm opacity-60 text-white">Active Members</p>
                </div>
                <div class="w-px opacity-20" style="background: var(--nsme-gold);"></div>
                <div>
                    <p class="font-display text-3xl font-bold" style="color: var(--nsme-gold);">50+</p>
                    <p class="text-sm opacity-60 text-white">Years Strong</p>
                </div>
                <div class="w-px opacity-20" style="background: var(--nsme-gold);"></div>
                <div>
                    <p class="font-display text-3xl font-bold" style="color: var(--nsme-gold);">12</p>
                    <p class="text-sm opacity-60 text-white">Events / Year</p>
                </div>
            </div>
            <div class="flex items-center gap-4">
                <a href="https://twitter.com/nsmeakroncanton" target="_blank"
                   class="opacity-40 hover:opacity-80 transition-opacity text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-4.714-6.231-5.401 6.231H2.744l7.73-8.835L1.254 2.25H8.08l4.26 5.632zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="https://www.facebook.com/NSME-Akron-Canton-866281626780997/" target="_blank"
                   class="opacity-40 hover:opacity-80 transition-opacity text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://www.linkedin.com/groups/13507211/profile" target="_blank"
                   class="opacity-40 hover:opacity-80 transition-opacity text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                </a>
                <a href="https://www.instagram.com/nsme_akron_canton/" target="_blank"
                   class="opacity-40 hover:opacity-80 transition-opacity text-white">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                </a>
            </div>
        </div>
    </div>

    {{-- ============================================================
         RIGHT PANEL — Auth Form Slot
         ============================================================ --}}
    <div class="flex-1 flex flex-col justify-center items-center px-6 py-12 lg:px-16">

        {{-- Mobile-only logo --}}
        <div class="lg:hidden mb-8 text-center">
            <div class="inline-flex items-center gap-3">
                <div class="w-10 h-10 rounded flex items-center justify-center font-display font-bold text-sm"
                     style="background: var(--nsme-navy); color: var(--nsme-gold);">
                    N
                </div>
                <div class="text-left">
                    <p class="text-xs tracking-widest uppercase font-medium opacity-60" style="color: var(--nsme-navy);">NSME</p>
                    <p class="font-semibold leading-tight" style="color: var(--nsme-navy);">Akron / Canton</p>
                </div>
            </div>
        </div>

        <div class="w-full max-w-md">
            {{ $slot }}
        </div>

        {{-- Footer --}}
        <p class="mt-8 text-xs text-center" style="color: #9ca3af;">
            &copy; {{ date('Y') }} NSME Akron/Canton. All rights reserved.<br>
            <a href="#" class="underline hover:text-gray-600">Privacy Policy</a>
            &middot;
            <a href="tel:3308180123" class="hover:text-gray-600">330-818-0123</a>
        </p>
    </div>

</div>

@livewireScripts
@stack('scripts')
</body>
</html>
