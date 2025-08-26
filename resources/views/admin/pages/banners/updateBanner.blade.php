@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container mx-auto py-8">
        <h2 class="text-2xl font-bold mb-6">Edit Banner</h2>

        {{-- Show validation errors --}}
        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Edit Form --}}
        <form action="{{ route('update.homepageBanner', $banner->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div>
                <label for="title" class="block font-medium">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $banner->title) }}"
                    class="w-full border rounded p-2" required>
            </div>

            {{-- Context --}}
            <div>
                <label for="context" class="block font-medium">Context</label>
                <input type="text" name="context" id="context" value="{{ old('context', $banner->context) }}"
                    class="w-full border rounded p-2" required>
            </div>

            {{-- Location --}}
            <div>
                <label for="location" class="block font-medium">Location</label>
                <input type="text" name="location" id="location" value="{{ old('location', $banner->location) }}"
                    class="w-full border rounded p-2" required>
            </div>

            {{-- Link --}}
            <div>
                <label for="link" class="block font-medium">Link</label>
                <input type="url" name="link" id="link" value="{{ old('link', $banner->link) }}"
                    class="w-full border rounded p-2" required>
            </div>

            {{-- Alt Text --}}
            <div>
                <label for="alt_text" class="block font-medium">Alt Text</label>
                <input type="text" name="alt_text" id="alt_text"
                    value="{{ old('alt_text', $banner->images->alt_text ?? '') }}" class="w-full border rounded p-2">
            </div>

            {{-- Current Image Preview --}}
            <div>
                <label class="block font-medium">Current Banner Image</label>
                @if ($banner->images && $banner->images->files)
                    <img src="{{ asset($banner->images->files->image_path) }}" alt="Current Banner"
                        class="w-64 rounded shadow">
                @else
                    <p class="text-gray-500">No image uploaded.</p>
                @endif
            </div>

            {{-- Upload New Image --}}
            <div>
                <label for="file" class="block font-medium">Replace Banner Image</label>
                <input type="file" name="file" id="file" class="w-full border p-2 rounded">
                <p class="text-sm text-gray-500 mt-1">Leave empty if you don’t want to replace the image.</p>
            </div>

            {{-- Submit --}}
            <div>
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                    Update Banner
                </button>
                <a href="{{ route('admin.homepageBanner') }}" class="ml-4 text-gray-600">Cancel</a>
            </div>
        </form>
    </div>
@endsection
