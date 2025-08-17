@extends('layouts.app')

@section('title', 'Board of Directors | ICOS')

@section('content')
    <div class="overflow-x-hidden">
        <div class="flex flex-col">


            <x-banner title="Board of Directors" page="About Us /" breadcrumb="Board of Directors" />

            <div class="container mx-auto">
                <div class="lg:mt-[15rem] mt-10">
                    <div
                        class="flex flex-row items-center justify-center gap-3 lg:justify-start lg:gap-3 lg:flex lg:items-center">
                        <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                        <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                            Board of Directors
                        </span>
                    </div>
                    <div class="flex flex-col gap-5 my-5 lg:flex-row">
                        <div class="w-full">
                            <div
                                class="flex flex-col items-center w-full gap-8 text-5xl font-semibold lg:items-start lg:text-left">
                                <div class="text-center">
                                    <span class="text-[#112947] lg:text-[80px]">
                                        Interim Officers
                                </div>
                            </div>
                        </div>
                        <div class="mx-3 text-center lg:text-left lg:w-full">
                            <p class="text-sm text-justify text-gray-600 lg:text-xl">
                                The International Cardio-Oncology Society - Philippines (ICOS-Philippines) is a dedicated
                                national
                                chapter of the global International Cardio-Oncology Society, formed to address the unique
                                cardiovascular needs of Filipino patients with cancer. As pioneers in this emerging field,
                                we
                                are
                                committed to advancing the science and practice of cardio-oncology in the Philippines
                                through
                                multidisciplinary collaboration, research, education, and advocacy.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto lg:mt-[8rem] lg:mb-[12rem] mb-10">
                <div class="flex flex-col gap-10 lg:flex-col">
                    <div class="flex lg:flex-row flex-col gap-5 lg:h-[27rem] overflow-hidden ">
                        <div class="text-left doctor-box ">
                            <div class="doctor-image-container collapsed">
                                <img src="{{ asset('assets/sample-doctor.png') }}" alt=""
                                    class="w-full rounded-2xl">
                                <div class="absolute flex gap-2 bottom-2 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#17509E" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plus-icon lucide-plus">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#E94B4D " stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="hidden lucide lucide-minus-icon lucide-minus">
                                        <path d="M5 12h14" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 p-4">
                                <span class="text-xl font-bold">Dr. Francis C. Carandang</span>
                                <span class="text-[#295ea5]">Treasurer / Chair, Finance and Audit Committee</span>
                                <div class="flex flex-col gap-3 doctor-info collapsed">
                                    <span>Institution: [Insert Hospital/University]</span>
                                    <p>With strong commitment to ethical and sustainable financial management, Dr. Carandang
                                        ensures the society remains accountable and future-ready.</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-left doctor-box ">
                            <div class="doctor-image-container collapsed">
                                <img src="{{ asset('assets/sample-doctor.png') }}" alt=""
                                    class="w-full rounded-2xl">
                                <div class="absolute flex gap-2 bottom-2 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#17509E" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plus-icon lucide-plus">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#E94B4D " stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="hidden lucide lucide-minus-icon lucide-minus">
                                        <path d="M5 12h14" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 p-4">
                                <span class="text-xl font-bold">Dr. Francis C. Carandang</span>
                                <span class="text-[#295ea5]">Treasurer / Chair, Finance and Audit Committee</span>
                                <div class="flex flex-col gap-3 doctor-info collapsed">
                                    <span>Institution: [Insert Hospital/University]</span>
                                    <p>With strong commitment to ethical and sustainable financial management, Dr. Carandang
                                        ensures the society remains accountable and future-ready.</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-left doctor-box ">
                            <div class="doctor-image-container collapsed">
                                <img src="{{ asset('assets/sample-doctor.png') }}" alt=""
                                    class="w-full rounded-2xl">
                                <div class="absolute flex gap-2 bottom-2 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#17509E" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plus-icon lucide-plus">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#E94B4D " stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="hidden lucide lucide-minus-icon lucide-minus">
                                        <path d="M5 12h14" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 p-4">
                                <span class="text-xl font-bold">Dr. Francis C. Carandang</span>
                                <span class="text-[#295ea5]">Treasurer / Chair, Finance and Audit Committee</span>
                                <div class="flex flex-col gap-3 doctor-info collapsed">
                                    <span>Institution: [Insert Hospital/University]</span>
                                    <p>With strong commitment to ethical and sustainable financial management, Dr. Carandang
                                        ensures the society remains accountable and future-ready.</p>
                                </div>
                            </div>
                        </div>
                        <div class="text-left doctor-box ">
                            <div class="doctor-image-container collapsed">
                                <img src="{{ asset('assets/sample-doctor.png') }}" alt=""
                                    class="w-full rounded-2xl">
                                <div class="absolute flex gap-2 bottom-2 right-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#17509E" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-plus-icon lucide-plus">
                                        <path d="M5 12h14" />
                                        <path d="M12 5v14" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="#E94B4D " stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="hidden lucide lucide-minus-icon lucide-minus">
                                        <path d="M5 12h14" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 p-4">
                                <span class="text-xl font-bold">Dr. Francis C. Carandang</span>
                                <span class="text-[#295ea5]">Treasurer / Chair, Finance and Audit Committee</span>
                                <div class="flex flex-col gap-3 doctor-info collapsed">
                                    <span>Institution: [Insert Hospital/University]</span>
                                    <p>With strong commitment to ethical and sustainable financial management, Dr. Carandang
                                        ensures the society remains accountable and future-ready.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .doctor-box {
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .doctor-image-container {
            position: relative;
            transition: height 0.3s ease-in-out;
            overflow: hidden;
        }

        .doctor-image-container.expanded {
            height: 15.5rem;
            /* Half of lg:h-[19rem] */
        }

        .doctor-image-container.collapsed {
            height: 19rem;
            /* Full height */
        }

        .doctor-info {
            transition: max-height 0.3s ease-in-out, opacity 0.3s ease-in-out;
            overflow: hidden;
        }

        .doctor-info.collapsed {
            max-height: 0;
            opacity: 0;
        }

        .doctor-info.expanded {
            max-height: 200px;
            /* Adjust based on content height */
            opacity: 1;
        }

        .lucide-plus-icon,
        .lucide-minus-icon {
            cursor: pointer;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const doctorBoxes = document.querySelectorAll('.doctor-box');

            doctorBoxes.forEach((box) => {
                const plusIcon = box.querySelector('.lucide-plus-icon');
                const minusIcon = box.querySelector('.lucide-minus-icon');
                const info = box.querySelector('.doctor-info');
                const imageContainer = box.querySelector('.doctor-image-container');

                plusIcon.addEventListener('click', () => {
                    info.classList.remove('collapsed');
                    info.classList.add('expanded');
                    imageContainer.classList.remove('collapsed');
                    imageContainer.classList.add('expanded');
                    plusIcon.classList.add('hidden');
                    minusIcon.classList.remove('hidden');
                });

                minusIcon.addEventListener('click', () => {
                    info.classList.remove('expanded');
                    info.classList.add('collapsed');
                    imageContainer.classList.remove('expanded');
                    imageContainer.classList.add('collapsed');
                    minusIcon.classList.add('hidden');
                    plusIcon.classList.remove('hidden');
                });
            });
        });
    </script>
@endsection
