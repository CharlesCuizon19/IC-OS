<div class="mt-[6rem] lg:mt-0">
    <div class="">
        <img src="{{ asset(
            in_array($title, ['About Society', 'Board of Directors'])
                ? 'assets/aboutus_banner.png'
                : ($title === 'Get Certificate'
                    ? 'assets/getcertificate_banner.png'
                    : ($title === 'Why Get Certified'
                        ? 'assets/whygetcertified_banner.png'
                        : ($title === 'Members'
                            ? 'assets/certifiedphysicians_banner.png'
                            : ($title === 'News & Events'
                                ? 'assets/newsevents_banner.png'
                                : ($title === 'Resources'
                                    ? 'assets/resources_banner.png'
                                    : ($title === 'Contact Us'
                                        ? 'assets/contactus_banner.png'
                                        : 'assets/default_banner.png')))))),
        ) }}"
            alt="banner" class="hidden w-full h-auto lg:absolute lg:flex">


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
