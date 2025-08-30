@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container p-4 mx-auto mt-16">
        <h1 class="mb-4 text-2xl font-bold">HOMEPAGE BANNER</h1>

        <div class="flex items-end justify-end w-full mb-4">
            @if ($banners->count() >= 3)
                <button class="px-4 py-2 text-white bg-gray-500 rounded cursor-not-allowed" disabled>
                    Add Banner
                </button>
            @else
                <a href="{{ route('cms.homepagebanner') }}" class="px-4 py-2 text-white bg-black rounded">
                    Add Banner
                </a>
            @endif
        </div>

        <div class="border max-h-[40rem] overflow-y-auto">
            <table class="w-full text-white bg-gray-800">
                <thead class="sticky top-0 z-10 bg-gray-800">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Title</th>
                        {{-- <th class="p-2">Subtitle</th> --}}
                        <th class="p-2">Banner</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center text-gray-800">
                    @foreach ($banners as $banner)
                        <tr class="bg-white">
                            <td class="p-2">{{ $banner->id }}</td>
                            <td class="p-2">{{ $banner->title }}</td>
                            {{-- <td class="p-2">{{ $banner->context }}</td> --}}
                            <td class="p-2">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset($banner->images->files->image_path ?? 'assets/404.webp') }}"
                                        alt="Banner 1" class="w-auto h-16">
                                </div>
                            </td>
                            <td class="flex items-center justify-center p-2 space-x-2">
                                <a href="{{ route('cms.homepagebannerUpdate', $banner->id) }}"
                                    class="px-4 py-2 text-white bg-blue-600 rounded">Edit
                                </a>
                                <form id="delete-form-{{ $banner->id }}"
                                    action="{{ route('delete.homepageBanner', $banner->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="px-4 py-2 text-white bg-red-600 rounded delete-btn"
                                        data-id="{{ $banner->id }}">
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
                    const bannerId = this.getAttribute("data-id");
                    Swal.fire({
                        title: "Are you sure?",
                        text: "This banner will be permanently deleted!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById("delete-form-" + bannerId).submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
