<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script> <!-- Tailwind CSS -->
</head>
<body class="bg-gray-100">
    <!-- Main Container -->
    <div class="min-h-screen flex items-center justify-center">
        <!-- Left Section: Illustration -->
        <div class="hidden md:block w-1/2">
            <img src="{{ asset('images/Sign-up.png') }}" alt="Sign-Up Illustration" class="w-full h-auto">
        </div>

        <!-- Right Section: Sign-Up Form -->
        <div class="w-full md:w-1/2 max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Hello, dear!</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Username -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Username</label>
                    <input id="name" type="text" name="name" required autofocus
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter your name">
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="example@gmail.com">
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter your password">
                </div>

                <!-- Confirm Password -->
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Enter your confirm password">
                </div>

                <!-- Sign-Up Button -->
                <div class="mb-4">
                    <button type="submit"
                        class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition">
                        Sign up
                    </button>
                </div>

                <!-- Divider -->
                <div class="flex items-center justify-center mb-4">
                    <span class="text-gray-500 text-sm">or</span>
                </div>

                <!-- Google Sign-Up -->
                <div>
                    <button type="button"
                        class="w-full flex items-center justify-center border border-gray-300 py-2 px-4 rounded-lg hover:bg-gray-100 transition">
                        <img src="{{ asset('images/google-icon.png') }}" alt="Google Icon" class="w-5 h-5 mr-2">
                        Continue with Google
                    </button>
                </div>

                <!-- Already Have an Account -->
                <div class="text-center mt-4">
                    <p class="text-sm text-gray-600">
                        Already have an account? <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Log in</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</body>
</html>