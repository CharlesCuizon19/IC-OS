@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container p-4 mx-auto mt-16">
        <h1 class="mb-4 text-2xl font-bold">BLOG</h1>

        <div class="flex items-end justify-end w-full mb-4">
            <a href="{{ route('cms.createBlog') }}" class="px-4 py-2 text-white bg-black rounded">
                Create Blog
            </a>
        </div>

        <div class="border max-h-[40rem] overflow-y-auto">
            <table class="w-full text-white bg-gray-800">
                <thead class="sticky top-0 z-10 bg-gray-800">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Title</th>
                        <th class="p-2">Context</th>
                        <th class="p-2">Slug</th>
                        <th class="p-2">Date Issued</th>
                        <th class="p-2">Read Duration</th>
                        <th class="p-2">Cover Image</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center text-gray-800">
                    @foreach ($blogs as $blog)
                        <tr class="bg-white">
                            <td class="p-2">{{ $blog->id }}</td>
                            <td class="p-2">{{ $blog->title }}</td>
                            <td class="p-2">{{ Str::limit($blog->context, 50) }}</td>
                            <td class="p-2">{{ $blog->slug }}</td>
                            <td class="p-2">{{ $blog->date_issued }}</td>
                            <td class="p-2">{{ $blog->read_duration }}</td>
                            <td class="p-2">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset($blog->images->files->image_path ?? 'assets/404.webp') }}"
                                        alt="cover image" class="w-auto h-16">
                                </div>
                            </td>
                            <td class="flex items-center justify-center p-2 space-x-2">
                                <a href="{{ route('cms.updateBlog', $blog->id) }}"
                                    class="px-4 py-2 text-white bg-blue-600 rounded">Edit
                                </a>
                                <form id="delete-form-{{ $blog->id }}" action="{{ route('delete.blog', $blog->id) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="px-4 py-2 text-white bg-red-600 rounded delete-btn"
                                        data-id="{{ $blog->id }}">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const deleteButtons = document.querySelectorAll(".delete-btn");

            deleteButtons.forEach(button => {
                button.addEventListener("click", function() {
                    const blogId = this.getAttribute("data-id");
                    Swal.fire({
                        title: "Are you sure?",
                        text: "This blog will be permanently deleted!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById("delete-form-" + blogId).submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
