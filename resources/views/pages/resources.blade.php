@extends('layouts.app')

@section('title', 'Resources | ICOS')

@section('content')
    <x-banner title="Resources" page="" breadcrumb="Resources" />

    <div class="container mx-auto lg:my-[10rem]">
        <div class="flex flex-col">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 items-center pb-14 lg:pb-[10rem] border-b-2">
                <div class="flex flex-col gap-3 mt-10">
                    <div
                        class="flex flex-row items-center justify-center gap-3 lg:justify-start lg:gap-3 lg:flex lg:items-center lg:mb-10">
                        <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                        <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                            Resources
                        </span>
                    </div>
                    <div class="text-[#112947] text-3xl font-semibold text-center lg:text-start">
                        Get the Exam Materials
                    </div>
                    <div class="text-gray-500 text-center lg:text-start mx-3">
                        """This is an outstanding reference resource for anyone interested in expanding their
                        cardio-oncology
                        knowledge."""
                    </div>
                    <div
                        class="flex mx-3 flex-col lg:flex-row items-center p-5 gap-5 bg-[#f4f4f4] rounded-xl border-collapse">
                        <img src="{{ asset('assets/resources-profile.png') }}" alt="">
                        <div
                            class="flex flex-col gap-2 text-center lg:text-start lg:justify-start lg:items-start items-center justify-center">
                            <div class="font-bold">Pedro Moliner MD, PhD.</div>
                            <div class="text-[#17509E] text-sm">Bellvitge University Hospital – Catalan Institute of
                                Oncology
                            </div>
                            <div class="flex items-center gap-1">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-map-pin-icon lucide-map-pin">
                                        <path
                                            d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                </div>
                                <span>
                                    Barcelona, Spain
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('assets/book-image.png') }}" alt="" class="animate-float">
                </div>
                <div class="flex flex-col gap-5 mx-3">
                    <div class="leading-8">
                        if you're considering the Cardio-Oncology Knowledge Cerfication Exam, then we recommend carefully
                        reviewing volumes 1 % 2 of the IC-OS Board Review Manual: A Guide to Cardio-Oncology.
                    </div>
                    <div class="flex flex-col gap-3">
                        <span>Get Hardcover</span>
                        <ul class="list-disc pl-5 gap-10 flex lg:flex-row text-[#17509E]">
                            <li>
                                <a href="#" class="flex items-center gap-2">
                                    <span>Volume 1</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#17509E" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right-icon lucide-arrow-right">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-2">
                                    <span>Volume 2</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#17509E" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right-icon lucide-arrow-right">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="flex flex-col gap-3">
                        <span>Get Hardcover</span>
                        <ul class="list-disc pl-5 gap-10 flex lg:flex-row text-[#E94B4D]">
                            <li>
                                <a href="#" class="flex items-center gap-2">
                                    <span>Volume 1</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#E94B4D" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right-icon lucide-arrow-right">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center gap-2">
                                    <span>Volume 2</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="#E94B4D" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-arrow-right-icon lucide-arrow-right">
                                        <path d="M5 12h14" />
                                        <path d="m12 5 7 7-7 7" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="my-14">
                <div class="flex flex-col-reverse lg:flex-row items-center justify-center">
                    <img src="{{ asset('assets/laptop-image.png') }}" alt="">
                    <div class="flex flex-col gap-3 text-center items-center lg:items-start">
                        <div class="text-2xl font-semibold">Take The Course</div>
                        <div class="border-2 border-[#E94B4D] rounded-full w-1/2"></div>
                        <div class="text-sm text-gray-500">If you prefer, you can take video course.</div>
                        <button
                            class="flex gap-2 items-center rounded-full px-3 py-2 bg-[#E94B4D] hover:bg-[#c84042] w-fit">
                            <span class="text-white">Get the course</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-arrow-right-icon lucide-arrow-right">
                                <path d="M5 12h14" />
                                <path d="m12 5 7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
