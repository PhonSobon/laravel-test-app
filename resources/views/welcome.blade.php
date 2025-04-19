<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BoxData</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
</head>
<body class="antialiased bg-gray-100">

    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- Hero Section -->
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center gap-12">
        <!-- Text Column -->
        <div class="md:w-1/2">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">WELCOME TO BoxData</h1>
            <p class="text-gray-700 text-base md:text-lg leading-relaxed mb-6">
                BoxData is a dedicated platform for the Data Science, Big Data, and AI community. 
                It serves as a collaborative space where professionals, researchers, and enthusiasts 
                can create and share blogs about the latest technologies, tools, and trends in the 
                fields of Data Science, Artificial Intelligence, Machine Learning, and Big Data.
            </p>
            <a href="{{ route('register') }}" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-6 py-3 rounded-lg font-semibold transition">
                Get Started
            </a>
        </div>

        <!-- Image Column -->
        <div class="md:w-1/2">
            <img src="{{ asset('images/community.png') }}" alt="Hero Image" class="mx-auto w-full max-w-md md:max-w-full">
        </div>
    </div>
</section>

<!-- Why Join Section -->
<section class="bg-white py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-16">WHY JOIN This Community</h2>

        <!-- Subsection 1 -->
        <div class="flex flex-col-reverse md:flex-row items-center gap-10 mb-24">
            <!-- Text -->
            <div class="md:w-1/2 text-left">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Stay Ahead of the Curve</h3>
                <p class="text-gray-700 text-base leading-relaxed">
                    Be the first to explore and discuss the latest breakthroughs in Data Science,
                    AI, Machine Learning, and Big Data. Get insights into cutting-edge research,
                    tools, and industry trends.
                </p>
            </div>
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="{{ asset('images/Sharing.png') }}" alt="Stay Ahead" class="mx-auto w-full max-w-sm">
            </div>
        </div>

        <!-- Subsection 2 -->
        <div class="flex flex-col md:flex-row items-center gap-10 mb-24">
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="{{ asset('images/Learn.png') }}" alt="Learn & Grow" class="mx-auto w-full max-w-sm">
            </div>
            <!-- Text -->
            <div class="md:w-1/2 text-left">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Learn & Grow Together</h3>
                <p class="text-gray-700 text-base leading-relaxed">
                    Whether you're a beginner or a seasoned expert, BoxData offers a collaborative space
                    to expand your knowledge, share your expertise, and gain fresh perspectives from a
                    global network of data professionals.
                </p>
            </div>
        </div>

        <!-- Subsection 3 -->
        <div class="flex flex-col-reverse md:flex-row items-center gap-10">
            <!-- Text -->
            <div class="md:w-1/2 text-left">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Connect With Like-Minded People</h3>
                <p class="text-gray-700 text-base leading-relaxed">
                    Join a vibrant, supportive community of data enthusiasts, researchers, and developers.
                    Engage in meaningful discussions, ask questions, and find inspiration in others’ work.
                </p>
            </div>
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="{{ asset('images/Connect.png') }}" alt="Connect" class="mx-auto w-full max-w-sm">
            </div>
        </div>

        <!-- Subsection 4 -->
        <div class="flex flex-col md:flex-row items-center gap-10 mb-24">
            <!-- Image -->
            <div class="md:w-1/2">
                <img src="{{ asset('images/Innovation.png') }}" alt="Learn & Grow" class="mx-auto w-full max-w-sm">
            </div>
            <!-- Text -->
            <div class="md:w-1/2 text-left">
                <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Fuel Innovation</h3>
                <p class="text-gray-700 text-base leading-relaxed">
                BoxData is more than just a blog platform — it’s a hub for collaboration and idea exchange.
                 Drive innovation by engaging in thought-provoking conversations and working together on projects that shape the future of AI and data.
                </p>
            </div>
        </div>
    </div>
</section>

  <!-- Include Footer -->
  @include('components.footer')

</body>
</html>