@extends('layouts.app')

@section('title', 'Physician Profile')

@section('content')
    <x-banner title="Certified Physicians" page="Certifications /" breadcrumb="Certified Physicians" />

    <div class="lg:container mx-3 lg:mx-auto pt-10 lg:mt-[10rem] border-b border-gray-500 pb-10">
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
                <div class="w-40 h-40 overflow-hidden border-4 border-white rounded-full shadow-lg">
                    <img src="{{ asset('assets/sample-doctor.png') }}" alt="Dr. Maria Santiago"
                        class="object-cover w-full h-full rounded-full">
                </div>
            </div>
        </div>


        <!-- Profile Card -->
        <div class="px-6 pt-[4rem] pb-6">
            <!-- Name and Specialization -->
            <div class="flex flex-col items-center pb-5 text-center border-b">
                <h1 class="text-2xl font-semibold text-gray-800">{{ $physician->name }}</h1>
                <p class="font-medium text-blue-600">{{ $physician->specialties }}</p>
                <div class="flex gap-2 my-5">
                    @if ($physician->certified)
                        <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="w-6 h-5">
                        <span class="px-2 py-1 text-xs font-medium text-red-500 bg-red-100 rounded-full">CERTIFIED</span>
                    @endif
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
            <div class="lg:px-12 ">
                <div class="p-5 mt-6 rounded-lg bg-gray-50">
                    <h2 class="flex items-center gap-2 text-lg font-semibold text-gray-800">
                        <img src="{{ asset('assets/about-icon.png') }}" alt="">
                        About
                    </h2>
                    <p class="mx-3 mt-5 text-sm leading-relaxed text-justify text-gray-700 lg:mx-10">
                        {{ $physician->about }}
                    </p>
                </div>

                <!-- Institutional Affiliations -->
                <div class="p-5 mt-6 rounded-lg bg-gray-50">
                    <h2 class="flex items-center gap-2 text-lg font-semibold text-gray-800">
                        <img src="{{ asset('assets/institutional-icon.png') }}" alt="">
                        Institutional Affiliations
                    </h2>
                    <p class="mx-10 mt-2 text-sm text-gray-700">{{ $physician->affiliations }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-20 mx-auto">
        <div class="flex flex-col justify-between mx-3 overflow-hidden border shadow-sm lg:flex-row rounded-2xl lg:mx-20">
            <!-- Left Text Section -->
            <div class="flex flex-col justify-center p-8 bg-white lg:w-1/2">
                <h2 class="mb-4 text-5xl text-gray-900">Become A Member</h2>
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
                    class="object-cover lg:rounded-l-full lg:w-[30rem] lg:h-auto">

                <!-- Overlay Content -->
                <div class="absolute inset-0 flex flex-col justify-center p-8 text-white lg:rounded-l-full bg-black/30">
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
