@extends('layouts.app')

@section('title', 'Get Certificate | ICOS')


@section('content')
    <div class="overflow-x-hidden">
        <div class="flex flex-col">

            <x-banner title="Get Certificate" page="Certifications /" breadcrumb="Get Certificate" />

            <div class="container mx-auto">
                <div class="lg:mt-[15rem]">
                    <div class="flex flex-col lg:flex-row lg:gap-10 lg:mx-3">
                        <div class="flex w-full mt-10">
                            <img class="lg:w-[40rem]" src="{{ asset('assets/image1.png') }}" alt="">
                        </div>
                        <div
                            class="flex flex-col items-center justify-center gap-5 my-6 lg:items-start lg:justify-start lg:w-full">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                                <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                                    Get Certificate
                                </span>
                            </div>
                            <div class="flex flex-col items-center justify-center gap-6 lg:items-start lg:justify-start">
                                <div class="flex flex-col items-center justify-center lg:items-start lg:justify-start">
                                    <span class="text-[#112947] text-2xl lg:text-[70px] font-semibold">
                                        Become a
                                        Member
                                    </span>
                                </div>
                                <div class="border-2 border-[#E94B4D] w-1/3 lg:w-1/3 rounded-full"></div>
                                <div class="flex flex-col gap-5 mx-3 text-sm text-center lg:text-xl lg:text-left">
                                    <p class="font-semibold text-justify text-gray-700"> IC-OS offers the only individual
                                        and
                                        organizational
                                        certifications
                                        currently
                                        available in cardio-oncology.</p>
                                    <p class="text-justify text-gray-500"> At IC-OS, we are proud to offer the only
                                        certification
                                        programs
                                        tailored specifically
                                        to the field of cardio-oncology. Whether you're an individual healthcare
                                        professional or
                                        a healthcare organization, our certification programs are designed to validate your
                                        knowledge, commitment, and leadership in this critical and emerging discipline.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container lg:mx-auto lg:pt-[8rem] lg:pb-[13rem] border-b border-gray-500">
                <div class="py-10 mx-3">
                    <div class="flex gap-10 lg:gap-[3rem] lg:flex-row flex-col items-center justify-center">
                        <div
                            class="flex flex-col items-center justify-center w-auto gap-5 lg:items-start lg:justify-start lg:w-full lg:mt-10">
                            <div
                                class="flex flex-col items-center justify-center gap-1 text-3xl font-semibold lg:items-start lg:justify-start">
                                <span>Prove Your Knowledge.</span>
                                <span>Show Your Commitment</span>
                            </div>
                            <div class="text-gray-500">
                                <p class="text-sm leading-7 text-center lg:text-left lg:text-xl">IC-OS Certification
                                    provides assurance
                                    that
                                    patients are
                                    receiving care
                                    from physicians who
                                    are committed to maintaining superior, best-in-class knowledge and clinical experience
                                    in
                                    cardio-oncology.</p>
                            </div>
                            <div class="w-fit">
                                <button class="text-white bg-[#e94b4d] py-4 px-10 rounded-full">
                                    Apply Today
                                </button>
                            </div>
                        </div>
                        <div class="flex items-end justify-end text-white lg:relative lg:w-full">
                            <img class="w-auto lg:w-[38rem] lg:flex hidden" src="{{ asset('assets/image2.png') }}"
                                alt="">

                            <div class="lg:absolute flex gap-10 lg:left-[5rem] lg:-bottom-[9rem] ">
                                <div class="bg-[#17509e] p-5 rounded-2xl flex flex-col gap-2">
                                    <div class="flex flex-col gap-5 lg:flex-row">
                                        <div
                                            class=" bg-[#1b4174] p-5 rounded-xl flex items-center justify-center lg:justify-start lg:items-start flex-col gap-1">
                                            <div class="flex items-center justify-start gap-3">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-calendar-days-icon lucide-calendar-days">
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
                                                <div>
                                                    Application Deadline
                                                </div>
                                            </div>
                                            <div class="text-3xl">
                                                Nov 8th, 2025
                                            </div>
                                        </div>
                                        <div
                                            class=" bg-[#1b4174] p-5 rounded-xl flex items-center justify-center lg:justify-start lg:items-start flex-col gap-1">
                                            <div class="flex items-center justify-start gap-3">
                                                <div>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="lucide lucide-calendar-days-icon lucide-calendar-days">
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
                                                <div>
                                                    Next Exam Date
                                                </div>
                                            </div>
                                            <div class="text-3xl">
                                                Nov 22nd, 2025
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="flex flex-col items-center justify-center gap-1 text-base italic lg:flex-row lg:items-start lg:justify-start">
                                        <span class="font-semibold">
                                            NOTE:
                                        </span>
                                        <span>
                                            This exam will only be offered ONCE in 2025
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto lg:mt-[5rem] lg:pb-[5rem]  border-b border-gray-500">
                <div class="flex flex-col gap-5 py-10 lg:flex-row">
                    <div
                        class="flex flex-col items-center justify-center w-auto gap-5 mx-3 lg:items-start lg:justify-start lg:w-full">
                        <div
                            class="flex flex-row items-center justify-center gap-3 lg:justify-start lg:gap-3 lg:flex lg:items-center">
                            <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                            <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                                Requirements
                            </span>
                        </div>
                        <div class="text-3xl font-semibold lg:w-[34rem] text-center lg:text-start">
                            What You Need to Get Started on Your Certification Journey
                        </div>
                        <div class="text-center text-gray-500 lg:text-start">
                            Understand the qualifications, documents, and steps needed to apply with confidence.
                        </div>
                        <div class="w-fit">
                            <button class="flex items-center gap-2 px-4 py-2 border border-black rounded-full">
                                <span class="text-gray-600">
                                    Get Materials
                                </span>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-up-right">
                                        <path d="M7 7h10v10" />
                                        <path d="M7 17L17 7" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="flex flex-col gap-12 mx-3 lg:w-full">
                        <div class="flex flex-col gap-12">
                            <span class="text-3xl font-semibold">1. Be An Active IC-OS Member</span>
                            <div class="w-fit lg:ml-5">
                                <a href="#"
                                    class="bg-[#E94B4D] hover:bg-[#c53b3d] text-white font-medium px-10 py-5 rounded-full text-xl">
                                    Join IC-OS
                                </a>
                            </div>
                        </div>
                        <div class="flex flex-col gap-12">
                            <span class="text-3xl font-semibold">2. Clinical Training and/or Experience</span>
                            <div class="p-7 bg-[#e9e9e9] rounded-xl">
                                <h3 class="mb-2 text-lg font-semibold">Either</h3>
                                <ul class="flex flex-col leading-7 text-gray-700 list-disc list-inside">
                                    <li class="text-justify text-gray-700">
                                        Provide a letter from a cardio-oncology program director as evidence of one (1)
                                        dedicated year of a cardio-oncology fellowship
                                    </li>
                                </ul>
                            </div>
                            <div class="p-7 bg-[#e9e9e9] rounded-xl">
                                <h3 class="mb-2 text-lg font-semibold">Or</h3>
                                <ul
                                    class="flex flex-col gap-3 leading-7 text-justify text-gray-700 list-disc list-inside lg:flex-col">
                                    <li>
                                        Provide a letter from a cardio-oncology program director as evidence of one (1)
                                        dedicated year of a cardio-oncology fellowship
                                    </li>
                                    <li>
                                        Independent decision-making in patient management with experienced cardio-oncology
                                        mentor. This should include an adequate volume of patients (1-2 patients a week with
                                        100 new patient evaluations minimum).
                                    </li>
                                    <li>
                                        Research is desirable, but clinical decision making and longitudinal care are
                                        mandatory.
                                    </li>
                                    <li>
                                        Non-fellowship trained applicants must have had structured educational programs
                                        extending over three years, which may include CME courses, webinars, conferences,
                                        residency programs, or other forms of education.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col gap-12">
                            <span class="text-3xl font-semibold">3. Letters of Recommendation</span>
                            <div class="p-7 bg-[#e9e9e9] rounded-xl">
                                <h3 class="mb-2 text-lg font-semibold">Letters of recommendations should be provided on
                                    institutional letterhead by:</h3>
                                <ul class="leading-7 text-justify text-gray-700 list-disc list-inside">
                                    <li>
                                        Provide a letter from a cardio-oncology program director as evidence of one (1)
                                        dedicated year of a cardio-oncology fellowship
                                    </li>
                                    <li>
                                        A cardio-oncology program director (required for fellowship applicants).
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="flex flex-col gap-12">
                            <span class="text-3xl font-semibold">4. List of C-O Academic Contributions </span>
                            <div class="p-7 bg-[#e9e9e9] rounded-xl">
                                <ul class="leading-7 text-gray-700 list-disc list-inside">
                                    <li>
                                        Research Projects
                                    </li>
                                    <li>
                                        Published Manuscripts
                                    </li>
                                    <li>
                                        Educational Resources
                                    </li>
                                    <li>
                                        Webinars
                                    </li>
                                    <li>
                                        CME Courses
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto mb-14">
                @include('components.moreaboutcerts')
            </div>
        </div>
    </div>
@endsection
