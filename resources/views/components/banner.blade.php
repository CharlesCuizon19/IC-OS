<div class="mt-[6rem] lg:mt-0">
    <div class="">
        <img src="{{ asset('assets/banner.png') }}" alt="banner"
            class="hidden object-none object-top w-full lg:absolute h-1/2 lg:flex">
        <!-- Overlay container -->
        <div class="container mx-auto">
            <div
                class="relative flex flex-col items-center justify-center gap-5 mx-3 mt-2 text-center lg:text-left lg:mt-0 lg:items-start">
                <div
                    class="flex flex-col items-center w-full gap-5 text-5xl font-bold lg:items-start lg:text-left lg:mt-[15rem]">
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
