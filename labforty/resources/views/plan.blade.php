<?php
$plans = [
    [
        'name' => 'Enterprise',
        'description' => 'Support and updates for your peace of mind.',
        'features' => [
            'Free SSL Certificate',
            'Free CDN',
            'Certificates & software updates',
            'Performance scans and optimization suggestions',
            'SEO consulting',
            'Weekly backups',
            'Updates to web content as needed',
        ],
        'show_more' => true,
    ],
    [
        'name' => 'Professional',
        'description' => 'Support and updates for your peace of mind.',
        'features' => [
            'Free SSL Certificate',
            'Certificates & software updates',
            'Security monitoring',
            'Performance scans and optimization suggestions',
            'Weekly backups',
            'Server maintenance',
            'Updates to web content as needed',
        ],
        'show_more' => true,
    ],
    [
        'name' => 'Essential',
        'description' => 'Support and updates for your peace of mind.',
        'features' => [
            'Certificates & software updates',
            'Performance scans',
            'Weekly backups',
            'Server maintenance',
            'Updates to web content as needed',
            'Response within 72 hours',
            '3 hours of support time',
        ],
        'show_more' => false,
    ]
];
    ?>


<div class="text-center mb-20 bg-[#F2F2F5] col-span-12 flex flex-wrap">
    <h1 class="mt-30 mb-10 h-subtitle w-full">
        Find the right 
        <br>
        <span class="bg-gradient-to-b from-[#083982] to-[#2064B5] bg-clip-text text-transparent">
            support plan for you.
        </span>
    </h1>
    <div class="w-9/12 mx-auto">
        <div class="flex justify-center gap-x-5 w-full mx-auto">
            @foreach($plans as $plan)
                <div class="w-1/4 mb-8 pb-10 px-14 bg-white rounded-[20px] flex flex-wrap justify-start gap-y-6 transition-shadow duration-200 hover:shadow-[0_4px_40px_0_#B5D9F5BF]">
                    <h2 class="fw-full font-bold text-[32px] font-weight-700 mt-10">{{ $plan['name'] }}</h2>
                    <span class="w-10/12 font-bold text-[14px] text-[#818181] text-left">{{ $plan['description'] }}</span>
                    <a href="/"
                        class="inline-block bg-[#0A59DD] text-white font-extrabold text-[14px] leading-[32px] px-7 py-1 rounded-[100px]">
                        Contact us <span class="ml-2">&gt;</span>
                    </a>
                    <ul class="flex flex-wrap items-start gap-5">
                        @foreach($plan['features'] as $feature)
                            <li class="text-[12px] leading-[20px] w-full text-left flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="inline-block w-5 h-5 mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="#1F1F1F">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                                <div>
                                    {{ $feature }}
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div>
                        @if($plan['show_more'])
                            <div class="w-full font-medium text-[#0A59DD] text-center cursor-pointer">See all features &gt;</div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>