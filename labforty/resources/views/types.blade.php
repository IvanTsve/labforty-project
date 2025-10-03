<div class="text-center mb-20 w-4/5 mx-auto px-10">
    <h1 class="mt-40 h-subtitle">
        Types of
        <br>
        <span class="bg-gradient-to-b from-[#083982] to-[#2064B5] bg-clip-text text-transparent">
            maintenance
        </span>
    </h1>
    <p class="mt-5 text-lg">
        Our support service guarantees that requests
        <span class="block text-[#818181] text-base mt-1">
            are treated with the highest priority.
        </span>
    </p>
    <div class="bg-[#F2F2F5] flex mt-15 pb-10 pt-32 rounded-[20px] ">
        <div class="w-1/2">
            <div class="flex justify-center flex-wrap gap-y-5">
                <div class="mb-6 w-3/5">
                    <div class="flex items-center justify-between cursor-pointer maintenance-header"
                        onclick="toggleMaintenance('corrective')">
                        <h1 class="text-start w-9/12 font-bold text-[24px] leading-[120%] font-weight-700">Corrective maintenance
                        </h1>
                        <svg class="chevron w-6 h-6 transform transition-transform duration-300" fill="none"
                            stroke="#818181" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div id="corrective-content"
                        class="w-[70%] text-left maintenance-content mt-3 font-normal text-[16px] text-[#1F1F1F] transition-all duration-300">
                        "Bug" maintenance, or corrective maintenance, fixes user-reported errors and is the most urgent
                        type, addressing issues like security, compatibility, and compliance.
                    </div>
                </div>
                <div class="mb-6 w-3/5 border-solid border-t-1 border-[#D8D8D8] pt-5">
                    <div class="flex items-center justify-between cursor-pointer maintenance-header"
                        onclick="toggleMaintenance('preventive')">
                        <h1 class="text-start w-9/12 font-bold text-[24px] leading-[120%] font-weight-700">Preventive maintenance
                        </h1>
                        <svg class="chevron w-6 h-6 transform transition-transform duration-300" fill="none"
                            stroke="#818181" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div id="preventive-content"
                        class="w-[70%] text-left maintenance-content hidden mt-3 font-normal text-[16px] text-[#1F1F1F] transition-all duration-300">
                        Proactive maintenance that prevents issues before they occur, including regular updates,
                        performance
                        monitoring, and system optimization to ensure smooth operation.
                    </div>
                </div>
                <div class="mb-6 w-3/5 border-solid border-t-1 border-[#D8D8D8] pt-5">
                    <div class="flex items-center justify-between cursor-pointer maintenance-header"
                        onclick="toggleMaintenance('perfective')">
                        <h1 class="text-start w-9/12 font-bold text-[24px] leading-[120%] font-weight-700">Perfective maintenance
                        </h1>
                        <svg class="chevron w-6 h-6 transform transition-transform duration-300" fill="none"
                            stroke="#818181" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                    <div id="perfective-content"
                        class="w-[70%] text-left maintenance-content hidden mt-3 font-normal text-[16px] text-[#1F1F1F] transition-all duration-300">
                        Enhancement maintenance that improves functionality, performance, and user experience by adding
                        new
                        features and optimizing existing processes.
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2">
            <img src="{{ asset('images/investment.svg') }}" alt="Investment" class="ml-auto h-96 w-auto" />
        </div>



    </div>

</div>

<script>
    function toggleMaintenance(type) {
        document.querySelectorAll('.maintenance-content').forEach(function(el) {
            el.classList.add('hidden');
            el.classList.remove('animate-slideDown');
        });
        document.querySelectorAll('.chevron').forEach(function(chevron) {
            chevron.style.transform = 'rotate(0deg)';
        });

        const content = document.getElementById(type + '-content');
        const chevron = content.previousElementSibling.querySelector('.chevron');
        content.classList.remove('hidden');
        content.classList.add('animate-slideDown');
        chevron.style.transform = 'rotate(180deg)';
    }
</script>