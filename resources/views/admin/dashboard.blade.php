<x-admin-navbar />
<div class="container mx-auto py-10">
    <div class="grid grid-cols-1 text-center md:grid-cols-3 gap-6 m-4">
        <a href="#" class="block  bg-blue-500 text-white p-6 rounded-lg shadow hover:bg-blue-600">
            <h2 class="text-xl font-bold">Total Users</h2>
            <p class="text-lg font-bold">{{ $totalUsers }}</p>
        </a>
        <a href="#" class="block bg-green-500 text-white p-6 rounded-lg shadow hover:bg-green-600">
            <h2 class="text-xl font-bold">Total Content</h2>
            <p class="text-lg font-bold">{{ $totalContent }}</p>
        </a>
        <a href="#" class="block bg-red-500 text-white p-6 rounded-lg shadow hover:bg-red-600">
            <h2 class="text-xl font-bold">Delete</h2>
            <p>Delete resources</p>
        </a>
    </div>
</div>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
