@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="max-w-4xl p-6 mx-auto">
        <h1 class="mb-6 text-2xl font-bold">CREATE BLOG</h1>

        <form action="{{ route('store.blog') }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-6 p-6 bg-white shadow rounded-2xl">
            @csrf

            {{-- Description --}}
            <div>
                <label class="block mb-2 font-medium">Description</label>
                <input type="text" name="description" placeholder="Blog description"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            {{-- Slug --}}
            <div>
                <label class="block mb-2 font-medium">Slug</label>
                <input type="text" name="slug" placeholder="Blog slug"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            {{-- Title --}}
            <div>
                <label class="block mb-2 font-medium">Title</label>
                <input type="text" name="title" placeholder="Enter blog title"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            {{-- Context (Blog content with CKEditor) --}}
            <div>
                <label class="block mb-2 font-medium">Context</label>
                <textarea id="context" name="context" rows="6"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30"></textarea>
            </div>

            {{-- Date Issued --}}
            <div>
                <label class="block mb-2 font-medium">Date Issued</label>
                <input type="date" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}" disabled
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">

                <input type="hidden" name="date_issued" value="{{ \Carbon\Carbon::now()->format('Y-m-d') }}">

            </div>


            {{-- Read Duration --}}
            <div>
                <label class="block mb-2 font-medium">Read Duration (minutes)</label>
                <input type="number" name="read_duration" min="1" placeholder="5"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            {{-- Alt Text for Image --}}
            <div>
                <label class="block mb-2 font-medium">Alt Text</label>
                <input type="text" name="alt_text" placeholder="Alternative text for the image"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
            </div>

            {{-- File Upload --}}
            <div class="p-6 text-center border-2 border-dashed rounded-lg">
                <p class="mb-1 font-medium">Upload Cover Image</p>
                <p class="mb-4 text-sm text-gray-500">Max 2MB, JPG/PNG/GIF/SVG.</p>

                <label
                    class="flex flex-col items-center justify-center w-full h-40 transition border border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                    <svg class="w-12 h-12 mb-2 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 8l-4-4m4 4l4-4" />
                    </svg>
                    <span class="text-sm text-gray-600">Click to upload</span>
                    <input type="file" name="file" id="fileInput" class="hidden" accept="image/*" required>
                </label>

                {{-- Image Preview --}}
                <div class="mt-4">
                    <img id="preview" class="hidden mx-auto border rounded-lg max-h-48" />
                </div>
            </div>

            {{-- Preview Script --}}
            <script>
                document.getElementById('fileInput').addEventListener('change', function(e) {
                    const [file] = e.target.files;
                    if (file) {
                        const preview = document.getElementById('preview');
                        preview.src = URL.createObjectURL(file);
                        preview.classList.remove('hidden');
                    }
                });
            </script>

            {{-- Buttons --}}
            <div class="flex justify-between mt-4">
                <a href="{{ route('show.blogs') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Back</a>
                <button type="submit" class="px-6 py-2 text-white bg-black rounded-lg hover:bg-gray-800">Save</button>
            </div>
        </form>
    </div>

    {{-- CKEditor Script --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#context'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
