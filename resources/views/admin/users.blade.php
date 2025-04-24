<x-admin-navbar />
<div class="container mx-auto py-10">

    <!-- <div class="mb-4">
        <a href="{{ route('admin.users.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md shadow">
            Create User
        </a>
    </div> -->

    <!-- User Table -->
    <div class="bg-white p-6 rounded-lg shadow">
        <table class="min-w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
                        <td class="border  px-4 py-2">
                            <a href="{{ route('admin.users.create') }}" class="text-white bg-green-400 rounded-md shadow px-2 py-1 hover:underline">create</a>
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="bg-blue-400 rounded-md shadow px-2 py-1 text-white hover:underline">Edit</a>
                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-400 rounded-md shadow px-2 py-1 text-white hover:underline ml-2" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
