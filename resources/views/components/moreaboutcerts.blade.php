@php
    $about_certs = [
        (object) [
            'img' => 'assets/image3.png',
            'title' => 'Why Get Certified',
            'desc' => 'Discover the value of IC-OS certification and how it can elevate your career.',
            'url' => '/certificates/why-getcertified',
        ],
        (object) [
            'img' => 'assets/image4.png',
            'title' => 'Certified Physicians',
            'desc' => 'Explore what it takes to become a certified cardio-oncology professional.',
            'url' => '/certificates/certified-physicians',
        ],
    ];
@endphp

<div class="lg:mx-[15rem] gap-7 lg:py-[3rem] py-10 mx-3">
    <div class="text-2xl text-center lg:py-3 lg:text-start">
        More About Certificates
    </div>
    <div class="flex flex-col gap-7 lg:flex-row">
        @foreach ($about_certs as $key => $cert)
            <a href="{{ $cert->url }}">
                <div class="transition-all duration-300 cursor-pointer hover:scale-105">
                    <div
                        class="flex items-center gap-3 flex-col lg:flex-row border hover:border-[#17509E]/50 rounded-2xl p-3">
                        <img src="{{ asset($cert->img) }}" alt="" class="lg:w-[12rem] lg:h-[7rem] rounded-md">
                        <div class="flex flex-col gap-1 text-center lg:text-start">
                            <p class="text-2xl text-[#17509E] font-semibold">{{ $cert->title }}</p>
                            <p class="text-gray-500"> {{ $cert->desc }}</p>
                            <div class="flex items-center justify-center lg:justify-start">
                                <div
                                    class="flex flex-row items-center justify-center gap-2 text-gray-500 transition duration-300 cursor-pointer w-fit lg:justify-start lg:items-center hover:text-black">
                                    <span>
                                        See More
                                    </span>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-arrow-right-icon lucide-arrow-right">
                                            <path d="M5 12h14" />
                                            <path d="m12 5 7 7-7 7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
