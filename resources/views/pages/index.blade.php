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
                @include('partials.home')
            </div>

            {{-- mobile view --}}
            <div class="flex items-center justify-center lg:hidden">
                <x-division />
            </div>

            <div>
                @include('partials.aboutus')
            </div>
            <div class="bg-[#17509E]/10 h-full py-12">
                <div class="flex flex-row items-center justify-center gap-3 lg:gap-5 lg:flex ">
                    <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 lg:w-12 lg:h-10 w-7">
                    <span class="font-semibold text-4xl lg:text-7xl text-[#112947]">Project Details</span>
                </div>
                <div class="swiper swiper-container flex">
                    <div class="swiper-wrapper">
                        @foreach ($carouselItems as $item)
                            <div
                                class="relative flex flex-wrap overflow-hidden swiper-slide group border border-black rounded-full">
                                <img src="{{ asset($item->image) }}"
                                    class="flex object-cover transition-opacity duration-700 ease-in-out lg:w-full lg:h-full" />

                                <!-- Overlay -->
                                <div
                                    class="absolute flex flex-col items-center justify-center w-full h-full gap-2 px-6 py-2 transition-opacity duration-500 opacity-0 group-hover:opacity-100">

                                    <div
                                        class="absolute bg-white/30 inset-0.5 rounded-full hover:bg-[radial-gradient(circle_at_top_right,rgba(255,0,0,0.5),transparent)] transition-opacity duration-300 opacity-0 group-hover:opacity-100">
                                    </div>
                                    <div class="relative">
                                        <div
                                            class="opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex flex-col items-center justify-center h-[6rem] w-[22rem]">
                                            <div
                                                class="z-10 flex items-center justify-center p-2 bg-[#E94B4D]  border rounded-full">
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
                                <div
                                    class="flex absolute items-center gap-2 px-2 w-[18rem] md:w-[25rem] py-5 bg-white rounded-full bottom-[0rem]">
                                    <div class="p-2 px-6 text-white">
                                        <img src="{{ asset('assets/calendar-icon.png') }}" alt="calendar-icon"
                                            class="md:w-[4rem]">
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div class="text-center bg-[#17509E] text-white rounded-full">Events</div>
                                        <div class="lg:w-[14rem]">
                                            <p class="text-xs text-black">{{ $item->text }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination border border-black lg:full mt-10 flex items-center justify-center gap-3">
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

        /* .swiper-pagination {
                                                                                                                                                                                    display: flex;
                                                                                                                                                                                    gap: 8px;
                                                                                                                                                                                    justify-content: center;
                                                                                                                                                                                    margin-top: 24px;
                                                                                                                                                                                } */



        /* Partners tab infinite carousel */

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
        function updateActiveSlideText(swiper) {
            const slides = swiper.slides;
            slides.forEach((slide) => {
                const textContainer = slide.querySelector('.swiper-active-text');
                if (textContainer) {
                    if (slide.classList.contains('swiper-slide-active')) {
                        textContainer.classList.add('opacity-100');
                        textContainer.classList.remove('opacity-0');
                    } else {
                        textContainer.classList.add('opacity-0');
                        textContainer.classList.remove('opacity-100');
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
                    if (index < totalSlides) {
                        return `<span class="${className}"></span>`;
                    }
                    return '';
                }
            },
            // autoplay: {
            //     delay: 5000,
            //     disableOnInteraction: false,
            // },
            on: {
                init: function() {
                    updateActiveSlideText(this);
                },
                slideChangeTransitionEnd: function() {
                    updateActiveSlideText(this);
                }
            },
            breakpoints: {
                320: {
                    slidesPerView: 1
                },
                640: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 3
                },
                1440: {
                    slidesPerView: 3
                }
            }
        });
    </script>

    <script>
        var swiper = new Swiper('.swiper-partners', {
            loop: true, // Enables infinite loop
            autoplay: {
                delay: 1, // Minimum delay to avoid pauses (1ms)
                disableOnInteraction: false, // Keeps autoplay running after interaction
            },
            speed: 2000, // Smooth transition speed (2 seconds per slide movement)
            slidesPerView: 3, // Number of slides visible at once
            spaceBetween: 30, // Space between slides
            loopAdditionalSlides: 1, // Ensures smooth looping with additional slides
            allowTouchMove: false, // Disables manual swiping to maintain autoplay flow
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            },
        });
    </script>


@endsection
