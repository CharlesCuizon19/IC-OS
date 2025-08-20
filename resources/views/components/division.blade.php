<div
    class="relative overflow-hidden flex items-center justify-center w-full bg-center bg-cover  bg-[#17509E] lg:bg-transparent lg:rounded-full py-10 lg:my-14 lg:gap-24">
    <img src="{{ asset('assets/division-bg.png') }}" alt="" class="hidden w-full lg:flex">
    <div class="  w-full lg:flex lg:flex-row lg:gap-10 lg:px-[5rem] lg:absolute flex flex-col gap-5">
        <div class="flex flex-col items-center justify-center w-full gap-5 lg:justify-start lg:items-start">
            <div class="text-4xl font-semibold">
                <span class="text-white">Global</span> <span class="text-[#E94B4D]">Pledge</span>
            </div>
            <span class="lg:w-[22rem] text-sm text-white text-center lg:text-left">We have over 1,000 members from 30+
                countries
                and continue to
                grow
                worldwide.
            </span>
            <div>
                <a href="https://ic-os.org/"
                    class="text-[#E94B4D] text-sm bg-white rounded-full py-2 px-[5rem] lg:py-4 lg:absolute lg:-bottom-[2rem] lg:-left-[3rem] lg:pr-[6rem] lg:pl-[8rem] hover:bg-[#E94B4D] hover:text-white lg:hover:bg-white lg:hover:text-[#E94B4D] transition duration-300">
                    Explore Chapters
                </a>
            </div>
        </div>
        {{-- desktop view --}}
        <div class="hidden lg:flex">
            <div class="flex flex-col items-center justify-center w-full gap-5 lg:flex lg:flex-row lg:gap-14">
                <div
                    class="flex  items-center justify-between w-1/2  px-[5rem] lg:gap-8 lg:bg-white lg:rounded-full lg:py-6 lg:pl-8 lg:flex-row lg:pr-28">
                    <div class="lg:bg-[#17509E] bg-white rounded-full flex items-center p-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-users-round-icon lucide-users-round w-[35px] stroke-[#17509E] lg:stroke-white">
                            <path d="M18 21a8 8 0 0 0-16 0" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                        </svg>
                    </div>
                    <div class="flex justify-center text-center ">
                        <div class="flex flex-col">
                            <span class="text-5xl lg:text-4xl text-[#E94B4D]">1000+</span>
                            <span class="text-xl text-white lg:text-2xl lg:text-black">Members</span>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-row gap-5 items-center justify-between w-1/2 px-[5rem] lg:gap-8 lg:bg-white lg:rounded-full lg:py-6 lg:pl-8 lg:flex-row lg:pr-28">
                    <div class="lg:bg-[#17509E] bg-white rounded-full flex items-center p-4 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-flag-icon lucide-flag w-[35px] stroke-[#17509E] lg:stroke-white ">
                            <path
                                d="M4 22V4a1 1 0 0 1 .4-.8A6 6 0 0 1 8 2c3 0 5 2 7.333 2q2 0 3.067-.8A1 1 0 0 1 20 4v10a1 1 0 0 1-.4.8A6 6 0 0 1 16 16c-3 0-5-2-8-2a6 6 0 0 0-4 1.528" />
                        </svg>
                    </div>
                    <div class="flex justify-center w-full text-center">
                        <div class="flex flex-col ">
                            <span class="text-5xl lg:text-4xl text-[#E94B4D]">30+</span>
                            <span class="text-xl text-white lg:text-2xl lg:text-black">Countries</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- mobile view --}}
        <div class="flex lg:hidden">
            <div class="flex flex-row items-center justify-center w-full gap-5 lg:flex lg:flex-row lg:gap-14">
                <div class="flex flex-col gap-5">
                    <div class="lg:bg-[#17509E] bg-white rounded-full flex items-center p-4 ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-users-round-icon lucide-users-round w-[35px] stroke-[#17509E] lg:stroke-white">
                            <path d="M18 21a8 8 0 0 0-16 0" />
                            <circle cx="10" cy="8" r="5" />
                            <path d="M22 20c0-3.37-2-6.5-4-8a5 5 0 0 0-.45-8.3" />
                        </svg>
                    </div>
                    <div class="lg:bg-[#17509E] bg-white rounded-full flex items-center p-4 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="white"
                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-flag-icon lucide-flag w-[35px] stroke-[#17509E] lg:stroke-white ">
                            <path
                                d="M4 22V4a1 1 0 0 1 .4-.8A6 6 0 0 1 8 2c3 0 5 2 7.333 2q2 0 3.067-.8A1 1 0 0 1 20 4v10a1 1 0 0 1-.4.8A6 6 0 0 1 16 16c-3 0-5-2-8-2a6 6 0 0 0-4 1.528" />
                        </svg>
                    </div>
                </div>
                <div class="flex flex-col gap-5">
                    <div
                        class="flex items-center justify-center lg:gap-8 lg:bg-white lg:rounded-full lg:py-6 lg:pl-8 lg:flex-row lg:pr-28">
                        <div class="flex justify-center text-center">
                            <div class="flex flex-col">
                                <span class="text-5xl lg:text-6xl text-[#E94B4D]">1000+</span>
                                <span class="text-xl text-white lg:text-3xl lg:text-black">Members</span>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-row items-center justify-center gap-5 lg:gap-8 lg:bg-white lg:rounded-full lg:py-6 lg:pl-8 lg:flex-row lg:pr-28">
                        <div class="flex justify-center text-center">
                            <div class="flex flex-col ">
                                <span class="text-5xl lg:text-6xl text-[#E94B4D]">30+</span>
                                <span class="text-xl text-white lg:text-3xl lg:text-black">Countries</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
