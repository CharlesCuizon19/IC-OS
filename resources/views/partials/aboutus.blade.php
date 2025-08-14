<div>
    <div class="flex flex-col lg:flex lg:flex-row mt-[1rem] lg:mt-[1rem] mb-[5rem] lg:mb-[12rem] mx-3">
        <div class="w-full lg:flex lg:flex-row lg:items-center lg:justify-center lg:bg-center lg:bg-cover lg:relative">
            <img src="{{ asset('assets/about-us.png') }}" alt="" class="z-30 hidden w-full h-full lg:flex">

            <!-- Circular Video Container -->
            <div
                class="lg:absolute lg:w-[35rem] lg:h-[35rem] lg:rounded-full lg:border-4 lg:flex hidden lg:border-white lg:z-40 overflow-hidden group">
                <video id="aboutVideo" class="object-cover lg:w-full lg:h-full lg:rounded-full" muted autoplay loop>
                    <source src="{{ asset('assets/running-man.mp4') }}" type="video/mp4" class="w-fit">
                </video>
                <button onclick="document.getElementById('aboutVideo').play(); this.style.display='none';"
                    class="inset-0 flex items-center justify-center transition duration-200 rounded-full lg:absolute hover:bg-black/70">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="#E94B4D"
                        stroke="#E94B4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-play-icon lucide-play">
                        <path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z" />
                    </svg> --}}
                </button>
            </div>
        </div>

        <div
            class="z-30 flex flex-col items-center gap-5 pt-5 lg:items-start lg:gap-10 lg:px-10 lg:flex lg:flex-col lg:w-full lg:pt-32 lg:relative">
            <div class="flex flex-row items-center gap-3 lg:gap-3 lg:flex lg:items-center">
                <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                    About Us
                </span>
            </div>
            <span class="text-center lg:text-left font-semibold text-[#112947] text-4xl lg:text-7xl z-50">
                Protecting every
                <br> heartbeat on the
                path to
                cancer
                recovery
            </span>
            <div
                class=" lg:absolute lg:w-[35rem] lg:h-[35rem] lg:rounded-full lg:border-4 lg:border-white overflow-hidden group z-50 flex lg:hidden">
                <video id="aboutVideo" class="object-cover lg:w-full lg:h-full lg:rounded-full" muted autoplay loop>
                    <source src="{{ asset('assets/running-man.mp4') }}" type="video/mp4" class="w-fit">
                </video>
                <button onclick="document.getElementById('aboutVideo').play(); this.style.display='none';"
                    class="inset-0 flex items-center justify-center transition duration-200 rounded-full lg:absolute hover:bg-black/70">
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="#E94B4D"
                        stroke="#E94B4D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-play-icon lucide-play">
                        <path d="M5 5a2 2 0 0 1 3.008-1.728l11.997 6.998a2 2 0 0 1 .003 3.458l-12 7A2 2 0 0 1 5 19z" />
                    </svg> --}}
                </button>
            </div>
            <span class="text-sm text-center text-gray-500  lg:text-xl lg:w-[40rem] lg:text-justify">
                ICOS-Pilipinas is the national chapter of the International Cardio-
                Oncology Society, focused on
                addressing the heart health of Filipino
                cancer patients. We advance cardio-oncology in the
                Philippines through
                research, education, collaboration, and advocacy.
            </span>
            <button
                class=" text-sm rounded-full lg:mt-12 lg:text-xl font-normal border-2 border-[#E94B4D] py-2 lg:py-3 px-[5rem] lg:px-10 text-black w-fit hover:cursor-pointer hover:bg-[#E94B4D] hover:text-white transition duration-300">
                Know More About Us
            </button>
            <img src="{{ asset('assets/med-tools.png') }}" alt=""
                class="absolute lg:-bottom-[7rem] hidden lg:flex right-[7rem]">
            <img src="{{ asset('assets/aboutus-arrow.png') }}" alt=""
                class="absolute bottom-[24rem] hidden lg:flex right-[12rem]">
            <img src="{{ asset('assets/aboutus-oval.png') }}" alt=""
                class="absolute top-0 right-0 hidden lg:flex">
        </div>
    </div>
</div>
