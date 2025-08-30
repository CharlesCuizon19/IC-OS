{{-- <div class="mb-8 mt-[5rem] lg:mt-0">
    <div class="w-full h-full lg:relative">

        <!-- Swiper -->
        <div class="inset-0 lg:absolute">
            <div class="swiper mySwiper lg:h-auto lg:w-[100%] border border-black">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/banner.png') }}" alt="banner" class="object-cover w-full h-full">
                    </div>
                    <!-- Slide 2 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/banner2.jpg') }}" alt="banner2" class="w-full h-full">
                    </div>
                    <!-- Slide 3 -->
                    <div class="swiper-slide">
                        <img src="{{ asset('assets/banner3.png') }}" alt="banner3" class="w-full h-full">
                    </div>
                </div>
            </div>
        </div>

        <!-- Overlay container -->
        <div
            class="container z-30 flex flex-col items-center justify-center gap-0 mx-auto mt-2 text-center lg:relative lg:text-left lg:mt-0 lg:items-start">
            <div
                class="flex items-center gap-2 bg-[#E94B4D]/10 text-[rgb(233,75,77)] px-4 py-2 rounded-full w-fit  lg:mt-[10rem]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 2a6 6 0 00-6 6c0 4.5 6 10 6 10s6-5.5 6-10a6 6 0 00-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"
                        clip-rule="evenodd" />
                </svg>
                <span class="text-xs font-normal">465 Lucerne Ave Tampa, FL 33606</span>
            </div>
            <div
                class="flex flex-col items-center w-full gap-5 mb-10 text-5xl font-bold lg:items-start lg:text-left lg:text-8xl">
                <div>
                    <span class="text-[#112947]">
                        Treat Cancer.
                        <br>
                        Protect
                    </span>
                    <span class="text-[#E94B4D]">Hearts.</span>
                </div>
                <p class="text-sm font-normal text-black lg:text-xl lg:w-[40rem]">
                    The International Cardio-Oncology Society is a committed group of professionals throughout the world
                    who are striving to protect the cardiovascular health of all patients who are undergoing cancer
                    therapy.
                </p>
                <button
                    class="rounded-full text-sm lg:text-xl font-normal border-2 border-[#E94B4D] py-2 lg:py-3 px-[5rem] lg:px-10 text-black w-fit hover:cursor-pointer hover:text-white hover:bg-[#E94B4D] transition duration-300">
                    Get Ready
                </button>
            </div>
            <div class="items-center justify-center hidden w-full lg:flex lg:relative lg:bg-transparent">
                <x-division />
            </div>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper(".mySwiper", {
        loop: true,
        autoplay: {
            delay: 3000, // 3 seconds
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script> --}}

<div class="mb-8 mt-[5rem] lg:mt-0">
    <div class="lg:relative">
        @foreach ($banners as $banner)
            <img src="{{ asset('assets/banner.png') }}" alt="banner" class="lg:h-auto lg:w-[100%] lg:absolute">
        @endforeach

        <!-- Overlay container -->
        <div
            class="container relative flex flex-col items-center justify-center gap-0 mx-auto mt-2 text-center lg:text-left lg:mt-0 lg:items-start">
            <div
                class="flex items-center gap-2 bg-[#E94B4D]/10 text-[rgb(233,75,77)] px-4 py-2 rounded-full w-fit lg:mt-[10rem]">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 2a6 6 0 00-6 6c0 4.5 6 10 6 10s6-5.5 6-10a6 6 0 00-6-6zm0 8a2 2 0 110-4 2 2 0 010 4z"
                        clip-rule="evenodd" />
                </svg> <span class="text-xs font-normal">465 Lucerne Ave Tampa, FL 33606</span>
            </div>
            <div
                class="flex flex-col items-center w-full gap-5 mb-10 text-5xl font-bold lg:items-start lg:text-left lg:text-8xl">
                <div> <span class="text-[#112947]"> Treat Cancer. <br> Protect </span> <span
                        class="text-[#E94B4D]">Hearts.</span> </div>
                <p class="text-sm font-normal text-black lg:text-xl lg:w-[40rem]"> The International Cardio-Oncology
                    Society is a committed group of professionals throughout the world who are striving to protect the
                    cardiovascular health of all patients who are undergoing cancer therapy. </p> <button
                    class="rounded-full text-sm lg:text-xl font-normal border-2 border-[#E94B4D] py-2 lg:py-3 px-[5rem] lg:px-10 text-black w-fit hover:cursor-pointer hover:text-white hover:bg-[#E94B4D] transition duration-300">
                    Get Ready </button>
            </div> {{-- desktop view --}} <div
                class="items-center justify-center hidden w-full lg:flex lg:relative lg:bg-transparent"> <x-division />
            </div>
        </div>
    </div>
</div>
