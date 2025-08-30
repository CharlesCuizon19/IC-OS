@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="max-w-4xl mx-auto p-6">
        <h2 class="mb-6 text-2xl font-bold">EDIT BANNER</h2>

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

        <form action="{{ route('update.homepageBanner', $banner->id) }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-6 p-6 bg-white shadow rounded-2xl">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div>
                <label class="block mb-2 font-medium">Title</label>
                <input type="text" name="title" value="{{ old('title', $banner->title) }}"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            <div class="hidden">
                {{-- Context --}}
                <div>
                    <label class="block mb-2 font-medium">Context</label>
                    <input type="text" name="context" value="{{ old('context', $banner->context) }}"
                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
                </div>

                {{-- Location --}}
                <div>
                    <label class="block mb-2 font-medium">Location</label>
                    <input type="text" name="location" value="{{ old('location', $banner->location) }}"
                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
                </div>

                {{-- Link --}}
                <div>
                    <label class="block mb-2 font-medium">Link</label>
                    <input type="text" name="link" value="{{ old('link', $banner->link) }}"
                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
                </div>

                {{-- Alt Text --}}
                <div>
                    <label class="block mb-2 font-medium">Alt Text</label>
                    <input type="text" name="alt_text" value="{{ old('alt_text', $banner->images->alt_text ?? '') }}"
                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                </div>
            </div>

            {{-- File Upload with Preview --}}
            <div class="p-6 text-center border-2 border-dashed rounded-lg">
                {{-- Image Preview --}}
                <div class="mt-4">
                    <img id="preview"
                        src="{{ $banner->images && $banner->images->files ? asset($banner->images->files->image_path) : '' }}"
                        class="{{ $banner->images && $banner->images->files ? '' : 'hidden' }} mx-auto border rounded-lg max-h-48" />
                </div>

                <p class="mb-1 font-medium">Banner Image</p>
                <p class="mb-4 text-sm text-gray-500">Upload one image (Max 2MB, JPG/PNG/GIF/SVG).</p>

                <label
                    class="flex flex-col items-center justify-center w-full h-40 transition border border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <svg id="uploadIcon" class="w-12 h-12 mb-2 text-gray-400" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 8l-4-4m4 4l4-4" />
                    </svg>
                    <span class="text-sm text-gray-600">Click to upload an image</span>
                    <span class="mt-1 text-xs text-gray-400">JPEG, PNG, GIF, SVG up to 2MB</span>
                    <input type="file" name="file" id="fileInput" class="hidden" accept="image/*">
                </label>
            </div>

            {{-- JS for Preview --}}
            <script>
                document.getElementById('fileInput').addEventListener('change', function(e) {
                    const [file] = e.target.files;
                    const preview = document.getElementById('preview');
                    if (file) {
                        preview.src = URL.createObjectURL(file);
                        preview.classList.remove('hidden');
                    } else {
                        preview.src =
                            '{{ $banner->images && $banner->images->files ? asset($banner->images->files->image_path) : '' }}';
                        preview.classList.toggle('hidden', !
                            '{{ $banner->images && $banner->images->files ? 'true' : '' }}'
                        );
                    }
                });
            </script>

            {{-- Buttons --}}
            <div class="flex justify-between mt-4">
                <a href="{{ route('show.homepageBanner') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Back</a>
                <button type="submit" class="px-6 py-2 text-white bg-black rounded-lg hover:bg-gray-800">Update</button>
            </div>
        </form>
    </div>
@endsection
