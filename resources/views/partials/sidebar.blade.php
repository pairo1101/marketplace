<div class="sidebar w-1/4 bg-green-100 h-screen p-4 fixed">
    <div class="logo text-center mb-6">
        <img src="{{ asset('images/logo.png') }}" alt="PetPals" class="h-16 mx-auto">
        <h2 class="text-xl font-bold text-green-700 mt-2">PetPals</h2>
    </div>

    <ul class="menu">
        <li class="menu-item py-3 px-4 rounded hover:bg-green-200">
            <a href="{{ route('user.profile') }}" class="flex items-center text-green-800">
                <i class="fas fa-user mr-3"></i> Profile
            </a>
        </li>
        <li class="menu-item py-3 px-4 rounded hover:bg-green-200">
            <a href="{{ route('user.listings') }}" class="flex items-center text-green-800">
                <i class="fas fa-paw mr-3"></i> Pet Listings
            </a>
        </li>
        <li class="menu-item py-3 px-4 rounded hover:bg-green-200">
            <a href="{{ route('user.bookmarks') }}" class="flex items-center text-green-800">
                <i class="fas fa-bookmark mr-3"></i> Bookmarks
            </a>
        </li>

        </li>
        <li class="menu-item py-3 px-4 rounded hover:bg-green-200">
            <a href="{{ route('settings') }}" class="flex items-center text-green-800">
                <i class="fas fa-cog mr-3"></i> Settings
            </a>
        </li>
    </ul>

    <div class="footer mt-8 text-center">
        <p class="text-xs text-green-600">&copy; {{ date('Y') }} PetPals. All rights reserved.</p>
    </div>
</div>
