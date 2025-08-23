@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-6">CREATE BANNER</h1>

        <form action="{{ route('store.homepageBanner') }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-6 bg-white p-6 rounded-2xl shadow">
            @csrf

            {{-- Title --}}
            <div>
                <label class="block mb-2 font-medium">Title</label>
                <input type="text" name="title" placeholder="Enter banner title"
                    class="w-full border rounded-lg p-3 focus:ring focus:ring-black/30 outline-none" required>
            </div>

            {{-- Context (Subtitle / Description with CKEditor) --}}
            <div>
                <label class="block mb-2 font-medium">Context</label>
                <textarea id="context" name="context" rows="5"
                    class="w-full border rounded-lg p-3 focus:ring focus:ring-black/30 outline-none"></textarea>
            </div>

            {{-- Location --}}
            <div>
                <label class="block mb-2 font-medium">Location</label>
                <input type="text" name="location" placeholder="Enter location"
                    class="w-full border rounded-lg p-3 focus:ring focus:ring-black/30 outline-none">
            </div>

            {{-- Link --}}
            <div>
                <label class="block mb-2 font-medium">Link</label>
                <input type="url" name="link" placeholder="https://example.com"
                    class="w-full border rounded-lg p-3 focus:ring focus:ring-black/30 outline-none">
            </div>

            {{-- Alt Text --}}
            <div>
                <label class="block mb-2 font-medium">Alt Text</label>
                <input type="text" name="alt_text" placeholder="Alternative text for the image"
                    class="w-full border rounded-lg p-3 focus:ring focus:ring-black/30 outline-none">
            </div>

            {{-- Hidden uploaded_by_id (if logged-in user is uploader) --}}
            <input type="hidden" name="uploaded_by_id" value="{{ auth()->id() }}">

            {{-- File Upload --}}
            <div class="border-2 border-dashed rounded-lg p-6 text-center">
                <p class="font-medium mb-1">Image Upload</p>
                <p class="text-sm text-gray-500 mb-4">Upload one image (Max 2MB, JPG/PNG/GIF/SVG).</p>

                <label
                    class="flex flex-col items-center justify-center w-full h-40 cursor-pointer bg-gray-50 border border-gray-300 rounded-lg hover:bg-gray-100 transition">
                    <svg id="uploadIcon" class="w-12 h-12 text-gray-400 mb-2" fill="none" stroke="currentColor"
                        stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1M12 12V4m0 8l-4-4m4 4l4-4" />
                    </svg>
                    <span class="text-gray-600 text-sm">Click to upload an image</span>
                    <span class="text-xs text-gray-400 mt-1">JPEG, PNG, GIF, SVG up to 2MB</span>
                    <input type="file" name="file" id="fileInput" class="hidden" accept="image/*" required>
                </label>

                {{-- Image Preview --}}
                <div class="mt-4">
                    <img id="preview" class="hidden mx-auto max-h-48 rounded-lg border" />
                </div>
            </div>

            {{-- JS for preview --}}
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
                <a href="{{ route('admin.homepageBanner') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Back</a>
                <button type="submit" class="px-6 py-2 bg-black text-white rounded-lg hover:bg-gray-800">Save</button>
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
