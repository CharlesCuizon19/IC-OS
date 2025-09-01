@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container p-4 mx-auto mt-16">
        <h1 class="mb-4 text-2xl font-bold">USER MANAGEMENT</h1>

        <div class="flex items-end justify-end w-full mb-4">
            <a href="{{ route('cms.createUser') }}" class="px-4 py-2 text-white bg-black rounded">
                Add User
            </a>
        </div>

        <div class="border max-h-[40rem] overflow-y-auto">
            <table class="w-full text-white bg-gray-800">
                <thead class="sticky top-0 z-10 bg-gray-800">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Email</th>
                    </tr>
                </thead>
                <tbody class="text-center text-gray-800">
                    @foreach ($users as $user)
                        <tr class="bg-white">
                            <td class="px-5 py-2">{{ $user->id }}</td>
                            <td class="p-2 w-full">{{ Str::limit($user->email, 50) }}</td>
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
    </script>
@endsection
