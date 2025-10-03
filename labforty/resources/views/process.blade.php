@php
    $processSteps = [
        [
            'id' => 1,
            'title' => 'Formal request.',
            'text' => 'After receiving your request, we aim to quickly implement the correct solution. We\'ll schedule a meeting to discuss your software\'s current state and potential factors.'
        ],
        [
            'id' => 2,
            'title' => 'System analysis.',
            'text' => 'Once we understand the impacts, we assess your systems to identify the root cause, reviewing code and checking for outdated subscriptions and malware.'
        ],
        [
            'id' => 3,
            'title' => 'Solution evaluation.',
            'text' => 'Our engineers identify solutions, scope affected features, and review options with you to determine the best resolution.'
        ],
        [
            'id' => 4,
            'title' => 'Implementation.',
            'text' => 'Our Technical Support Lead creates bug tickets for immediate action. Using debugging tools and reviewing logs, our team resolves each error.
        '
        ],
        [
            'id' => 5,
            'title' => 'Testing.',
            'text' => 'YAfter verifying stability in our test environment, we deploy bug fixes to production. We then request your sign-off before closing the request.'
        ],
        [
            'id' => 6,
            'title' => 'Final steps.',
            'text' => 'Once you approve the changes, we monitor the live environment to ensure smooth operation and remain available for further support.'
        ]
    ];
@endphp

<div class="text-center mb-20 w-4/5 mx-auto px-10">
    <h1 class="mt-10 h-subtitle text-left">
        Our process
    </h1>

    <div class="flex justify-between mt-15 flex-wrap">
        @foreach($processSteps as $step)
            <div class="w-1/3 mb-8">
                <span
                    class="rounded-[5px] bg-[#E4EFFC] text-base font-bold text-[#0A59DD] w-10 h-10 flex items-center justify-center">
                    {{ $step['id'] }}.
                </span>
                <div class="text-left mt-10 mb-5 w-4/5 text-[20px] leading-[120%]">
                    <span class="font-bold">
                        {{ $step['title'] }}
                    </span>
                    <span class="text-[#818181] font-normal">
                        {{ $step['text'] }}
                    </span>
                </div>
            </div>
        @endforeach
        <a href="#contact"
            class="inline-block bg-[#0A59DD] text-white font-extrabold text-[14px] leading-[32px] px-7 py-2 rounded-[100px] mx-auto">
            Let’s talk <span class="ml-3">&gt;</span>
        </a>
    </div>
</div>