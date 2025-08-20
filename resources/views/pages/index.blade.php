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

    @php
        $insurancePartners = [
            ['img' => 'assets/partner1.png', 'alt' => 'Maxicare'],
            ['img' => 'assets/partner2.png', 'alt' => 'Maxicare'],
            ['img' => 'assets/partner3.png', 'alt' => 'Maxicare'],
            ['img' => 'assets/partner4.png', 'alt' => 'Maxicare'],
            ['img' => 'assets/partner5.png', 'alt' => 'Maxicare'],
        ];
        $repeatTimes = 4; // number of times to duplicate the slides
    @endphp

    <div class="overflow-x-hidden">
        <div class="flex flex-col">
            <div>
                @include('partials.banner')
            </div>

            {{-- mobile view --}}
            <div class="flex items-center justify-center lg:hidden">
                <x-division />
            </div>

            <div>
                @include('partials.aboutus')
            </div>
            <div class="bg-[#17509E]/10 h-full py-12">
                <div class="flex flex-row items-center justify-center gap-3 lg:gap-5 lg:flex">
                    <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 lg:w-12 lg:h-10 w-7">
                    <span class="font-semibold text-4xl lg:text-7xl text-[#112947]">Project Details</span>
                </div>
                <div class="flex flex-col gap-10 swiper swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($carouselItems as $index => $item)
                            <div class="relative flex flex-wrap my-10 swiper-slide group">
                                <img src="{{ asset($item->image) }}"
                                    class="flex object-cover transition-opacity duration-700 ease-in-out scale-x-[1.04] lg:rounded-full lg:w-full lg:h-full" />

                                <!-- Overlay -->
                                <div
                                    class="absolute flex flex-col items-center justify-center w-full h-full gap-2 px-6 py-2 transition-opacity duration-500 opacity-0 group-hover:opacity-100">
                                    <div
                                        class=" absolute lg:hover:bg-white/30 inset-0.5 lg:rounded-full lg:hover:bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.5),transparent)] transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="flex flex-col items-center justify-center transition-opacity duration-300 opacity-0 lg:group-hover:opacity-100 w-fit h-fit">
                                            <div
                                                class="z-10 flex items-center justify-center p-2 bg-[#E94B4D] border rounded-full">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                    viewBox="0 0 24 24" fill="#E94B4D" stroke="white" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-arrow-up-right-icon lucide-arrow-up-right">
                                                    <path d="M7 7h10v10" />
                                                    <path d="M7 17 17 7" />
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Events Box -->
                                <div
                                    class="events-box lg:absolute items-center gap-2 px-2 w-auto lg:w-[25rem] py-5 bg-white lg:rounded-full bottom-[0rem] flex opacity-0 transition-opacity duration-300">
                                    <div class="">
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
                            </div>
                        @endforeach
                    </div>
                    <div class="flex items-center justify-center gap-3 mt-10 swiper-pagination lg:full">
                    </div>
                </div>
            </div>
            <x-partners />
            <div>
                @include('partials.news')
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

        .swiper-slide img {
            margin: 0 20px;
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        @media (max-width: 640px) {

            /* small screens */
            .logos-slide img {
                width: 80px;
            }
        }

        @media (min-width: 641px) and (max-width: 1024px) {

            /* tablets */
            .logos-slide img {
                width: 100px;
            }
        }

        @media (min-width: 1025px) {

            /* large screens */
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
            -webkit-border-radius: 50px;
            -moz-border-radius: 50px;
            -ms-border-radius: 50px;
            -o-border-radius: 50px;
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
        function updateActiveSlideEventsBox(swiper) {
            const slides = swiper.slides;
            const activeSlide = slides[swiper.activeIndex]; // Get the visually active slide
            slides.forEach((slide) => {
                const eventsBox = slide.querySelector('.events-box');
                if (eventsBox) {
                    if (slide === activeSlide) {
                        eventsBox.classList.add('opacity-100');
                        eventsBox.classList.remove('opacity-0');
                    } else {
                        eventsBox.classList.add('opacity-0');
                        eventsBox.classList.remove('opacity-100');
                    }
                }
            });
        }

        const totalSlides = 3;

        var swiper = new Swiper('.swiper-container', {
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
                    // Only render bullets for the original slides (0, 1, 2)
                    if (index < totalSlides) {
                        return `<span class="${className}" data-index="${index}"></span>`;
                    }
                    return '';
                }
            },
            on: {
                init: function() {
                    updateActiveSlideEventsBox(this);
                    // Set initial active bullet
                    this.pagination.bullets[0].classList.add('swiper-pagination-bullet-active');
                },
                slideChange: function() {
                    // Calculate the real index (0, 1, 2) for looped slides
                    const realIndex = this.realIndex % totalSlides;
                    // Update pagination bullets
                    this.pagination.bullets.forEach((bullet, i) => {
                        if (i === realIndex) {
                            bullet.classList.add('swiper-pagination-bullet-active');
                        } else {
                            bullet.classList.remove('swiper-pagination-bullet-active');
                        }
                    });
                    updateActiveSlideEventsBox(this);
                }
            },
            breakpoints: {
                310: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 2
                },
                1440: {
                    slidesPerView: 2
                }
            }
        });
    </script>



@endsection
