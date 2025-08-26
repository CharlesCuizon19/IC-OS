@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container py-8 mx-auto">
        <h2 class="mb-6 text-2xl font-bold">Edit Blog</h2>

        {{-- Show validation errors --}}
        @if ($errors->any())
            <div class="p-4 mb-4 text-white bg-red-500 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Edit Blog Form --}}
        <form action="{{ route('update.blog', $blog->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div>
                <label for="title" class="block font-medium">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $blog->title) }}"
                    class="w-full p-2 border rounded" required>
            </div>

            {{-- Slug --}}
            <div>
                <label for="slug" class="block font-medium">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug', $blog->slug) }}"
                    class="w-full p-2 border rounded">
            </div>

            {{-- Context --}}
            <div>
                <label for="context" class="block font-medium">Context</label>
                <textarea name="context" id="context" rows="4" class="w-full p-2 border rounded" required>{{ old('context', $blog->context) }}</textarea>
            </div>

            {{-- Description (Category) --}}
            <div>
                <label for="description" class="block font-medium">Category Description</label>
                <input type="text" name="description" id="description"
                    value="{{ old('description', $blog->categories->description ?? '') }}"
                    class="w-full p-2 border rounded">
            </div>

            {{-- Date Issued --}}
            <div>
                <label for="date_issued" class="block font-medium">Date Issued</label>
                <input type="date" name="date_issued" id="date_issued"
                    value="{{ old('date_issued', $blog->date_issued ? \Carbon\Carbon::parse($blog->date_issued)->format('Y-m-d') : now()->format('Y-m-d')) }}"
                    class="w-full p-2 border rounded">
            </div>

            {{-- Read Duration --}}
            <div>
                <label for="read_duration" class="block font-medium">Read Duration (minutes)</label>
                <input type="number" name="read_duration" id="read_duration"
                    value="{{ old('read_duration', $blog->read_duration) }}" class="w-full p-2 border rounded">
            </div>

            {{-- Alt Text --}}
            <div>
                <label for="alt_text" class="block font-medium">Alt Text</label>
                <input type="text" name="alt_text" id="alt_text"
                    value="{{ old('alt_text', $blog->images->alt_text ?? '') }}" class="w-full p-2 border rounded">
            </div>

            {{-- Current Image Preview --}}
            <div>
                <label class="block font-medium">Current Blog Cover Image</label>
                @if ($blog->images && $blog->images->files)
                    <img src="{{ asset($blog->images->files->image_path) }}" alt="Current Blog Image"
                        class="w-64 rounded shadow">
                @else
                    <p class="text-gray-500">No image uploaded.</p>
                @endif
            </div>

            {{-- Upload New Image --}}
            <div>
                <label for="file" class="block font-medium">Replace Blog Image</label>
                <input type="file" name="file" id="file" class="w-full p-2 border rounded">
                <p class="mt-1 text-sm text-gray-500">Leave empty if you don’t want to replace the image.</p>
            </div>

            {{-- Submit --}}
            <div>
                <button type="submit" class="px-6 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                    Update Blog
                </button>
                <a href="{{ route('show.blogs') }}" class="ml-4 text-gray-600">Cancel</a>
            </div>
        </form>
    </div>
@endsection
