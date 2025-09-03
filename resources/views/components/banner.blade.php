@props(['img_path', 'title', 'page', 'breadcrumb'])


<div class="mt-[6rem] lg:mt-0">
    <div>
        <div class="hidden w-full h-auto lg:flex lg:absolute lg:h-96">
            <img src="{{ asset('assets/leftside_banner.png') }}" alt="" class="lg:h-96 lg:w-full">
            <div class="relative w-full">
                <img src="{{ asset($img_path) }}" alt="" class="object-cover object-center lg:h-96 lg:w-full">
                <div class="absolute inset-0 bg-gradient-to-r from-[#f8f8f8] to-transparent"></div>
            </div>
        </div>


        <!-- Overlay container -->
        <div class="container mx-auto">
            <div
                class="relative flex flex-col items-center justify-center gap-5 mx-3 mt-2 text-center lg:text-left lg:mt-0 lg:items-start">
                <div
                    class="flex flex-col items-center w-full gap-5 text-5xl font-bold lg:items-start lg:text-left lg:mt-[7rem]">
                    <div>
                        <span class="text-[#112947] lg:text-[100px]">
                            {{ $title }}
                    </div>
                    <div class="hidden lg:flex">
                        <p class="text-sm font-normal text-black lg:text-xl">
                            Home / <span>{{ $page }}</span>
                            <span class="text-[#E94B4D]">
                                {{ $breadcrumb }}
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
