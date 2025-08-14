@extends('layouts.app')

@section('title', $event->title)

@section('content')

    <x-banner title="News & Events" page="News & Events /" breadcrumb="{!! $event->title !!}" />

    <div class="container mx-auto my-10 lg:my-[10rem]">
        <div class="flex flex-col gap-10">
            <div class="flex items-center justify-center">
                <div class="text-center lg:w-[40rem] flex justify-center items-center py-14">
                    <h1 class="text-3xl font-bold mt-2">{{ $event->title }}</h1>
                </div>
            </div>
            <img src="{{ asset($event->image) }}" class="w-full mx-auto rounded-2xl lg:h-[30rem] object-cover">
            <div class="mx-10 ">
                <div class="mt-6 flex flex-col gap-5">
                    <p class="text-gray-600">{{ $event->greetings }}</p>
                    <p class="font-semibold text-2xl"> {{ $event->description_title }} </p>
                    <p class="text-gray-600">{{ $event->description }}</p>
                </div>
                <div class="mt-6 flex flex-col gap-5">
                    <p class="text-gray-600">{{ $event->greetings }}</p>
                    <p class="font-semibold text-2xl"> {{ $event->description_title }} </p>
                    <p class="text-gray-600">{{ $event->description }}</p>
                </div>
                <div class="mt-6 flex flex-col gap-5">
                    <p class="text-gray-600">{{ $event->greetings }}</p>
                    <p class="font-semibold text-2xl"> {{ $event->description_title }} </p>
                    <p class="text-gray-600">{{ $event->description }}</p>
                </div>
                <div class="mt-6 flex flex-col gap-5">
                    <p class="text-gray-600">{{ $event->greetings }}</p>
                    <p class="font-semibold text-2xl"> {{ $event->description_title }} </p>
                    <p class="text-gray-600">{{ $event->description }}</p>
                </div>
                <div class="mt-6 flex flex-col gap-5">
                    <p class="text-gray-600">{{ $event->author }}</p>
                    <p class="text-gray-600">{{ $event->position }}</p>
                </div>
            </div>
            <div class="flex lg:flex-row gap-5 mt-10">
                <img src="{{ asset($event->image2) }}" class=" mx-auto rounded-2xl w-full lg:h-[30rem]">
                <img src="{{ asset($event->image) }}" class=" mx-auto rounded-2xl w-full object-cover">
            </div>
        </div>
    </div>
@endsection
