<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100">
    <!-- Main Container -->
    <div class="min-h-screen flex items-center justify-center">
        <!-- Left Section: Illustration -->
        <div class="hidden md:block w-1/2">
            <img src="{{ asset('images/Sign-in.png') }}" alt="Login Illustration" class="w-full h-auto">
        </div>

        <!-- Right Section: Login Form -->
        <div class="w-full md:w-1/2 max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Hello, dear!</h2>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" required autofocus
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <!-- Remember Me and Forgot Password -->
                <div class="flex items-center justify-between mb-6">
                    <label class="flex items-center">
                        <input type="checkbox" name="remember" class="h-4 w-4 text-blue-600 border-gray-300 rounded">
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                    <a href="{{ route('password.request') }}" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
                </div>

                <!-- Sign In Button -->
                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                        Sign In
                    </button>
                </div>

                <!-- Divider -->
                <div class="flex items-center justify-center mb-4">
                    <span class="text-gray-500 text-sm">or</span>
                </div>

                <!-- Google Sign In -->
                <div>
                    <button type="button"
                        class="w-full flex items-center justify-center border border-gray-300 py-2 px-4 rounded-lg hover:bg-gray-100 transition">
                        <img src="{{ asset('images/google-icon.png') }}" alt="Google Icon" class="w-5 h-5 mr-2">
                        Continue with Google
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>