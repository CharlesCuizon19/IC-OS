@extends('layouts.app')

@section('title', 'Abour Company | ICOS')

@section('content')
    <div class="overflow-x-hidden">
        <div class="flex flex-col">

            <x-banner title="About Company" page="About Us /" breadcrumb="About Company" />

            <div class="container mx-auto">
                <div class="lg:mt-[15rem] mt-10">
                    <div
                        class="flex flex-row items-center justify-center gap-3 mb-3 lg:justify-start lg:gap-3 lg:flex lg:items-center">
                        <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                        <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                            About Us
                        </span>
                    </div>
                    <div class="flex flex-col gap-3 lg:flex-row">
                        <div class="w-full">
                            <div
                                class="flex flex-col items-center w-full gap-3 text-5xl font-semibold lg:gap-8 lg:items-start lg:text-left">
                                <div>
                                    <span class="text-[#112947] lg:text-[80px]">
                                        ICOS-Pilipinas
                                    </span>
                                </div>
                                <div>
                                    <p class="text-sm font-normal text-gray-600 lg:text-xl lg:w-[40rem]">
                                        (International Cardio-Oncology Society - Pilipinas)
                                    </p>
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

            <div class="container mx-auto lg:mt-[8rem] my-10">
                <div class="w-auto lg:w-full">
                    <div class="flex flex-col gap-10 mx-10 lg:flex-row">
                        <div
                            class="flex lg:flex-row items-center justify-between  lg:justify-center rounded-xl p-3 lg:rounded-full lg:px-10 lg:py-3 lg:gap-6 bg-[#f3f8ff]">
                            <div class="flex flex-col gap-3 ">
                                <span class="count text-5xl text-[#112947]" data-target="15" data-suffix="">0</span>
                                <span class="text-gray-600">Year Experience</span>
                            </div>
                            <div>
                                <img src="{{ asset('assets/icon - years of experience.png') }}" alt=""
                                    class="w-[7rem] lg:w-auto">
                            </div>
                        </div>
                        <div
                            class="flex lg:flex-row items-center justify-between p-3 rounded-xl  lg:justify-center lg:rounded-full lg:px-10 lg:py-3 lg:gap-6 bg-[#f3f8ff]">
                            <div class="flex flex-col gap-3">
                                <span class="count text-5xl text-[#112947]" data-target="150" data-suffix="+">0</span>
                                <span class="text-gray-600">Professional Doctors</span>
                            </div>
                            <div>
                                <img src="{{ asset('assets/icon-profdoctors.png') }}" alt=""
                                    class="w-[7rem] lg:w-auto">
                            </div>
                        </div>
                        <div
                            class="flex lg:flex-row items-center justify-between p-3 rounded-xl  lg:justify-center lg:rounded-full lg:px-10 lg:py-3 lg:gap-6 bg-[#f3f8ff]">
                            <div class="flex flex-col gap-3">
                                <span class="count text-5xl text-[#112947]" data-target="1100" data-suffix="k+">0</span>
                                <span class="text-gray-600">Cured Patients</span>
                            </div>
                            <div>
                                <img src="{{ asset('assets/icon-patientscured.png') }}" alt=""
                                    class="w-[7rem] lg:w-auto">
                            </div>
                        </div>
                        <div
                            class="flex lg:flex-row items-center justify-between p-3 rounded-xl  lg:justify-center lg:rounded-full lg:px-10 lg:py-3 lg:gap-6 bg-[#f3f8ff]">
                            <div class="flex flex-col gap-3">
                                <span class="count text-5xl text-[#112947]" data-target="35" data-suffix="+">0</span>
                                <span class="text-gray-600">Partner Institutions</span>
                            </div>
                            <div>
                                <img src="{{ asset('assets/icon-partnerinstitutions.png') }}" alt=""
                                    class="w-[7rem] lg:w-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto lg:mt-[8rem] mb-20">
                <div class="flex flex-col gap-5 mx-3 lg:gap-16 lg:flex-row lg:items-center">
                    <div class="w-full">
                        <img src="{{ asset('assets/ourmission.png') }}" alt="">
                    </div>
                    <div class="flex flex-col items-center justify-center gap-6 lg:w-full lg:items-start lg:justify-start">
                        <div>
                            <p class="text-[#112947] text-3xl lg:text-[60px] font-semibold">Our Mission</p>
                        </div>
                        <div class="border-2 border-[#E94B4D] w-1/3 rounded-full"></div>
                        <div
                            class="flex flex-col gap-[3rem] mt-5 text-gray-600 text-sm lg:text-xl text-center lg:text-left">
                            <p class="text-justify">
                                To promote heart health in every phase of the cancer journey—prevention, treatment,
                                survivorship, and beyond. We bring together cardiologists, oncologists, internists,
                                hematologists, radiologists, pharmacists, nurses, and allied health professionals to develop
                                patient-centered strategies that minimize cardiovascular risk while maximizing cancer
                                outcomes.
                            </p>
                            <p class="text-justify">
                                Through regular educational initiatives, clinical practice guidelines, and partnerships with
                                both local and international organizations, ICOS-Philinas aims to elevate the standard of
                                care and foster a community of practitioners united in protecting the hearts of those
                                fighting cancer.
                            </p>
                            <p class="text-justify">
                                Together, we stand at the forefront of a growing movement—where cancer care meets
                                cardiovascular care.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <x-partners />

            <div class="container mx-auto lg:mt-[8rem] mb-3 mt-10">
                <div class="flex flex-col items-center justify-center w-full mx-3 gap-7">
                    <div class="relative flex items-center justify-center w-full bg-gray-800 rounded-xl group">
                        <video id="aboutVideo" class="object-cover lg:w-[25rem]" muted autoplay loop controls>
                            <source src="{{ asset('assets/about-us-vid.mp4') }}" type="video/mp4">
                        </video>

                        <!-- Custom Center Pause/Play Button -->
                        <button id="toggleBtn"
                            class="absolute inset-0 flex items-center justify-center transition duration-300 opacity-0 group-hover:opacity-100">
                            <div class="p-4 text-white rounded-full bg-black/60 hover:bg-black/80">
                                <!-- Play Icon -->
                                <svg id="playIcon" xmlns="http://www.w3.org/2000/svg" class="hidden w-12 h-12"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>

                                <!-- Pause Icon -->
                                <svg id="pauseIcon" xmlns="http://www.w3.org/2000/svg" class="w-12 h-12" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
                                </svg>
                            </div>
                        </button>
                    </div>

                    <div class="flex text-xl text-center lg:text-3xl lg:items-center lg:justify-center lg:w-2/3">
                        <p>
                            With over <span class="font-bold">1000 members</span> from more than <span class="font-bold">30
                                contries</span>, we are expanding our reach throughout the world
                        </p>
                    </div>
                </div>
            </div>

            <div class="container mx-auto lg:my-[7rem]">
                <div>
                    <img src="{{ asset('assets/worldmap.png') }}" alt="world map">
                </div>
            </div>

        </div>
    </div>

    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logos").appendChild(copy);
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".count");

            const runCounter = (counter) => {
                const target = +counter.getAttribute("data-target");
                const suffix = counter.getAttribute("data-suffix") || "";
                const increment = target / 200; // adjust speed

                let count = 0;
                const updateCount = () => {
                    count += increment;
                    if (count < target) {
                        counter.innerText = Math.floor(count).toLocaleString() + suffix;
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = target.toLocaleString() + suffix;
                    }
                };
                updateCount();
            };

            // Run when in viewport
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        runCounter(entry.target);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const video = document.getElementById("aboutVideo");
            const toggleBtn = document.getElementById("toggleBtn");
            const playIcon = document.getElementById("playIcon");
            const pauseIcon = document.getElementById("pauseIcon");

            const updateIcons = () => {
                if (video.paused) {
                    playIcon.classList.remove("hidden");
                    pauseIcon.classList.add("hidden");
                } else {
                    playIcon.classList.add("hidden");
                    pauseIcon.classList.remove("hidden");
                }
            };

            // Toggle when custom button clicked
            toggleBtn.addEventListener("click", () => {
                if (video.paused) video.play();
                else video.pause();
                updateIcons();
            });

            // Sync with built-in controls (play/pause buttons, keyboard shortcuts, etc.)
            video.addEventListener("play", updateIcons);
            video.addEventListener("pause", updateIcons);

            // Initialize icons
            updateIcons();
        });
    </script>


@endsection
