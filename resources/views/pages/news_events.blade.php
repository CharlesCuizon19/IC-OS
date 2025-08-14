@extends('layouts.app')

@section('title', 'News & Events | ICOS')

@section('content')


    <x-banner title="News & Events" page="" breadcrumb="News & Events" />

    <div class="container mx-auto lg:my-[15rem]">
        <div class="flex lg:items-start mx-3 lg:justify-start items-center justify-center flex-col gap-3">
            <div
                class="flex flex-row items-center justify-center mt-10 mb-1 gap-3 lg:justify-start lg:gap-3 lg:flex lg:items-center">
                <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                    News & Events
                </span>
            </div>
            <div class="text-[#112947] text-3xl font-semibold text-center lg:text-start">
                Stay Informed with the Latest Updates
            </div>
            <div class="text-gray-500 text-center lg:text-start">
                Catch up recent breakthroughs, upcoming conferences, and important announcements from the IC-OS community.
            </div>
        </div>
        <div>
            <div class="flex flex-col lg:flex-row mx-3">
                <div class="grid grid-cols-1 lg:grid-cols-2 py-10 w-fit gap-5">
                    @foreach ($events as $event)
                        <a href="{{ route('events.show', ['id' => $loop->iteration]) }}"
                            class="flex flex-col gap-3 border rounded-2xl lg:w-[30rem] cursor-pointer group hover:bg-slate-300 transition duration-300 overflow-hidden">
                            <img src="{{ asset($event->image) }}" alt=""
                                class="rounded-t-2xl object-cover transform transition-transform duration-500 group-hover:scale-105 w-full h-64">
                            <div class="px-5 pb-5 flex flex-col gap-3 ">
                                <div class="flex items-center gap-2">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                            stroke="#17509E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                                    <div class="text-[#17509E] font-semibold text-sm">{{ $event->date }}</div>
                                </div>
                                <div class="font-semibold">
                                    {{ $event->title }}
                                </div>
                                <div class="border-2 border-[#E94B4D] rounded-full w-1/3"></div>
                                <div class="text-gray-500">
                                    {{ $event->description }}
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
                <div class="mt-8 mb-10 w-auto border rounded-2xl h-fit">
                    <div class="lg:flex flex-col gap-2 py-5 border-b px-5 hidden ">
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
                    <div class="flex h-[28rem] overflow-x-scroll flex-col p-5 bg-[#f5f5f5] rounded-b-2xl">
                        <div class="text-sm font-semibold">
                            Latest Post
                        </div>
                        <div>
                            @foreach ($events as $event)
                                <div
                                    class="flex gap-3 items-center border-b border-gray-400 py-5 hover:bg-[#b9b7b7] px-3 transition duration-300 cursor-pointer">
                                    <img src="{{ asset($event->image) }}" alt=""
                                        class="rounded-xl object object-cover w-20 h-20">
                                    <div>
                                        <div class="lg:px-5 pb-5 flex flex-col gap-1">
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
                                                <div class="text-[#17509E] font-semibold text-sm">{{ $event->date }}</div>
                                            </div>
                                            <div class="font-semibold text-sm lg:truncate text-wrap w-full lg:max-w-xs">
                                                {{ $event->title }}
                                            </div>
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
