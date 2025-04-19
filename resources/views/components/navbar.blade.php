<nav class="bg-blue-900 text-white font-bold text-sm">
    <div class="max-w-7xl mx-auto px-4 py-5 flex items-center justify-between">
        <!-- Left: Logo -->
        <div class="flex-1">
            <a href="{{ url('/') }}" class="text-xl uppercase tracking-wide hover:underline">BOXDATA</a>
        </div>

        <!-- Center: Main Menu -->
        <ul class="flex-1 flex justify-center space-x-16 text-xl tracking-wide">
            <li><a href="{{ url('/feature') }}" class="hover:underline">Feature</a></li>
            <li><a href="{{ url('/about-us') }}" class="hover:underline">About Us</a></li>
            <li><a href="{{ url('/contact-us') }}" class="hover:underline">Contact Us</a></li>
        </ul>

        <!-- Right: Auth Links -->
        <div class="flex-1 flex justify-end space-x-8 text-xl tracking-wide">
            @if (Route::has('login'))
                <a href="{{ route('login') }}" class="hover:underline">Sign-In</a>
            @endif
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="hover:underline">Sign-Up</a>
            @endif
        <div>
    </div>
</nav>
