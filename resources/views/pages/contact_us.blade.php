@extends('layouts.app')

@section('title', 'Contact Us | ICOS')

@section('content')
    <x-banner title="Contact Us" page="" breadcrumb="Contact Us" />

    <div class="container mx-auto lg:my-[10rem]">
        <div class="flex flex-col gap-10 pb-10">
            <div class="flex flex-col gap-10 justify-center items-center mt-10">
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

            <div class="flex flex-col lg:flex-row gap-4">
                <div class="lg:w-full">
                    <div class="p-6 border border-gray-200 rounded-xl shadow-sm bg-white">
                        <h2 class="text-2xl font-bold mb-1">Let’s Talk!</h2>
                        <p class="text-gray-600 mb-6">Have a question or need support? Reach out and we’ll respond as soon
                            as
                            possible.</p>
                        <hr class="mb-6">

                        <form action="#" method="POST" class="space-y-4">
                            @csrf
                            <!-- First & Last Name -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium mb-1">First Name</label>
                                    <input type="text" placeholder="John"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium mb-1">Last Name</label>
                                    <input type="text" placeholder="Doe"
                                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                                </div>
                            </div>

                            <!-- Email -->
                            <div>
                                <label class="block text-sm font-medium mb-1">Email Address</label>
                                <input type="email" placeholder="johndoe@gmail.com"
                                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500">
                            </div>

                            <!-- Message -->
                            <div>
                                <label class="block text-sm font-medium mb-1">Message</label>
                                <textarea placeholder="Type something..." rows="4"
                                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-500"></textarea>
                            </div>

                            <!-- Terms Checkbox -->
                            <div class="flex items-start">
                                <input type="checkbox" id="terms" class="mt-1 border-gray-300 rounded">
                                <label for="terms" class="ml-2 text-sm text-gray-700">
                                    I agree to the <a href="#" class="text-blue-600 font-medium hover:underline">terms
                                        and
                                        conditions</a>.
                                </label>
                            </div>

                            <!-- Privacy Policy -->
                            <p class="text-xs text-gray-500 leading-relaxed">
                                IC-OS (International Cardio-Oncology Society) is committed to protecting your personal
                                information in line with our
                                <a href="#" class="text-blue-600 font-medium hover:underline">Privacy Policy</a>.
                                From time to time, we may contact you with updates, educational content, events, or services
                                that may be of interest to you as part of our mission to advance cardio-oncology care.
                            </p>

                            <!-- reCAPTCHA -->
                            <div class="border border-gray-300 rounded p-2 w-[300px]">
                                <div class="bg-gray-100 h-16 flex items-center justify-center text-gray-400 text-sm">
                                    reCAPTCHA placeholder
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="bg-red-500 hover:bg-red-600 text-white px-5 py-2 rounded-md font-medium">
                                Submit Message
                            </button>
                        </form>
                    </div>
                </div>

                <div class="flex flex-col lg:w-full gap-4">
                    <div class="lg:flex hidden">
                        <img src="{{ asset('assets/contactus-image.png') }}" alt="">
                    </div>

                    <div class=" border rounded-2xl overflow-hidden h-full">
                        <div class="flex flex-col h-full gap-5 justify-between overflow-hidden relative">
                            <div class="flex lg:flex-row gap-3 pl-5 pt-5">
                                <div>
                                    <img src="{{ asset('assets/email-icon.png') }}" alt=""
                                        class="p-3 bg-[#f3f3f3] rounded-xl w-11 h-10">
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-semibold text-sm">Quick Contact</span>
                                    <span class="text-gray-600">Email: icos@gmail.com</span>
                                </div>
                            </div>
                            <div class="flex lg:flex-row gap-3 pl-5 ">
                                <div>
                                    <img src="{{ asset('assets/phone-icon.png') }}" alt=""
                                        class="p-3 bg-[#f3f3f3] rounded-xl w-11 h-11">
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-semibold text-sm">Phone No.</span>
                                    <span class="text-gray-600">+63 123456798</span>
                                    <span class="text-gray-600">+63 123455421</span>
                                </div>
                            </div>
                            <div class="flex lg:flex-row gap-3 pl-5 ">
                                <div>
                                    <img src="{{ asset('assets/location-icon.png') }}" alt=""
                                        class="p-3 bg-[#f3f3f3] rounded-xl w-11 h-11">
                                </div>
                                <div class="flex flex-col">
                                    <span class="font-semibold text-sm">Location</span>
                                    <span class="text-gray-600">Davao City</span>
                                </div>
                            </div>
                            <div class="flex flex-col gap-3 pl-5 pb-5">
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

            <div class="lg:mt-[5rem]">
                <iframe class="w-full h-96 rounded-2xl"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506609.03668055014!2d125.12478050973782!3d7.25414349129447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f96d9f519e327f%3A0xb53a24589f79c573!2sDavao%20City%2C%20Davao%20del%20Sur!5e0!3m2!1sen!2sph!4v1755073478286!5m2!1sen!2sph"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
@endsection
