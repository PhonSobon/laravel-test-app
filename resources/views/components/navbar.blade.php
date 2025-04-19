<nav class="bg-blue-900 text-white font-bold text-sm">
    <div class="max-w-7xl mx-auto px-4 py-5 flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ url('/') }}" class="text-xl uppercase tracking-wide">BOXDATA</a>

        <!-- Mobile Toggle Button -->
        <button id="menu-toggle" class="md:hidden text-2xl focus:outline-none">
            ☰
        </button>

        <!-- Desktop Menu -->
        <div id="menu" class="hidden md:flex flex-1 items-center justify-between w-full md:ml-10 text-xl tracking-wide">
            <!-- Center Menu -->
            <ul class="flex flex-col md:flex-row md:space-x-16 mx-auto text-center md:text-left">
                <li><a href="{{ url('/feature') }}" class="hover:underline block py-2 md:py-0">Feature</a></li>
                <li><a href="{{ url('/about-us') }}" class="hover:underline block py-2 md:py-0">About Us</a></li>
                <li><a href="{{ url('/contact-us') }}" class="hover:underline block py-2 md:py-0">Contact Us</a></li>
            </ul>

            <!-- Auth Links -->
            <div class="flex flex-col md:flex-row md:space-x-8 text-center md:text-right mt-4 md:mt-0">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="hover:underline block py-2 md:py-0">Sign-In</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="hover:underline block py-2 md:py-0">Sign-Up</a>
                @endif
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="md:hidden hidden px-4 pb-4 text-xl tracking-wide">
        <ul class="flex flex-col space-y-2">
            <li><a href="{{ url('/feature') }}" class="hover:underline">Feature</a></li>
            <li><a href="{{ url('/about-us') }}" class="hover:underline">About Us</a></li>
            <li><a href="{{ url('/contact-us') }}" class="hover:underline">Contact Us</a></li>
            @if (Route::has('login'))
                <li><a href="{{ route('login') }}" class="hover:underline">Sign-In</a></li>
            @endif
            @if (Route::has('register'))
                <li><a href="{{ route('register') }}" class="hover:underline">Sign-Up</a></li>
            @endif
        </ul>
    </div>

    <!-- Toggle Script -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</nav>
