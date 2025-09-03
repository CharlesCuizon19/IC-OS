@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container p-4 mx-auto mt-16">
        <h1 class="mb-4 text-2xl font-bold">USER MANAGEMENT</h1>

        <div class="flex justify-between mb-4">
            <div class="relative w-full max-w-xs">
                <input type="text" id="searchInput" placeholder="Search Users..."
                    class="w-full py-2 pl-10 pr-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 text-gray-400 left-3 top-2.5" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                </svg>
            </div>

            <div class="flex items-end justify-end w-full">
                <a href="{{ route('cms.createUser') }}" class="px-4 py-2 text-white bg-black rounded">
                    Add User
                </a>
            </div>
        </div>

        <div class="border max-h-[40rem] overflow-y-auto">
            <table class="w-full text-white bg-gray-800">
                <thead class="sticky top-0 z-10 bg-gray-800">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Actions</th>
                    </tr>
                </thead>
                <tbody id="usersTable" class="text-center text-gray-800">
                    @foreach ($users as $user)
                        <tr class="bg-white">
                            <td class="px-5 py-2">{{ $user->id }}</td>
                            <td class="w-full p-2">{{ Str::limit($user->email, 50) }}</td>
                            <td class="flex items-center justify-center px-5 py-2 space-x-2">
                                <a href="{{ route('cms.updateUser', $user->id) }}"
                                    class="px-4 py-2 text-white bg-blue-600 rounded">Edit
                                </a>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('delete.user', $user->id) }}"
                                    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="px-4 py-2 text-white bg-red-600 rounded delete-btn"
                                        data-id="{{ $user->id }}">
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
                    const userId = this.getAttribute("data-id");
                    Swal.fire({
                        title: "Are you sure?",
                        text: "This user will be permanently deleted!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById("delete-form-" + userId).submit();
                        }
                    });
                });
            });
        });

        // Search Filter
        const searchInput = document.getElementById("searchInput");
        const tableRows = document.querySelectorAll("#usersTable tr");

        searchInput.addEventListener("keyup", function() {
            const searchText = this.value.toLowerCase();
            tableRows.forEach(row => {
                const rowText = row.innerText.toLowerCase();
                row.style.display = rowText.includes(searchText) ? "" : "none";
            });
        });
    </script>
@endsection
