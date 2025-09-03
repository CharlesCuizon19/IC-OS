@extends('layouts.app')

@section('title', 'Home | ICOS')

@section('content')
    @php
        $carouselItems = [
            (object) [
                'image' => 'assets/p1.png',
                'text' => 'We lead through learning, offering weekly webinars for ongoing education.',
            ],
            (object) [
                'image' => 'assets/p2.png',
                'text' => 'We lead through learning, offering weekly webinars for ongoing education.',
            ],
            (object) [
                'image' => 'assets/p3.png',
                'text' => 'We lead through learning, offering weekly webinars for ongoing education.',
            ],
        ];
        // Double the carousel items for infinite swipe
        $carouselItems = array_merge($carouselItems, $carouselItems);
    @endphp

    <div class="overflow-x-hidden">
        <div class="flex flex-col">
            <!-- Banner Section -->
            <div class="mb-8 mt-[5rem] lg:mt-0">
                <div class="w-full h-full lg:relative">
                    <!-- Swiper -->
                    <div class="inset-0 lg:h-fit lg:absolute">
                        <div class="swiper bannerSwiper bg-cover !p-0 lg:h-auto lg:w-[100%]">
                            <div class="swiper-wrapper">
                                @foreach ($banners as $banner)
                                    <div class="swiper-slide">
                                        <img src="{{ asset($banner->images->files->image_path) }}" alt="banner"
                                            class="object-cover w-full h-full">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Overlay container -->
                    <div
                        class="container z-30 flex flex-col items-center justify-center gap-0 mx-auto mt-2 text-center lg:relative lg:text-left lg:mt-0 lg:items-start">
                        <div
                            class="flex items-center gap-2 bg-[#E94B4D]/10 text-[#E94B4D] px-4 py-2 rounded-full w-fit lg:mt-[10rem]">
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
                                The International Cardio-Oncology Society is a committed group of professionals
                                throughout the world who are striving to protect the cardiovascular health of all patients
                                who are undergoing cancer therapy.
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

            <!-- Mobile View Divider -->
            <div class="flex items-center justify-center lg:hidden">
                <x-division />
            </div>

            <!-- About Us Section -->
            <div>
                @include('partials.aboutus')
            </div>

            <!-- Project Details Section -->
            <div class="bg-[#17509E]/10 h-full py-12">
                <div class="flex flex-row items-center justify-center gap-3 lg:gap-5">
                    <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 lg:w-12 lg:h-10 w-7">
                    <span class="font-semibold text-4xl lg:text-7xl text-[#112947]">Project Details</span>
                </div>
                <div class="flex flex-col gap-10 swiper projectSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($carouselItems as $index => $item)
                            <a href="{{ route('news-and-events') }}"
                                class="relative flex flex-wrap my-10 swiper-slide group">
                                <img src="{{ asset($item->image) }}"
                                    class="flex object-cover transition-opacity duration-700 ease-in-out scale-x-[1.0] lg:rounded-full lg:w-full lg:h-full" />

                                <!-- Overlay -->
                                <div
                                    class="absolute flex flex-col items-center justify-center w-full h-full gap-2 px-6 py-2 transition-opacity duration-500 opacity-0 group-hover:opacity-100">
                                    <div
                                        class="absolute inset-0.5 lg:rounded-full bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.5),transparent)] transition-opacity duration-300">
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="flex flex-col items-center justify-center transition-opacity duration-300 lg:group-hover:opacity-100 w-fit h-fit">
                                            <div
                                                class="z-10 flex items-center justify-center p-2 bg-[#E94B4D] border rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    viewBox="0 0 24 24" fill="#E94B4D" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M7 7h10v10" />
                                                    <path d="M7 17 17 7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Events Box -->
                                <div
                                    class="events-box lg:gap-10 lg:justify-center lg:absolute items-center gap-2 px-2 w-full text-center justify-center lg:w-[25rem] py-5 bg-white lg:rounded-full bottom-[0rem] flex transition-opacity duration-300 opacity-0 active-slide:opacity-100">
                                    <div>
                                        <img src="{{ asset('assets/calendar-icon.png') }}" alt="calendar-icon"
                                            class="lg:w-[3rem] lg:h-[3rem] lg:flex hidden">
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div class="text-center bg-[#17509E] text-white rounded-full p-2">Events</div>
                                        <div class="lg:w-[14rem]">
                                            <p class="text-xs text-black">{{ $item->text }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-center gap-3 mt-10 swiper-pagination"></div>
                </div>
            </div>

            <!-- Partners Section -->
            <x-partners />

            <!-- News Section -->
            <div class="container mx-auto lg:my-[8rem]">
                <div class="flex flex-col items-center justify-center gap-5 mx-3 py-7 lg:gap-10 lg:py-0 lg:mb-10">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                        <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                            News & Updates
                        </span>
                    </div>
                    <div class="text-sm lg:w-[43rem] text-center text-gray-600">
                        Stay informed with the latest from our organization-including expert articales, event hightlights,
                        research
                        developments, and stories from our growing network. Explore how we're advancing care, buidling
                        partnerships, and
                        making difference in the community.
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-5 py-10 mx-3 lg:grid-cols-3 w-fit">
                    @foreach ($events as $event)
                        <a href="{{ route('events.show', ['id' => $event->id, 'slug' => Str::slug($event->slug)]) }}"
                            class="flex flex-col transition duration-300 cursor-pointer group rounded-2xl">
                            <div
                                class=" flex flex-col items-center lg:items-start px-10 py-10 lg:px-10 lg:py-10 lg:h-full gap-4 border border-[#17509E]/50 rounded-[2rem] lg:rounded-[5rem] bg-[#17509E]/10 lg:hover:cursor-pointer lg:hover:bg-[#17509E]/50 lg:transition lg:duration-300 lg:transform lg:hover:scale-105">
                                <div class="w-auto lg:h-full">
                                    <div class="flex flex-col items-center justify-center gap-5">
                                        <div class="relative w-auto h-full">
                                            <div>
                                                <img src="{{ asset($event->images->files->image_path) }}" alt=""
                                                    class="w-auto lg:w-auto lg:h-[25rem] object-cover rounded-[55px]">
                                            </div>
                                            {{-- desktop view --}}
                                            <div
                                                class=" absolute hidden lg:flex py-2 px-5 lg:py-3 items-center lg:px-6 lg:bottom-7 lg:right-[310px] bg-[#17509E] rounded-full">
                                                <div class="flex flex-col text-center">
                                                    <p class="text-xl font-semibold text-white">
                                                        {{ \Carbon\Carbon::parse($event->date_issued)->format('d ') }}
                                                    </p>
                                                    <p class="text-xs text-white">
                                                        {{ \Carbon\Carbon::parse($event->date_issued)->format('M') }}
                                                    </p>
                                                </div>
                                            </div>
                                            {{-- mobile view --}}
                                            <div
                                                class=" absolute lg:hidden flex bottom-5 left-[1rem] py-4 px-7 lg:py-3 items-center lg:px-6 lg:bottom-11 lg:right-[19rem] bg-[#17509E] rounded-full">
                                                <div class="flex flex-col">
                                                    <p class="text-xl font-semibold text-white">
                                                        {{ \Carbon\Carbon::parse($event->date_issued)->format('d ') }}
                                                    </p>
                                                    <p class="text-xs text-white">
                                                        {{ \Carbon\Carbon::parse($event->date_issued)->format('M') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="lg:w-full text-xl text-center lg:text-2xl lg:text-left text-[#112947] font-semibold">
                                            <p>
                                                {{ $event->title }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="w-full lg:w-full">
                                    <div class="flex lg:justify-start">
                                        <button class="flex items-center overflow-hidden rounded-full ">
                                            <!-- Left circle with icon -->
                                            <div
                                                class="z-10 flex items-center justify-center p-2 bg-white border rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                    viewBox="0 0 24 24" fill="none" stroke="black" stroke-width="1"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-up-right">
                                                    <path d="M7 7h10v10" />
                                                    <path d="M7 17L17 7" />
                                                </svg>
                                            </div>

                                            <div
                                                class="absolute py-2 pr-4 text-sm font-medium text-white bg-red-700 rounded-full pl-14">
                                                <p>
                                                    Learn More
                                                </p>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Swiper styles */
        .swiper-slide img {
            object-fit: cover;
        }

        .swiper-pagination-bullet {
            background: #17509E;
            opacity: 0.3;
            width: 56px;
            height: 10px;
            border-radius: 9999px;
        }

        .swiper-pagination-bullet-active {
            background: #17509E;
            opacity: 1;
        }

        .logos {
            padding: 60px 0;
        }

        .logos-slide img {
            margin: 0 20px;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 640px) {
            .logos-slide img {
                width: 80px;
            }
        }

        @media (min-width: 641px) and (max-width: 1024px) {
            .logos-slide img {
                width: 100px;
            }
        }

        @media (min-width: 1025px) {
            .logos-slide img {
                width: 150px;
            }
        }

        .image-container {
            position: relative;
            display: inline-block;
        }

        .image-container img {
            border-radius: 50px;
        }

        .image-container::after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 50%;
            height: 50%;
            background: radial-gradient(circle at top right, rgba(255, 0, 0, 0.7), transparent);
            border-radius: 50px;
            pointer-events: none;
            z-index: 1;
        }
    </style>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        // Banner Swiper
        var bannerSwiper = new Swiper(".bannerSwiper", {
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });

        // Project Swiper
        function updateActiveSlideEventsBox(swiper) {
            const slides = swiper.slides;
            const activeIndex = swiper.realIndex;
            slides.forEach((slide, index) => {
                const eventsBox = slide.querySelector('.events-box');
                if (eventsBox) {
                    eventsBox.classList.toggle('opacity-100', index === swiper.activeIndex);
                    eventsBox.classList.toggle('opacity-0', index !== swiper.activeIndex);
                }
            });
        }

        const totalSlides = 3;

        var projectSwiper = new Swiper('.projectSwiper', {
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 3,
            spaceBetween: 80,
            loop: true,
            loopedSlides: totalSlides,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function(index, className) {
                    if (index < totalSlides) {
                        return `<span class="${className}" data-index="${index}"></span>`;
                    }
                    return '';
                }
            },
            on: {
                init: function() {
                    updateActiveSlideEventsBox(this);
                    this.pagination.bullets[0].classList.add('swiper-pagination-bullet-active');
                },
                slideChange: function() {
                    const realIndex = this.realIndex % totalSlides;
                    this.pagination.bullets.forEach((bullet, i) => {
                        bullet.classList.toggle('swiper-pagination-bullet-active', i === realIndex);
                    });
                    updateActiveSlideEventsBox(this);
                }
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                640: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 50
                },
                1440: {
                    slidesPerView: 2,
                    spaceBetween: 80
                }
            }
        });
    </script>
@endsection
