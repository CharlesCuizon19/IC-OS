@props(['blogs_footer'])

<div class="lg:flex lg:flex-col">
    <div class="flex flex-col lg:h-fit lg:bg-transparent bg-[#17509E]">
        <div class="lg:relative py-14 lg:py-0 mx-6 lg:mx-0 lg:h-[27rem]">
            <img src="{{ asset('assets/footer.png') }}" alt=""
                class="hidden h-full lg:flex lg:absolute lg:inset-0">
            <div class="lg:absolute flex flex-col gap-10 w-full lg:flex lg:flex-row lg:gap-[5rem] lg:px-20 lg:py-14">
                <div class="flex flex-col items-center gap-6 text-center lg:text-left lg:items-start lg:justify-start">
                    <img src="{{ asset('assets/footer-logo.png') }}" alt="" class=" lg:w-[10rem] w-[10rem]">
                    <p class="text-sm text-white lg:w-[14rem] text-justify">
                        The International Cardio-Oncology Society Philippines Center is dedicated to advancing heart
                        health
                        in
                        cancer care through education, research, and collaboration.
                    </p>
                </div>
                <div class="w-full lg:w-auto">
                    <div class="flex flex-col gap-3 text-center ">
                        <span class="text-xl font-bold text-white">
                            Useful Links
                        </span>
                        <div class="flex flex-col justify-between gap-3 text-sm">
                            <div class="flex items-center justify-between gap-2 text-center">
                                <img src="{{ asset('assets/logo-white.png') }}" alt="aboutus-icon" class="w-5 h-4">
                                <a href="/" class="w-full px-3 py-2 text-gray-200 rounded-full bg-white/10 ">
                                    Home
                                </a>
                            </div>
                            <div class="flex items-center justify-between h-full gap-2 text-center">
                                <img src="{{ asset('assets/logo-white.png') }}" alt="aboutus-icon" class="w-5 h-4">
                                <a href="/abouts/about-company"
                                    class="w-full px-3 py-2 text-gray-200 rounded-full bg-white/10 ">
                                    About Us
                                </a>
                            </div>
                            <div class="flex items-center justify-between h-full gap-2 text-center">
                                <img src="{{ asset('assets/logo-white.png') }}" alt="aboutus-icon" class="w-5 h-4">
                                <a href="/certificates/get-certified"
                                    class="w-full px-3 py-2 text-gray-200 rounded-full bg-white/10 ">
                                    Certifications
                                </a>
                            </div>
                            <div class="flex items-center justify-between h-full gap-2 text-center">
                                <img src="{{ asset('assets/logo-white.png') }}" alt="aboutus-icon" class="w-5 h-4">
                                <a href="/newsandevents"
                                    class="w-full px-3 py-2 text-gray-200 rounded-full bg-white/10 ">
                                    News & Events
                                </a>
                            </div>
                            <div class="flex items-center justify-between h-full gap-2 text-center">
                                <img src="{{ asset('assets/logo-white.png') }}" alt="aboutus-icon" class="w-5 h-4">
                                <a href="/resources" class="w-full px-3 py-2 text-gray-200 rounded-full bg-white/10 ">
                                    Resources
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col gap-3 w-auto lg:w-[20rem] text-center">
                    <span class="text-xl font-bold text-white">Events</span>
                    @foreach ($blogs_footer as $blog)
                        <a href="{{ route('events.show', ['id' => $blog->id, 'slug' => Str::slug($blog->slug)]) }}">
                            <div class="flex items-center gap-5 pb-2 border-b">
                                <img src="{{ asset('assets/footer-calendar-icon.png') }}" alt=""
                                    class="w-[3rem]">
                                <div class="flex flex-col text-white ">
                                    <span class="text-sm text-justify">{{ $blog->title }}</span>
                                    <div class="flex justify-between gap-10 text-sm text-white opacity-55">
                                        <span>{{ \Carbon\Carbon::parse($blog->date_issued)->format('M d, Y') }}</span>
                                        <span>{{ $blog->categories->description }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach

                </div>
                <div class="flex flex-col gap-8 text-center lg:text-left">
                    <span class="text-xl font-bold text-white">
                        Newsletter
                    </span>
                    <span class="text-sm text-white lg:w-[15rem]">
                        Stay informed with our latest news, events, and expert insights. Subscribe to the newsletter.
                    </span>
                    <div
                        class="flex items-center overflow-hidden bg-white rounded-full shadow-lg lg:w-full lg:max-w-lg">
                        <input type="absolute email" placeholder="Enter Email Address..."
                            class="flex-grow px-8 py-5 text-sm text-gray-700 border-none rounded-l-full focus:outline-none" />
                        <button
                            class="relative px-6 py-3 mr-2 text-sm font-semibold text-white transition duration-300 bg-red-500 rounded-full hover:bg-red-600">
                            Submit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-[#E94B4D] lg:h-[7rem] lg:rounded-l-full lg:ml-[8rem] py-5 ">
        <div
            class="lg:flex lg:flex-row flex flex-col gap-10 items-center justify-between w-auto lg:w-full h-full lg:px-[10rem] text-center text-white text-sm">
            <span>
                Copyright International Cardio-Ocnology Society Philippines Chapter 2025, Designed and Developed by
                <a href="https://rwebsolutions.com.ph/" class="hover:text-gray-600">
                    R Web Solutions
                </a>
            </span>
            <div>
                <a href="#" class="hover:text-gray-600">Terms and Conditions</a> |
                <a href="https://ic-os.org/privacy-note/" class="hover:text-gray-600">
                    Privacy Policy
                </a>
            </div>
        </div>
    </div>
</div>
