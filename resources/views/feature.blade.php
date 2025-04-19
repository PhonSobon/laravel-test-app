<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Feature</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Include Navbar -->
  @include('components.navbar')

  <!-- Banner Image -->
  <!-- Fixed Banner Image -->
  <div class="bg-white">
  <div class="w-full h-[600px] overflow-hidden">
    <img src="{{ asset('images/Ai_feature.jpg') }}" alt="Banner" class="w-full h-full object-cover">
  </div>
</div>



  <!-- Feature Section -->
  <section class="py-10 bg-white">
    <div class="max-w-6xl mx-auto px-6">
      <h1 class="text-3xl font-bold text-center mb-12">OUR FEATURE</h1>

      <!-- Feature Cards -->
      <div class="space-y-10">

        <!-- Feature 1 -->
        <div class="flex flex-col md:flex-row items-center bg-gray-100 p-6 md:p-10 rounded-lg shadow-md">
          <div class="md:w-1/3">
            <img src="{{ asset('images/Blog.png') }}" alt="Easy Blog Creation" class="mx-auto w-48">
          </div>
          <div class="md:w-2/3 mt-6 md:mt-0 md:pl-10 text-left">
            <h2 class="text-xl font-bold mb-2">Easy Blog Creation</h2>
            <p>
              Create and publish your own articles with a user-friendly editor. Format your content with code snippets, images, videos, and rich text — perfect for tutorials, research summaries, and thought pieces.
            </p>
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="flex flex-col md:flex-row-reverse items-center bg-gray-100 p-6 md:p-10 rounded-lg shadow-md">
          <div class="md:w-1/3">
            <img src="{{ asset('images/Business.png') }}" alt="Tech-Focused Categories" class="mx-auto w-48">
          </div>
          <div class="md:w-2/3 mt-6 md:mt-0 md:pr-10 text-left">
            <h2 class="text-xl font-bold mb-2">Tech-Focused Categories</h2>
            <ul class="list-disc list-inside">
              <li>Data Engineer</li>
              <li>Data Analytics</li>
              <li>Data Science</li>
              <li>Machine Learning</li>
              <li>Artificial Intelligence</li>
              <li>Deep Learning</li>
              <li>Big Data & Data Engineering</li>
              <li>NLP (Natural Language Processing)</li>
            </ul>
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="flex flex-col md:flex-row items-center bg-gray-100 p-6 md:p-10 rounded-lg shadow-md">
          <div class="md:w-1/3">
            <img src="{{ asset('images/Group.png') }}" alt="Community-Driven" class="mx-auto w-48">
          </div>
          <div class="md:w-2/3 mt-6 md:mt-0 md:pl-10 text-left">
            <h2 class="text-xl font-bold mb-2">Community-Driven</h2>
            <p>
              Follow your favorite authors, comment on posts, and engage in discussions. Build a profile that showcases your writing, skills, and interests.
            </p>
          </div>
        </div>

        <!-- Feature 4 -->
        <div class="flex flex-col md:flex-row-reverse items-center bg-gray-100 p-6 md:p-10 rounded-lg shadow-md">
          <div class="md:w-1/3">
            <img src="{{ asset('images/Search.png') }}" alt="Smart Search & Filters" class="mx-auto w-48">
          </div>
          <div class="md:w-2/3 mt-6 md:mt-0 md:pr-10 text-left">
            <h2 class="text-xl font-bold mb-2">Smart Search & Filters</h2>
            <p>
              Find the content you care about quickly with advanced search options and filters by topic, tags, author, or date.
            </p>
          </div>
        </div>

        <!-- Feature 5 -->
        <div class="flex flex-col md:flex-row items-center bg-gray-100 p-6 md:p-10 rounded-lg shadow-md">
          <div class="md:w-1/3">
            <img src="{{ asset('images/Data.png') }}" alt="Analytics Dashboard" class="mx-auto w-48">
          </div>
          <div class="md:w-2/3 mt-6 md:mt-0 md:pl-10 text-left">
            <h2 class="text-xl font-bold mb-2">Analytics Dashboard</h2>
            <p>
              Track your content’s performance with simple metrics: views, likes, shares, and reader engagement. See what resonates most with your audience.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Include Footer -->
  @include('components.footer')
</body>
</html>
