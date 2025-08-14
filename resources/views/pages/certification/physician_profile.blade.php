@extends('layouts.app')

@section('title', 'Physician Profile')

@section('content')
    <x-banner title="Certified Physicians" page="Certifications /" breadcrumb="Certified Physicians" />

    <div class="container mx-auto lg:mt-[8rem] border-b border-gray-500 pb-10">
        <!-- Back Button -->
        <a href="{{ url()->previous() }}"
            class="absolute z-40 inline-flex items-center px-4 py-2 mt-5 mb-4 ml-5 text-sm font-medium text-white transition bg-red-500 rounded-full hover:bg-red-600">
            ← Back to List
        </a>

        <!-- Profile Header -->
        <div class="relative z-30 flex flex-col items-center justify-center p-6 bg-cover rounded-2xl"
            style="background-image: url({{ asset('assets/coverphoto.png') }}); background-position: center; background-size: cover; height: 14rem;">

            <!-- Profile Image -->
            <div class="absolute -bottom-14">
                <div class="w-40 h-40 rounded-full border-4 border-white overflow-hidden shadow-lg">
                    <img src="{{ asset('assets/sample-doctor.png') }}" alt="Dr. Maria Santiago"
                        class="w-full h-full object-cover rounded-full">
                </div>
            </div>
        </div>


        <!-- Profile Card -->
        <div class="px-6 pt-16 pb-6">
            <!-- Name and Specialization -->
            <div class="flex flex-col items-center pb-5 text-center border-b">
                <h1 class="text-2xl font-semibold text-gray-800">{{ $physician->name }}</h1>
                <p class="font-medium text-blue-600">{{ $physician->specialties }}</p>
                <div
                    class="flex items-center justify-center gap-2 px-3 py-2 mt-2 text-xs font-semibold text-white bg-gradient-to-b from-[#E94B4D] to-[#17509E] rounded-full w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="#ffffff"
                        viewBox="0 0 24 24">
                        <!--Boxicons v3.0 https://boxicons.com | License  https://docs.boxicons.com/free-->
                        <path
                            d="M11.29 20.69c.2.2.45.29.71.29s.51-.1.71-.29l7.5-7.5c2.35-2.35 2.35-6.05 0-8.41-2.29-2.29-5.84-2.35-8.21-.2-2.36-2.15-5.91-2.09-8.21.2-2.35 2.36-2.35 6.06 0 8.41z">
                        </path>
                    </svg>
                    <span>
                        @if ($physician->certified)
                            certified
                        @endif
                    </span>
                </div>
            </div>

            <!-- Details -->
            <div class="flex flex-col justify-center gap-6 mt-4 text-sm text-gray-600 sm:flex-row">
                <div class="flex items-center gap-1">
                    <img src="{{ asset('assets/location-icon.png') }}" alt="">
                    {{ $physician->city }} {{ $physician->city }}
                </div>
                <div class="flex items-center gap-1">
                    <img src="{{ asset('assets/joined-icon.png') }}" alt="">
                    Joined {{ $physician->joined }}
                </div>
                <div class="flex items-center gap-1">
                    <img src="{{ asset('assets/experience-icon.png') }}" alt="">
                    {{ $physician->experience }}
                </div>
            </div>

            <!-- About Section -->
            <div class="p-5 mt-6 rounded-lg bg-gray-50">
                <h2 class="flex items-center gap-2 text-lg font-semibold text-gray-800">
                    <img src="{{ asset('assets/about-icon.png') }}" alt="">
                    About
                </h2>
                <p class="mt-2 text-sm leading-relaxed text-gray-700">
                    {{ $physician->about }}
                </p>
                <p class="mt-2 text-sm leading-relaxed text-gray-700">
                    {{ $physician->about }}
                </p>
            </div>

            <!-- Institutional Affiliations -->
            <div class="p-5 mt-6 rounded-lg bg-gray-50">
                <h2 class="flex items-center gap-2 text-lg font-semibold text-gray-800">
                    <img src="{{ asset('assets/institutional-icon.png') }}" alt="">
                    Institutional Affiliations
                </h2>
                <p class="mt-2 text-sm text-gray-700">{{ $physician->affiliations }}</p>
            </div>
        </div>
    </div>

    <div class="container py-20 mx-auto">
        <div class="flex flex-col justify-between overflow-hidden border shadow-sm lg:flex-row rounded-2xl lg:mx-20">
            <!-- Left Text Section -->
            <div class="flex flex-col justify-center p-8 bg-white lg:w-1/2">
                <h2 class="mb-4 text-5xl text-gray-900">Became A Member</h2>
                <p class="mb-6 text-gray-700">
                    By joining IC-OS, you become a partner in the global cardio-oncology community,
                    advancing cancer therapy in a truly multidisciplinary approach to medical care
                    that strives for dramatic improvements in outcomes for patients with cancer.
                </p>
                <button
                    class="flex items-center gap-2 px-5 py-2 font-medium text-white transition bg-red-500 rounded-full w-fit hover:bg-red-600">
                    <span class="w-2 h-2 bg-white rounded-full"></span>
                    Join IC-OS
                </button>
            </div>

            <!-- Right Image with Overlay -->
            <div class="relative lg:w-fit">
                <img src="{{ asset('assets/member-profile.jpeg') }}" alt="Global Summit"
                    class="object-cover rounded-l-full lg:w-[30rem] lg:h-auto">

                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center p-8 text-white rounded-l-full bg-black/30">
                    <h3 class="text-sm font-semibold">Global Summit 2025</h3>
                    <h2 class="text-2xl font-bold leading-tight">Cape Town, South Africa</h2>
                    <div class="flex items-center gap-2 mt-2 text-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
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
                        Oct 30 – Nov 1, 2025
                    </div>
                    <button
                        class="inline-flex items-center px-4 py-2 mt-4 text-sm font-medium text-gray-900 transition bg-white rounded-full w-fit hover:bg-gray-100">
                        Learn More →
                    </button>
                </div>
            </div>
        </div>

    </div>
@endsection
