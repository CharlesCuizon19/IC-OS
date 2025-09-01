@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="max-w-4xl mx-auto p-6">
        <h1 class="mb-6 text-2xl font-bold">EDIT USER</h1>

        <form action="{{ route('update.user', $user->id) }}" method="POST" enctype="multipart/form-data"
            class="flex flex-col gap-6 p-6 bg-white shadow rounded-2xl">
            @csrf

            <div>
                <label class="block mb-2 font-medium">Username</label>
                <input type="string" name="username" placeholder="Enter username"
                    value="{{ old('username', $user->username) }}"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            <div>
                <label class="block mb-2 font-medium">Email</label>
                <input type="string" name="email" placeholder="Enter email" value="{{ old('email', $user->email) }}"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30" required>
            </div>

            <div>
                <label class="block mb-2 font-medium">New Password</label>
                <input type="text" name="password" placeholder="Enter new password"
                    class="w-full p-3 border rounded-lg outline-none focus:ring focus:ring-black/30">
            </div>

            <div class="flex justify-between mt-4">
                <a href="{{ route('show.users') }}" class="px-6 py-2 border rounded-lg hover:bg-gray-100">Back</a>
                <button type="submit" class="px-6 py-2 text-white bg-black rounded-lg hover:bg-gray-800">Save</button>
            </div>
        </form>
    </div>
@endsection
