<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin — {{ $title ?? 'Dashboard' }} | NSME Akron/Canton</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles

    <style>
        :root {
            --nsme-navy:    #1a2744;
            --nsme-navy-lt: #243461;
            --nsme-gold:    #c9a84c;
            --nsme-gold-lt: #e8d5a3;
            --nsme-slate:   #f4f6fa;
        }
        body { font-family: 'DM Sans', sans-serif; }
        .font-display { font-family: 'Playfair Display', serif; }

        /* Sidebar nav active state */
        .nav-item.active {
            background: rgba(201,168,76,.15);
            border-left: 3px solid var(--nsme-gold);
            color: var(--nsme-gold);
        }
        .nav-item {
            border-left: 3px solid transparent;
            transition: background .15s, color .15s;
        }
        .nav-item:hover:not(.active) {
            background: rgba(255,255,255,.06);
        }
    </style>
</head>
<body class="antialiased flex h-screen overflow-hidden" style="background: var(--nsme-slate);">

    {{-- ================================================================
         SIDEBAR
         ================================================================ --}}
    <aside class="w-64 flex-shrink-0 flex flex-col h-full overflow-y-auto"
           style="background: var(--nsme-navy);">

        {{-- Logo --}}
        <div class="flex items-center gap-3 px-6 py-5 border-b" style="border-color: rgba(255,255,255,.08);">
            <div class="w-8 h-8 rounded flex items-center justify-center font-display font-bold text-xs flex-shrink-0"
                 style="background: var(--nsme-gold); color: var(--nsme-navy);">N</div>
            <div>
                <p class="text-white font-semibold text-sm leading-tight">NSME Admin</p>
                <p class="text-xs opacity-50" style="color: var(--nsme-gold-lt);">Akron / Canton</p>
            </div>
        </div>

        {{-- Navigation --}}
        <nav class="flex-1 px-3 py-4 space-y-0.5">

            @php
                $navItems = [
                    ['route' => 'admin.dashboard',         'label' => 'Dashboard',         'icon' => 'home',      'permission' => null],
                    ['route' => 'admin.members.index',     'label' => 'Members',           'icon' => 'users',     'permission' => 'view members'],
                    ['route' => 'admin.events.index',      'label' => 'Events',            'icon' => 'calendar',  'permission' => 'view events'],
                    ['route' => 'admin.blog.index',        'label' => 'Blog',              'icon' => 'document',  'permission' => 'view blog posts'],
                    ['route' => 'admin.advertising.index', 'label' => 'Advertising',       'icon' => 'megaphone', 'permission' => 'view ads'],
                    ['route' => 'admin.aoe.index',         'label' => 'Accent on Excellence','icon' => 'star',    'permission' => 'view aoe entries'],
                    ['route' => 'admin.settings.index',    'label' => 'Settings',          'icon' => 'cog',       'permission' => 'manage settings'],
                ];

                $icons = [
                    'home'      => '<path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>',
                    'users'     => '<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>',
                    'calendar'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/>',
                    'document'  => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>',
                    'megaphone' => '<path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 1 1 0-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 0 1-1.44-4.282m3.102.069a18.03 18.03 0 0 1-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 0 1 8.835 2.535M10.34 6.66a23.847 23.847 0 0 1 8.835-2.535m0 0A23.74 23.74 0 0 1 18.795 3m.38 1.125a23.91 23.91 0 0 1 1.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 0 0 1.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 0 1 0 3.46"/>',
                    'star'      => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z"/>',
                    'cog'       => '<path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>',
                ];
            @endphp

            @foreach ($navItems as $item)
                @if (! $item['permission'] || auth()->user()->can($item['permission']))
                    @php $isActive = request()->routeIs(rtrim($item['route'], '.index') . '*'); @endphp
                    <a href="{{ route($item['route']) }}"
                       class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-md text-sm
                              {{ $isActive ? 'active font-medium' : 'text-gray-300' }}">
                        <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             stroke-width="1.75" xmlns="http://www.w3.org/2000/svg">
                            {!! $icons[$item['icon']] !!}
                        </svg>
                        {{ $item['label'] }}
                    </a>
                @endif
            @endforeach
        </nav>

        {{-- User / sign out --}}
        <div class="px-4 py-4 border-t" style="border-color: rgba(255,255,255,.08);">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-semibold"
                     style="background: var(--nsme-gold); color: var(--nsme-navy);">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-white text-sm font-medium truncate">{{ auth()->user()->name }}</p>
                    <p class="text-xs truncate opacity-50" style="color: var(--nsme-gold-lt);">
                        {{ auth()->user()->getRoleNames()->first() ?? 'member' }}
                    </p>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="opacity-40 hover:opacity-70 transition-opacity text-gray-300"
                            title="Sign out">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="1.75">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9"/>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </aside>

    {{-- ================================================================
         MAIN CONTENT AREA
         ================================================================ --}}
    <div class="flex-1 flex flex-col overflow-hidden">

        {{-- Top Bar --}}
        <header class="flex-shrink-0 flex items-center justify-between px-8 py-4 bg-white border-b border-gray-100 shadow-sm">
            <div>
                <h1 class="text-xl font-semibold" style="color: var(--nsme-navy);">
                    {{ $title ?? 'Dashboard' }}
                </h1>
                @isset($breadcrumbs)
                    <nav class="text-xs text-gray-400 mt-0.5">{{ $breadcrumbs }}</nav>
                @endisset
            </div>
            <div class="flex items-center gap-4">
                {{-- Flash messages in header --}}
                @if (session('success'))
                    <span class="text-xs font-medium px-3 py-1.5 rounded-full"
                          style="background: #d1fae5; color: #065f46;">
                        ✓ {{ session('success') }}
                    </span>
                @endif
                <a href="{{ route('admin.members.create') }}"
                   class="inline-flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium transition-opacity hover:opacity-90"
                   style="background: var(--nsme-navy); color: #fff;">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/>
                    </svg>
                    Add Member
                </a>
            </div>
        </header>

        {{-- Page Content --}}
        <main class="flex-1 overflow-y-auto p-8">
            {{ $slot }}
        </main>
    </div>

    @livewireScripts
    @stack('scripts')
</body>
</html>
