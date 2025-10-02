<div class="flex justify-between items-center mt-5">
    <div class="w-2/12">
        <a href="{{ url('/') }}" class="flex items-center">
            <img class="w-[22px] h-auto mr-1" src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name') }}">
            <span class="h-title">{{ config('app.name') }}</span>
        </a>
    </div>
    <div class="w-3/12">
        <ul class="flex justify-between gap-x-10">
            @php
                $navItems = [
                    [
                        'name' => 'Company',
                        'url' => url('/'),
                        'sub' => [
                            ['name' => 'About Us', 'url' => url('/about')],
                            ['name' => 'Team', 'url' => url('/team')],
                        ],
                    ],
                    [
                        'name' => 'Services',
                        'url' => url('/'),
                        'sub' => [
                            ['name' => 'Web Development', 'url' => url('/services/web-development')],
                            ['name' => 'Design', 'url' => url('/services/design')],
                        ],
                    ],
                    [
                        'name' => 'Insights',
                        'url' => url('/'),
                        'sub' => [ ],
                    ],
                    [
                        'name' => 'Careers',
                        'url' => url('/'),
                        'sub' => [ ],
                    ],
                ];
            @endphp

            @foreach ($navItems as $item)
                <li class="relative group">
                    <a href="{{ $item['url'] }}" class="flex items-center font-medium text-xs">
                        {{ $item['name'] }}
                        @if (!empty($item['sub']))
                            <svg class="ml-1 w-3 h-3 inline-block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                            </svg>
                        @endif
                    </a>
                    @if (!empty($item['sub']))
                        <ul class="absolute left-0 mt-2 hidden group-hover:block bg-white shadow-lg rounded">
                            @foreach ($item['sub'] as $sub)
                                <li>
                                    <a href="{{ $sub['url'] }}" class="block px-4 py-2 hover:bg-gray-100">{{ $sub['name'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </div>
    <div class="w-2/12">
        <a href="{{ url('/') }}" class="flex items-center">
            <span>
                Get in touch
            </span>
            <svg class="ml-1 w-3 h-3" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
            </svg>
        </a>
    </div>
</div>