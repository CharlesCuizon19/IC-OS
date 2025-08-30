@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="mb-6 text-2xl font-bold">EDIT EVENT</h1>

        <form action="{{ route('update.blog', $blog->id) }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-6 p-6 bg-white shadow rounded-2xl">
            @csrf
            @method('PUT')

            {{-- Title --}}
            <div>
                <label class="block mb-2 font-medium">Title</label>
                <input type="text" id="titleInput" name="title" value="{{ old('title', $blog->title) }}"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            {{-- Slug --}}
            <div>
                <label class="block mb-2 font-medium">Slug</label>
                <input type="text" id="slugInput" name="slug" value="{{ old('slug', $blog->slug) }}"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
            </div>

            {{-- Context --}}
            <div>
                <label class="block mb-2 font-medium">Context</label>
                <textarea name="context" id="context" rows="5"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">{{ old('context', $blog->context) }}</textarea>
            </div>

            {{-- Date Issued --}}
            <div>
                <label class="block mb-2 font-medium">Date Issued</label>
                <input type="date" name="date_issued"
                    value="{{ old('date_issued', $blog->date_issued ? \Carbon\Carbon::parse($blog->date_issued)->format('Y-m-d') : now()->format('Y-m-d')) }}"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
            </div>

            {{-- File Upload with Preview --}}
            <div class="p-6 text-center border-2 border-dashed rounded-lg">
                {{-- Image Preview --}}
                <div class="mt-4">
                    <img id="preview"
                        src="{{ $blog->images && $blog->images->files ? asset($blog->images->files->image_path) : '' }}"
                        class="{{ $blog->images && $blog->images->files ? '' : 'hidden' }} mx-auto border rounded-lg max-h-48" />
                </div>

                <p class="mb-1 font-medium">Blog Cover Image</p>
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

            {{-- JS --}}
            <script>
                // Slug auto-generate
                const titleInput = document.getElementById('titleInput');
                const slugInput = document.getElementById('slugInput');
                let slugEdited = false;

                function slugify(text) {
                    return text
                        .toString()
                        .normalize('NFD') // remove accents
                        .replace(/[\u0300-\u036f]/g, '')
                        .toLowerCase()
                        .trim()
                        .replace(/[^a-z0-9\s-]/g, '') // remove special chars
                        .replace(/\s+/g, '-') // spaces to dashes
                        .replace(/-+/g, '-'); // collapse multiple dashes
                }

                // Detect manual editing of slug
                slugInput.addEventListener('input', () => {
                    slugEdited = true;
                });

                // Auto-update slug only if not manually edited
                titleInput.addEventListener('input', () => {
                    if (!slugEdited) {
                        slugInput.value = slugify(titleInput.value);
                    }
                });

                // Image preview
                document.getElementById('fileInput').addEventListener('change', function(e) {
                    const [file] = e.target.files;
                    const preview = document.getElementById('preview');
                    if (file) {
                        preview.src = URL.createObjectURL(file);
                        preview.classList.remove('hidden');
                    } else {
                        preview.src =
                            '{{ $blog->images && $blog->images->files ? asset($blog->images->files->image_path) : '' }}';
                        preview.classList.toggle('hidden', !'{{ $blog->images && $blog->images->files ? 'true' : '' }}');
                    }
                });
            </script>

            {{-- Buttons --}}
            <div class="flex justify-between mt-4">
                <a href="{{ route('show.blogs') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Cancel</a>
                <button type="submit" class="px-6 py-2 text-white bg-black rounded-lg hover:bg-gray-800">Update
                    Blog</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#context'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
