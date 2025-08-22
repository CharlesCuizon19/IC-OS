<div class="lg:bg-[#17509E] lg:py-10 flex justify-center transition-all duration-300">
    <div class="container fixed z-50 w-full mx-auto lg:static lg:flex lg:flex-col">
        <div class="lg:bg-[#17509E] lg:py-3 w-full"></div>
        <header x-data="{ open: false }"
            class="absolute z-50 flex justify-between w-full px-2 py-4 bg-white lg:container lg:absolute lg:px-8 lg:rounded-full">
            <div class="w-full lg:gap-10 lg:flex">
                <!-- Logo + Hamburger -->
                <div class="flex items-center justify-between w-full lg:w-auto">
                    <img src="{{ asset('assets/logo.png') }}" alt=""
                        class="w-[10rem] h-[4rem] lg:px-5 lg:w-fit lg:h-fit">

                    <!-- Hamburger Button -->
                    <button @click="open = !open" class="text-black focus:outline-none lg:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open }" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links -->
                <nav :class="{ 'block': open, 'hidden': !open }"
                    class="absolute z-40 items-center hidden w-full p-5 mt-0 text-lg font-medium text-black bg-white rounded-lg shadow gap-7 lg:static top-full lg:w-auto lg:bg-transparent lg:flex lg:p-0 lg:shadow-none lg:mt-0">

                    <a href="{{ url('/') }}"
                        class="block py-2 lg:py-0 {{ Route::is('homepage') ? 'text-[#E94B4D] font-bold' : '' }}">
                        Home
                    </a>

                    <!-- AboutUs Dropdown -->
                    <div x-data="{ dropdownOpen: false }" class="relative z-50 text-center text-nowrap"
                        @click.outside="dropdownOpen = false">
                        <button x-on:click="dropdownOpen = !dropdownOpen"
                            class="flex items-center gap-1 hover:text-[#E94B4D] {{ Route::is('about-company') ? 'text-[#E94B4D] font-bold' : '' }} {{ Route::is('about-bod') ? 'text-[#E94B4D] font-bold' : '' }}"
                            :aria-expanded="dropdownOpen" aria-haspopup="true" aria-label="Toggle About Us menu">
                            About Us
                            <svg class="w-4 h-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="dropdownOpen" x-transition
                            class="absolute left-0 p-3 mt-2 text-left bg-white border rounded-lg shadow-lg w-50 top-full lg:group-hover:block"
                            x-cloak role="menu">

                            <a href="/abouts/about-company"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('about-company') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>
                                About Company
                            </a>

                            <a href="/abouts/board-of-directors"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('about-bod') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>Board of Directors</a>
                        </div>
                    </div>

                    <!-- Certifications Dropdown -->
                    <div x-data="{ dropdownOpen: false }" class="relative z-40 text-center text-nowrap"
                        @click.outside="dropdownOpen = false">
                        <button x-on:click="dropdownOpen = !dropdownOpen"
                            class="flex items-center gap-1 hover:text-[#E94B4D] {{ Route::is('get-certified') ? 'text-[#E94B4D] font-bold' : '' }} {{ Route::is('why-getcert') ? 'text-[#E94B4D] font-bold' : '' }} {{ Route::is('certified-physicians') ? 'text-[#E94B4D] font-bold' : '' }}"
                            :aria-expanded="dropdownOpen" aria-haspopup="true" aria-label="Toggle Certifications menu">
                            Certifications
                            <svg class="w-4 h-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="dropdownOpen" x-transition
                            class="absolute left-0 p-3 mt-2 text-left bg-white border rounded-lg shadow-lg w-50 top-full lg:group-hover:block"
                            x-cloak role="menu">

                            <a href="/certificates/get-certified"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('get-certified') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>
                                Get Certificate
                            </a>

                            <a href="/certificates/why-getcertified"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('why-getcert') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>Why Get Certified</a>

                            <a href="/certificates/certified-physicians"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('certified-physicians') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>Certified Physicians</a>
                        </div>
                    </div>

                    <a href="/newsandevents"
                        class="block py-2 lg:py-0 hover:text-[#E94B4D] {{ Route::is('news-and-events') ? 'text-[#E94B4D] font-bold' : '' }}">News
                        & Events</a>

                    <a href="/resources"
                        class="block py-2 lg:py-0 hover:text-[#E94B4D] {{ Route::is('resources') ? 'text-[#E94B4D] font-bold' : '' }}">Resources</a>

                    <a href="/contactus"
                        class="block py-2 lg:py-0 hover:text-[#E94B4D] {{ Route::is('contact-us') ? 'text-[#E94B4D] font-bold' : '' }}">Contact
                        Us</a>

                    <!-- CTA Button (Mobile) -->
                    <div class="w-full pb-5 mt-4 lg:hidden">
                        <a href="#"
                            class="bg-[#E94B4D] hover:bg-[#c53b3d] text-white font-medium px-6 py-3 rounded-full text-sm">
                            Join IC-OS
                        </a>
                        <div>
                            <div class="absolute gap-5 flex flex-row lg:-top-8 lg:right-[3rem] lg:gap-2 mt-3">
                                <div class="transition-transform cursor-pointer hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                        viewBox="0 0 24 24" fill="black" stroke="none" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-facebook-icon lucide-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </div>
                                <div class="transition-transform cursor-pointer hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                        viewBox="0 0 24 24" fill="black" stroke="none" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-linkedin-icon lucide-linkedin">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect width="4" height="12" x="2" y="9" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </div>
                                <div class="transition-transform cursor-pointer hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                        viewBox="0 0 24 24" fill="transparent" stroke="black" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-instagram-icon lucide-instagram">
                                        <rect width="20" height="20" x="2" y="2" rx="5"
                                            ry="5" />
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Button (Desktop) -->
            <div class="items-center justify-center hidden lg:flex">
                <a href="#"
                    class="bg-[#E94B4D] hover:bg-[#c53b3d] text-nowrap text-white h-fit px-10 py-3 rounded-full text-xl shadow">
                    Join IC-OS
                </a>
            </div>

            <div>
                <div class="absolute flex flex-row lg:-top-6 lg:right-[3rem] lg:gap-2">
                    <div class="transition-transform cursor-pointer hover:scale-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 24 24"
                            fill="white" stroke="none" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </div>
                    <div class="transition-transform cursor-pointer hover:scale-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 24 24"
                            fill="white" stroke="none" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-linkedin-icon lucide-linkedin">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect width="4" height="12" x="2" y="9" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </div>
                    <div class="transition-transform cursor-pointer hover:scale-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 24 24"
                            fill="transparent" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                        </svg>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>

{{-- on-scroll --}}
<div class="hidden lg:flex">
    <div class="fixed top-0 z-50 hidden w-full" id="parent-div">
        <div class="lg:bg-[#17509E] lg:py-3 w-full"></div>
        <header x-data="{ open: false }"
            class="relative z-50 flex justify-between w-full px-2 py-4 bg-white shadow-md drop-shadow-md lg:px-8">
            <div class="w-full lg:gap-10 lg:flex">
                <!-- Logo + Hamburger -->
                <div class="flex items-center justify-between w-full lg:w-auto">
                    <img src="{{ asset('assets/logo.png') }}" alt=""
                        class="w-[10rem] h-[4rem] lg:px-5 lg:w-fit lg:h-fit">

                    <!-- Hamburger Button -->
                    <button @click="open = !open" class="text-black focus:outline-none lg:hidden">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path :class="{ 'hidden': open }" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{ 'hidden': !open }" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Navigation Links -->
                <nav :class="{ 'block': open, 'hidden': !open }"
                    class="absolute z-40 items-center hidden w-full p-5 mt-0 text-lg font-medium text-black bg-white rounded-lg shadow gap-7 lg:static top-full lg:w-auto lg:bg-transparent lg:flex lg:p-0 lg:shadow-none lg:mt-0">

                    <a href="{{ url('/') }}"
                        class="block py-2 lg:py-0 {{ Route::is('homepage') ? 'text-[#E94B4D] font-bold' : '' }}">
                        Home
                    </a>

                    <!-- AboutUs Dropdown -->
                    <div x-data="{ dropdownOpen: false }" class="relative z-50 text-center text-nowrap"
                        @click.outside="dropdownOpen = false">
                        <button x-on:click="dropdownOpen = !dropdownOpen"
                            class="flex items-center gap-1 hover:text-[#E94B4D] {{ Route::is('about-company') ? 'text-[#E94B4D] font-bold' : '' }} {{ Route::is('about-bod') ? 'text-[#E94B4D] font-bold' : '' }}"
                            :aria-expanded="dropdownOpen" aria-haspopup="true" aria-label="Toggle About Us menu">
                            About Us
                            <svg class="w-4 h-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="dropdownOpen" x-transition
                            class="absolute left-0 p-3 mt-2 text-left bg-white border rounded-lg shadow-lg w-50 top-full lg:group-hover:block"
                            x-cloak role="menu">

                            <a href="/abouts/about-company"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('about-company') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>
                                About Company
                            </a>

                            <a href="/abouts/board-of-directors"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('about-bod') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>Board of Directors</a>
                        </div>
                    </div>

                    <!-- Certifications Dropdown -->
                    <div x-data="{ dropdownOpen: false }" class="relative z-40 text-center text-nowrap"
                        @click.outside="dropdownOpen = false">
                        <button x-on:click="dropdownOpen = !dropdownOpen"
                            class="flex items-center gap-1 hover:text-[#E94B4D] {{ Route::is('get-certified') ? 'text-[#E94B4D] font-bold' : '' }} {{ Route::is('why-getcert') ? 'text-[#E94B4D] font-bold' : '' }} {{ Route::is('certified-physicians') ? 'text-[#E94B4D] font-bold' : '' }}"
                            :aria-expanded="dropdownOpen" aria-haspopup="true"
                            aria-label="Toggle Certifications menu">
                            Certifications
                            <svg class="w-4 h-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="dropdownOpen" x-transition
                            class="absolute left-0 p-3 mt-2 text-left bg-white border rounded-lg shadow-lg w-50 top-full lg:group-hover:block"
                            x-cloak role="menu">

                            <a href="/certificates/get-certified"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('get-certified') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>
                                Get Certificate
                            </a>

                            <a href="/certificates/why-getcertified"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('why-getcert') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>Why Get Certified</a>

                            <a href="/certificates/certified-physicians"
                                class="block px-3 py-1 rounded hover:bg-[#E94B4D]/20 focus:bg-gray-100 focus:outline-none {{ Route::is('certified-physicians') ? 'text-[#E94B4D] font-bold' : '' }}"
                                role="menuitem" @click.stop>Certified Physicians</a>
                        </div>
                    </div>

                    <a href="/newsandevents"
                        class="block py-2 lg:py-0 hover:text-[#E94B4D] {{ Route::is('news-and-events') ? 'text-[#E94B4D] font-bold' : '' }}">News
                        & Events</a>

                    <a href="/resources"
                        class="block py-2 lg:py-0 hover:text-[#E94B4D] {{ Route::is('resources') ? 'text-[#E94B4D] font-bold' : '' }}">Resources</a>

                    <a href="/contactus"
                        class="block py-2 lg:py-0 hover:text-[#E94B4D] {{ Route::is('contact-us') ? 'text-[#E94B4D] font-bold' : '' }}">Contact
                        Us</a>

                    <!-- CTA Button (Mobile) -->
                    <div class="w-full pb-5 mt-4 lg:hidden">
                        <a href="#"
                            class="bg-[#E94B4D] hover:bg-[#c53b3d] text-white font-medium px-6 py-3 rounded-full text-sm">
                            Join IC-OS
                        </a>
                        <div>
                            <div class="absolute gap-5 flex flex-row lg:-top-8 lg:right-[3rem] lg:gap-2 mt-3">
                                <div class="transition-transform cursor-pointer hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                        viewBox="0 0 24 24" fill="black" stroke="none" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-facebook-icon lucide-facebook">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </div>
                                <div class="transition-transform cursor-pointer hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                        viewBox="0 0 24 24" fill="black" stroke="none" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-linkedin-icon lucide-linkedin">
                                        <path
                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect width="4" height="12" x="2" y="9" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </div>
                                <div class="transition-transform cursor-pointer hover:scale-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="24"
                                        viewBox="0 0 24 24" fill="transparent" stroke="black" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-instagram-icon lucide-instagram">
                                        <rect width="20" height="20" x="2" y="2" rx="5"
                                            ry="5" />
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Button (Desktop) -->
            <div class="items-center justify-center hidden lg:flex">
                <a href="#"
                    class="bg-[#E94B4D] hover:bg-[#c53b3d] text-nowrap text-white h-fit px-10 py-3 rounded-full text-xl shadow">
                    Join IC-OS
                </a>
            </div>

            <div id="div-socmed">
                <div class="absolute flex flex-row lg:-top-6 lg:right-[3rem] lg:gap-2">
                    <div class="transition-transform cursor-pointer hover:scale-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 24 24"
                            fill="white" stroke="none" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-facebook-icon lucide-facebook">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                        </svg>
                    </div>
                    <div class="transition-transform cursor-pointer hover:scale-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 24 24"
                            fill="white" stroke="none" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-linkedin-icon lucide-linkedin">
                            <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                            <rect width="4" height="12" x="2" y="9" />
                            <circle cx="4" cy="4" r="2" />
                        </svg>
                    </div>
                    <div class="transition-transform cursor-pointer hover:scale-150">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="24" viewBox="0 0 24 24"
                            fill="transparent" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-instagram-icon lucide-instagram">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                        </svg>
                    </div>
                </div>
            </div>
        </header>
    </div>
</div>
<style>
    /* Animation for slide down */
    @keyframes slideDown {
        from {
            transform: translateY(-100%);
            opacity: 0;
        }

        to {
            transform: translateY(0);
            opacity: 1;
        }
    }

    .animate-slide-down {
        animation: slideDown 0.3s ease-out;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const parentDiv = document.getElementById('parent-div');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                parentDiv.classList.remove(
                    'hidden'
                );
                parentDiv.classList.add('animate-slide-down');
            } else {
                parentDiv.classList.add(
                    'hidden'
                );
                parentDiv.classList.remove('animate-slide-down');
            }
        });
    });
</script>
