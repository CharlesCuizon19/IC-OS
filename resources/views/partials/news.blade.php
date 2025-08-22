@php
    $blogs = [
        7 => (object) [
            'img' => 'assets/blog1.png',
            'month' => 'Dec',
            'date' => '23',
            'title' => 'New Training Program Launched for Local Physicians',
        ],
        8 => (object) [
            'img' => 'assets/blog2.png',
            'month' => 'Dec',
            'date' => '23',
            'title' => 'National Forum on Cancer and Heart Care Held in Manila',
        ],
        9 => (object) [
            'img' => 'assets/blog3.png',
            'month' => 'Dec',
            'date' => '23',
            'title' => 'ICOS PH Expands Global Ties with Regional Partners',
        ],
    ];
@endphp


<div class="flex flex-col items-center justify-center gap-5 mx-3 py-7 lg:gap-10 lg:py-20">
    <div class="flex items-center gap-3">
        <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
        <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
            News & Updates
        </span>
    </div>
    <div class="text-sm lg:w-[43rem] text-center text-gray-600">
        Stay informed with the latest from our organization-including expert articales, event hightlights, research
        developments, and stories from our growing network. Explore how we're advancing care, buidling partnerships, and
        making difference in the community.
    </div>
    <div class="container flex flex-col items-center justify-center gap-6 lg:flex-row lg:mt-12">
        @foreach ($blogs as $key => $blog)
            <a href="{{ route('events.show', ['id' => $key]) }}">
                <div
                    class=" flex flex-col items-center lg:items-start px-10 py-10 lg:px-10 lg:py-10 gap-4 border border-[#17509E]/50 rounded-[2rem] lg:rounded-[5rem] bg-[#17509E]/10 lg:hover:cursor-pointer lg:hover:bg-[#17509E]/50 lg:transition lg:duration-300 lg:transform lg:hover:scale-105">
                    <div class="w-auto">
                        <div class="flex flex-col items-center justify-center gap-5">
                            <div class="relative w-auto">
                                <img src="{{ asset($blog->img) }}" alt="" class="w-auto lg:w-[40rem]">
                                {{-- desktop view --}}
                                <div
                                    class=" absolute hidden lg:flex py-2 px-5 lg:py-3 items-center lg:px-6 lg:bottom-7 lg:right-[19rem] bg-[#17509E] rounded-full">
                                    <div class="flex flex-col">
                                        <p class="text-xl font-semibold text-white">{{ $blog->date }}</p>
                                        <p class="text-xs text-white">{{ $blog->month }}</p>
                                    </div>
                                </div>
                                {{-- mobile view --}}
                                <div
                                    class=" absolute lg:hidden flex bottom-5 left-[1rem] py-4 px-7 lg:py-3 items-center lg:px-6 lg:bottom-11 lg:right-[19rem] bg-[#17509E] rounded-full">
                                    <div class="flex flex-col">
                                        <p class="text-xl font-semibold text-white">23</p>
                                        <p class="text-xs text-white">Dec</p>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xl text-center lg:text-2xl lg:text-left text-[#112947] font-semibold">
                                <p>
                                    {{ $blog->title }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-full">
                        <div class="flex lg:justify-start">
                            <button class="flex items-center overflow-hidden rounded-full ">
                                <!-- Left circle with icon -->
                                <div class="z-10 flex items-center justify-center p-2 bg-white border rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-up-right">
                                        <path d="M7 7h10v10" />
                                        <path d="M7 17L17 7" />
                                    </svg>
                                </div>

                                <div
                                    class="absolute py-2 pr-4 text-sm font-medium text-white bg-red-700 rounded-full pl-14">
                                    <p>
                                        Learn More
                                    </p>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
