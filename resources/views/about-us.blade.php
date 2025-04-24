<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100">
    <!-- Include Navbar -->
    @include('components.navbar')

    <!-- Hero Section -->
    <div class="bg-white">
        <div class="flex flex-col md:flex-row items-center gap-10 mb-24">
                <!-- Image -->
                <div class="md:w-1/2">
                    <img src="{{ asset('images/Learn.png') }}" alt="Learn & Grow" class="mx-auto w-full max-w-sm">
                </div>
                <!-- Text -->
                <div class="md:w-1/2 text-left">
                    <h3 class="text-xl md:text-2xl font-bold text-gray-900 mb-4">Welcome to BoxData</h3>
                    <p class="text-gray-700 text-base leading-relaxed">
                    your community hub for Data Science, Big Data, and Artificial Intelligence.
                    At BoxData, we believe in the power of collaboration and shared knowledge. Our platform is built for data professionals, researchers, and
                     enthusiasts who are passionate about exploring the evolving world of data-driven technologies. Whether you're delving into Machine Learning algorithms,
                      discussing the latest AI breakthroughs, or sharing insights on scalable Big Data systems, BoxData is the place to connect, learn, and grow.
                    </p>
                </div>
        </div>
    </div>

    <!-- Vision Section -->
    <section class="bg-white py-10 border-t-4 border-blue-900">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Vision</h2>
            <p class="text-gray-700 leading-relaxed max-w-4xl mx-auto">
                BoxData is more than just a blogging platform — it’s a knowledge-sharing hub built by and for the Data Science, AI, and Big Data community. 
                Our goal is to empower individuals to explore, write, share, and grow in the rapidly evolving world of data and intelligent technologies. 
                We understand the value of community-driven learning and believe that the best ideas come from collaboration. 
                BoxData is here to break down the barriers between researchers, students, professionals, and enthusiasts — enabling everyone to contribute to the growth of knowledge in machine learning, AI, and data innovation.
            </p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="bg-white py-10">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-6">Mission</h2>
            <p class="text-gray-700 leading-relaxed max-w-4xl mx-auto">
                To democratize knowledge in Data Science and AI by creating a space where anyone can learn, share, and inspire.
            </p>
        </div>
    </section>

    <!-- Creator Section -->
    <section class="bg-white py-20 border-t-4 border-blue-900">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10">Create BY</h2>
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/sobon.jpg') }}" alt="Creator" class="w-40 h-40 rounded-full mb-6">
                <h3 class="text-xl font-bold">Phon Sobon</h3>
                <p class="text-gray-700 mb-4">Product Manager</p>
                <div class="flex space-x-4">
                    <a href="#" class="text-blue-600 text-2xl"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="text-gray-900 text-2xl"><i class="fab fa-github"></i></a>
                    <a href="#" class="text-yellow-500 text-2xl"><i class="fas fa-smile"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    @include('components.footer')
</body>
</html>