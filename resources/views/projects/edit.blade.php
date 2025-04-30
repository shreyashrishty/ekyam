<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Project - EKYAM</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen flex flex-col">

    <!-- Navbar -->
    @include('partials.navbar')

    <main class="flex-grow max-w-4xl mx-auto px-4 py-8">
      <h1 class="text-4xl font-bold mb-6 text-center">Edit Project</h1>

      <form method="POST" action="{{ route('projects.update', $project->id) }}" class="bg-white p-6 rounded shadow space-y-6">
        @csrf
        @method('PUT')

        <div>
          <label class="block mb-2 font-semibold">Project Title</label>
          <input type="text" name="title" value="{{ $project->title }}" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div>
          <label class="block mb-2 font-semibold">Project Description</label>
          <textarea name="description" rows="5" class="w-full p-2 border border-gray-300 rounded">{{ $project->description }}</textarea>
        </div>

        <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700 transition">
          Update Project
        </button>
      </form>
    </main>

    <!-- Footer -->
    @include('partials.footer')

</body>
</html>
