@extends('layouts.app')

@section('title', 'News & Events | ICOS')

@section('content')


    <x-banner title="News & Events" page="" breadcrumb="News & Events" />

    <div class="container mx-auto lg:my-[15rem]">
        <div class="flex flex-col items-center justify-center gap-3 mx-3 lg:items-start lg:justify-start">
            <div
                class="flex flex-row items-center justify-center gap-3 mt-10 mb-1 lg:justify-start lg:gap-3 lg:flex lg:items-center">
                <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                    News & Events
                </span>
            </div>
            <div class="text-[#112947] text-3xl font-semibold text-center lg:text-start">
                Stay Informed with the Latest Updates
            </div>
            <div class="text-center text-gray-500 lg:text-start">
                Catch up recent breakthroughs, upcoming conferences, and important announcements from the IC-OS community.
            </div>
        </div>
        <div>
            {{-- Event Cards --}}
            <div class="flex flex-col gap-5 mx-3 lg:flex-row">
                <div class="grid grid-cols-1 gap-5 py-10 lg:grid-cols-2 w-fit">
                    @foreach ($events as $event)
                        <a href="{{ route('events.show', ['id' => $loop->iteration]) }}"
                            class="flex flex-col transition duration-300 cursor-pointer group rounded-2xl">
                            <div
                                class=" flex flex-col items-center lg:items-start px-10 py-10 lg:px-10 lg:py-10 gap-4 border border-[#17509E]/50 rounded-[2rem] lg:rounded-3xl bg-[#17509E]/10 lg:hover:cursor-pointer lg:hover:bg-[#17509E]/50 lg:transition lg:duration-300 lg:transform lg:hover:scale-105">
                                <div class="w-auto">
                                    <div class="flex flex-col items-center justify-center gap-5">
                                        <div class="relative w-auto">
                                            <img src="{{ asset($event->image) }}" alt=""
                                                class="w-auto lg:w-[40rem] rounded-[55px]">
                                            {{-- desktop view --}}
                                            <div
                                                class=" absolute hidden lg:flex py-2 px-5 lg:py-3 items-center lg:px-6 lg:bottom-7 lg:right-[19rem] bg-[#17509E] rounded-full">
                                                <div class="flex flex-col">
                                                    <p class="text-xl font-semibold text-white">{{ $event->date }}</p>
                                                    <p class="text-xs text-white">{{ $event->month }}</p>
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
                                        <div
                                            class="text-xl text-center lg:text-2xl lg:text-left text-[#112947] font-semibold">
                                            <p>
                                                {{ $event->title }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-full">
                                    <div class="flex lg:justify-start">
                                        <button class="flex items-center overflow-hidden rounded-full ">
                                            <!-- Left circle with icon -->
                                            <div
                                                class="z-10 flex items-center justify-center p-2 bg-white border rounded-full">
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

                {{-- Search Box --}}
                <div class="w-auto mt-8 mb-10 border rounded-2xl h-fit">
                    <div class="flex-col hidden gap-2 px-5 py-5 border-b lg:flex ">
                        <div>
                            Search for anything
                        </div>
                        <div class="relative w-full">
                            <input type="text" placeholder="Search here..."
                                class="w-full py-2 pl-10 pr-4 border rounded-full focus:outline-none focus:ring-2 bg-[#e9e9e9]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 absolute left-3 top-2.5 text-gray-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                            </svg>
                        </div>
                    </div>
                    <div class="flex h-[28rem] overflow-x-hidden flex-col p-5 bg-[#f5f5f5] rounded-b-2xl">
                        <div class="text-sm font-semibold">
                            Latest Post
                        </div>
                        <div class="divide-y-2 divide-gray-300">
                            @foreach ($events as $event)
                                <div
                                    class="flex gap-3 items-center py-5 hover:bg-[#b9b7b7] px-3 transition duration-300 cursor-pointer">
                                    <img src="{{ asset($event->image) }}" alt=""
                                        class="object-cover w-20 h-20 rounded-xl object">
                                    <div>
                                        <div class="flex flex-col gap-1 pb-5 lg:px-5">
                                            <div class="flex items-center gap-2">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="none" stroke="#17509E" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round"
                                                        class="w-4 h-4 lucide lucide-calendar-days-icon lucide-calendar-days">
                                                        <path d="M8 2v4" />
                                                        <path d="M16 2v4" />
                                                        <rect width="18" height="18" x="3" y="4" rx="2" />
                                                        <path d="M3 10h18" />
                                                        <path d="M8 14h.01" />
                                                        <path d="M12 14h.01" />
                                                        <path d="M16 14h.01" />
                                                        <path d="M8 18h.01" />
                                                        <path d="M12 18h.01" />
                                                        <path d="M16 18h.01" />
                                                    </svg>
                                                </div>
                                                <div class="text-[#17509E] font-semibold text-sm">{{ $event->month }}
                                                    {{ $event->date }}</div>
                                            </div>
                                            <p class="max-w-md text-sm font-semibold line-clamp-2">
                                                {{ $event->title }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
