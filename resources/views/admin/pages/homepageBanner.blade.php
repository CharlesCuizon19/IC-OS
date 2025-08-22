@extends('admin.layouts.adminapp')

@section('admin-content')
    <div class="container p-4 mx-auto">
        <h1 class="mb-4 text-2xl font-bold">HOMEPAGE BANNER</h1>

        <div class="flex justify-between mb-4">
            <div class="w-1/3">
                <input type="text" placeholder="Search" class="w-full p-2 border rounded">
            </div>
            <a href="#" class="px-4 py-2 text-white bg-black rounded">Create Banner</a>
        </div>

        <table class="w-full text-white bg-gray-800">
            <thead>
                <tr>
                    <th class="p-2">ID</th>
                    <th class="p-2">Title</th>
                    <th class="p-2">Subtitle</th>
                    <th class="p-2">Banner</th>
                    <th class="p-2">Actions</th>
                </tr>
            </thead>
            <tbody class="text-center text-gray-800">
                @foreach ($banners as $banner)
                    <tr class="bg-white">
                        <td class="p-2">{{ $banner->id }}</td>
                        <td class="p-2">{{ $banner->title }}</td>
                        <td class="p-2">{{ $banner->context }}</td>
                        <td class="p-2">
                            <img src="{{ $banner->image->files->image_path }}" alt="Banner 1" class="w-auto h-16">
                        </td>
                        <td class="flex p-2 space-x-2">
                            <a href="#" class="px-2 py-1 text-white bg-blue-500 rounded">Edit</a>
                            <form action="#" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-2 py-1 text-white bg-red-500 rounded">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="flex justify-center mt-4">
            <nav class="inline-flex rounded-md shadow">
                <a href="#" class="px-3 py-2 text-gray-700 bg-gray-300 rounded-l">Previous</a>
                <a href="#" class="px-3 py-2 text-white bg-black">1</a>
                <a href="#" class="px-3 py-2 text-gray-700 bg-gray-300">2</a>
                <a href="#" class="px-3 py-2 text-gray-700 bg-gray-300">3</a>
                <a href="#" class="px-3 py-2 text-gray-700 bg-gray-300 rounded-r">Next</a>
            </nav>
        </div>
    </div>
@endsection
