@props([
    'id' => 'defaultModal',
    'title' => 'Modal Title',
    'button' => 'Open Modal',
    'image' => null,
])

<div x-data="{ open: false }" x-cloak>
    <!-- Trigger Button -->
    <button @click="open = true" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
        {{ $button }}
    </button>

    <!-- Modal Background -->
    <div x-show="open" class="fixed inset-0 z-40 bg-black bg-opacity-50 flex items-center justify-center">

        <!-- Modal Card -->
        <div @click.away="open = false"
            class="bg-white rounded-2xl shadow-xl max-w-5xl w-full flex flex-col lg:flex-row overflow-hidden relative">

            <!-- Close Button -->
            <button @click="open = false" class="absolute top-3 left-3 text-gray-500 hover:text-gray-700">
                ✕
            </button>

            <!-- Left Section (Text Content) -->
            <div class="p-6 lg:w-1/2 flex flex-col justify-between">
                <div>
                    <h2 class="text-xl font-bold mb-4">{{ $title }}</h2>
                    <p class="text-gray-600 mb-6">
                        {{ $slot }}
                    </p>
                </div>

                <div>
                    <button class="px-5 py-2 bg-red-500 text-white rounded-full hover:bg-red-600 transition">
                        Join IC-OS
                    </button>
                </div>
            </div>

            <!-- Right Section (Image) -->
            <div class="lg:w-1/2">
                @if ($image)
                    <img src="{{ asset($image) }}" alt="Modal Image" class="object-cover h-full w-full">
                @endif
            </div>
        </div>
    </div>
</div>
