<div class="fixed inset-y-0 left-0 w-64 text-white bg-blue-500">
    <div class="flex items-center justify-center h-auto py-3">
        <img src="{{ asset('assets/footer-logo.png') }}" alt="Logo" class="w-40 h-17">
    </div>
    <nav class="mt-6">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('show.homepageBanner') }}"
                    class="block py-2 pl-4 pr-6 text-white 
          {{ Route::is('show.homepageBanner') ? 'bg-red-500' : '' }} 
          hover:bg-gray-800 hover:pl-4 hover:border-l-4 hover:border-red-500">
                    Homepage Banner
                </a>

            </li>
            <li>
                <a href="{{ route('show.blogs') }}"
                    class="block py-2 pl-4 pr-6 text-white 
          {{ Route::is('show.blogs') ? 'bg-red-500' : '' }} 
          hover:bg-gray-800 hover:pl-4 hover:border-l-4 hover:border-red-500">
                    Blog
                </a>

            </li>
            <li>
                <a href="#"
                    class="block py-2 pl-6 pr-6 transition-all duration-200 hover:bg-gray-800 hover:pl-4 hover:border-l-4 hover:border-red-500">User
                    Management</a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 pl-6 pr-6 transition-all duration-200 hover:bg-gray-800 hover:pl-4 hover:border-l-4 hover:border-red-500">Contacts</a>
            </li>
        </ul>
    </nav>
</div>
