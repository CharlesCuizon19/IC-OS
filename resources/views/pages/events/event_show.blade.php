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
            <img src="{{ asset($event->images->files->image_path) }}"
                class="w-full mx-auto rounded-2xl lg:h-[30rem] object-cover">
            <div class="mx-10 ">
                <div class="flex flex-col gap-5 mt-6">
                    <p class="text-gray-600">{!! $event->context !!}</p>
                </div>
            </div>
            <div class="flex flex-col gap-5 mt-10 lg:flex-row">
                <img src="{{ asset($event->images->files->image_path) }}"
                    class="w-full mx-auto rounded-2xl lg:h-[30rem] object-cover">
            </div>
        </div>
    </div>
@endsection
