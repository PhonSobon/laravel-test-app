<x-admin-navbar />
<!-- <div class="container mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Edit User</h1>

    <form action="{{ route('admin.users.update', $user->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow">Update</button>
    </form>
</div> -->
<div class="min-h-screen flex items-center justify-center">
        <!-- Right Section: Login Form -->
        <div class="w-full md:w-1/2 max-w-md bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Edit User</h2>

            <form method="POST" action="{{ route('admin.users.update', $user->id) }}">
                @csrf
                @method('PUT')
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
            </form>
        </div>
    </div>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
