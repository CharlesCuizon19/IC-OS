@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container p-4 mx-auto mt-16">
        <h1 class="mb-4 text-2xl font-bold">HOMEPAGE BANNER</h1>

        <div class="flex items-center justify-between w-full mb-4">
            <!-- Search Bar -->
            <div class="relative w-full max-w-xs">
                <input type="text" id="bannerSearch" placeholder="Search..."
                    class="w-full py-2 pl-10 pr-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 text-gray-400 left-3 top-2.5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                </svg>
            </div>

            <!-- Add Banner Button -->
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
                        <th class="p-2">Banner</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center text-gray-800" id="bannerTableBody">
                    @foreach ($banners as $banner)
                        <tr class="bg-white banner-row">
                            <td class="p-2">{{ $banner->id }}</td>
                            <td class="p-2">{{ $banner->title }}</td>
                            <td class="p-2">
                                <div class="flex items-center justify-center">
                                    <img src="{{ asset($banner->images->files->image_path ?? 'assets/404.webp') }}"
                                        alt="Banner" class="w-auto h-16">
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
            // 🔹 Banner Search
            const searchInput = document.getElementById("bannerSearch");
            const rows = document.querySelectorAll(".banner-row");

            searchInput.addEventListener("input", function() {
                const query = this.value.toLowerCase();
                rows.forEach(row => {
                    const id = row.querySelector("td:nth-child(1)").textContent.toLowerCase();
                    const title = row.querySelector("td:nth-child(2)").textContent.toLowerCase();
                    if (id.includes(query) || title.includes(query)) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            });

            // 🔹 Delete Confirmation
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
