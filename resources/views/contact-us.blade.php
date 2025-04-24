<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    @include('components.navbar')

    <div class="container mx-auto py-20 px-6">
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-6">Contact Us</h1>
        <p class="text-lg text-center text-gray-600 mb-12">
            We’d love to hear from you! Whether you have questions, feedback, or collaboration ideas, the BoxData team is here to help. Your thoughts and suggestions are essential in helping us improve and grow as a community platform for Data Science, AI, Machine Learning, and Big Data.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- General Inquiries -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">📬 General Inquiries</h2>
                <p class="text-gray-600 mb-4">Have a question about BoxData or need help navigating the platform?</p>
                <p class="text-gray-800 font-medium">Email us at: <a href="mailto:support@boxdata.io" class="text-blue-500 hover:underline">support@boxdata.io</a></p>
            </div>

            <!-- Content & Contributions -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">✍️ Content & Contributions</h2>
                <p class="text-gray-600 mb-4">Want to contribute a blog post, suggest a topic, or collaborate on content?</p>
                <p class="text-gray-800 font-medium">Reach out to: <a href="mailto:editorial@boxdata.io" class="text-blue-500 hover:underline">editorial@boxdata.io</a></p>
            </div>

            <!-- Technical Support -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">🛠️ Technical Support</h2>
                <p class="text-gray-600 mb-4">Encountered a bug or technical issue? Let us know so we can fix it.</p>
                <p class="text-gray-800 font-medium">Report issues at: <a href="mailto:tech@boxdata.io" class="text-blue-500 hover:underline">tech@boxdata.io</a></p>
            </div>

            <!-- Connect on Social Media -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">💬 Connect on Social Media</h2>
                <p class="text-gray-600 mb-4">Stay updated and join the conversation:</p>
                <p class="text-gray-800 font-medium">Twitter/X: <a href="https://twitter.com/BoxDataCommunity" target="_blank" class="text-blue-500 hover:underline">@BoxDataCommunity</a></p>
                <p class="text-gray-800 font-medium">LinkedIn: <a href="https://linkedin.com" target="_blank" class="text-blue-500 hover:underline">BoxData</a></p>
            </div>
        </div>
    </div>

    @include('components.footer')
</body>
</html>