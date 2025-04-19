<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @include('components.navbar')
    <div class="container mx-auto text-center py-20">
        <h1 class="text-4xl font-bold">About Us</h1>
        <p class="text-gray-700 mt-4">Learn more about BoxData and our mission.</p>
    </div>
    <!-- Include Footer -->
    @include('components.footer')
</body>
</html>