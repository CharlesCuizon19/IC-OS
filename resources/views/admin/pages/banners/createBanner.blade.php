@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="max-w-4xl p-6 mx-auto">
        <h1 class="mb-6 text-2xl font-bold">CREATE BANNER</h1>

        <form action="{{ route('store.homepageBanner') }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-6 p-6 bg-white shadow rounded-2xl">
            @csrf

            {{-- Title --}}
            <div>
                <label class="block mb-2 font-medium">Title</label>
                <input type="text" name="title" placeholder="Enter banner title"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            {{-- Context (Subtitle / Description with CKEditor) --}}
            <div class="hidden">
                <div>
                    <label class="block mb-2 font-medium">Context</label>
                    <textarea id="context" name="context" rows="5"
                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">banner</textarea>
                </div>

                {{-- Location --}}
                <div>
                    <label class="block mb-2 font-medium">Location</label>
                    <input type="text" name="location" placeholder="Enter location" value="banner"
                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                </div>

                {{-- Link --}}
                <div>
                    <label class="block mb-2 font-medium">Link</label>
                    <input type="text" name="link" placeholder="https://example.com" value="banner.com"
                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                </div>

                {{-- Alt Text --}}
                <div>
                    <label class="block mb-2 font-medium">Alt Text</label>
                    <input type="text" name="alt_text" placeholder="Alternative text for the image" value="banner"
                        class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
                </div>
            </div>

            {{-- Hidden uploaded_by_id (if logged-in user is uploader) --}}
            <input type="hidden" name="uploaded_by_id" value="{{ auth()->id() }}">

            {{-- File Upload --}}
            <div class="p-6 text-center border-2 border-dashed rounded-lg">
                {{-- Image Preview --}}
                <div class="mt-4">
                    <img id="preview" class="hidden mx-auto border rounded-lg max-h-48" />
                </div>
                <p class="mb-1 font-medium">Image Upload</p>
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
                    <input type="file" name="file" id="fileInput" class="hidden" accept="image/*" required>
                </label>

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
                <a href="{{ route('show.homepageBanner') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Back</a>
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
