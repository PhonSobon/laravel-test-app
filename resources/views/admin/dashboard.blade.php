<x-admin-navbar />
<div class="container mx-auto py-10">
    <!-- Total Users and Total Content -->
    <div class="grid grid-cols-1 text-center md:grid-cols-2 gap-6 m-4">
        <a href="#" class="block  bg-blue-500 text-white p-6 rounded-lg shadow hover:bg-blue-600">
            <h2 class="text-xl font-bold">Total Users</h2>
            <p class="text-lg font-bold">{{ $totalUsers }}</p>
        </a>
        <a href="#" class="block bg-green-500 text-white p-6 rounded-lg shadow hover:bg-green-600">
            <h2 class="text-xl font-bold">Total Content</h2>
            <p class="text-lg font-bold">{{ $totalContent }}</p>
        </a>
        <!-- <a href="#" class="block bg-red-500 text-white p-6 rounded-lg shadow hover:bg-red-600">
            <h2 class="text-xl font-bold">Delete</h2>
            <p>Delete resources</p>
        </a> -->
    </div>

    <!-- Graphs -->
    <div class="bg-white p-6 rounded-lg shadow mb-6">
        <h2 class="text-xl font-bold mb-4">Users Registered by Day</h2>
        <canvas id="dailyUserChart"></canvas>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-xl font-bold mb-4">Blogs Created by Day</h2>
        <canvas id="dailyBlogChart"></canvas>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Daily User Data
    const dailyUserStats = @json($dailyUserStats);
    const userLabels = dailyUserStats.map(stat => stat.date);
    const userData = dailyUserStats.map(stat => stat.count);

    // Daily Blog Data
    const dailyBlogStats = @json($dailyBlogStats);
    const blogLabels = dailyBlogStats.map(stat => stat.date);
    const blogData = dailyBlogStats.map(stat => stat.count);

    // Daily User Chart
    const dailyUserCtx = document.getElementById('dailyUserChart').getContext('2d');
    new Chart(dailyUserCtx, {
        type: 'line',
        data: {
            labels: userLabels,
            datasets: [{
                label: 'Users Registered',
                data: userData,
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderWidth: 2,
                tension: 0.4,
                pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                pointBorderColor: '#fff',
                pointRadius: 5,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Date',
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Users',
                    }
                }
            }
        }
    });

    // Daily Blog Chart
    const dailyBlogCtx = document.getElementById('dailyBlogChart').getContext('2d');
    new Chart(dailyBlogCtx, {
        type: 'line',
        data: {
            labels: blogLabels,
            datasets: [{
                label: 'Blogs Created',
                data: blogData,
                borderColor: 'rgba(75, 192, 192, 1)',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderWidth: 2,
                tension: 0.4,
                pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                pointBorderColor: '#fff',
                pointRadius: 5,
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: true,
                    position: 'top',
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Date',
                    }
                },
                y: {
                    beginAtZero: true,
                    title: {
                        display: true,
                        text: 'Number of Blogs',
                    }
                }
            }
        }
    });
</script>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js"></script>
