@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container p-4 mx-auto mt-16">
        <h1 class="mb-4 text-2xl font-bold">MEMBERS</h1>

        <div class="flex items-end justify-end w-full mb-4">
            <a href="{{ route('cms.createDoctor') }}" class="px-4 py-2 text-white bg-black rounded">
                Add Member
            </a>
        </div>

        <div class="border max-h-[40rem] overflow-y-auto">
            <table class="w-full text-white bg-gray-800">
                <thead class="sticky top-0 z-10 bg-gray-800">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">Profile</th>
                        <th class="p-2">First Name</th>
                        <th class="p-2">Middle Name</th>
                        <th class="p-2">Last Name</th>
                        <th class="p-2">About</th>
                        <th class="p-2">Institution</th>
                        <th class="p-2">Specialty</th>
                    </tr>
                </thead>
                <tbody class="text-center text-gray-800">
                    @foreach ($doctors as $doctor)
                        <tr class="bg-white">
                            <td class="p-2">{{ $doctor->id }}</td>
                            <td class="p-2">
                                <img src="{{ asset($doctor->User->profiles->images->files->image_path) }}" alt=""
                                    class="h-24 w-30">
                            </td>
                            <td class="p-2">{{ $doctor->User->profiles->first_name }}</td>
                            <td class="p-2">{{ $doctor->User->profiles->middle_name }}</td>
                            <td class="p-2">{{ $doctor->User->profiles->last_name }}</td>
                            <td class="max-w-md p-2 text-sm font-semibold line-clamp-2">{{ $doctor->about }}</td>
                            <td class="p-2">
                                {{ $doctor->doctor_institutions->map(fn($di) => $di->institutions->name)->toJson() }}</td>
                            <td class="p-2">{{ $doctor->specializations->specialization_name }}</td>
                            <td class="flex items-center justify-center p-2">
                                <div class="flex items-center justify-center gap-5 ">
                                    <a href="{{ route('cms.updateDoctor', $doctor->id) }}"
                                        class="px-4 py-2 text-white bg-blue-600 rounded">Edit
                                    </a>
                                    <form id="delete-form-{{ $doctor->id }}"
                                        action="{{ route('delete.doctor', $doctor->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="px-4 py-2 text-white bg-red-600 rounded delete-btn"
                                            data-id="{{ $doctor->id }}">
                                            Delete
                                        </button>
                                    </form>
                                </div>
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
                    const doctorId = this.getAttribute("data-id");
                    Swal.fire({
                        title: "Are you sure?",
                        text: "This doctor will be permanently deleted!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById("delete-form-" + doctorId).submit();
                        }
                    });
                });
            });
        });
    </script>
@endsection
