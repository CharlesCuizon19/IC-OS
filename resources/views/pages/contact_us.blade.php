@extends('layouts.app')

@section('title', 'Contact Us | ICOS')

@section('content')
    <x-banner title="Contact Us" page="" breadcrumb="Contact Us" />

    <div class="container mx-auto lg:my-[10rem]">
        <div class="flex flex-col gap-10 pb-10 lg:mx-3">
            <div class="flex flex-col items-center justify-center gap-10 mt-10">
                <div
                    class="flex flex-row items-center justify-center gap-3 lg:justify-start lg:gap-3 lg:flex lg:items-center">
                    <img src="{{ asset('assets/aboutus-icon.png') }}" alt="aboutus-icon" class="h-5 w-7">
                    <span class="bg-[#E94B4D]/10 w-fit text-[#E94B4D] px-4 py-2 text-xs rounded-full">
                        Board of Directors
                    </span>
                </div>
                <div class="text-[#112947] text-[2rem] font-semibold">
                    Get in Touch
                </div>
            </div>

            <div class="flex flex-col gap-4 lg:flex-row">
                <div class="lg:w-full">
                    <div class="p-6 bg-white lg:border lg:border-gray-200 lg:shadow-sm lg:rounded-xl">
                        <h2 class="mb-1 text-2xl font-bold">Let’s Talk!</h2>
                        <p class="mb-6 text-gray-600">Have a question or need support? Reach out and we’ll respond as soon
                            as
                            possible.</p>
                        <hr class="mb-6">

                        <form action="#" method="POST" class="space-y-4">
                            @csrf
                            <!-- First & Last Name -->
                            <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                                <div>
                                    <label class="block mb-1 text-sm font-medium">First Name</label>
                                    <input type="text" placeholder="John"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                                </div>
                                <div>
                                    <label class="block mb-1 text-sm font-medium">Last Name</label>
                                    <input type="text" placeholder="Doe"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                                </div>
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="block mb-1 text-sm font-medium">Email Address</label>
                                <input type="email" placeholder="johndoe@gmail.com"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>

                            <!-- Message -->
                            <div>
                                <label class="block mb-1 text-sm font-medium">Message</label>
                                <textarea placeholder="Type something..." rows="4"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                            </div>

                            <!-- Terms Checkbox -->
                            <div class="flex items-start">
                                <input type="checkbox" id="terms" class="mt-1 border-gray-300 rounded">
                                <label for="terms" class="ml-2 text-sm text-gray-700">
                                    I agree to the <a href="#" class="font-medium text-blue-600 hover:underline">terms
                                        and
                                        conditions</a>.
                                </label>
                            </div>

                            <!-- Privacy Policy -->
                            <p class="text-xs leading-relaxed text-gray-500">
                                IC-OS (International Cardio-Oncology Society) is committed to protecting your personal
                                information in line with our
                                <a href="#" class="font-medium text-blue-600 hover:underline">Privacy Policy</a>.
                                From time to time, we may contact you with updates, educational content, events, or services
                                that may be of interest to you as part of our mission to advance cardio-oncology care.
                            </p>

                            <!-- reCAPTCHA -->
                            <div class="border border-gray-300 rounded p-2 w-[300px]">
                                <div class="flex items-center justify-center h-16 text-sm text-gray-400 bg-gray-100">
                                    reCAPTCHA placeholder
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="px-5 py-2 font-medium text-white bg-red-500 rounded-full hover:bg-red-600">
                                Submit Message
                            </button>
                        </form>
                    </div>
                </div>

                <div class="flex flex-col gap-4 mx-3 lg:mx-0 lg:w-full">
                    <div class="hidden lg:flex">
                        <img src="{{ asset('assets/contactus-image.png') }}" alt="">
                    </div>

                    <div class="h-full overflow-hidden border rounded-2xl">
                        <div class="relative flex flex-col justify-between h-full gap-5 overflow-hidden">
                            <div class="flex gap-3 pt-5 pl-5 lg:flex-row">
                                <div>
                                    <img src="{{ asset('assets/email-icon.png') }}" alt=""
                                        class="p-3 bg-[#f3f3f3] rounded-xl w-11 h-10">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm font-semibold">Quick Contact</span>
                                    <span class="text-gray-600">Email: icos@gmail.com</span>
                                </div>
                            </div>
                            <div class="flex gap-3 pl-5 lg:flex-row ">
                                <div>
                                    <img src="{{ asset('assets/phone-icon.png') }}" alt=""
                                        class="p-3 bg-[#f3f3f3] rounded-xl w-11 h-11">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm font-semibold">Phone No.</span>
                                    <span class="text-gray-600">+63 123456798</span>
                                    <span class="text-gray-600">+63 123455421</span>
                                </div>
                            </div>
                            <div class="flex gap-3 pl-5 lg:flex-row ">
                                <div>
                                    <img src="{{ asset('assets/location-icon.png') }}" alt=""
                                        class="p-3 bg-[#f3f3f3] rounded-xl w-11 h-11">
                                </div>
                                <div class="flex flex-col">
                                    <span class="text-sm font-semibold">Location</span>
                                    <span class="text-gray-600">Davao City</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 pb-5 pl-5">
                                <span class="font-semibold">Follow Us</span>
                                <div class="flex gap-3">
                                    <img src="{{ asset('assets/fb-icon.png') }}" alt="">
                                    <img src="{{ asset('assets/ig-icon.png') }}" alt="">
                                    <img src="{{ asset('assets/x-icon.png') }}" alt="">
                                </div>
                            </div>
                            <img src="{{ asset('assets/heart-image.png') }}" alt=""
                                class="absolute -right-[4rem] w-[29rem] h-[25rem]">
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:mt-[5rem] mx-3 lg:mx-0">
                <iframe class="w-full h-96 rounded-2xl"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506609.03668055014!2d125.12478050973782!3d7.25414349129447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d9f519e327f%3A0xb53a24589f79c573!2sDavao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1755073478286!5m2!1sen!2sph"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
