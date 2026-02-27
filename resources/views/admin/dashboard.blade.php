<x-admin-layout>
    <x-slot name="title">Dashboard</x-slot>

    {{-- ================================================================
         STAT CARDS
         ================================================================ --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">

        {{-- Total Members --}}
        <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">Total Members</p>
                    <p class="font-display text-4xl font-bold mt-1" style="color: var(--nsme-navy);">
                        {{ number_format($stats['total_members']) }}
                    </p>
                    <p class="text-xs text-gray-400 mt-1">{{ $stats['active_members'] }} active</p>
                </div>
                <div class="w-10 h-10 rounded-lg flex items-center justify-center"
                     style="background: rgba(26,39,68,.08);">
                    <svg class="w-5 h-5" fill="none" stroke="#1a2744" viewBox="0 0 24 24" stroke-width="1.75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Expiring Soon --}}
        <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">Expiring Within 30 Days</p>
                    <p class="font-display text-4xl font-bold mt-1" style="color: {{ $stats['expiring_soon'] > 0 ? '#b45309' : 'var(--nsme-navy)' }};">
                        {{ $stats['expiring_soon'] }}
                    </p>
                    <p class="text-xs text-gray-400 mt-1">memberships need renewal</p>
                </div>
                <div class="w-10 h-10 rounded-lg flex items-center justify-center"
                     style="background: rgba(180,83,9,.08);">
                    <svg class="w-5 h-5" fill="none" stroke="#b45309" viewBox="0 0 24 24" stroke-width="1.75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                </div>
            </div>
        </div>

        {{-- Upcoming Events --}}
        <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-100">
            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">Upcoming Events</p>
                    <p class="font-display text-4xl font-bold mt-1" style="color: var(--nsme-navy);">
                        {{ $stats['upcoming_events']->count() }}
                    </p>
                    <p class="text-xs text-gray-400 mt-1">scheduled ahead</p>
                </div>
                <div class="w-10 h-10 rounded-lg flex items-center justify-center"
                     style="background: rgba(201,168,76,.12);">
                    <svg class="w-5 h-5" fill="none" stroke="#c9a84c" viewBox="0 0 24 24" stroke-width="1.75">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    {{-- ================================================================
         LOWER PANELS
         ================================================================ --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

        {{-- Recent Members --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-sm" style="color: var(--nsme-navy);">Recent Members</h2>
                <a href="{{ route('admin.members.index') }}"
                   class="text-xs font-medium" style="color: var(--nsme-gold);">View all →</a>
            </div>
            <ul class="divide-y divide-gray-50">
                @forelse ($stats['recent_members'] as $member)
                    <li class="flex items-center gap-4 px-6 py-3.5 hover:bg-gray-50 transition-colors">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center text-xs font-semibold flex-shrink-0"
                             style="background: var(--nsme-navy); color: var(--nsme-gold);">
                            {{ strtoupper(substr($member->first_name, 0, 1)) }}
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium truncate" style="color: var(--nsme-navy);">
                                {{ $member->first_name }} {{ $member->last_name }}
                            </p>
                            <p class="text-xs text-gray-400 truncate">{{ $member->company_name ?? $member->email }}</p>
                        </div>
                        @if ($member->membershipLevel)
                            <span class="text-xs px-2 py-0.5 rounded-full flex-shrink-0"
                                  style="background: rgba(201,168,76,.12); color: #92580a;">
                                {{ $member->membershipLevel->name }}
                            </span>
                        @endif
                    </li>
                @empty
                    <li class="px-6 py-8 text-center text-sm text-gray-400">No members yet.</li>
                @endforelse
            </ul>
        </div>

        {{-- Upcoming Events --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
            <div class="flex items-center justify-between px-6 py-4 border-b border-gray-100">
                <h2 class="font-semibold text-sm" style="color: var(--nsme-navy);">Upcoming Events</h2>
                <a href="{{ route('admin.events.index') }}"
                   class="text-xs font-medium" style="color: var(--nsme-gold);">View all →</a>
            </div>
            <ul class="divide-y divide-gray-50">
                @forelse ($stats['upcoming_events'] as $event)
                    <li class="flex items-center gap-4 px-6 py-3.5 hover:bg-gray-50 transition-colors">
                        <div class="w-10 h-10 rounded-lg flex-shrink-0 flex flex-col items-center justify-center"
                             style="background: rgba(26,39,68,.06);">
                            <span class="text-xs font-bold leading-none" style="color: var(--nsme-navy);">
                                {{ \Carbon\Carbon::parse($event->start_date)->format('d') }}
                            </span>
                            <span class="text-xs leading-none opacity-60" style="color: var(--nsme-navy);">
                                {{ \Carbon\Carbon::parse($event->start_date)->format('M') }}
                            </span>
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm font-medium truncate" style="color: var(--nsme-navy);">
                                {{ $event->name }}
                            </p>
                            <p class="text-xs text-gray-400">
                                {{ \Carbon\Carbon::parse($event->start_date)->format('l, F j') }}
                                @if ($event->start_time)
                                    · {{ \Carbon\Carbon::parse($event->start_time)->format('g:i A') }}
                                @endif
                            </p>
                        </div>
                        <a href="{{ route('admin.events.edit', $event) }}"
                           class="text-xs text-gray-400 hover:text-gray-600 transition-colors flex-shrink-0">
                            Edit →
                        </a>
                    </li>
                @empty
                    <li class="px-6 py-8 text-center text-sm text-gray-400">No upcoming events.</li>
                @endforelse
            </ul>
        </div>
    </div>

</x-admin-layout>
