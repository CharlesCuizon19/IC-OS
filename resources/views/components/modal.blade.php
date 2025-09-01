@props([
    'title' => 'Modal Title',
    'button' => 'Open Modal',
    'modal_button' => 'modal_button',
    'context' => 'Context',
    'image' => null,
    'actionUrl' => '#',
    'actionText' => 'Join IC-OS',
])

<div x-data="{ open: false }" x-cloak x-effect="document.body.classList.toggle('overflow-hidden', open)">
    <!-- Trigger Button -->
    <button @click="open = true">
        {{ $button }}
    </button>

    <!-- Modal Background -->
    <div x-show="open"
        class="fixed inset-0 z-40 bg-black bg-opacity-50 flex items-center h-screen w-screen justify-center overflow-hidden">

        <div @click.away="open = false"
            class="bg-white rounded-3xl shadow-xl max-w-5xl w-full h-auto lg:h-auto flex flex-col lg:flex-row overflow-hidden relative">


            {{-- left side --}}
            <div class="lg:w-full p-14 flex flex-col gap-10 z-20 bg-white">
                <div>
                    <button @click="open = false" class="absolute top-12 left-13">
                        <span class="carbon--close-filled text-gray-400 size-6 hover:text-red-500"></span>
                    </button>

                    <div class=" lg:w-auto gap-6 flex mt-10 flex-col w-full justify-between border-b pb-14 text-black">
                        <div>
                            <h2 class="text-2xl font-bold mb-4 w-auto text-wrap">
                                {{ $title }}
                            </h2>
                            <p class="mb-6 text-wrap font-normal">
                                {{ $context }}
                            </p>
                        </div>

                        <div>
                            <a href="https://members.ic-os.org/general/register_member_type.asp"
                                class="px-7 py-4 bg-red-500 text-white rounded-full hover:bg-red-600 transition font-normal">
                                {{ $modal_button }}
                            </a>
                        </div>
                    </div>
                </div>

                <div class="flex gap-6">
                    <img src="{{ asset('assets/ic-os_logo.png') }}" alt="" class="w-15 h-10">
                    <img src="{{ asset('assets/logo2.png') }}" alt="" class="w-15 h-10">
                </div>
            </div>

            {{-- right side --}}
            <div class="lg:w-full relative flex items-center justify-center z-10">
                <div class="overflow-hidden">
                    <img src="{{ asset($image) }}" alt="Modal Background"
                        class="absolute inset-0 w-full h-full object-cover blur-sm scale-105">
                </div>

                <img src="{{ asset($image) }}" alt="Modal Image"
                    class="relative z-10 max-h-[230px] rounded-xl shadow-lg border border-gray-400">
            </div>
        </div>
    </div>
</div>
