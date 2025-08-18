@extends('layouts.app')

@section('title', 'Why Get Certificied | ICOS')

@section('content')
    <div class="overflow-x-hidden">
        <div class="flex flex-col">

            <x-banner title="Why Get Certified" page="Certifications /" breadcrumb="Why Get Certified" />

            <div class="container mx-auto">
                <div class="lg:mt-[15rem]">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:gap-10 lg:mx-3">
                        <div class="flex w-full mt-10">
                            <img class="lg:w-[40rem] lg:h-[24rem]" src="{{ asset('assets/whygetcert_image.png') }}"
                                alt="">
                        </div>
                        <div
                            class="flex flex-col items-center justify-center gap-5 my-6 lg:items-start lg:justify-start lg:w-full">
                            <div class="flex items-center gap-3">
                                <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                                <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                                    Get Certificate
                                </span>
                            </div>
                            <div
                                class="flex flex-col items-center justify-center gap-6 lg:gap-10 lg:items-start lg:justify-start">
                                <div class="flex flex-col items-center justify-center lg:items-start lg:justify-start">
                                    <span class="text-[#112947] text-2xl lg:text-[70px] font-semibold">
                                        Why Get Certified
                                    </span>
                                </div>
                                <div class="border-2 border-[#E94B4D] w-1/3 lg:w-1/3 rounded-full"></div>
                                <div class="flex flex-col gap-5 mx-3 text-sm text-center lg:text-xl lg:text-left">
                                    <p class="font-semibold text-justify text-gray-700">
                                        Stand out as a trusted leader in
                                        cardio-oncology with a globally recognized certification that highlights your
                                        expertise and commitment to patient care.
                                    </p>
                                    <p class="text-justify text-gray-500">
                                        IC-OS certification is more than a
                                        credential—it's a mark of excellence in a rapidly evolving field. Whether you're a
                                        clinician, researcher, or healthcare organization, getting certified demonstrates
                                        your dedication to integrated cardiac and cancer care. Gain recognition, build trust
                                        with patients and peers, and join a worldwide movement that's shaping the future of
                                        cardio-oncology.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto mt-[5rem] lg:mt-[5rem] lg:pb-[5rem] pb-[3rem] border-b border-gray-500">
                <div class="flex flex-col gap-16">
                    <div class="text-2xl font-bold text-center text-gray-600">
                        Being IC-OS Certified
                    </div>
                    <div class="flex flex-col gap-6 mx-3 lg:flex-row">
                        <div class="bg-[#f5f5f5] rounded-[40px] p-5 lg:w-[31rem] border">
                            <div class="flex flex-col gap-3 text-left">
                                <div class="border-2 border-[#17509e] rounded-full w-10"></div>
                                <div class="text-xl">Recognition</div>
                                <div>Stand out with a credential backed by the leading global authority in cardio-oncology.
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#f5f5f5] rounded-[40px] p-5 lg:w-[31rem] border">
                            <div class="flex flex-col gap-3 text-left">
                                <div class="border-2 border-[#17509e] rounded-full w-10"></div>
                                <div class="text-xl">Credibility</div>
                                <div>Demonstrate your expertise to patients peers, institutions.
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#f5f5f5] rounded-[40px] p-5 lg:w-[31rem] border">
                            <div class="flex flex-col gap-3 text-left">
                                <div class="border-2 border-[#17509e] rounded-full w-10"></div>
                                <div class="text-xl">Impact</div>
                                <div>Help set the standards for integrated cardiac and oncology care.
                                </div>
                            </div>
                        </div>
                        <div class="bg-[#f5f5f5] rounded-[40px] p-5 lg:w-[31rem] border">
                            <div class="flex flex-col gap-3 text-left">
                                <div class="border-2 border-[#17509e] rounded-full w-10"></div>
                                <div class="text-xl">Community</div>
                                <div>Join a growing network of certified professionals and organizations making a difference
                                    worlwide.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto lg:mt-[5rem] lg:pb-[5rem]  border-b border-gray-500">
                <div class="flex flex-col py-5 gap-10 lg:gap-[125px] lg:flex-row">
                    <div
                        class="flex flex-col items-center justify-center w-auto gap-5 mx-3 lg:items-start lg:justify-start">
                        <div
                            class="flex flex-row items-center justify-center gap-3 lg:justify-start lg:gap-3 lg:flex lg:items-center">
                            <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                            <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                                FAQ's
                            </span>
                        </div>
                        <p class="text-xl font-semibold text-justify lg:text-3xl lg:w-full lg:text-start">
                            Learn how becoming IC-OS certified can elevate your career, strengthen your practice, and
                            position you as a leader in the growing field of cardio-oncology.
                        </p>
                    </div>
                    <div class="flex flex-col gap-2 mx-3 lg:mt-8">
                        <div id="faqContainer1" class="flex flex-col gap-3 p-5 bg-white border rounded-xl"
                            onclick="toggleContent('faqContainer1', 'content1')">
                            <div class="flex flex-row items-center justify-between cursor-pointer">
                                <div class="font-bold">
                                    Why should I get certified in cardio-oncology?
                                </div>
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down-icon lucide-chevron-down">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="hidden lucide lucide-chevron-up-icon lucide-chevron-up">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </div>
                            </div>
                            <div id="content1" class="overflow-hidden text-justify transition-all duration-300"
                                style="max-height: 0;">
                                Certification validates your expertise, enhances your credibility, and demonstrates your
                                commitment to delivering high-quality, integrated care for patients with both cardiac and
                                cancer conditions.
                            </div>
                        </div>
                        <div id="faqContainer2" class="flex flex-col gap-3 p-5 bg-white border rounded-xl"
                            onclick="toggleContent('faqContainer2', 'content2')">
                            <div class="flex flex-row items-center justify-between cursor-pointer">
                                <div class="font-bold">
                                    What values does IC-OS certification add to my career?
                                </div>
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down-icon lucide-chevron-down">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="hidden lucide lucide-chevron-up-icon lucide-chevron-up">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </div>
                            </div>
                            <div id="content2" class="overflow-hidden text-justify transition-all duration-300"
                                style="max-height: 0;">
                                Certification validates your expertise, enhances your credibility, and demonstrates your
                                commitment to delivering high-quality, integrated care for patients with both cardiac and
                                cancer conditions.
                            </div>
                        </div>
                        <div id="faqContainer3" class="flex flex-col gap-3 p-5 bg-white border rounded-xl"
                            onclick="toggleContent('faqContainer3', 'content3')">
                            <div class="flex flex-row items-center justify-between cursor-pointer">
                                <div class="font-bold">
                                    Is certification required to practice cardio-oncology?
                                </div>
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down-icon lucide-chevron-down">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="hidden lucide lucide-chevron-up-icon lucide-chevron-up">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </div>
                            </div>
                            <div id="content3" class="overflow-hidden text-justify transition-all duration-300"
                                style="max-height: 0;">
                                Certification validates your expertise, enhances your credibility, and demonstrates your
                                commitment to delivering high-quality, integrated care for patients with both cardiac and
                                cancer conditions.
                            </div>
                        </div>
                        <div id="faqContainer4" class="flex flex-col gap-3 p-5 bg-white border rounded-xl"
                            onclick="toggleContent('faqContainer4', 'content4')">
                            <div class="flex flex-row items-center justify-between cursor-pointer">
                                <div class="font-bold">
                                    How does certification impact patient care?
                                </div>
                                <div class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="lucide lucide-chevron-down-icon lucide-chevron-down">
                                        <path d="m6 9 6 6 6-6" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="hidden lucide lucide-chevron-up-icon lucide-chevron-up">
                                        <path d="m18 15-6-6-6 6" />
                                    </svg>
                                </div>
                            </div>
                            <div id="content4" class="overflow-hidden text-justify transition-all duration-300"
                                style="max-height: 0;">
                                Certification validates your expertise, enhances your credibility, and demonstrates your
                                commitment to delivering high-quality, integrated care for patients with both cardiac and
                                cancer conditions.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto mb-14">
                @include('components.moreaboutcerts')
            </div>
        </div>
    </div>

    <script>
        function toggleContent(containerId, contentId) {
            const container = document.getElementById(containerId);
            const content = document.getElementById(contentId);
            const downIcon = container.querySelector('.lucide-chevron-down');
            const upIcon = container.querySelector('.lucide-chevron-up');

            if (content.style.maxHeight === '0px' || content.style.maxHeight === '') {
                content.style.maxHeight = content.scrollHeight + 'px';
                container.classList.remove('bg-white');
                container.classList.add('bg-gray-200');
                downIcon.classList.add('hidden');
                upIcon.classList.remove('hidden');
            } else {
                content.style.maxHeight = '0px';
                container.classList.remove('bg-gray-200');
                container.classList.add('bg-white');
                downIcon.classList.remove('hidden');
                upIcon.classList.add('hidden');
            }
        }
    </script>
@endsection
