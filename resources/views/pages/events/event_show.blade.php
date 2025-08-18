@extends('layouts.app')

@section('title', $event->title)

@section('content')

    <x-banner title="News & Events" page="News & Events /" breadcrumb="{!! $event->title !!}" />

    <div class="container mx-auto my-10 lg:my-[10rem]">
        <div class="flex flex-col gap-10 lg:mx-3">
            <div class="flex items-center justify-center">
                <div class="text-center lg:w-[40rem] flex justify-center items-center py-14">
                    <h1 class="mt-2 text-3xl font-bold">{{ $event->title }}</h1>
                </div>
            </div>
            <img src="{{ asset($event->image) }}" class="w-full mx-auto rounded-2xl lg:h-[30rem] object-cover">
            <div class="mx-10 ">
                <div class="flex flex-col gap-5 mt-6">
                    <p class="text-gray-600">{{ $event->greetings }}</p>
                    <p class="text-2xl font-semibold"> {{ $event->description_title }} </p>
                    <p class="text-gray-600">{{ $event->description }}</p>
                </div>
                <div class="flex flex-col gap-5 mt-6">
                    <p class="text-gray-600">{{ $event->greetings }}</p>
                    <p class="text-2xl font-semibold"> {{ $event->description_title }} </p>
                    <p class="text-gray-600">{{ $event->description }}</p>
                </div>
                <div class="flex flex-col gap-5 mt-6">
                    <p class="text-gray-600">{{ $event->greetings }}</p>
                    <p class="text-2xl font-semibold"> {{ $event->description_title }} </p>
                    <p class="text-gray-600">{{ $event->description }}</p>
                </div>
                <div class="flex flex-col gap-5 mt-6">
                    <p class="text-gray-600">{{ $event->greetings }}</p>
                    <p class="text-2xl font-semibold"> {{ $event->description_title }} </p>
                    <p class="text-gray-600">{{ $event->description }}</p>
                </div>
                <div class="flex flex-col gap-5 mt-6">
                    <p class="text-gray-600">{{ $event->author }}</p>
                    <p class="text-gray-600">{{ $event->position }}</p>
                </div>
            </div>
            <div class="flex gap-5 mt-10 lg:flex-row">
                <img src="{{ asset($event->image2) }}" class=" mx-auto rounded-2xl w-full lg:h-[30rem]">
                <img src="{{ asset($event->image) }}" class="object-cover w-full mx-auto  rounded-2xl">
            </div>
        </div>
    </div>
@endsection
