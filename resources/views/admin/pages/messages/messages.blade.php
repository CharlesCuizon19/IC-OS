@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container p-4 mx-auto mt-16">
        <h1 class="mb-4 text-2xl font-bold">Contact Us</h1>

        <!-- Search Bar -->
        <div class="relative w-full max-w-xs mb-4">
            <input type="text" id="searchInput" placeholder="Search Messages..."
                class="w-full py-2 pl-10 pr-4 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="absolute w-5 h-5 text-gray-400 left-3 top-2.5" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
        </div>

        <div class="border max-h-[40rem] overflow-y-auto">
            <table class="w-full text-white bg-gray-800">
                <thead class="sticky top-0 z-10 bg-gray-800">
                    <tr>
                        <th class="p-2">ID</th>
                        <th class="p-2">First Name</th>
                        <th class="p-2">Last Name</th>
                        <th class="p-2">Email</th>
                        <th class="p-2">Message</th>
                        <th class="p-2">Action</th>
                    </tr>
                </thead>
                <tbody id="messagesTable" class="text-center text-gray-800">
                    @foreach ($messages as $message)
                        <tr class="bg-white">
                            <td class="p-2">{{ $message->id }}</td>
                            <td class="p-2">{{ $message->first_name }}</td>
                            <td class="p-2">{{ $message->last_name }}</td>
                            <td class="p-2">{{ $message->email }}</td>
                            <td class="p-2 truncate max-w-[200px]">{{ $message->messages->message }}</td>
                            <td class="flex items-center justify-center p-2 space-x-2">

                                {{-- View Button --}}
                                <button type="button" class="px-4 py-2 text-white bg-blue-600 rounded view-btn"
                                    data-id="{{ $message->id }}" data-first="{{ $message->first_name }}"
                                    data-last="{{ $message->last_name }}" data-email="{{ $message->email }}"
                                    data-message="{{ $message->messages->message }}">
                                    View
                                </button>

                                {{-- Delete Button --}}
                                <form id="delete-form-{{ $message->id }}"
                                    action="{{ route('delete.message', $message->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="px-4 py-2 text-white bg-red-600 rounded delete-btn"
                                        data-id="{{ $message->id }}">
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

    {{-- SweetAlert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Delete Confirmation
            const deleteButtons = document.querySelectorAll(".delete-btn");
            deleteButtons.forEach(button => {
                button.addEventListener("click", function() {
                    let id = this.getAttribute("data-id");
                    Swal.fire({
                        title: "Are you sure?",
                        text: "This will permanently delete the message.",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#d33",
                        cancelButtonColor: "#3085d6",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        if (result.isConfirmed) {
                            document.getElementById("delete-form-" + id).submit();
                        }
                    });
                });
            });

            // View Full Message
            const viewButtons = document.querySelectorAll(".view-btn");
            viewButtons.forEach(button => {
                button.addEventListener("click", function() {
                    let id = this.getAttribute("data-id");
                    let first = this.getAttribute("data-first");
                    let last = this.getAttribute("data-last");
                    let email = this.getAttribute("data-email");
                    let message = this.getAttribute("data-message");

                    Swal.fire({
                        title: "Message Details",
                        html: `
                            <div class="text-left">
                                <p><strong>ID:</strong> ${id}</p>
                                <p><strong>First Name:</strong> ${first}</p>
                                <p><strong>Last Name:</strong> ${last}</p>
                                <p><strong>Email:</strong> ${email}</p>
                                <p><strong>Message:</strong></p>
                                <div class="p-2 mt-2 text-left text-black bg-gray-100 border rounded">
                                    ${message}
                                </div>
                            </div>
                        `,
                        width: 600,
                        confirmButtonText: "Close"
                    });
                });
            });

            // Search Filter
            const searchInput = document.getElementById("searchInput");
            const tableRows = document.querySelectorAll("#messagesTable tr");

            searchInput.addEventListener("keyup", function() {
                const searchText = this.value.toLowerCase();
                tableRows.forEach(row => {
                    const rowText = row.innerText.toLowerCase();
                    row.style.display = rowText.includes(searchText) ? "" : "none";
                });
            });
        });
    </script>
@endsection
