<div class="fixed inset-y-0 left-0 w-64 text-white bg-blue-500">
    <div class="flex items-center justify-center h-auto gap-5 py-3">
        <img src="{{ asset('assets/rweb_logo.png') }}" alt="" class="w-10 h-10">
        <img src="{{ asset('assets/footer-logo.png') }}" alt="Logo" class="h-10 w-30">
    </div>
    <nav class="mt-6">
        <ul class="px-3 space-y-2">
            <li>
                <a href="{{ route('show.homepageBanner') }}"
                    class="block py-2 pl-4 pr-6 text-white 
          {{ Route::is('show.homepageBanner') ? 'bg-red-500' : '' }} 
          hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-red-500">
                    Homepage Banners
                </a>

            </li>
            <li>
                <a href="{{ route('show.blogs') }}"
                    class="block py-2 pl-4 pr-6 text-white 
          {{ Route::is('show.blogs') ? 'bg-red-500' : '' }} 
          hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-red-500">
                    Events
                </a>

            </li>
            <li>
                <a href="{{ route('show.doctors') }}"
                    class="block py-2 pl-4 pr-6 text-white 
          {{ Route::is('show.doctors') ? 'bg-red-500' : '' }} 
          hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-red-500">
                    Members
                </a>
            </li>
            <li>
                <a href="{{ route('show.messages') }}"
                    class="block py-2 pl-4 pr-6 text-white 
          {{ Route::is('show.messages') ? 'bg-red-500' : '' }} 
          hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-red-500">
                    Contact Us
                </a>
            </li>
            <li>
                <a href="{{ route('show.users') }}"
                    class="block py-2 pl-4 pr-6 text-white 
          {{ Route::is('show.users') ? 'bg-red-500' : '' }} 
          hover:bg-gray-800 hover:pl-4 hover:border-l-4 rounded-xl hover:border-red-500">
                    User Management
                </a>
            </li>
        </ul>
    </nav>
</div>
