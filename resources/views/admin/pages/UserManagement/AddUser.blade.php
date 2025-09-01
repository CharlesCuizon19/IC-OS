@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="mb-6 text-2xl font-bold">ADD USER</h1>

        <form action="{{ route('store.user') }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-6 p-6 bg-white shadow rounded-2xl">
            @csrf

            <div>
                <label class="block mb-2 font-medium">Username</label>
                <input type="text" name="username" placeholder="Enter username"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            <div>
                <label class="block mb-2 font-medium">Email</label>
                <input type="text" name="email" placeholder="Enter email"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            <div>
                <label class="block mb-2 font-medium">Password</label>
                <input type="text" name="password" placeholder="Enter password"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            <div class="flex justify-between mt-4">
                <a href="{{ route('show.users') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Back</a>
                <button type="submit" class="px-6 py-2 text-white bg-black rounded-lg hover:bg-gray-800">Save</button>
            </div>
        </form>
    </div>
@endsection
