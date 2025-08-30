@extends('layouts.app')

@section('title', 'Certified Physicians | ICOS')

@section('content')

    <x-banner title="Members" page="Certifications /" breadcrumb="Members" />

    <div class="container px-4 py-6 mx-auto lg:mt-[8rem] border-b border-gray-500 lg:pb-[5rem] mt-10">
        <!-- Header -->
        <div class="flex flex-col gap-4 border-b border-gray-500 md:flex-row md:items-center md:justify-between lg:pb-10">
            <h1 class="text-xl font-bold text-[#17509E]">List of Members</h1>
            <div class="flex flex-col items-center w-full gap-3 md:flex-row md:w-auto">
                <!-- Search -->
                <div class="relative w-full md:w-64">
                    <input type="text" placeholder="Search a physician..."
                        class="w-full py-2 pl-10 pr-4 bg-white border-2 rounded-full focus:outline-none focus:ring-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 absolute left-3 top-2.5 text-gray-400"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                    </svg>
                </div>

                <!-- Actions -->
                <div class="flex gap-2">
                    <select class="px-3 py-2 text-sm border rounded-lg">
                        <option>Show 5</option>
                        <option>Show 10</option>
                        <option>Show 20</option>
                    </select>
                    <select class="px-3 py-2 text-sm border rounded-lg">
                        <option>Sort by</option>
                        <option>Name</option>
                        <option>Experience</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-6 mt-6 lg:flex-row ">
            <!-- Physicians List -->
            <div class="flex flex-col gap-4 lg:col-span-3 lg:w-full">
                @foreach ($doctors as $doctor)
                    <div class="flex flex-col items-start justify-between gap-4 p-4 border rounded-lg lg:flex-row">
                        <!-- Avatar -->
                        <div class="flex flex-col items-start gap-4 lg:flex-row lg:items-center">
                            <div class="w-40 h-40 overflow-hidden border-4 border-white rounded-full">
                                <img src="{{ asset($doctor->user->profiles->images->files->image_path) }}" alt="doctor"
                                    class="object-cover w-full h-full rounded-full">
                            </div>

                            <!-- Info -->
                            <div class="flex flex-col flex-1 gap-2">
                                <h2 class="font-semibold">{{ $doctor->user->profiles->first_name }}
                                    {{ $doctor->user->profiles->middle_name }} {{ $doctor->user->profiles->last_name }}</h2>
                                <p class="text-sm font-medium text-blue-600">
                                    {{ $doctor->specializations->specialization_name }}
                                </p>
                                <div class="flex items-center gap-3 mt-2 text-sm text-gray-500">
                                    <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="w-6 h-5">
                                    <span
                                        class="px-2 py-1 text-xs font-medium text-red-500 bg-red-100 rounded-full">CERTIFIED</span>
                                </div>
                                <div class="flex items-center gap-4 mt-2 text-sm text-gray-500">
                                    <span class="flex items-center gap-1">
                                        <img src="{{ asset('assets/location-icon.png') }}" alt="">
                                        {{ ucfirst(preg_replace('/[^A-Za-z0-9 ]/', ' ', $doctor->User->profiles->cities->city_name)) }},

                                        {{ $doctor->User->profiles->cities->countries->country_name }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- View Profile Button -->
                        <div class="w-auto">
                            <a href="{{ route('certified-physician', $doctor->id) }}"
                                class="block px-4 py-2 text-center text-white transition bg-red-500 rounded-full hover:bg-red-600">
                                View Profile →
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Filters -->
            <div class="p-4 bg-white border lg:h-fit rounded-lg lg:col-span-1 lg:w-[40rem] ">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold">Filters</h3>
                    <a href="#" class="text-sm text-gray-500 hover:underline">Clear all filter</a>
                </div>

                <div class="space-y-4">
                    <div>
                        <label class="text-sm text-gray-500">Specialty</label>
                        <select class="w-full px-3 py-2 border rounded-lg">
                            <option>Select a Specialty</option>
                        </select>
                    </div>

                    {{-- <div>
                        <label class="text-sm text-gray-500">Country</label>
                        <select class="w-full px-3 py-2 border rounded-lg">
                            <option>Select a Country</option>
                        </select>
                    </div> --}}

                    <div>
                        <label class="text-sm text-gray-500">City</label>
                        <select class="w-full px-3 py-2 border rounded-lg">
                            <option>Select a City</option>
                        </select>
                    </div>
                    {{-- 
                    <div>
                        <label class="text-sm text-gray-500">Certification</label>
                        <div class="flex items-center gap-3 mt-2">
                            <label class="flex items-center gap-2 text-sm">
                                <input type="radio" name="certification" checked> All Providers
                            </label>
                            <label class="flex items-center gap-2 text-sm">
                                <input type="radio" name="certification"> Certified
                            </label>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto mb-14">
        @include('components.moreaboutcerts')
    </div>
@endsection
